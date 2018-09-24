<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\ckeditor;

use codeup\theming\Html;
use yii\helpers\Json;

/**
 * Class CKEditorWidget
 * @package codeup\ckeditor
 */
class CKEditorWidget extends \codeup\theming\InputWidget
{
    /** @var CKEditorSettings  */
    public $settings = [];
    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerAssets();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        CKEditorAsset::register($view);
        $settings = Json::encode(new CKEditorSettings($this->settings));
        $view->registerJs("CKEDITOR.replace('{$this->options['id']}', {$settings})");
    }
}