## Getting started

Make sure you have the required dependencies installed

* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](http://www.vagrantup.com/downloads.html)

Clone this repository to your local machine

```
git clone git@git.joomplace.com:scratch/CMS.git
```

Then navigate to the repo's folder and start up Vagrant

```
vagrant up
```

After starting You are now able to log in to your virtual machine from the terminal using

```
vagrant ssh
```

Then `cd` into the `/var/www/app` shared folder to get full access to your Laravel project

```
cd /var/www/app
cp .env.local .env
```
Set database settings

```
composer install
php artisan key:generate
php artisan migrate
```

## Paths

npm commands run:

**npm run prod** - for new template pages, which are on the way **resources/views/templates/belitsoft_refresh**

run on this way - resources/views/templates/belitsoft_refresh

**npm run prod** - for old template pages

run on this way - /


## Public front

Run publish command

```
php artisan vendor:publish --tag=public --force
```
