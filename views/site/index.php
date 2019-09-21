<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Html; ?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Selamat datang <?= Yii::$app->user->isGuest ? 'Guest' : Yii::$app->user->identity->username ?></h1>

        <p class="lead"><?= Yii::$app->user->isGuest ? "Silahkan login sesuai akun Anda" : null?></p>
    </div>
</div>
