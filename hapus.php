<?php
include("koneksi.php");
isset($GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:table-daftar.php?status=sukses");
} else {
    die ("akses dilarang");
}
?>
<!-- Iqbal Tegar Pratama -->