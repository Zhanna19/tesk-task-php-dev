<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Test Task

Test task was done according to the requirements in the file. 

- [File link](https://docs.google.com/document/d/1-KvYqDeAU7nb0l5heJiHzbFvVFy5LRaPquLERtkjUW4/edit).
- [File link Eng](https://docs.google.com/document/d/15w3ZxBSD6vpOUXbD8R2R_066KanhodVULPkrE5MKsGU/edit).


Below will be a description and comments about work.

## Pattern in usage

For handling the possibility of adding delivery services - Dependency Injection
For preparing data for the api request - Data Transfer Object

In case we need new delivery service - we just need to add new service class and dto and implement sendData according to the requirements of the service.

## Parameters
User might need next parameters in the future
- billing address
- delivery cost
- delivery service (delivery provide)
- need to be paid during receiving
- fast delivery
- frangible content

## Error 
For now default error handling. In the future custom error classes might be added

## Refactoring 

Move to separate class request config in case of huge number of delivery providers.

## License

The test task is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
