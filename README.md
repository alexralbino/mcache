## Mcache

[![Total Downloads](https://poser.pugx.org/mixdinternet/mcache/d/total.svg)](https://packagist.org/packages/mixdinternet/mcache)
[![Latest Stable Version](https://poser.pugx.org/mixdinternet/mcache/v/stable.svg)](https://packagist.org/packages/mixdinternet/mcache)
[![License](https://poser.pugx.org/mixdinternet/mcache/license.svg)](https://packagist.org/packages/mixdinternet/mcache)

![Área administrativa](http://mixd.com.br/github/d859b9bce60607b768728cac95f3a37b1.png "Área administrativa")

Limpe os caches da aplicação sem precisar usar o terminal.

## Instalação

Adicione no seu composer.json

```js
  "require": {
    "mixdinternet/mcache": "0.2.*"
  }
```

ou

```js
  composer require mixdinternet/mcache
```

## Service Provider

Abra o arquivo `config/app.php` e adicione

`Mixdinternet\Mcache\Providers\McacheServiceProvider::class`