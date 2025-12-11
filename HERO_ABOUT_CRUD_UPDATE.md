# Update: Hero & About CRUD

## Perubahan

Hero dan About sekarang memiliki fitur CRUD lengkap seperti Experiences, Skills, Projects, dan Certificates.

## Fitur Baru

### Hero Section
- **URL**: `/admin/heroes`
- **Fitur**: Create, Read, Update, Delete
- **Tampilan**: Card list dengan border biru
- **Fields**:
  - Welcome Badge
  - Nama
  - Title/Jabatan
  - Deskripsi
  - GitHub URL
  - LinkedIn URL
  - Instagram URL
  - Urutan

### About Section
- **URL**: `/admin/abouts`
- **Fitur**: Create, Read, Update, Delete
- **Tampilan**: Card list dengan border hijau
- **Fields**:
  - Judul
  - Deskripsi
  - Years Experience
  - Projects Completed
  - Image Path
  - Urutan

## Database

### Tabel Baru
- `heroes` - Menyimpan data hero section
- `abouts` - Menyimpan data about section

### Migration
```bash
php artisan migrate
```

### Seeder
```bash
php artisan db:seed --class=HeroSeeder
php artisan db:seed --class=AboutSeeder
```

## Backward Compatibility

Controller `PortfolioController` sudah diupdate untuk:
1. Menggunakan data dari tabel `heroes` dan `abouts` (prioritas utama)
2. Fallback ke `portfolio_contents` jika tabel baru masih kosong

Ini memastikan website tetap berfungsi meskipun belum ada data di tabel baru.

## Cara Menggunakan

### 1. Akses Menu
- Klik menu "Hero" atau "About" di sidebar admin
- Atau klik card di dashboard

### 2. Tambah Data
- Klik tombol "Tambah Hero Baru" atau "Tambah About Baru"
- Isi form
- Klik "Simpan"

### 3. Edit Data
- Klik icon edit (pensil) pada card
- Update data
- Klik "Update"

### 4. Hapus Data
- Klik icon hapus (trash)
- Konfirmasi penghapusan

## Routes

### Heroes
- `GET /admin/heroes` - List heroes
- `GET /admin/heroes/create` - Form tambah
- `POST /admin/heroes` - Simpan hero baru
- `GET /admin/heroes/{id}/edit` - Form edit
- `PUT /admin/heroes/{id}` - Update hero
- `DELETE /admin/heroes/{id}` - Hapus hero

### Abouts
- `GET /admin/abouts` - List abouts
- `GET /admin/abouts/create` - Form tambah
- `POST /admin/abouts` - Simpan about baru
- `GET /admin/abouts/{id}/edit` - Form edit
- `PUT /admin/abouts/{id}` - Update about
- `DELETE /admin/abouts/{id}` - Hapus about

## Files Created/Modified

### Created
- `app/Models/Hero.php`
- `app/Models/About.php`
- `app/Http/Controllers/Admin/HeroController.php`
- `app/Http/Controllers/Admin/AboutController.php`
- `database/migrations/2025_12_11_064852_create_heroes_table.php`
- `database/migrations/2025_12_11_064856_create_abouts_table.php`
- `database/seeders/HeroSeeder.php`
- `database/seeders/AboutSeeder.php`
- `resources/views/admin/heroes/index.blade.php`
- `resources/views/admin/heroes/create.blade.php`
- `resources/views/admin/heroes/edit.blade.php`
- `resources/views/admin/abouts/index.blade.php`
- `resources/views/admin/abouts/create.blade.php`
- `resources/views/admin/abouts/edit.blade.php`

### Modified
- `routes/web.php` - Added resource routes
- `app/Http/Controllers/PortfolioController.php` - Updated to use new tables
- `resources/views/admin/layouts/app.blade.php` - Updated sidebar links
- `resources/views/admin/dashboard.blade.php` - Updated dashboard cards
- `README_ADMIN.md` - Updated documentation

## Testing

1. Akses `/admin/heroes` - Harus muncul list heroes
2. Tambah hero baru - Harus berhasil
3. Edit hero - Harus berhasil
4. Hapus hero - Harus berhasil
5. Akses `/admin/abouts` - Harus muncul list abouts
6. Tambah about baru - Harus berhasil
7. Edit about - Harus berhasil
8. Hapus about - Harus berhasil
9. Akses `/` - Website harus menampilkan data dari tabel baru

## Notes

- Data default sudah di-seed saat menjalankan seeder
- Tampilan mengikuti style yang sama dengan Experiences
- Urutan (order) menentukan data mana yang ditampilkan di frontend (yang terkecil)
- Old method (`/admin/portfolio/hero/edit`) masih berfungsi untuk backward compatibility
