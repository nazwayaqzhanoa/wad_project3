<?php
//koneksi ke database
$conn = mysqli_connect("localhost:3306","root","","wad_project3");
//ambil data dari tabel database/query data
$result = mysqli_query($conn,"SELECT*FROM students");
//var_dump($result);
//echo "<br/>"

//varr_dump(mysqli_fetch_object($result));

?>
