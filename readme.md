# System Management Keuangan Kelas

Deskripsi singkat tentang project Anda. Jelaskan fungsi atau tujuan dari project ini.

## Fitur

- pencatatan pembayaran:
  - <SISWA> semua siswa dapat melihat pendataan pembayaran uang kas nya mereka.
  - <BENDAHARA> bendahara dapat melakukan penginputan pembayaran seluruh siswa di kelas
  - <KETUAKELAS> dapat melihat list pembayaran
- transaksi uang kelas:
  - <SISWA> siswa hanya dapat melihat riwayat transaksi baik pemasukan keuangan kelas ataupun pengeluaran kelas beserta keperluannya
  - <BENDAHARA> dapat mengupdate, input dan mendata seluruh transaksi pemasukan dan pengeluaran untuk keperluan kelas
  - <KETUAKELAS> hanya dapat melihat list riwayat transaksi yang terjadi
- Struktur Kelas:
  - <SISWA> siswa hanya dapat melihat struktur kelas
  - <BENDAHARA> hanya dapat melihat struktur kelas
  - <KETUAKELAS> dapat mengubah, menambahkan detail content struktur kelas
- system management keuangan kelas ini sudah disusun berdasarkan tahun ajaran
- ADMIN dapat menambahkan lewat form ataupun import via file excel dan mengeksport data users
- KETUA KELAS dapat menambahkan anggota siswa nya dengan menambahkan pada fitur form atau import via file excel dan dapat mengeksport data siswa
- Project ini sangat jarang ditemukan di dunia pendidikan baik tingkat, sd, smp, sma/smk maupun perguruan tinggi
- pastinya system akan terus berkembang dan up to date seiring nya tahap development team dan kebutuhan siswa/mahasiswa
- system management keuangan untuk fitur pembayaran masih menggunakan system manual yaitu penginputan, tetapi next pengembangannya akan menambahkan fitur pembayaran melalui SCAN QR atau QRIS kelas
- system management keuangan ini nantinya juga akan di publish di versi mobile android nya untuk memudahkan user atau siswa dalam menggunakannya

## Persyaratan Sistem

Pastikan Anda memiliki versi perangkat lunak berikut yang terinstall:

- **PHP** >= 8.1
- **Composer** >= 2.x
- **Node.js** >= 18.x
- **npm** atau **Yarn**
- **Database** (MySQL)

## Setup Project

Ikuti langkah-langkah berikut untuk mengatur dan menjalankan project ini secara lokal.

### 1. Clone Repository

Clone repository dari GitHub ke komputer Anda:

```bash
git clone https://github.com/username/nama-repository.git
cd nama-repository
```

### 2. Install Dependecies

```bash
composer install
npm install
```

### 3. Copy .env file

Copy file .env.example dan tambahkan file .env

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Konfigurasi Database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password

### 6. Migrasi dan Seeder Database

```bash
php artisan migrate --seed
```

### 7. Install dependency front-end (opsional):

```bash
npm install
```

### 8. Jalankan Server Lokal

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`.

## Pengaturan GitHub

- git add . = untuk saving perubahan yang dilakukan di lokal git anda sebelum di push ke repo github
- git commit -m "message" = menambahkan message perubahan yang dilakukan
- git push origin nama_branch = push perubahan yang sudah di add dan commit ke repo github

## Contributor

- Abdul Majid - abdulmajid34 | abdulmajid08180881@gmail.com
- Steven Ekaputra

## Lisensi

Project ini dilisensikan di bawah [MIT License](LICENSE).
