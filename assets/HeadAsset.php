<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HeadAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = [
    'position' => \yii\web\View::POS_HEAD
    ];

    public $css = [
   // 'css/app.v2.css',
   
       
 
    ];

    public $js = [
   
     //   'js/app.v2.js',
     
    ];
}
