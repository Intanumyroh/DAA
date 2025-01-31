# Dokumen Persyaratan Bisnis (BRD)

### Proyek: Aplikasi Cek Ketersediaan dan Pemesanan Motor Listrik
**Tanggal:** 15 November 2024

---

## 1. Tujuan Proyek
**Objektif:** Aplikasi ini bertujuan untuk memudahkan pengguna dalam:
- Mengecek ketersediaan motor listrik
- Melakukan pemesanan
- Membantu admin dalam mengelola data motor listrik secara efisien

---

## 2. Fitur Utama

### a. Fitur untuk Pengguna
1. **Melihat Ketersediaan Motor Listrik**  
   Pengguna dapat melihat daftar motor listrik yang tersedia dengan informasi seperti:
   - Merek dan Model
   - Nomor Rangka
   - Kapasitas Baterai (kWh)
   - Jarak Tempuh Maksimum (km)
   - Tanggal dan Waktu Ketersediaan
   - Harga Sewa per Hari
   - Lokasi Penjemputan dan Pengembalian

2. **Pemesanan Motor Listrik**  
   Pengguna dapat melakukan pemesanan motor listrik dengan mengisi formulir pemesanan yang mencakup:
   - Tanggal dan Waktu Peminjaman
   - Lokasi Penjemputan
   - Durasi Peminjaman

### b. Fitur untuk Admin
1. **Pengelolaan Data Motor Listrik**  
   Admin dapat menambah, mengubah, dan menghapus data motor listrik beserta informasi lengkapnya.

2. **Manajemen Ketersediaan Motor Listrik**  
   Admin dapat memperbarui status ketersediaan motor sesuai dengan jadwal peminjaman.

3. **Pengelolaan Pemesanan**  
   Admin dapat mengelola, meninjau, menyetujui, atau membatalkan pemesanan yang masuk.

---

## 3. Persyaratan Fungsional
- **Sistem Login:** Mengatur akses berdasarkan peran, yaitu pengguna dan admin dengan hak akses berbeda.
- **Pengaturan dan Tampilan Data Motor Listrik:**
  - **Admin:** Mengelola data motor listrik dan memverifikasi pemesanan.
  - **Pengguna:** Melihat daftar motor listrik yang tersedia dan melakukan pemesanan.

---

## 4. Persyaratan Non-Fungsional
- **Kegunaan:** Antarmuka harus mudah digunakan dan intuitif untuk pengguna maupun admin.
- **Keamanan:** Pembatasan akses, di mana hanya admin yang memiliki hak pengelolaan penuh terhadap data motor listrik dan pemesanan.

---

## 5. Model, Migrasi, Seeder, dan Resource yang Dibutuhkan

### a. Motor Listrik (ElectricBikes)
- **Model:** `ElectricBikes`. Menyimpan data motor listrik.
- **Migration:** Tabel `electric_bikes` yang mencakup:
  - `id`: Primary Key
  - `brand`, `model`, `serial_number`, `battery_capacity`, `range`, `price_per_day`, `location`, `availability`
  - `Timestamps` (`created_at`, `updated_at`)
- **Seeder:** Data motor listrik awal untuk pengujian.
- **Resource:** API endpoint untuk akses data motor listrik.

### b. Pemesanan (Bookings)
- **Model:** `Bookings`. Menyimpan data pemesanan motor listrik.
- **Migration:** Tabel `bookings` yang mencakup:
  - `id`: Primary Key
  - `electric_bike_id`, `user_id`, `start_date`, `end_date`, `pickup_location`, `return_location`, `status`
  - `Timestamps` (`created_at`, `updated_at`)
- **Seeder:** Data pemesanan awal untuk pengujian.
- **Resource:** API endpoint untuk data pemesanan.

### c. Permissions
- **Model:** `Permission`, mengelola hak akses pengguna.
- **Seeder:** Data permissions berdasarkan peran:
  - **Pengguna:** `view_electric_bikes`, `book_electric_bikes`
  - **Admin:** `manage_electric_bikes`, `manage_bookings`

---

## 6. Analisis Permissions untuk Pengguna dan Admin
Permissions diperlukan untuk membatasi akses pengguna terhadap fitur yang sesuai dengan peran mereka, sementara admin memiliki akses penuh ke seluruh sistem.
- **Pengguna** hanya memiliki akses untuk melihat dan memesan motor listrik.
- **Admin** memiliki hak pengelolaan penuh atas data motor listrik dan pemesanan.
