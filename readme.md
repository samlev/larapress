# LaraPress

One Developer's horrific and misguided attempt to use Lumen as a WordPress theme. Surprisingly, it seems to work.

**Do not use this in production anywhere. This is a terrible idea.**

But if you do, shoot me a message at [determineddevelopment.com](https://www.determineddevelopment.com/contact).

Seriously, though, don't use this.

## How it works

WordPress will treat the sub-folder of a theme that has `functions.php` and `style.css` as the "root" of the theme. That's where it looks for template parts, but in reality it only needs to find `index.php`.

We boot up and configure Lumen in `functions.php`, and then convert the template part request from WordPress into a router path in `index.php`.

We use [Corcel](https://github.com/corcel/corcel) to access the WordPress data like Eloquent models, and mask "[The Loop](https://codex.wordpress.org/The_Loop)" to provide a collection-based interface into the WordPress query, which feels _right_ for Blade.

## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

### Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
