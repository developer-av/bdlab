<?php

namespace common\modules\clients\backend\widgets\imgareaselect;

use xj\imgareaselect\ImgAreaSelect as baseImgAreaSelect;
use yii\helpers\Json;


class ImgAreaSelect extends baseImgAreaSelect
{
    public $var = null;

    public function run()
    {
        $options = Json::encode($this->getClientOptions());
        $js = ($this->var == null? '' : $this->var.' = ')."jQuery('{$this->id}').imgAreaSelect({$options})";
        $this->getView()->registerJs($js, $this->position);
    }
}