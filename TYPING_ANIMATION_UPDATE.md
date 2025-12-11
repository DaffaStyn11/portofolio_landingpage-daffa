# Update: Typing Animation dari Database

## Perubahan

Typing animation pada Hero section sekarang mengambil data dari database (tabel `heroes`) bukan hardcoded di JavaScript.

## Fitur Baru

### Typing Titles Field
- **Lokasi**: Admin Heroes CRUD
- **Field**: `typing_titles` (JSON array)
- **Input**: Text field dengan comma-separated values
- **Output**: Array yang ditampilkan bergantian dengan efek typing

### Cara Kerja
1. Admin input typing titles di form Hero (pisahkan dengan koma)
   - Contoh: `Frontend Developer, UI/UX Designer, Backend Developer`
2. Data disimpan sebagai JSON array di database
3. Frontend mengambil data dan menampilkan dengan efek typing bergantian

## Database

### Migration
- Menambah kolom `typing_titles` (JSON) pada tabel `heroes`

```bash
php artisan migrate
```

### Update Data Existing
Data hero yang sudah ada akan otomatis diupdate dengan default typing titles.

## Files Modified

### Migration
- `database/migrations/2025_12_11_070533_add_typing_titles_to_heroes_table.php`

### Model
- `app/Models/Hero.php`
  - Added `typing_titles` to fillable
  - Added cast to array

### Controller
- `app/Http/Controllers/Admin/HeroController.php`
  - Updated validation to include `typing_titles`
  - Convert comma-separated string to array on store/update
  
- `app/Http/Controllers/PortfolioController.php`
  - Pass `$typingTitles` to view

### Views
- `resources/views/admin/heroes/create.blade.php`
  - Added typing_titles input field
  
- `resources/views/admin/heroes/edit.blade.php`
  - Added typing_titles input field with existing data
  
- `resources/views/admin/heroes/index.blade.php`
  - Display typing titles in list view

- `resources/views/components/scripts.blade.php`
  - Updated typing animation to use data from database
  - Fallback to hardcoded if no data

### Seeder
- `database/seeders/HeroSeeder.php`
  - Added default typing_titles data

## Cara Menggunakan

### 1. Tambah/Edit Hero
- Akses `/admin/heroes`
- Klik "Tambah Hero Baru" atau edit existing hero
- Isi field "Typing Titles (Animasi Typing)"
- **Format Baru**: Multiple input fields dengan tombol Add/Remove
  - Klik "Tambah Title" untuk menambah input baru
  - Isi setiap input dengan satu title
  - Klik tombol X merah untuk menghapus input
  - Minimal harus ada 1 title
- Contoh:
  - Input 1: `Frontend Developer`
  - Input 2: `UI/UX Designer`
  - Input 3: `Backend Developer`
  - Input 4: `Fullstack Developer`

### 2. Lihat Hasil
- Akses homepage `/`
- Lihat bagian Hero section
- Text akan bergantian dengan efek typing

## Contoh Input

### Single Title
- Input 1: `Frontend Developer`

### Multiple Titles (Recommended)
- Input 1: `Frontend Developer`
- Input 2: `UI/UX Designer`
- Input 3: `Backend Developer`
- Input 4: `Fullstack Developer`

### Dengan Spasi
- Input 1: `Frontend Web Developer`
- Input 2: `UI/UX Web Designer`
- Input 3: `Backend Web Developer`

## UI Features

### Dynamic Input Fields
- **Add Button**: Tombol hijau dengan icon plus untuk menambah input baru
- **Remove Button**: Tombol merah dengan icon X untuk menghapus input
- **Validation**: Minimal harus ada 1 input field
- **Auto-filter**: Input kosong otomatis diabaikan saat save

## Technical Details

### Data Flow
1. Admin input via multiple fields:
   - Input 1: `"Frontend Developer"`
   - Input 2: `"UI/UX Designer"`
2. Form submits as array: `typing_titles[]`
3. Controller validates and filters empty values
4. Stored in DB as JSON: `["Frontend Developer", "UI/UX Designer"]`
5. Retrieved by Controller and passed to view
6. JavaScript receives array and animates

### JavaScript Animation
- Type speed: 90ms per character
- Erase speed: 60ms per character
- Pause after typing: 1500ms
- Pause after erasing: 500ms
- Cursor blink: 500ms interval

### Fallback
Jika tidak ada data typing_titles di database, akan menggunakan default:
- Frontend Web Developer
- UI/UX Web Designer
- Backend Web Developer
- Fullstack Web Developer

## Testing

1. Akses `/admin/heroes`
2. Edit hero pertama
3. Isi typing titles dengan multiple inputs:
   - Input 1: `Developer`
   - Klik "Tambah Title"
   - Input 2: `Designer`
   - Klik "Tambah Title"
   - Input 3: `Engineer`
4. Save
5. Akses homepage `/`
6. Lihat animasi typing bergantian: Developer → Designer → Engineer → Developer (loop)

## Notes

- Typing titles bersifat opsional (nullable)
- Jika kosong, akan menggunakan fallback default
- **UI Baru**: Multiple input fields dengan Add/Remove buttons
- Input kosong otomatis diabaikan saat save
- Minimal harus ada 1 input field di form
- Data disimpan sebagai JSON array untuk fleksibilitas
- Animasi akan loop terus menerus
- Feather icons digunakan untuk button icons (plus dan X)
