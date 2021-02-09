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
	  rubah bagian: 
	    DB_Database=perpus_search
	    DB_Username=root
	    DB_password=
      setelah itu jangan lupa save
- php artisan key:generate
- php artisan migrate
- php artisan serve

## Teknologi Yang Digunakan

- Backend: [PHP v 7.2.5](https://www.php.net/downloads.php)
- Framework PHP : Laravel [Laravel 7](https://laravel.com/docs/7.x/releases)
- Database : [mysql](https://www.mysql.com/)

## Preview Fitur

Menyusul

# Link hosting
hosting: .......


