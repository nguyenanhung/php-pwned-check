# php-pwned-check
Check if you have an account that has been compromised in a data breach use PHP

How to Use:

Install composer

```shell
composer install
```

and open file result.php, find line:

```php
$emails = array(
    'email1@gmail.com',
    'email2@hotmail.com'
);
```
One Email per Line

1. Result in browser

enter example url in browser

```html
http://example.com/result.php
```

2. IDE or Terminal

input command

```shell
cd /your/to/path
php result.php
```

and output

```shell
713uk13ms-MacBook-Pro:php-pwned-check 713uk13m$ php result.php
1 - Email: email1@gmail.com - list site: 000webhost, Bitly
2 - Email: email2@hotmail.com - Your email is Safely!
713uk13ms-MacBook-Pro:php-pwned-check 713uk13m$
````

------
Thank for everything
thank https://packagist.org/packages/curl/curl team and project Have I Been Pwned - https://haveibeenpwned.com/

----
The End