<?php


namespace app\components\helpers;

use yii\base\BaseObject;


class DownloadJob extends BaseObject implements \yii\queue\JobInterface
{
    public $url;

    public $path;

    public function execute($queue)
    {
        file_put_contents($this->path, file_get_contents($this->url));
    }
}