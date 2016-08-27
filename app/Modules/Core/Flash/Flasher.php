<?php
namespace MyTailor\Modules\Core\Flash;

class Flasher
{
    private static $icon;
    private static $message;
    private static $background;
    private static $color;
    private static $title = 'News';
    private static $closable;


    /**
     * Flashes the message to the viewer
     *
     * @param $type
     * @param $message
     * @param bool|false $closable
     */
    public static function flash($type, $message, $closable=false)
    {
        self::$message = $message;
        self::checker($type);
        self::$closable = $closable;
       return self::pushSession();
    }

    /**
     * Checks the type of Flash we want and sets the fields
     *
     * @param $type
     */
    protected static function checker($type)
    {
        switch ($type) {
            case 'news-light':
                self::setFields('bell','light-blue lighten-5', 'light-blue-text');
                break;
            case 'info-light':
                self::setFields('information-outline', 'deep-purple lighten-5', 'deep-purple-text');
                break;
            case 'success-light':
                self::setFields('check', 'green lighten-5', 'green-text');
                break;
            case 'danger-light':
                self::setFields('alert-circle', 'red lighten-5', 'red-text');
                break;
            case 'warning-light':
                self::setFields('alert', 'orange lighten-5', 'orange-text');
                break;
            case 'info':
                self::setFields('bell', 'light-blue', 'white-color');
                break;
            case 'warning':
                self::setFields('information-outline');
                break;
            case 'success':
                self::setFields('check');
                break;
            case 'danger':
                self::setFields('alert-circle');
                break;
            default:
                self::setFields('info');

        }
    }

    /**
     * Sets the fields ready to dump to our session.
     *
     * @param $icon
     * @param $background
     * @param $color
     */
    private static function setFields($icon, $background, $color)
    {
        self::$icon = $icon;
        self::$background = $background;
        self::$color = $color;

    }

    /**
     * Sets the session variables.
     */
    private static function pushSession()
    {
        session()->flash('flasher.background', self::$background);
        session()->flash('flasher.message', self::$message);
        session()->flash('flasher.icon', self::$icon);
        session()->flash('flasher.color', self::$color);
        session()->flash('flasher.title', self::$title);
        session()->flash('flasher.close', self::$closable);
    }


}

