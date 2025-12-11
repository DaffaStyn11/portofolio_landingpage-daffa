# Panduan Admin Dashboard Portfolio

## Akses Dashboard
Buka browser dan akses: `http://localhost:8000/admin`

## Menu yang Tersedia

### 1. Hero Section
Kelola konten bagian hero (banner utama):
- Welcome badge
- Nama
- Title/Jabatan
- Deskripsi
- Link sosial media (GitHub, LinkedIn, Instagram)

### 2. About Section
Kelola konten bagian tentang:
- Judul section
- Deskripsi lengkap
- Years experience
- Projects completed

### 3. Skills Section
Kelola konten bagian skills:
- Judul section
- Subtitle

**Note**: Skill cards masih static. Jika ingin membuat dinamis, perlu modifikasi lebih lanjut.

### 4. Experience (CRUD Lengkap)
Kelola pengalaman kerja dengan fitur:
- **Tambah**: Klik "Tambah Experience Baru"
- **Edit**: Klik icon edit pada card experience
- **Hapus**: Klik icon hapus (akan ada konfirmasi)

**Fields**:
- Posisi/Jabatan
- Perusahaan
- Periode (contoh: "Januari 2023 - Sekarang")
- Deskripsi
- Warna (untuk border dan badge)
- Urutan (semakin kecil, semakin atas)

### 5. Projects (CRUD Lengkap + Upload Gambar)
Kelola project portfolio dengan fitur:
- **Tambah**: Klik "Tambah Project Baru"
- **Edit**: Klik icon edit pada tabel
- **Hapus**: Klik icon hapus (akan ada konfirmasi)
- **Upload Gambar**: Bisa upload gambar project (JPG, PNG, GIF, max 2MB)

**Fields**:
- Judul Project
- Deskripsi
- Gambar (upload file atau URL)
- Teknologi (pisahkan dengan koma)
- Visible (tampilkan di halaman utama atau tidak)
- Urutan

### 6. Certificates (CRUD Lengkap)
Kelola sertifikat dengan fitur:
- **Tambah**: Klik "Tambah Certificate Baru"
- **Edit**: Klik tombol "Edit" pada card
- **Hapus**: Klik tombol "Hapus" (akan ada konfirmasi)

**Fields**:
- Nama Certificate
- Tahun
- Level (Basic, Intermediate, Advanced)
- Warna (untuk icon dan text)
- Urutan

## Tips Penggunaan

### Upload Gambar Project
1. Gambar akan disimpan di folder `public/images/projects/`
2. Format yang didukung: JPG, PNG, GIF
3. Ukuran maksimal: 2MB
4. Saat edit, kosongkan field gambar jika tidak ingin mengubah

### Urutan Tampilan
- Semakin kecil angka order, semakin atas posisinya
- Contoh: order 1 akan muncul sebelum order 2

### Warna yang Tersedia
- Blue
- Purple
- Green
- Red
- Yellow
- Indigo
- Pink

### Visible pada Projects
- **Checked**: Project ditampilkan langsung di halaman utama
- **Unchecked**: Project disembunyikan (muncul saat klik "Lihat Semua")

## Database Structure

### Tabel `portfolio_contents`
Menyimpan konten Hero, About, Skills (format key-value)

### Tabel `experiences`
Menyimpan data pengalaman kerja

### Tabel `projects`
Menyimpan data project dengan gambar

### Tabel `certificates`
Menyimpan data sertifikat

## Troubleshooting

### Gambar tidak muncul
- Pastikan folder `public/images/projects/` ada dan writable
- Cek path gambar di database
- Jalankan `php artisan storage:link` jika menggunakan storage

### Perubahan tidak terlihat
- Clear cache: `php artisan cache:clear`
- Clear view: `php artisan view:clear`
- Refresh browser dengan Ctrl+F5

### Error saat upload gambar
- Cek ukuran file (max 2MB)
- Cek format file (JPG, PNG, GIF)
- Cek permission folder `public/images/projects/`

## Seeder

Untuk reset data ke default:
```bash
php artisan migrate:fresh
php artisan db:seed --class=PortfolioContentSeeder
php artisan db:seed --class=ExperienceSeeder
php artisan db:seed --class=ProjectSeeder
php artisan db:seed --class=CertificateSeeder
```

## Preview Website
Klik menu "Lihat Website" di sidebar atau akses: `http://localhost:8000`
