# language: id
Fitur: Otenfikasi User
  Agar dapat mulai menggunakan aplikasi
  Sebagai user
  Saya harus dapat login

  Dasar:
    Dengan saya menambahkan header "Content-Type" dengan nilai "application/json"
    Dan saya menambahkan header "Accept" dengan nilai "application/json"
    Dan saya memiliki user dengan:
    | username | test             |
    | email    | test@example.com |
    | password | test             |

  Skenario: Sukses login
    Ketika saya mengirim permintaan POST ke "/login-check" dengan isi:
    """
    {
      "username": "test",
      "password": "test"
    }
    """
    Maka kode status respon harus 200
    Dan nilai JSON pada token harusnya tidak nihil
