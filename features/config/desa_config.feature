Feature: Konfigurasi Identitas Desa
  Agar dapat mulai menggunakan aplikasi
  Sebagai admin
  Saya harus dapat membuat konfigurasi desa

  Background:
    Given I add "Accept" header equal to "application/json"
    And I add "Content-Type" header equal to "application/json"
    And saya login sebagai admin



  Scenario: Konfigurasi Identitas Desa
    #Given I add "Accept" header equal to "application/json"
    Given I add "Content-Type" header equal to "application/json"
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
