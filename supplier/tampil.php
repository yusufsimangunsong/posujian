
<div class="content">
    <div class="row">
        <a href="?m=supplier&s=tambah" class="btn btn-info">tambah supplier</a>
        <h2>Modul Tampilan Supplier</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>kontak</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once ('koneksi.php');
                $sql = 'SELECT * FROM supplier';
                $query = mysqli_query($koneksi, $sql);
                if(mysqli_num_rows($query) == 0) {
                    echo "<tr><td colspan='5'>data kosong</td></tr>";
                } else {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)){
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['nama'] . "</td>";
                        echo "<td>" . $r['alamat'] . "</td>";
                        echo "<td>" . $r['kontak'] . "</td>";
                        echo '<td><a href="?m=supplier&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=supplier&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Jurusan akan menghilangkan SEMUA data siswa yang ada pada Jurusan tersebut, yakin Jurusan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                }
                

                ?>
            </tbody>
        </table>
    </div>
</div>