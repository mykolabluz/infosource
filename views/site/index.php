<?php
/* @var $this yii\web\View */
/* @var $tree app\models\Tree */
use app\models\TreeGenerator;
use lo\widgets\modal\ModalAjax;
use yii\helpers\Url;

?>

    <div>
       <?php echo $tree; ?>
    </div>

<?php
echo ModalAjax::widget([
    'id' => 'modal',
    'header' => 'Random giphy',
    'url' => Url::to(['site/re-captcha']),
    'ajaxSubmit' => true,
]);
