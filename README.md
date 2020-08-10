<p align="center"><img src="http://lumationservices.com/images/lumation-logo-2.png" width="400"></p>
#Code Challenge - Lumation 

This project is a frontend layout test starting from .PSD files. 
Reactive functionalities were also implemented to the shopping cart.

Issues

```
View Home
View Single Product
View Check Out
Add products to shopping cart
Remove products to shopping cart
checkout summary 
```


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

The prerequisites are the same that laravel 7

```
PHP >= 7.4.1
BCMath PHP Extension
Ctype PHP Extension
Fileinfo PHP extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension
```

### Installing

Follow the steps to install the proyect:

Clone GitHub repo for this project locally
```
git clone https://github.com/mmmoises/IVYBakery.git
```

Access to proyect directory
```
cd IVYBakery
```

Install Composer Dependencies
```
composer install
```

Install NPM Dependencies
```
npm install
```

Create a copy of your .env file
```
cp .env.example .env
```

Generate an app encryption key
```
php artisan key:generate
```

config the .env file with the Data Base credentials
```
nano .env
```

Create the Data Base tables
```
php artisan migrate
```

enable the server
```
php artisan serve
```

## Test

* [Video ](https://drive.google.com/drive/folders/1CMUuJDWjD7H7baID4ap4obx2eeRl8jzu?usp=sharing) - operating video


## Built With

* [Laravel](https://laravel.com/) - The Backend framework used
* [VUE](https://vuejs.org/) - The Frontend framework used
* [Axios](https://github.com/axios/axios) - library

## Authors

* **Moises Morales** - [CoffeeCups](https://github.com/mmmoises)

