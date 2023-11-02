<?php
//koneksi ke database
$conn = mysqli_connect("localhost:3306","root","","wad_project3");
//ambil data dari tabel database/query data
$result = mysqli_query($conn,"SELECT*FROM students");
//var_dump($result);
//echo "<br/>"

//varr_dump(mysqli_fetch_object($result));
//$data = mysqli_fetch_object($result);
//var_dump($data->name);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
</head>
<body>
    <h1>Ini adalah halaman Index data</h1>
    <table border="1px solid">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIM</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        <tr>

        <?php while( $data = mysqli_fetch_object($result) ){
        ?>

        </tr>
                <td><?php echo $data->id?></td>
                <td><?php echo $data->name?></td>
                <td><?php echo $data->nim?></td>
                <td><?php echo $data->address?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>