<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Classes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'startdate',
            'daysofweek',
            'fee',
            // 'classtypeid',
            // 'previousclassid',
            // 'nextclassid',
            // 'enddate',
            // 'teacherid',
            // 'assistantid',
            // 'studytime',
            // 'finishtime',
            // 'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
