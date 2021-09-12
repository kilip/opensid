# language: id
Fitur: Administrasi artikel
  Agar dapat mengadministrasi artikel
  Sebagai user
  Saya harus dapat mengelola artikel

  Dasar:
    Dengan saya login sebagai admin
    Dan saya menambahkan header "Content-Type" dengan nilai "application/json"
    Dan saya menambahkan header "Accept" dengan nilai "application/json"
    Dan saya memiliki kategori "Berita Desa"

  Skenario: Berhasil menambahkan artikel
    Dengan saya tidak memiliki artikel yang berjudul "Test Artikel"
    Ketika saya mengirim permintaan "POST" ke route "api_artikels_post_collection" dengan isi:
    """
    {
      "judul": "Test Artikel",
      "isi": "isi",
      "kategori": "/api/kategoris/1"
    }
    """
    Maka kode status respon harus 201
    Dan nilai JSON pada "judul" harusnya sama dengan "Test Artikel"
    Dan nilai JSON pada "slug" harusnya sama dengan "test-artikel"
    Dan nilai JSON pada "user.nama" harusnya sama dengan "Admin"
