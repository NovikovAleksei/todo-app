## Getting started

Make sure you have the required dependencies installed

Before we create a new Laravel application on your Windows machine, 
make sure to install <a href="https://www.docker.com/products/docker-desktop/">Docker Desktop</a>. Next, you should ensure that
Windows Subsystem for Linux 2 (WSL2) is installed and enabled. 
WSL allows you to run Linux binary executables natively on Windows 10. 
Information on how to install and enable WSL2 can be found within Microsoft's 
developer environment documentation.

Clone this repository to your local machine

```
git clone git@github.com:NovikovAleksei/todo-app.git
```

Then navigate to the repo's folder and start up with Sail

```
./vendor/bin/sail up
```

After starting You are now able to log in to your Docker desktop in container


```
php artisan migrate --seed
php artisan db:seed --class=TaskSeeder
```

Set database mock up credentials

```
admin@todo-app.com
secret
```

