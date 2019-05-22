<p align="center">
    <a href="https://dutainformasi.net" target="_blank">
        <img src="https://s3-id-jkt-1.kilatstorage.id/cdn-dutainformasi/assets/img/logo.png" height="100px">
    </a>
    <h1 align="center">Installasi Project</h1>
    <br>
</p>

Project ini menggunakan Yii 2 Basic Template

SUSUNAN FOLDER
-------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


PERSYARATAN
------------

Syarat minimum menjalankan project ini adalah PHP 5.4.0


CARA INSTALL
------------

### Install via Composer

Pastikan Anda telah menginstall [Composer](http://getcomposer.org/). Jika belum, silahkan install terlebih dahulu dengan mengikuti instruksi yang ada di [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Anda dapat menginstall project ini dengan cara

1. Clone project ini ke folder root Webserver Anda
~~~
git clone https://github.com/virbo/tutorial.git
~~~

2. Install project
~~~
cd tutorial
php composer install
~~~


KONFIGURASI
-------------

### Database

Edit the file `config/db.php`, sesuaikan dengan settingan database Anda

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

### Migrasi Tabel
Lakukan migrasi tabel-tabel melalui perintah
~~~~
php yii migrate/up
~~~~

RUNNING PROJECT
----------------
Untuk mengakses project
~~~
http://localhost/tutorial
~~~