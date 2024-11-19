<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDig - E Book</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .header img {
            width: 40px;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.1); /* Border halus pada sidebar */
            border-radius: 5px; /* Sudut membulat pada setiap pojok */
        }

        .sidebar img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;
        }

        .sidebar h3 {
            text-align: center;
            margin: 10px 0;
        }

        .sidebar p {
            text-align: center;
            background-color: #A8CFFB;
            border-radius: 15px;
            padding: 5px 10px;
            display: inline-block;
            margin: 0 auto;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            flex-grow: 1;
            margin-top: 20px;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 15px 0;
            background-color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover {
            background-color: rgba(168, 207, 251, 0.6);
            border-radius: 20px;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }


        .sidebar ul li a {
            color: inherit;
            text-decoration: none;
        }

        .sidebar ul li a:focus,
        .sidebar ul li a:active {
            outline: none;
            box-shadow: none;
        }

        .content {
            flex: 1;
            padding-left: 10px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
        }

        .content h2 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 0px;
            margin-bottom: 0px;
        }

        .maincontainer {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .top-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-tambah {
            padding: 10px 30px;
            background-color: white;
            color: #007bff; /* Warna font biru */
            border: 1px solid #007bff; /* Border halus dengan warna biru */
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px; /* Border halus */
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-tambah i {
            font-size: 18px; /* Ukuran ikon lebih besar */
        }

        .btn-tambah:hover {
            color: white; /* Warna font putih saat hover */
            background-color: #007bff; /* Background biru saat hover */
        }

        .search-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .search-container input {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding-left: 40px; /* Adjust to make space for the button */
            width: 100%;
        }

        .search-container button {
            background: transparent;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 10px; /* Add padding to match input padding */
            border-radius: 4px 0 0 4px;
        }

        .search-container button:hover {
            background-color: rgba(0, 86, 179, 0.1);
        }

        .search-container .search-icon {
            color: #808080; /* Gray color */
        }

        table {
            width: 100%;
            /* border-collapse: collapse; */
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            /* border: 1px solid #ddd; */
            text-align: left;
        }

        table thead tr {
            background-color: #f4f4f4;
        }

        .content .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .content .actions button {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .content .actions button:hover {
            background-color: #d8d8d8;
        }

        .content .actions input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }

        .action-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 0 5px;
            /* Mengurangi padding horizontal antar ikon */
            margin: 0;
            /* Menghilangkan margin default */
        }

        /* .action-btn i {
            color: #e74c3c;
        } */

        .breadcrumb {
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-top: 0px;
        }

        /* .sortable:hover {
            cursor: pointer;
            color: #007bff;
        } */

        .pagination {
            display: flex;
            justify-content: left;
            align-items: center;
            margin-top: 20px;
        }

        .pagination button {
            background-color: transparent;
            border: 1px solid #ccc;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
            transition: background-color 0.3s;
        }

        .pagination button:hover {
            background-color: #e0e0e0;
        }

        .pagination button.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 10px;
            height: 40px; /* Menentukan tinggi select agar serasi dengan span */
        }

        .pagination span {
            margin-left: 5px;
            font-size: 14px;
            color: #333;
            line-height: 40px; /* Menyesuaikan tinggi teks span agar sejajar dengan select */
        }

        .top-bar button {
            border: none;
            background-color: transparent;
            /* Membuat tombol tanpa latar belakang */
            padding: 0;
            cursor: pointer;
        }

        .top-bar button a {
            text-decoration: none;
            /* Menghilangkan garis bawah pada link */
            color: inherit;
            /* Menggunakan warna teks yang diwariskan dari elemen luar */
        }

        .top-bar button:focus,
        .top-bar button:active {
            outline: none;
            /* Menghilangkan garis biru saat tombol diklik atau difokuskan */
        }

        .breadcrumb a {
            text-decoration: none;
            /* Menghilangkan garis bawah pada link */
            color: inherit;
            /* Menggunakan warna teks yang diwariskan dari elemen induk */
        }

        .breadcrumb a:focus,
        .breadcrumb a:active,
        .breadcrumb a:visited {
            color: inherit;
            /* Menghilangkan perubahan warna setelah link diklik atau dikunjungi */
            outline: none;
            /* Menghilangkan garis biru saat link difokuskan */
        }
</style>
</head>

<body>
    <div class="header">
        <img alt="Library logo" src="assets/logo perpusdig.png" />
        <h1>&#124; PerpusDig - Sistem Informasi Perpustakaan Daerah Kabupaten Nganjuk</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <img alt="User profile picture" src="assets/profil.png" />
            <h3>Ini Bapak Budi</h3>
            <p>Super Admin</p>
            <ul>
                <li><a href="dashboard_super.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li><a href="Ebook.php"><i class="fas fa-book"></i>E - Book</a></li>
                <li><a href="buku.php"><i class="fas fa-book-open"></i>Buku</a></li>
                <li><a href="data_anggota.php"><i class="fas fa-users"></i>Data Anggota</a></li>
                <li><a href="profil.php"><i class="fas fa-user-shield"></i>Data Admin</a></li>
                <li><i class="fas fa-file-alt"></i>Pengajuan Peminjaman</li>
                <li><i class="fas fa-history"></i>Riwayat Peminjaman</li>
            </ul>
        </div>
        <div class="content">
            <h2>Data E - Book</h2>
            <div class="breadcrumb">
                <a href="dashboard_super.php">Beranda</a> / Data E - Book
            </div>
            <div class="maincontainer">
                <div class="top-container">
                    <!-- Tombol Tambah Data di kiri -->
                    <button class="btn-tambah"><i class="fas fa-plus"></i> TAMBAH DATA</button>

                    <!-- Kolom Pencarian di Kanan -->
                    <div class="search-container">
                        <button><i class="fas fa-search search-icon"></i></button>
                        <input type="text" placeholder="Cari judul buku"/>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laut Bercerita</td>
                            <td>Leila S. Chudori</td>
                            <td>2017</td>
                            <td>Fiksi</td>
                            <td>5</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Resign</td>
                            <td>Almira Bastari</td>
                            <td>2018</td>
                            <td>Fiksi</td>
                            <td>6</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Filosofi Teras</td>
                            <td>Henry Manurung</td>
                            <td>2018</td>
                            <td>Filsafat</td>
                            <td>8</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Serangkai</td>
                            <td>Valerie Patkar</td>
                            <td>2021</td>
                            <td>Romance</td>
                            <td>10</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Orang Gagal</td>
                            <td>Osamu Dazai</td>
                            <td>2020</td>
                            <td>Fiksi</td>
                            <td>8</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Kupikir Segalanya Akan Beres...</td>
                            <td>Kim Haemam & Park</td>
                            <td>2021</td>
                            <td>Self-Improvement</td>
                            <td>6</td>
                            <td class="actions">
                                <button><i class="fas fa-eye"></i></button>
                                <button><i class="fas fa-edit"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <button>&lt;</button>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>&gt;</button>
                    <select>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                    </select>
                    <span>/Halaman</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>