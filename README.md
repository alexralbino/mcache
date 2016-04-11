# Mcache
Limpe os caches da aplicação sem precisar usar o terminal

## Instalação

Adicione no seu composer.json

```js
  "require": {
    "mixdinternet/mcache": "0.1.*"
  }
```

ou

```js
  composer require mixdinternet/mcache
```

## Service Provider

Abra o arquivo `config/app.php` e adicione

`Mixdinternet\Mcache\Providers\McacheServiceProvider::class`