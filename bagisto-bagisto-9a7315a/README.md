## Happy Cones Online Ordering System

[contents here]




## Project Framework
<p align="">
<a href="http://www.bagisto.com"><img src="https://bagisto.com/wp-content/themes/bagisto/images/logo.png" alt="Total Downloads"></a>
</p>

1. [Introduction](#introduction)
2. [Documentation](#documentation)
3. [Requirements](#requirements)
4. [Installation & Configuration](#installation-and-configuration)
5. [License](#license)


### Introduction

[Bagisto](https://www.bagisto.com) is a hand tailored E-Commerce framework built on some of the hottest opensource technologies
such as [Laravel](https://laravel.com) (a [PHP](https://secure.php.net/) framework) and [Vue.js](https://vuejs.org)
a progressive Javascript framework.

**Bagisto can help you to cut down your time, cost, and workforce for building online stores or migrating from physical stores
to the ever demanding online world. Your business -- whether small or huge -- can benefit. And it's very simple to set it up.**

**Read our documentation: [Bagisto Docs](https://devdocs.bagisto.com/)**

**We also have a forum for any type of concerns, feature requests, or discussions. Please visit: [Bagisto Forums](https://forums.bagisto.com/)**

**For Developers**:
Take advantage of two of the hottest frameworks used in this project -- Laravel and Vue.js -- both of which have been used in Bagisto.

### Documentation

#### Bagisto Documentation [https://devdocs.bagisto.com](https://devdocs.bagisto.com)

### Requirements

* **OS**: Ubuntu 16.04 LTS or higher / Windows 7 or Higher (WampServer / XAMPP).
* **SERVER**: Apache 2 or NGINX.
* **RAM**: 3 GB or higher.
* **PHP**: 7.2.0 or higher.
* **Processor**: Clock Cycle 1 Ghz or higher.
* **For MySQL users**: 5.7.23 or higher.
* **For MariaDB users**: 10.2.7 or Higher.
* **Node**: 8.11.3 LTS or higher.
* **Composer**: 1.6.5 or higher.

### Installation and Configuration

**1. You can install Bagisto by using the GUI installer.**

##### a. Download zip from the link below:

[Download the latest release](https://github.com/bagisto/bagisto/releases/latest)

##### b. Extract the contents of zip and execute the project in your browser:

~~~
http(s)://localhost/bagisto/public
~~~

or

~~~
http(s)://example.com/public
~~~

**2. Or you can install Bagisto from your console.**

##### Execute these commands below, in order

~~~
1. composer create-project bagisto/bagisto-standard
~~~

~~~
2. php artisan bagisto:install
~~~

**To execute Bagisto**:

##### On server:

Warning: Before going into production mode we recommend you uninstall developer dependencies.
In order to do that, run the command below:

> composer install --no-dev

~~~
Open the specified entry point in your hosts file in your browser or make an entry in hosts file if not done.
~~~

##### On local:

~~~
php artisan serve
~~~

### License
Bagisto is a truly opensource E-Commerce framework which will always be free under the [MIT License](https://github.com/bagisto/bagisto/blob/master/LICENSE).