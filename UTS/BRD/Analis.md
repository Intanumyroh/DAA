# Analisis Bisnis Aplikasi Cek Ketersediaan dan Pemesanan Motor Listrik

## 1. Tujuan Aplikasi
Aplikasi ini dirancang untuk:
- Memudahkan pengguna dalam melihat ketersediaan motor listrik.
- Melakukan pemesanan motor listrik.
- Membantu admin dalam mengelola data motor listrik secara efisien.

**Fitur Utama:**  
- Pengecekan ketersediaan motor listrik.
- Pemesanan motor listrik.
- Pengelolaan data motor listrik oleh admin.

---

## 2. Aktor
- **Admin:**  
  Memiliki akses penuh untuk mengelola data motor listrik dan pemesanan, termasuk menambah, mengubah, menghapus data, dan memperbarui status ketersediaan motor listrik. Admin bertanggung jawab atas pengelolaan pemesanan.
  
- **Pengguna:**  
  Memiliki akses untuk melihat daftar motor listrik yang tersedia dan melakukan pemesanan tanpa hak untuk mengelola data.

---

## 3. Fitur dan Fungsionalitas

### a. Fitur untuk Pengguna:
- **Melihat Ketersediaan Motor Listrik:**  
  Pengguna dapat melihat daftar motor listrik yang tersedia dengan rincian seperti merek, model, kapasitas baterai, harga sewa, lokasi penjemputan, dan status ketersediaan.
  
- **Pemesanan Motor Listrik:**  
  Pengguna dapat melakukan pemesanan dengan mengisi formulir yang mencakup tanggal dan waktu peminjaman, lokasi penjemputan, dan durasi peminjaman.

### b. Fitur untuk Admin:
- **Pengelolaan Data Motor Listrik:**  
  Admin dapat menambah, mengedit, dan menghapus data motor listrik, termasuk rincian merek, model, kapasitas baterai, harga sewa, lokasi, dan nomor rangka.

- **Manajemen Ketersediaan Motor Listrik:**  
  Admin dapat memperbarui status ketersediaan motor listrik sesuai jadwal peminjaman.

- **Pengelolaan Pemesanan:**  
  Admin dapat mengelola pemesanan, termasuk menyetujui atau membatalkan pemesanan yang masuk.

---

## 4. Persyaratan Fungsional
- **Sistem Login:**  
  Mengatur akses berdasarkan peran, di mana pengguna dan admin memiliki hak akses berbeda.
  
- **Pengaturan dan Tampilan Data Motor Listrik:**  
  Admin memiliki kontrol penuh untuk mengelola data motor listrik, sedangkan pengguna hanya dapat melihat daftar motor listrik yang tersedia dan melakukan pemesanan.

---

## 5. Persyaratan Non-Fungsional
- **Kegunaan:**  
  Aplikasi dirancang dengan antarmuka yang mudah digunakan dan intuitif untuk pengguna maupun admin.
  
- **Keamanan:**  
  Akses data dan pemesanan dibatasi sesuai dengan peran pengguna. Admin memiliki akses penuh, sedangkan pengguna hanya dapat melihat dan memesan motor listrik tanpa hak untuk mengelola data.

---

## 6. Model, Migrasi, Seeder, dan Resource yang Dibutuhkan

### a. Motor Listrik (ElectricBikes)
- **Model:**  
  Menyimpan data motor listrik, seperti merek, model, kapasitas baterai, harga sewa, lokasi, nomor rangka, dan status ketersediaan.
  
- **Migration:**  
  Membuat tabel `electric_bikes` yang mencakup:
  - `id` (Primary Key)
  - `brand`, `model`, `serial_number`, `battery_capacity`, `range`, `price_per_day`, `location`, `availability`
  - `created_at`, `updated_at`

- **Seeder:**  
  Menyediakan data motor listrik awal untuk pengujian.

- **Resource:**  
  API endpoint untuk akses data motor listrik oleh pengguna dan admin.

### b. Pemesanan (Bookings)
- **Model:**  
  Menyimpan data pemesanan, seperti `id` motor listrik, `id` pengguna, tanggal mulai dan selesai peminjaman, serta lokasi penjemputan dan pengembalian.
  
- **Migration:**  
  Membuat tabel `bookings` yang mencakup:
  - `id` (Primary Key)
  - `electric_bike_id`, `user_id`, `start_date`, `end_date`, `pickup_location`, `return_location`, `status`
  - `created_at`, `updated_at`

- **Seeder:**  
  Menyediakan data pemesanan awal untuk pengujian.

- **Resource:**  
  API endpoint untuk mengelola data pemesanan oleh pengguna dan admin.

### c. Permissions
- **Model:**  
  Mengelola hak akses pengguna untuk fitur yang berbeda. Admin memiliki lebih banyak akses dibandingkan pengguna biasa.
  
- **Seeder:**  
  Menambahkan data permissions untuk setiap peran:
  - **Pengguna:** `view_electric_bikes`, `book_electric_bikes`
  - **Admin:** `manage_electric_bikes`, `manage_bookings`
