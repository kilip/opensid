# language: id
Fitur: Konfigurasi Identitas Desa
  Agar dapat mulai menggunakan aplikasi
  Sebagai admin
  Saya harus dapat membuat konfigurasi desa

  Dasar:
    Dengan saya login sebagai admin
    Dan Saya menambahkan header "Accept" dengan nilai "application/json"
    Dan Saya menambahkan header "Content-Type" dengan nilai "application/json"

  Skenario: Berhasil mengubah konfigurasi identitas Desa
    Dengan Saya mengirim permintaan POST ke "/api/config" dengan isi:
    """
    {
      "kodeDesa": "2345",
      "namaDesa": "Test",
      "namaKepalaDesa": "nama kades",
      "nipKepalaDesa": "nip kades",
      "kodePos": "123456",
      "kodeKecamatan": "kode kecamatan",
      "namaKecamatan": "nama kecamatan",
      "namaCamat": "Nama Camat",
      "nipCamat": "nip camat",
      "kodeKabupaten": "kode kabupaten",
      "namaKabupaten": "nama kabupaten",
      "kodeProvinsi": "kode provinsi",
      "namaProvinsi": "nama provinsi",
      "logo": "logo",
      "latitude": "latitude",
      "longitude": "longitude",
      "zoom": 10,
      "mapType": "map type",
      "path": "path",
      "alamatKantor": "alamat kantor",
      "emailDesa": "email desa",
      "telepon": "telepon",
      "website": "website",
      "kantorDesa": "kantor",
      "warna": "warna"
    }
    """
    Maka kode status respon harus 200
    Dan nilai JSON pada kodeDesa harusnya sama dengan "2345"

  Skenario: Mengubah identitas desa dengan data invalid
    Dengan Saya mengirim permintaan POST ke "/api/config" dengan isi:
    """
    {
      "kodePos": "1234567"
    }
    """
    Maka kode status respon harus 422
    Dan nilai JSON pada detail harusnya sama dengan 'kodePos: This value is too long. It should have 6 characters or less.'
