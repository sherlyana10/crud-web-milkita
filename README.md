# Produk Management API

## Deskripsi
Aplikasi ini merupakan sistem manajemen produk berbasis Laravel yang memungkinkan pengguna untuk menambah, melihat, mengedit, dan menghapus produk.

## Fitur
- Menampilkan daftar produk.
- Menambahkan produk baru.
- Mengedit produk yang sudah ada.
- Menghapus produk.

## Instalasi

1. Clone repository ini:
   ```sh
   git clone https://github.com/user/repo.git
   ```
2. Masuk ke direktori proyek:
   ```sh
   cd nama_proyek
   ```
3. Install dependensi dengan Composer:
   ```sh
   composer install
   ```
4. Copy file `.env` dari contoh dan konfigurasi database:
   ```sh
   cp .env.example .env
   ```
5. Generate application key:
   ```sh
   php artisan key:generate
   ```
6. Jalankan migrasi database:
   ```sh
   php artisan migrate
   ```

## Penggunaan

Jalankan aplikasi dengan perintah:
```sh
php artisan serve
```
Aplikasi dapat diakses di `http://127.0.0.1:8000`.

## API Endpoints

### Produk
- **GET** `/produk` - Menampilkan daftar produk.
- **POST** `/produk` - Menambahkan produk baru.
- **GET** `/produk/{id}` - Menampilkan detail produk.
- **PUT** `/produk/{id}` - Mengupdate data produk.
- **DELETE** `/produk/{id}` - Menghapus produk.

## Struktur Kode

### Route
```php
Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('produk', ProdukController::class);
Route::put('produk', [ProdukModel::class, 'update']);
```

### Controller
#### `ProdukController.php`
- `index()` - Menampilkan daftar produk.
- `create()` - Menampilkan form tambah produk.
- `store()` - Menyimpan produk ke database.
- `edit($id)` - Menampilkan form edit produk.
- `update($request, $id)` - Mengupdate produk.
- `destroy($id)` - Menghapus produk.

## Lisensi
Aplikasi ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
