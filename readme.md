<!-- <p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

# Paystack Lite [Demo](https://paystack-lite-demo.herokuapp.com)

A demo application to illustrate how [paystack-lite](https://github.com/stephenjude/paystack-lite) works. 

For live demo visit [paystack-lite-demo.herokuapp.com](https://paystack-lite-demo.herokuapp.com)

<p align="center">
  <img src="https://raw.githubusercontent.com/stephenjude/paystack-lite-demo/master/screenshot.PNG">
</p>

## Installation

Clone the repo locally:

```bash
git clone https://github.com/stephenjude/paystack-lite-demo.git paystack-lite-demo

cd paystack-lite-demo
```
Install PHP dependencies:

```bash
composer install
```

Setup configuration:

```bash
cp .env.example .env
```

Open your .env file and add your test keys, customer default email and paystack url:

```
PAYSTACK_PUBLIC_KEY=xxxxxxxxxxxxx
PAYSTACK_SECRET_KEY=xxxxxxxxxxxxx
PAYSTACK_PAYMENT_URL=https://api.paystack.co
PAYSTACK_CUSTOMER_DEFAULT_EMAIL=general@email.com
```

Generate application key:

```bash
php artisan key:generate
```

You're ready to go! Visit Paystack Lite Demo in your browser
