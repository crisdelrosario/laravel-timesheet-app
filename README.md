# Basic Laravel Timesheet App
This is a basic time tracking application using Laravel framework with React

## Pre-requisites
1. *PHP* \
    Installing PHP using Homebrew on a MacOS
    ```
    brew install php@8.1
    ```
2. *Composer* \
    Installing composer \
    [https://getcomposer.org/download/](https://getcomposer.org/download/)
3. *Node JS* \
    Installing Node JS \
    [https://nodejs.org/en/download/package-manager/current](https://nodejs.org/en/download/package-manager/current)
## Development
Git clone this repository
```
git clone https://github.com/crisdelrosario/laravel-timesheet-app.git
cd laravel-timesheet-app
```
Install dependencies
```
npm i
```
Run  migration
```
php artisan migrate --seed
```

## Testing
```
php artisan test
```

## APIs
[http://localhost:8000/api/documentation](http://localhost:8000/api/documentation)


## Deployment
For more info regarding depoloying Laravel in production, please refer to the official Laravel deployment docs\
[https://laravel.com/docs/8.x/deployment](https://laravel.com/docs/8.x/deployment)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
