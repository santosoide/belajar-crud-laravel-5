# Belajar CRUD dengan Laravel 5

# Daftar isi
* [Persiapan](#yang-perlu-dipersiapkan)
* [Installasi](#installasi)
* [Konfigurasi](#konfigurasi)
* [Migration](#migration)
* [Seeder](#seeder)
* [Repositories](#repositories)
* [Interface](#interface)
* [Repository](#repository)
* [Service Provider](#service-provider)
* [Form Request](#form-request)
* [Controller](#controller)
* [Routing](#routing)
* [Views](#views)
* [Kontributor](#kontributor)

# Yang perlu dipersiapkan
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

# Instalasi
### Melalui composer create-project
Ketikkan pada terminal/command prompt

```
composer create-project laravel/laravel FolderApp --prefer-dist
```

Clone repository ini

```
git clone https://github.com/cyberid41/belajar-crud-laravel-5.git
```

# Konfigurasi
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
Buat database baru, dan isi konfiguarsi di file ```.env```

```
// file .env

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

# Migration

Buat 1 file migration, 1 migration mewakili 1 table
 
```
$ php artisan make:migration create_user_table
```

### Jalankan migration table agar dieksekusi menjadi table didatabase

```
$ php artisan migrate 
```

# Seeder
 
```
$ php artisan make:seeder UserTableSeeder
```

### Menggunakan ModelFactory untuk mengisi dummy data

Buka file ```database/factories/ModelFactory.php``` definisikan class yang akan diisi dummy data menggunakan FakerGenerator, generator ini menyediakan dummy data berkualitas berikut beberapa data yang bisa kita generate menggunakan FakerGenerator

```
 string $name
 string $firstName
 string $firstNameMale
 string $firstNameFemale
 string $lastName
 string $title
 string $titleMale
 string $titleFemale
 string $citySuffix
 string $streetSuffix
 string $buildingNumber
 string $city
 string $streetName
 string $streetAddress
 string $postcode
 string $address
 string $country
 float  $latitude
 float  $longitude
 string $ean13
 string $ean8
 string $isbn13
 string $isbn10
 string $phoneNumber
 string $company
 string $companySuffix
 string $creditCardType
 string $creditCardNumber
 string creditCardNumber($type = null, $formatted = false, $separator = '-')
 \DateTime $creditCardExpirationDate
 string $creditCardExpirationDateString
 string $creditCardDetails
 string $bankAccountNumber
 string $swiftBicNumber
 string $vat
 string $word
 string|array $words
 string|array words($nb = 3, $asText = false)
 string $sentence
 string sentence($nbWords = 6, $variableNbWords = true)
 string|array $sentences
 string|array sentences($nb = 3, $asText = false)
 string $paragraph
 string paragraph($nbSentences = 3, $variableNbSentences = true)
 string|array $paragraphs
 string|array paragraphs($nb = 3, $asText = false)
 string $text
 string text($maxNbChars = 200)
 realText($maxNbChars = 200, $indexSize = 2)
```

# Repositories
# Interface
# Repository
# Service Provider
# Form Request
# Controller
# Routing
# Views
# kontributor
