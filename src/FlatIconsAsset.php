<?php
namespace kilyakus\flaticons;

class FlatIconsAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'flaticon/flaticon.css',
        'flaticon2/flaticon.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
