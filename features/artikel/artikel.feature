# language: id
Fitur: Artikel
  Agar dapat mengetahui berita desa
  Sebagai user
  Saya harus dapat membaca artikel

  Dasar:
    Dengan saya memiliki artikel yang berjudul "Test Artikel"

  Skenario: Membaca artikel dengan hak akses tamu
    Ketika saya mengirim permintaan api ke artikel "Test Artikel"
    Maka kode status respon harus 200
    Dan nilai JSON pada "judul" harusnya sama dengan "Test Artikel"

  Skenario: Membaca artikel dengan hak akses admin
    Dengan saya login sebagai admin
    Ketika saya mengirim permintaan api ke artikel "Test Artikel"
    Maka kode status respon harus 200
    Dan nilai JSON pada "judul" harusnya sama dengan "Test Artikel"

  Skenario: Membaca artikel dengan hak akses user
    Dengan saya login sebagai user
    Ketika saya mengirim permintaan api ke artikel "Test Artikel"
    Maka kode status respon harus 200
    Dan nilai JSON pada "judul" harusnya sama dengan "Test Artikel"

  Skenario: Membaca daftar artikel
    Ketika saya mengirim permintaan api ke daftar artikel
    Maka kode status respon harus 200
