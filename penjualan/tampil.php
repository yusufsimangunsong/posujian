
<div class="content">
    <div class="row">
        <a href="?m=penjualan&s=tambah" class="btn btn-info">tambah penjualan</a>
        <h2>Modul Tampilan Supplier</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Supplier ID</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once ('koneksi.php');
                $sql = 'SELECT * FROM penjualan';
                $query = mysqli_query($koneksi, $sql);
                if(mysqli_num_rows($query) == 0) {
                    echo "<tr><td colspan='5'>data kosong</td></tr>";
                } else {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)){
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['supplier_id'] . "</td>";
                        echo "<td>" . $r['total'] . "</td>";
                        echo '<td><a href="?m=penjualan&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=penjualan&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Jurusan akan menghilangkan SEMUA data siswa yang ada pada Jurusan tersebut, yakin Jurusan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                }
                

                ?>
            </tbody>
        </table>
    </div>
</div>