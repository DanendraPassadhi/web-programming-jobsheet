<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
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
        <h2 class="text-center mb-4">Edit Data Barang</h2>
        
        <?php
        include 'database.php';
        $id = $_GET['id'];
        //Memilih tabel dengan nama tabel barang_event pada baris id
        $sql = "SELECT * FROM barang_event WHERE id = '$id'";
        $query = sqlsrv_query($koneksi, $sql);

        if ($query === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        //Mengubah baris menjadi array asosiatif
        $data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

        if($data == NULL){
            header('Location: index.php');
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="kategori" required>
                                    <option value="Sound System" <?php if($data['kategori'] == 'Sound System') echo 'selected'; ?>>Sound System</option>
                                    <option value="Lighting" <?php if($data['kategori'] == 'Lighting') echo 'selected'; ?>>Lighting</option>
                                    <option value="Stage" <?php if($data['kategori'] == 'Stage') echo 'selected'; ?>>Stage</option>
                                    <option value="Dekorasi" <?php if($data['kategori'] == 'Dekorasi') echo 'selected'; ?>>Dekorasi</option>
                                    <option value="Lainnya" <?php if($data['kategori'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" value="<?php echo $data['jumlah']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kondisi</label>
                                <select class="form-select" name="kondisi" required>
                                    <option value="Baik" <?php if($data['kondisi'] == 'Baik') echo 'selected'; ?>>Baik</option>
                                    <option value="Rusak Ringan" <?php if($data['kondisi'] == 'Rusak Ringan') echo 'selected'; ?>>Rusak Ringan</option>
                                    <option value="Rusak Berat" <?php if($data['kondisi'] == 'Rusak Berat') echo 'selected'; ?>>Rusak Berat</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan (Opsional)</label>
                                <textarea class="form-control" name="keterangan" rows="3"><?php echo $data['keterangan']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
