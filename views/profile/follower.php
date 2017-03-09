<?php
use yii\widgets\ListView;
use yuncms\user\models\User;
/**
 * @var \yii\web\View $this
 * @var  User $model
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
$this->context->layout = 'space';
$this->params['user'] = $model;
if (!Yii::$app->user->isGuest && Yii::$app->user->id == $model->id) {//Me
    $who = Yii::t('user', 'My');
} else {
    $who = Yii::t('user', 'His');
}
$this->title = Yii::t('user', '{who} follower', [
    'who' => $who,
]);
?>
<h2 class="h4"><?= $dataProvider->getTotalCount() ?> <?= Yii::t('user', 'records') ?></h2>
<div class="stream-following border-top">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['tag' => 'li'],
        'itemView' => '_follower',//子视图
        'layout' => "{items}\n{pager}",
        'options' => [
            'tag' => 'ul',
            'class' => 'list-unstyled stream-following-list'
        ]
    ]); ?>
</div>
