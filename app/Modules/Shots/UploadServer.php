<?php


namespace MyTailor\Modules\Shots;
use Juploader\UploadHandler\UploadHandler;

class UploadServer extends UploadHandler {

    /**
     * name of the image
     * @var
     */
    protected $file_name;

    /**
     * @var
     */
    protected $file_type;

    /**
     * @var
     */
    protected $file_size;

    public function get_name(){
            return $this->file_name;
    }

    public function get_size(){
        return $this->file_size;
    }

    public function get_type(){
        return $this->file_type;
    }
    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error,
                                          $index = null, $content_range = null) {
        $file = new \stdClass();
        $file->name = $this->get_file_name($uploaded_file, $name, $size, $type, $error, $index, $content_range);
        $file->size = $this->fix_integer_overflow((int)$size);
        $file->type = $type;


        $this->file_name = $file->name;
        $this->file_type = $file->type;
        $this->file_size = $file->size;
        if ($this->validate($uploaded_file, $file, $error, $index)) {
            $this->handle_form_data($file, $index);
            $upload_dir = $this->get_upload_path();
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, $this->options['mkdir_mode'], true);
            }
            $file_path = $this->get_upload_path($file->name);
            $append_file = $content_range && is_file($file_path) &&
                $file->size > $this->get_file_size($file_path);
            if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                // multipart/formdata uploads (POST method uploads)
                if ($append_file) {
                    file_put_contents(
                        $file_path,
                        fopen($uploaded_file, 'r'),
                        FILE_APPEND
                    );
                } else {
                    move_uploaded_file($uploaded_file, $file_path);
                }
            } else {
                // Non-multipart uploads (PUT method support)
                file_put_contents(
                    $file_path,
                    fopen($this->options['input_stream'], 'r'),
                    $append_file ? FILE_APPEND : 0
                );
            }
            $file_size = $this->get_file_size($file_path, $append_file);
            if ($file_size === $file->size) {
                $file->url = $this->get_download_url($file->name);
                if ($this->is_valid_image_file($file_path)) {
                    $this->handle_image_file($file_path, $file);
                }
            } else {
                $file->size = $file_size;
                if (!$content_range && $this->options['discard_aborted_uploads']) {
                    unlink($file_path);
                    $file->error = $this->get_error_message('abort');
                }
            }
            $this->set_additional_file_properties($file);
        }
        return $file;
    }

    protected function get_unique_filename($file_path, $name, $size, $type, $error,
                                           $index, $content_range) {
        while(is_dir($this->get_upload_path($name))) {
            $name = $this->upcount_name($name);
        }
        // Keep an existing filename if this is part of a chunked upload:
        $uploaded_bytes = $this->fix_integer_overflow((int)$content_range[1]);
        while(is_file($this->get_upload_path($name))) {
            if ($uploaded_bytes === $this->get_file_size(
                    $this->get_upload_path($name))) {
                break;
            }
            $name = $this->upcount_name($name);
        }
        /**
         * Get the file name and generate a unique name and attach the extension
         */
        $file_name = pathinfo($name, PATHINFO_FILENAME);
        $ext = pathinfo($name, PATHINFO_EXTENSION);

        $file_name = 'mt_' . md5($file_name . time());
        $name = $file_name . '.' . $ext;
        return $name;
    }

    protected function set_additional_file_properties($file) {
        $file->deleteUrl = $this->options['script_url'] . '/'
            .$file->name;
        $file->deleteType = $this->options['delete_type'];
        if ($file->deleteType !== 'DELETE') {
            $file->deleteUrl .= '&_method=DELETE';
        }
        if ($this->options['access_control_allow_credentials']) {
            $file->deleteWithCredentials = true;
        }
    }

    public function delete($print_response = true, $id) {


        $file_name = $id;

        $response = array();

            $file_path = $this->get_upload_path($file_name);
            $success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
            if ($success) {
                foreach($this->options['image_versions'] as $version => $options) {
                    if (!empty($version)) {
                        $file = $this->get_upload_path($file_name, $version);
                        if (is_file($file)) {
                            unlink($file);
                        }
                    }
                }
            }
            $response[$file_name] = $success;

        return $this->generate_response($response, $print_response);
    }
}