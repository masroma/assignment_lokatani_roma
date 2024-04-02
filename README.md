
## Assignment Lokatani CRUD

# Requirment
php 8
mysql

# buat database
buat database username, password dan nama database, bisa di mysql workbanch atau phpmyadmin

# Clone Repository
ketik git clone https://github.com/masroma/assignment_lokatani_roma.git

# Composer Install
ketik composer install atau composer update

# Setup ENV
copy paste file .env.example kemudian rename jadi .env

pada bagian <br/>
DB_CONNECTION=mysql <br/>
DB_HOST=127.0.0.1 <br/>
DB_PORT=3306 <br/>
DB_DATABASE=lokatani <br/>
DB_USERNAME=root <br/>
DB_PASSWORD= <br/>

silahkan kalian isikan dengan database yang tadi sudah dibuat
DB_DATABSE isi dengan nama database yang telah kalian buat
DB_USERNAME isi dengan username yang telah kalian buat
DB_PASSWORD isi dengan password yang telah kalian buat

# php artisan key:generate
ketik php artisan key:generate 

# migrasi table
ketik php artisan migrate ( pastikan settingan databasenya benar di env )

# seeder data sample
ketik php artisan db:seed
jika sudah maka data user akan terisi sebanyak 50 sample

# Running
ketik pp artisan serve



