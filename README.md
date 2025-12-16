HEAD
# uas-ppw2-rizendy
# UJIAN AKHIR SEMESTER (UAS)

## Mata Kuliah: Praktikum Pemrograman Web 2

Repository ini digunakan sebagai **soal Ujian Akhir Semester (UAS)**. Mahasiswa diminta untuk mengerjakan sebagian atau seluruh task yang tersedia sesuai dengan waktu yang diberikan. **Tidak wajib menyelesaikan semua task.**

Total poin **tidak dibatasi 100**, namun **nilai akhir maksimal tetap 100**.

---

## 🎯 Tujuan Ujian

* Menguji pemahaman penggunaan Git & workflow kolaborasi
* Menguji kemampuan implementasi Laravel (CRUD, database, MVC)
* Menguji penerapan fitur umum aplikasi web (pagination, notifikasi, chart)

---

## 📌 Aturan Umum

* Wajib menggunakan **Laravel** sesuai base project yang disediakan
* Kerjakan secara **mandiri**
* Dilarang menyalin pekerjaan atau bekerjasama dengan mahasiswa lain
* Penilaian berdasarkan **commit history**, **branch**, dan **hasil implementasi**
* Format spreadsheet jawaban ujian dapat diduplikat / make a copy dari template berikut: https://docs.google.com/spreadsheets/d/1LE5KElGSjdw5_0gQeSM7VlUM34p-fxqKgdHpyxEvOlU/edit?usp=sharing

---

## 🧾 Daftar Soal & Penilaian

> **Catatan Penting:**
> Setiap task yang **berhasil dikerjakan** wajib disertai **1 (satu) screenshot** sebagai bukti.
>
> * Screenshot boleh berupa **tampilan hasil di browser**, atau
> * **Potongan source code** yang diubah (jika perubahan kecil dan cukup ditampilkan dalam 1 layar).
>
> Screenshot dapat disimpan di Google Drive dan ditautkan (link) pada spreadsheet jawaban ujian.

---

### A. Git & Workflow (Mandatory)

| No | Task                                                                                                     | Poin |
| -- | -------------------------------------------------------------------------------------------------------- | ---- |
| 1  | Clone repository ini lalu push ke repository milik sendiri                                               | 5    |
| 2  | Kerjakan pada branch `dev-nama` (contoh: `dev-abid`)                                                     | 2    |
| 3  | Commit pekerjaan di branch `dev-nama` lalu merge ke `main/master` atau buat Pull Request / Merge Request | 5    |

**Subtotal**: 12 poin

---

### B. Environment & Database (Mandatory)

| No | Task                                                                                      | Poin |
| -- |-------------------------------------------------------------------------------------------| ---- |
| 4  | File `.env` yang sudah dikonfigurasi disimpan sebagai `.env.nama` (contoh: `.env.saya`)   | 2    |
| 5  | Migrasi seluruh tabel yang sudah disediakan                                               | 2    |
| 6  | Gunakan prefix table pada database dengan format `nama_nimuniv_` (contoh: `saya_123456_`) | 8    |

**Subtotal**: 12 poin

---

### C. Identitas Aplikasi (Mandatory)

| No | Task                                                       | Poin |
| -- |------------------------------------------------------------| ---- |
| 7  | Ubah informasi mahasiswa pada **header** | 2    |
| 8  | Ubah informasi mahasiswa pada **footer**                   | 2    |

**Subtotal**: 4 poin

---

### D. Fitur Database & Model

| No | Task                                                | Poin |
| -- | --------------------------------------------------- | ---- |
| 9  | Implementasi **Soft Delete** pada data yang relevan | 3    |

**Subtotal**: 3 poin

---

### E. Menu Pekerjaan

| No | Task                                                                         | Poin |
| -- | ---------------------------------------------------------------------------- | ---- |
| 10 | Tampilkan notifikasi berhasil tambah/edit/hapus data Pekerjaan               | 5    |
| 11 | Implementasi pagination pada menu Pekerjaan                                  | 8    |
| 12 | Tampilkan jumlah pegawai berdasarkan data (bukan static) pada menu Pekerjaan | 8    |

**Subtotal**: 21 poin

---

### F. Menu Pegawai

| No | Task                                                         | Poin |
| -- | ------------------------------------------------------------ | ---- |
| 13 | Full CRUD menu Pegawai (Create, Read, Update, Delete)        | 30   |
| 14 | Tampilkan notifikasi berhasil tambah/edit/hapus data Pegawai | 5    |
| 15 | Implementasi pagination pada menu Pegawai                    | 8    |

**Subtotal**: 43 poin

---

### G. Dashboard / Beranda

| No | Task                                                                              | Poin |
| -- | --------------------------------------------------------------------------------- | ---- |
| 16 | Buat chart pada halaman beranda yang datanya diambil dari database (bukan static) | 15   |

**Subtotal**: 15 poin

---

### H. Keamanan Form (Opsional / Bonus)

| No | Task                                                                                                                                                      | Poin |
| -- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | ---- |
| 17 | Implementasi Captcha (**Laravel Captcha / Google reCAPTCHA / Cloudflare Turnstile**) pada **salah satu form saja** (misal: tambah Pegawai atau Pekerjaan) | 20   |

**Subtotal**: 20 poin

---

## 📊 Rekapitulasi Poin

* Total Poin Tersedia: **130 poin**
* Nilai Maksimal: **100**
* Mahasiswa **tidak wajib** menyelesaikan seluruh soal

---

## 📦 Ketentuan Pengumpulan

* Pastikan repository **public** atau dapat diakses dosen
* Branch `main/master` berisi hasil akhir
* Commit harus jelas dan relevan

---

## ✅ Catatan Penilaian

* Setiap task **wajib memiliki screenshot** sebagai bukti pengerjaan dan diisi pada file spreadsheet
* Link spreadsheet dikirim pada assignment elok yang sudah disediakan
* Pekerjaan yang tidak dapat dijalankan akan **tidak dinilai**
* Poin diberikan berdasarkan **fungsi berjalan**, bukan hanya tampilan
* Semakin banyak task selesai dengan benar, semakin besar peluang nilai maksimal

---

Selamat mengerjakan dan semoga sukses 🚀
aa4c854 (initial commit, this commit must exist after you change repository)
