# Kelompok 1
1. Irfan Mulyana Abdillah 18104013.
2. Ninik Mei Syaputri 18104017.
3. Helmi Apriyanda 18104036.

# Website Perpus_search

Website perpus_search merupakan website untuk membantu masyarakat dalam mencari buku di perpustakaan.

# Tujuan
1. Membantu masyarakat dalam mencari buku lebih cepat di perpustakaan.
2. Membantu meningkatkan minat membaca masyarakat.
3. Buku tertata dengan rapi sesuai kode yang dibuat.

## Fitur

1. Website berguna untuk login ke perpus_search
2. registrasi berfungsi supaya user memiliki akun terlebih dahulu sebelum login
3. login dipakai setelah memiliki akun agar user dapat login ke halaman perpus_search
4. logout cara logout di perpus_search user harus klik logo perpus_serarch
3. Home merupakan halaman awal setelah login
4. Create buku merupakan fitur untuk memasukkan data buku
5. Read buku digunakan untuk read seluruh data buku
6. Read buku data tables digunakan untuk read, update, delete, search data buku

# Cara instalisasi

- Masuk ke directory file ketik cmd
- composer update -vvv
- copy .env.example .env
- setting koneksi database nama database bebas di .env
	- rubah bagian: 
	  - DB_Database=perpus_search
	  - DB_Username=root
	  - DB_password=
      	  - setelah itu jangan lupa save
- php artisan key:generate
- php artisan migrate
- php artisan serve

## Teknologi Yang Digunakan

- Backend: [PHP v 7.2.5](https://www.php.net/downloads.php)
- Framework PHP : Laravel [Laravel 7](https://laravel.com/docs/7.x/releases)
- Database : [mysql](https://www.mysql.com/)

## Preview Fitur
- Register 

![Screenshot (332)](https://user-images.githubusercontent.com/56946836/107331457-836dd380-6ae5-11eb-8d9a-ee67723cf578.png)

- Login

![Screenshot (335)](https://user-images.githubusercontent.com/56946836/107336819-27f31400-6aec-11eb-81a2-5ea5c517bbbd.png)

- Create Buku

![Screenshot (336)](https://user-images.githubusercontent.com/56946836/107336845-2f1a2200-6aec-11eb-8b0b-b5609e1b57e5.png)

- Read Buku

![Screenshot (337)](https://user-images.githubusercontent.com/56946836/107336937-4e18b400-6aec-11eb-967c-94686f2fb776.png)

- Read Buku Data Tables

![Screenshot (339)](https://user-images.githubusercontent.com/56946836/107336943-4f49e100-6aec-11eb-8d96-ff2386207d7d.png)
![Screenshot (338)](https://user-images.githubusercontent.com/56946836/107336946-4fe27780-6aec-11eb-9e2b-c5d385b54cbc.png)





# Link hosting
hosting: .......


