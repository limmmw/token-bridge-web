# Token Bridge API

Token Bridge API adalah aplikasi sederhana yang berfungsi sebagai jembatan untuk mengelola token antara perangkat IoT (seperti Arduino) dan server. Aplikasi ini memungkinkan perangkat IoT untuk berinteraksi dengan server melalui beberapa endpoint yang tersedia.

## Fitur Utama
- **GET /get_token**: Mengambil data dari server Blynk menggunakan token dan pin tertentu.
- **POST /update_token**: Memperbarui token untuk perangkat tertentu.
- **POST /reset_token**: Mereset token ke nilai default.

## Struktur Direktori
```
.
├── get_token.php       # Endpoint untuk mengambil data dari server Blynk
├── index.php           # Halaman utama untuk dokumentasi API
├── reset_token.php     # Endpoint untuk mereset token
├── update_token.php    # Endpoint untuk memperbarui token
├── README.md           # Dokumentasi proyek
```

## Cara Menggunakan

### 1. Persiapan
- Pastikan server web (seperti Apache atau Nginx) dan PHP sudah terinstal di sistem Anda.
- Letakkan folder proyek ini di direktori root server web Anda (misalnya, `/var/www/html/`).

### 2. Endpoint yang Tersedia

#### **GET /get_token**
Digunakan untuk mengambil data dari server Blynk.

**Parameter:**
- `token` (wajib): Token autentikasi untuk server Blynk.
- `pin` (wajib): Pin yang ingin diakses (contoh: `V1`).

**Contoh Penggunaan:**
```
GET /get_token.php?token=YOUR_TOKEN&V1
```

#### **POST /update_token**
Digunakan untuk memperbarui token perangkat.

**Contoh Penggunaan:**
```
POST /update_token.php
Body: { "token": "NEW_TOKEN" }
```

#### **POST /reset_token**
Digunakan untuk mereset token ke nilai default.

**Contoh Penggunaan:**
```
POST /reset_token.php
```

## Catatan Penting
- Pastikan token yang digunakan valid dan aktif.
- Gunakan koneksi yang aman (HTTPS) saat mengirimkan data sensitif.
- Hubungi administrator jika mengalami masalah.

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).