# Dokumen Persyaratan Bisnis (BRD)

### Proyek: Aplikasi Pemesanan dan Pengelolaan Makanan Sehat
**Tanggal:** 31 Januari 2025

---

## 1. Latar Belakang
Perubahan pola hidup masyarakat yang semakin mengedepankan kesehatan membuat permintaan terhadap makanan sehat semakin meningkat. Namun, kesulitan dalam menemukan makanan sehat yang terjangkau dan mudah didapat menjadi tantangan bagi banyak konsumen. Aplikasi ini hadir untuk menjawab tantangan tersebut dengan menyediakan platform pemesanan makanan sehat yang dapat diakses kapan saja dan di mana saja.

Selain itu, perkembangan teknologi dan peningkatan penggunaan aplikasi digital turut mendukung keberhasilan model bisnis ini. Aplikasi pemesanan makanan sehat ini tidak hanya menguntungkan konsumen, tetapi juga membantu pelaku usaha kuliner dalam mengelola pemesanan dan transaksi secara lebih efisien.

---

## 2. Pengertian Bisnis dan Produktivitas

### a. Pengertian Bisnis
Bisnis adalah suatu bentuk kegiatan yang melibatkan pertukaran barang atau jasa dengan tujuan untuk memperoleh keuntungan. Dalam konteks aplikasi pemesanan makanan sehat ini, bisnis bertujuan untuk menyediakan makanan yang terbuat dari bahan alami tanpa pengawet atau bahan tambahan buatan, sekaligus memberikan kemudahan bagi pelanggan untuk memesan makanan sehat dengan cara yang lebih praktis dan efisien.

### b. Pengertian Produktivitas
Produktivitas merujuk pada kemampuan untuk menghasilkan lebih banyak hasil dengan sumber daya yang lebih sedikit. Dalam bisnis ini, produktivitas dapat diukur dari berbagai aspek, antara lain:
- Kecepatan dan efisiensi pemrosesan pesanan.
- Kemampuan untuk mengelola stok bahan makanan secara lebih efisien.
- Penggunaan teknologi untuk mempercepat dan mempermudah proses pemesanan dan pembayaran.

Produktivitas dalam konteks aplikasi ini sangat penting karena dapat meningkatkan kepuasan pelanggan dan mempercepat waktu respon terhadap permintaan, yang pada gilirannya dapat meningkatkan profitabilitas bisnis.

---

## 3. Tujuan Proyek
**Objektif:** Aplikasi ini bertujuan untuk:
- Memudahkan pengguna dalam memilih dan memesan makanan sehat.
- Menyediakan menu makanan yang menggunakan bahan alami tanpa pengawet atau bahan tambahan buatan.
- Membantu admin dalam mengelola produk, pesanan, dan transaksi secara efisien.

---

## 4. Fitur Utama

### a. Fitur untuk Pengguna
1. **Melihat Menu Makanan Sehat**  
   Pengguna dapat melihat daftar menu makanan sehat yang tersedia dengan informasi seperti:
   - Nama dan deskripsi menu
   - Bahan-bahan alami yang digunakan
   - Harga per porsi
   - Nutrisi dan manfaat
   - Gambar produk

2. **Pemesanan Makanan**  
   Pengguna dapat melakukan pemesanan dengan memilih menu, menambahkan ke keranjang, dan menentukan jumlah pesanan.

3. **Pembayaran dan Konfirmasi Pemesanan**  
   Pengguna dapat memilih metode pembayaran dan menerima konfirmasi pemesanan melalui email atau aplikasi.

### b. Fitur untuk Admin
1. **Pengelolaan Menu Makanan**  
   Admin dapat menambah, mengubah, dan menghapus menu makanan sehat beserta detailnya.

2. **Pengelolaan Pesanan**  
   Admin dapat melihat, memproses, dan mengelola status pesanan (dalam proses, selesai, dibatalkan).

3. **Laporan Transaksi**  
   Admin dapat melihat laporan transaksi yang mencakup total penjualan, jumlah pesanan, dan pendapatan.

---

## 5. Persyaratan Fungsional
- **Sistem Login:** Sistem login untuk pengguna dan admin dengan hak akses yang berbeda.
- **Pengelolaan Data Makanan:** Admin dapat mengelola menu makanan, termasuk penambahan bahan, harga, dan deskripsi.
- **Pengelolaan Pesanan:** Admin dapat mengelola pesanan masuk dan mengubah status pesanan.
- **Pembayaran:** Sistem pembayaran terintegrasi dengan metode pembayaran digital.

---

## 6. Persyaratan Non-Fungsional
- **Kegunaan:** Antarmuka pengguna harus ramah dan mudah digunakan baik untuk pengguna umum maupun admin.
- **Keamanan:** Pengguna dan admin harus memiliki akses terbatas berdasarkan hak akses yang telah ditentukan.
- **Performa:** Aplikasi harus responsif dan dapat menangani banyak pengguna secara bersamaan tanpa kendala.

---

## 7. Model, Migrasi, Seeder, dan Resource yang Dibutuhkan

### a. Menu Makanan (MenuItems)
- **Model:** `MenuItems`. Menyimpan data menu makanan sehat.
- **Migration:** Tabel `menu_items` yang mencakup:
  - `id`: Primary Key
  - `name`, `description`, `price`, `ingredients`, `image_url`
  - `timestamps`
- **Seeder:** Data menu makanan awal untuk pengujian.
- **Resource:** API endpoint untuk akses data menu makanan.

### b. Pemesanan (Orders)
- **Model:** `Orders`. Menyimpan data pemesanan.
- **Migration:** Tabel `orders` yang mencakup:
  - `id`: Primary Key
  - `user_id`, `total_price`, `status`, `payment_method`
  - `timestamps`
- **Seeder:** Data pesanan awal untuk pengujian.
- **Resource:** API endpoint untuk pemesanan.

### c. Permissions
- **Model:** `Permission`, untuk mengelola hak akses pengguna.
- **Seeder:** Data permissions berdasarkan peran:
  - **Pengguna:** `view_menu_items`, `create_order`
  - **Admin:** `manage_menu_items`, `manage_orders`

---

## 8. Analisis Permissions untuk Pengguna dan Admin
Permissions diperlukan untuk membatasi akses pengguna terhadap fitur yang sesuai dengan peran mereka, sementara admin memiliki akses penuh ke seluruh sistem.
- **Pengguna** hanya dapat melihat menu makanan dan melakukan pemesanan.
- **Admin** memiliki akses untuk mengelola menu makanan dan pesanan.

---
