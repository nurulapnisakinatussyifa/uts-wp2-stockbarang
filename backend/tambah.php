<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);

// echo $data->kategori;

$sql = "insert into stock_barang(kategori, nama, jumlah_stock) values('" .
    $data->kategori . "','" . $data->nama . "','" . $data->jumlah_stock . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>