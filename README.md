![Logo](https://i.postimg.cc/0Nx30hNv/image.png)

# Sistem Informasi Profil Desa Kebun Lebar
The Kebun Lebar Village Profile Information System is a website-based system aimed at providing information and profiles for the Kebun Lebar village, Pematang Tiga District, Central Bengkulu Regency, Indonesia.



## Integration
Apart from using Laravel 10, this system also integrates the Bootstrap Framework as a front-end. This system uses a SQL database and in its development uses MySQL Workbench software.


## User Key Features

- News Management
- Announcement Management
- Village Profile





## System Features

- Laravel 10
- Using Eloquent from Laravel
- Templates for headers and footers
- Full CRUD integration
- Authentication from Laravel
- Upload and Update Images
  

## Optimization

N+1 Problems

## Run Locally

Clone the project

```bash
  git clone https://github.com/paley777/kebunlebar.git
```

Go to the project directory

```bash
  cd kebunlebar
```

Install dependencies

```bash
  composer install
```

Delete Cache

```bash
  php artisan cache:clear
```
Generate Laravel Key

```bash
  php artisan key:generate
```
Make Storage Link

```bash
  php artisan storage:link
```
Migrate

```bash
   php artisan migrate
```
Start the server

```bash
   php artisan serve
```


## Screenshots

![App Screenshot](https://i.postimg.cc/ncXCnPpn/image.png)
![App Screenshot](https://i.postimg.cc/VspzWLPc/image.png)


## Suggestion

For suggestions and input on this system, please email valleryan1212@gmail.com
