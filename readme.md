# Multi Auth Social Login

## Japanese Article
[Lara-bell.com](https://lara-bell.com/2017/11/multi-auth/)

## How to use

### Download
```git clone https://github.com/Lara-Bell/Multi-Auth_Social-Login.git multi_auth```

```cd multi_auth```

### Install
```composer install```

```cp .env.example .env```

```php artisan key:generate```

```php artisan migrate```

### NPM Install
```npm install```

```bower install bootstrap-social```

```npm run dev```

## Social Login

### .env Edit
```
TWITTER_CLIENT_ID=
TWITTER_CLIENT_SECRET=
TWITTER_URL_CALLBACK=http://YOUR_DOMAIN/login/twitter/callback

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_URL_CALLBACK=http://YOUR_DOMAIN/login/google/callback
```

## Support Social Login
- [Twitter](https://apps.twitter.com)
- [Google](https://console.developers.google.com)

## Framework or Package
- [Laravel](https://laravel.com)
- [Bootstrap](https://getbootstrap.com/docs/3.3/)
- [Bootstrap-Social](https://lipis.github.io/bootstrap-social/)

## Special Thanks
- [DevMarketer](https://github.com/DevMarketer/multiauth_tutorial)
- [Bitfumes Webnologies](https://www.youtube.com/channel/UC_hG9fglfmShkwex1KVydHA)

## Donations

Bitcoin 12mEmvjEr4fwdJtiKWs5McV2Pm9LZB3iGX

Ethereum 0x8c5a00b946EBe0636117921e69695D235757131A

## License

[MIT license](http://opensource.org/licenses/MIT).
