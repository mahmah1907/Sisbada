<?php
	
	$koneksi = mysqli_connect("localhost", "root", "", "db_datadiri");

?>

<h1>Data Diri</h1>

<form action="" method="post">
	NIM : <input type="text" name="NIM"><br>
    Nama : <input type="text" name="Nama"><br>
    Tempat Lahir : <input type="text" name="Tempat_Lahir"><br>
    Tanggal lahir : <input type="date" name="Tanggal_Lahir"><br>
    Alamat : <input type="text" name="Alamat"><br>
    Nomor Hp : <input type="text" name="Nomor_Hp"><br>
    Hobi : <input type="text" name="Hobi"><br>
    <input type="submit" name="Simpan" value="Simpan">
</form>

<table border="1">
    <thead>
    	<th>Nomor</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Nomor Hp</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
    <!-- untuk melihat data dari database -->
        <?php
            $sqlView = "SELECT * FROM `db_table_data`";
            $cekView = mysqli_query($koneksi, $sqlView);

            $nomor = 1;
            while($data = mysqli_fetch_array($cekView)){
        ?>
        <tr>
            <td><?=$nomor ?></td>
            <td><?=$data[1] ?></td>
            <td><?=$data[2] ?></td>
            <td><?=$data[3] ?></td>
            <td><?=$data[4] ?></td>
            <td><?=$data[5] ?></td>
            <td><?=$data[6] ?></td>
            <td><?=$data[7] ?></td>
            <td>
                <a href="#">Edit</a>
                <a href="index.php?id=<?=$data[0]?>">Delete</a>
            </td>
        </tr>
        <?php
            $nomor++; // ++ = nomor+1; 
            }
        ?>
    <!-- /end -->
    </tbody>
</table>

<?php
    if(isset($_POST['Simpan'])){
        $sqlInput = "INSERT INTO `db_table_data` (`Nim`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `Nomor_Hp`, `Hobi`)
                VALUES ('$_POST[NIM]', '$_POST[Nama]', '$_POST[Tempat_Lahir]', '$_POST[Tanggal_Lahir]', '$_POST[Alamat]', '$_POST[Nomor_Hp]', '$_POST[Hobi]')";
        $cekInput = mysqli_query($koneksi, $sqlInput);

        if($cekInput){
            // echo "Datanya udah masuk mas";
            echo "<script> window.location = 'index.php' </script>";
        }else{
            echo "Aduh.. Gagal masuk datanya mas";
        }
    }

    if(isset($_GET['id'])){
        $sqlDelete = "DELETE FROM `db_table_data` WHERE
        `Nama`.`id` = '$_GET[id]'";
        $cekDelete = mysqli_query($koneksi, $sqlDelete);

        if($cekDelete){
            // echo "Datanya udah masuk mas";
            echo "<script> window.location = 'index.php' </script>";
        }else{
            echo "Aduh.. Gagal ngehapus datanya mas";
        }
    }
?>