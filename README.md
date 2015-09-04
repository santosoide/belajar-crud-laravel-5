# Belajar CRUD dengan Laravel 5

## Yang perlu dipersiapkan
- PHP, disarankan :
    - PHP >= 5.5.9
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
- Serve Bundle
    - [Homestead](http://laravel.com/docs/5.1/homestead)
    - [Xampp](https://www.apachefriends.org/index.html)
    - [Wamp](http://www.wampserver.com/en/)
    - [Winginx](http://winginx.com/en/) (rewrite PHP 5.4 to 5.5 or ^)
- [Composer](https://getcomposer.org/)
- Database server 
    - Mysql
    - Postgre
    - MongoDB
- [Postman](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop), chrome extention
- [Git](https://git-scm.com/)

## Instalasi
### Melalui composer create-project
Ketikkan pada terminal/command prompt

```
composer create-project laravel/laravel FolderApp --prefer-dist
```

Clone repository ini

```
git clone https://github.com/cyberid41/crud-laravel-5.git
```
### Directory Permissions
```
storage/
bootstrap/cache/
```

### Application Key
Generate application key, ketikkan perintah berikut

```
$ php artisan key:generate
```

### Beberapa configurasi yang perlu dilakukan

Buka file ```.env```

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=Xm67S04I78Y3az5NDx8jM9jotsasE6D2

DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
