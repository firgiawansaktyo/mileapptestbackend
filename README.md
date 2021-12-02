<h1 align="center">Mileapp API TEST BACKEND</h1>

## Feature
- Get All Package
- Get Detail Package 
- Store Package 
- Put Package 
- Patch Package 
- Delete Package 
- Using MongoDB
- Unit Testing  
- L5 Swagger API Documentation  


## How to install

clone repository and then composer install<br>
install mongodb and php-mongodb for database

```bash
# install
composer install
```

## How to run
```bash
# copy .env
cp .env.example .env
```

```bash
php artisan serve
# application will run in http://localhost:8000
```

## Application 

- API Documentation url http://localhost:8000/docs/api-docs.json
- API url http://localhost/api/package/
- Unit Testing
```bash
vendor/bin/phpunit --verbose --debug
```
