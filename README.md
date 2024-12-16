# About this Project
This project is for uploading and downloading pdf for BCA students 

# Installation Guide
If you encounter any errors during installation, try the following steps:

### 1. Clone the Repository
```bash
git clone https://github.com/Sushil113/library_laravel.git
```
### 2. Generate the key
```bash
php artisan key:generate
```

### 3. Set Up Configuration
Rename example.env to .env.
Update the following database settings in the .env file:

database config:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Install Dependencies
Run the following commands to install the necessary dependencies:

```bash
composer install or composer update
npm install
```

### 5. Set Up the Database
Migrate the database:
```bash
php artisan migrate:fresh
```
Seed the database:
```bash
php artisan db:seed
```
### 6. Start the Application
Serve the application locally using:

```bash
php artisan serve
npm run dev
```
or

```bash
composer run dev
```
