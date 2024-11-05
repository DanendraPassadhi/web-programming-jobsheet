<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Barang Event</title>

    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1574282775995-e87dc2a0c4fd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333; 
        }
        .card {
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.8); 
            backdrop-filter: blur(10px);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .table {
            background-color: rgba(255, 255, 255, 0.8); 
            backdrop-filter: blur(10px);
            border-radius: 10px;
            overflow: hidden;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        h2, h3 {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Pengelolaan Barang Event</h2>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="proses.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Sound System">Sound System</option>
                                    <option value="Lighting">Lighting</option>
                                    <option value="Stage">Stage</option>
                                    <option value="Dekorasi">Dekorasi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" min="1" value="1" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kondisi</label>
                                <select class="form-select" name="kondisi" required>
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak Ringan">Rusak Ringan</option>
                                    <option value="Rusak Berat">Rusak Berat</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan (Opsional)</label>
                                <textarea class="form-control" name="keterangan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Tambah Barang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="text-center mb-4">Data Inventaris Barang</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'database.php';
                    //Memilih tabel dengan nama tabel barang_event secara descending
                    $query = sqlsrv_query($koneksi, "SELECT * FROM barang_event ORDER BY id DESC");
                    $no = 1;
                    //Melakukan perulangan untuk menampilkan isi tabel
                    while ($row = sqlsrv_fetch_object($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($row->nama_barang); ?></td>
                            <td><?php echo htmlspecialchars($row->kategori); ?></td>
                            <td><?php echo htmlspecialchars($row->jumlah); ?></td>
                            <td><?php echo htmlspecialchars($row->kondisi); ?></td>
                            <td><?php echo htmlspecialchars($row->keterangan); ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
