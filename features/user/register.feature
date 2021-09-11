# language: id
Fitur: Manajemen User
  Agar dapat mengatur user
  Sebagai admin
  Saya harus dapat mengubah data user

  Dasar:
    Dengan saya menambahkan header "Content-Type" dengan nilai "application/json"
    Dan saya menambahkan header "Accept" dengan nilai "application/json"

  Skenario: Menambahkan user baru
    Dengan saya tidak memiliki user "test"
    Ketika saya mengirim permintaan POST ke "/api/register" dengan isi:
    """
    {
      "username": "test",
      "email": "test@example.org",
      "plainPassword": "test"
    }
    """
    Maka kode status respon harus 201
    Dan nilai JSON pada username harusnya sama dengan "test"
    Dan nilai JSON pada "email" harusnya sama dengan "test@example.org"

