<?php
use developerav\comments\components\Comments;
use common\modules\clients\frontend\components\Clients;
?>

<?= Clients::widget() ?>
<?= Comments::widget(['viewPath' => '@common/modules/clients/frontend/components/views/comments']) ?>