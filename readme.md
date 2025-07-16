# Print Hello World Laravel Package

> A package that does exactly what you think it does — it says **Hello World** (wow, groundbreaking).

This is a very serious Laravel package designed for extremely critical situations like saying _hello_ to your users. Just run a command, and boom — your CLI feels loved.

## 💡 What does it do?

- Prints `Hello [name]`
- Knows its own version (which is pretty cool for something that can't think)
- Can be extended or replaced by something actually useful (but we know you won't)

## 🛠️ Installation

```bash
composer require meedeley/hello-world
```

source for learn :
- https://laravel.com/docs/12.x/packages
- https://chatgpt.com

## How To Use
### Artisan Command
```bash
php artisan hello:world

or

php artisan hello:world [name
```

### Controller File
```
  use Meedeley\HelloWorld\Facades\HelloWorld;

  HelloWorld::greet("Everyone");
  HelloWorld::greet("Joko");
  HelloWorld::greet("Morro");

```
