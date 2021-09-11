Feature: Konfigurasi Identitas Desa
  Agar dapat mulai menggunakan aplikasi
  Sebagai admin
  Saya harus dapat membuat konfigurasi desa

  Background:
    Given saya login sebagai admin
    And I add "Accept" header equal to "application/json"
    And I add "Content-Type" header equal to "application/json"



  Scenario: Berhasil mengubah konfigurasi identitas Desa
    When I send a POST request to "/api/config" with body:
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
    Then the response status code should be 200
    And the JSON node kodeDesa should be equal to "2345"

  Scenario: Mengubah identitas desa dengan data invalid
    When I send a POST request to "/api/config" with body:
    """
    {
      "kodePos": "1234567"
    }
    """
    Then the response status code should be 422
    And the JSON node detail should be equal to 'kodePos: This value is too long. It should have 6 characters or less.'
