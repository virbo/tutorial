<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

use app\components\helpers\DownloadJob;

class JobQueueController extends Controller
{
    public function actionIndex(){
        Yii::$app->queue->push(new DownloadJob([
            'url' => 'https://s3-id-jkt-1.kilatstorage.id/cdn-dutainformasi/assets/img/logo.png',
            'path' => Yii::getAlias('@runtime/logo.png')
        ]));
    }
}