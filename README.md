Petunjuk Penggunaan 

https://chatgpt.com/share/6765490d-d1bc-8003-b9c0-ffcc0c20372f

## Panduan Menjalankan Aplikasi

Berikut adalah langkah-langkah untuk menjalankan aplikasi ini:

1. **Clone Repository**
   - Clone repository ini ke komputer Anda menggunakan perintah berikut:
     ```
     git clone <repository-url>
     ```
   - Ganti `<repository-url>` dengan URL repository Anda.

2. **Masuk ke Direktori Proyek**
   - Pindah ke direktori proyek yang telah Anda clone:
     ```
     cd nama-direktori
     ```
   - Ganti `nama-direktori` dengan nama direktori proyek Anda.

3. **Install Dependencies dengan Composer**
   - Pastikan Anda memiliki Composer terinstall. Jika belum, Anda dapat mengikuti panduan instalasi di [situs resmi Composer](https://getcomposer.org/).
   - Jalankan perintah berikut untuk menginstall dependencies PHP:
     ```
     composer install
     ```

4. **Install Dependencies dengan NPM**
   - Pastikan Anda memiliki Node.js dan npm terinstall. Jika belum, Anda dapat mengikuti panduan instalasi di [situs resmi Node.js](https://nodejs.org/).
   - Jalankan perintah berikut untuk menginstall dependencies JavaScript:
     ```
     npm install
     ```

5. **Menjalankan Aplikasi**
   - Setelah semua dependencies terinstall, jalankan perintah berikut untuk mem-build dan menjalankan aplikasi:
     ```
     npm run dev
     ```
   - Perintah ini akan menjalankan server pengembangan dan Anda dapat mengakses aplikasi di browser Anda di alamat `http://localhost:3000` atau sesuai dengan konfigurasi server Anda.

6. **Konfigurasi Lingkungan**
   - Pastikan Anda telah membuat file `.env` dengan konfigurasi yang benar. Anda dapat menyalin file `.env.example` dan mengubahnya sesuai kebutuhan:
     ```
     cp .env.example .env
     ```
   - Jangan lupa untuk mengatur kunci aplikasi dengan menjalankan:
     ```
     php artisan key:generate
     ```

Dengan mengikuti langkah-langkah di atas, Anda seharusnya dapat menjalankan aplikasi ini di komputer Anda. Jika Anda mengalami masalah, pastikan untuk memeriksa dokumentasi dan log error untuk solusi lebih lanjut.

