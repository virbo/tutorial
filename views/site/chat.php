<?php

use yii\helpers\Html;

$this->title = 'Yii2::NodeJS';

$this->registerJs($this->render('notif.js'), \yii\web\View::POS_READY);
?>
<div class="site-index">
    <div class="body-content">
        <div class="well col-lg-8 col-lg-offset-2">
            <div class="row">
                <?= Html::beginForm(['/'],'POST', ['id' => 'chat-form']) ?>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <?= Html::textInput('nick_name', null, [
                                        'class' => 'form-control',
                                        'id' => 'nick_name',
                                        'placeholder' => 'Nick Name'
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group">
                                <?= Html::textInput('message', null, [
                                        'id' => 'message-field',
                                        'class' => 'form-control',
                                        'placeholder' => 'Message'
                                ]) ?>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <?= Html::submitButton('Send', [
                                        'class' => 'btn btn-block btn-success'
                                ]) ?>
                            </div>
                        </div>
                    </div>
                <?= Html::endForm() ?>
                <div id="notifikasi" ></div>
            </div>  
        </div>      
    </div>
</div>