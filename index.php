<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template – Bootstrap 5.3 Murni</title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <nav>
            <div>
                <a href="index.php">Admin Template Bootstrap Adiib</a>
            </div>

            <div>
                <div>
                    <a href="#">button</a>
                </div>

                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><hr></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>

            <button type="button">
                <span></span>
            </button>
        </nav>
    </header>

    <!-- SIDEBAR / NAV MENU -->
    <nav>
        <div>
            <div>
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="laporan.php">Laporan</a></li>
                    <li><a href="#">Pengguna</a></li>
                    <li>
                        <a href="#">Pengaturan</a>
                        <ul>
                            <li><a href="#">Profil</a></li>
                            <li><a href="#">Keamanan</a></li>
                            <li><hr></li>
                            <li><a href="#">Keluar</a></li>
                        </ul>
                    </li>
                </ul>

                <form>
                    <input type="search" placeholder="Cari..." aria-label="Search">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        <div class="row">
            <div class="col-12">

                <h1 class="h3 mb-3">Dashboard</h1>

                <!-- Breadcrumb -->
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="bi bi-house-door"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>

                <!-- Tabel Data -->
                <div>
                    <div>
                        <h5>Daftar Pengguna</h5>
                        <a href="#">Tambah Data</a>
                    </div>

                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <a href="#">Edit</a>
                                            <a href="#">Hapus</a>
                                        </th>
                                        <td>Budi Santoso</td>
                                        <td>budi@example.com</td>
                                        <td>Admin</td>
                                        <td>Aktif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Contoh Form -->
                <div>
                    <div>
                        <h5>Contoh Form Lengkap</h5>
                    </div>

                    <div>
                        <form>

                            <!-- 1. Textfield -->
                            <div>
                                <label for="formNama">Nama Lengkap (Textfield)</label>
                                <input type="text" id="formNama" placeholder="Masukkan nama Anda">
                            </div>

                            <!-- 2. Textarea -->
                            <div>
                                <label for="formAlamat">Alamat (Textarea)</label>
                                <textarea id="formAlamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                            </div>

                            <!-- 3. Combobox -->
                            <div>
                                <label for="formPekerjaan">Pekerjaan (Combobox/Select)</label>
                                <select id="formPekerjaan" aria-label="Pilih Pekerjaan">
                                    <option selected>— Pilih Pekerjaan —</option>
                                    <option value="1">Pegawai Negeri Sipil</option>
                                    <option value="2">Karyawan Swasta</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Lainnya</option>
                                </select>
                            </div>

                            <!-- 4. Checkbox -->
                            <div>
                                <label>Hobi (Checkbox)</label>

                                <div>
                                    <input type="checkbox" id="checkMembaca">
                                    <label for="checkMembaca">Membaca</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="checkOlahraga">
                                    <label for="checkOlahraga">Olahraga</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="checkMusik">
                                    <label for="checkMusik">Musik</label>
                                </div>
                            </div>

                            <!-- 5. Radio -->
                            <div>
                                <label>Status (Radio Button)</label>

                                <div>
                                    <input type="radio" name="radioStatus" id="radioAktif" checked>
                                    <label for="radioAktif">Aktif</label>
                                </div>

                                <div>
                                    <input type="radio" name="radioStatus" id="radioNonAktif">
                                    <label for="radioNonAktif">Non-Aktif</label>
                                </div>
                            </div>

                            <!-- 6. File Upload -->
                            <div>
                                <label for="formFile">Upload Foto Profil</label>
                                <input type="file" id="formFile">
                            </div>

                        </form>
                    </div>

                    <div>
                        <button type="button">Cancel</button>
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div>
            <p class="mb-0">&copy; 2025 Adiib Satrio Riyanto Putra. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>