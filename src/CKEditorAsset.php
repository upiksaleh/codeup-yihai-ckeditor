<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\ckeditor;

/**
 * Class CKEditorAsset
 * @package codeup\ckeditor
 */
class CKEditorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/ckeditor/ckeditor';

    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'codeup\assets\JqueryAsset'
    ];
}