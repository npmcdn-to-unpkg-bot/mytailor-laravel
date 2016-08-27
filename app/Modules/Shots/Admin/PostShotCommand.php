<?php namespace MyTailor\Modules\Shots\Admin;


class PostShotCommand
{
    public $file_name;
    public $publishable_type = 'MyTailor\\Brand';
    public $publishable_id = 1;

    /**
     * PostShotCommand constructor.
     *
     * @param $file_name
     */
    public function __construct($file_name)
    {

        $this->file_name = $file_name;
    }
}