<?php

use mdm\admin\components\Helper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            if(Helper::checkRoute('create')){
                echo Html::a('Create User', ['create'], [
                    'class' => 'btn btn-success',
                ]);
            }
        ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'options' => [
                    'width' => '50px',
                ]
            ],
            'username',
            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',

            [
                'header' => 'Aksi',
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn('{view} {update} {delete} {loginas}'),
                'buttons' => [
                    'loginas' => function($url, $model) {

                        if ($model->status == 0) {
                            return null;
                        }
                        $title = "Login As";
                        $url = Url::to(['loginas', 'id' => $model->auth_key]);
                        $options = [
                            'title' => $title,
                            'data-method' => 'post',
                        ];

                        $label = "<span class='glyphicon glyphicon-share' arial-hidden='true'></span>";

                        return Yii::$app->user->identity->username == $model->username ?
                            "<span class='glyphicon glyphicon-star' arial-hidden='true'></span>" :
                            Html::a($label, $url, $options);
                    }
                ],
                'options' => [
                        'width' => '100px',
                ]
            ],
        ],
    ]); ?>


</div>
