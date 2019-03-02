
### Server Requirements
- php 7.1.6
- `extension=php_intl.dll`
- `;extension=php_exif.dll      ; Must be after mbstring as it depends on it`

### Set Up Project
Run git command

`
git clone 
`

Install Depedency

`
composer install
`

Copy .env.example to .env

`
cp .env.example .env
`

Setting in .env [Database, SMTP and other]

Generate Key

` php artisan key:generate`

---

## Dependency Use

- Enum (https://github.com/myclabs/php-enum)
- Laravel Repositoru (https://github.com/andersao/l5-repository)
- Laravel File manager ( https://unisharp.github.io/laravel-filemanager/installation )

### Dependency install 

Laravel file manager

- https://unisharp.github.io/laravel-filemanager/installation
- http://unisharp.github.io/laravel-filemanager/integration
- http://unisharp.github.io/laravel-filemanager/upgrade