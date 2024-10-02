# Proyek CodeIgniter 4 dengan Tailwind CSS
Proyek ini menggunakan CodeIgniter 4 sebagai framework backend dan Tailwind CSS untuk styling frontend.

## Langkah-langkah Instalasi
Clone Repository: 
```bash
https://github.com/anghdi/PilihanKu.git
```

## Instal CodeIgniter 4
Untuk menginstal dependensi CodeIgniter 4, jalankan perintah berikut:
```bash
composer install
```

## Instal Package NPM
Instalasi package frontend melalui npm:
```bash
npm install
```

## Konfigurasi File .env
Salin file .env.example menjadi .env dan lakukan penyesuaian yang diperlukan, seperti konfigurasi database, environment, dan sebagainya.
```bash
cp .env.example .env
```

## Jalankan Seeders
Untuk mengisi database dengan data dummy, jalankan perintah berikut:
```bash
php spark db:seed UsersSeeder
```

## Mode Debug CodeIgniter 4
Untuk menjalankan aplikasi dalam mode debug, gunakan perintah:
``` bash
php spark serve
```

## Mode Debug Tailwind CSS
Untuk mengaktifkan Tailwind CSS dalam mode debug (watch mode), jalankan perintah berikut:
```bash
npx tailwindcss -i ./public/css/input.css -o ./public/css/output.css --watch
```