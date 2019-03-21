<?php
use yii\helpers\Html;
?>

<img src="<?= $url_image?>" />

<?= Html::a('Закрыть', ['#'], ['data-dismiss' => 'modal', 'class' => 'btn btn-danger'])?>