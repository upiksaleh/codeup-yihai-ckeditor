<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\ckeditor;

/**
 * Class CKEditorOptions
 * @package codeup\ckeditor
 * @property int        $height;
 */
class CKEditorSettings
{
    public $language = 'id';

    public function __construct($settings = [])
    {
        foreach($settings as $key => $value){
            $this->__set($key, $value);
        }
    }

    public function __set($name, $value)
    {
        return $this->{$name} = $value;
    }
    public function __get($name)
    {
        return isset($this->{$name}) ? $this->{$name} : null;
    }
}