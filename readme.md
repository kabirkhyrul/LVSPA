# Laravel Vue Single Page Application
This is single page api using Vue.Js frontend and Laravel API backend. 

# Demo
http://kabir.infantinventory.com/LVSPA/

### Be Advised ::  This is not for commercial use
if you need commercial version of this api, please contact with developer.

# Installation
```
git clone https://github.com/kabirkhyrul/LVSPA.git
cd LVSPA
composer install
npm install && npm install vue-router vue-axios --save
```
## then copy .env.example as .env with database credential
```
php artisan key:generate && php artisan migrate
```
Note: php artisan serve won't work, use this type of url http://localhost/LVSPA/

-- Happy coding :)