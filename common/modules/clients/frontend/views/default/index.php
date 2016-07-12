<?php
/* @var $this yii\web\View */

use developerav\comments\components\Comments;
use common\modules\clients\frontend\components\Clients;

$this->title = 'Клиенты';
?>

<?= Clients::widget() ?>
<?= Comments::widget(['viewPath' => '@common/modules/clients/frontend/components/views/comments']) ?>