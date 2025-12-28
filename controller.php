<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_portofolio";

$koneksi = mysqli_connect($server, $user, $pass, $db);
if ($koneksi->connect_error) {
    die("Koneksi Gagal");
} else {
    // echo "Koneksi Berhasil";
}

function daftar()
{
    global $koneksi;
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $region = $_POST['region'] ?? '';

    if (empty($username) || empty($password) || empty($region)) {
        echo "
    <script>
    Swal.fire({
    icon: 'info',
    title: 'Mohon Lengkapi Data !',
    showConfirmButton: false,
    timer: 1500});
    </script>";
    } else {
        $query = "INSERT INTO tb_daftar (username, password, region) VALUES ('$username', '$password', '$region')";
        $eksekusi = mysqli_query($koneksi, $query);
        mysqli_affected_rows($koneksi);

        $query = "INSERT INTO tb_login (username, password) VALUES ('$username', '$password')";
        $eksekusi = mysqli_query($koneksi, $query);
        mysqli_affected_rows($koneksi);
        echo "
    <script>
    Swal.fire({
    icon: 'success',
    title: 'Data Berhasil Di Simpan !',
    showConfirmButton: false,
    timer: 1500});
    setTimeout(() => {
    window.location.href = 'login.php'
    }, 1000);
    </script>";
    }
}

function login()
{
    global $koneksi;
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $agree = $_POST['agree'] ?? '';

    $query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
    $eksekusi = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($eksekusi);

    if (!$agree) {
        echo "
    <script>
    Swal.fire({
    icon: 'info',
    title: 'Form Data Harus Lengkap',
    showConfirmButton: false,
    timer: 1500});
    </script>
    ";
    }

    if (empty($username) || empty($password)) {
        echo "
    <script>
    Swal.fire({
    icon: 'info',
    title: 'Mohon Lengkapi Data !',
    showConfirmButton: false,
    timer: 1500});
    </script>";
    } elseif ($cek > 0) {
        echo "
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Login Berhasil',
        showConfirmButton: false,
        timer: 1500
      });
      setTimeout(() => {
        window.location.href = 'index.html';
      }, 1200);
    </script>";
    } else {
        echo "
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Username atau Password salah',
        showConfirmButton: false,
        timer: 1500
      });
    </script>";
    }
}
