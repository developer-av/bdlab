<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\modules\about\backend;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $sourcePath = '@common/modules/about/backend/assets';
    public $baseUrl = '@web';
    public $css = [
        'style.css',
    ];
    public $js = [
        'main.js',
    ];

}
