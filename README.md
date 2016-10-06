## Hackathon SNG

Source code of the website [http://hackathon.sng.sk](http://hackathon.sng.sk)

Built using the [Laravel 4](http://laravel.com/) 

### Usage

install vendor requirements using:
`composer install`

generate application key (for encoding) using:
`php artisan key:generate`

#### i18n

We use [jquery.i18n](https://github.com/wikimedia/jquery.i18n) for translation. All translated texts are stored in `i18n/messages.json`. This file needs to be valid JSON and thus can't contain newlines in strings.

### License

Developed by [SNG Lab](http://lab.sng.sk) at [Slovak National Gallery](http://www.sng.sk).

Hackathon SNG is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
