<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);
/* print_r($data); */
$sql = "update stock_barang set " .
       "  nama='" . $data->nama . "'," .
       "  jumlah_stock='" . $data->jumlah . "' " .
       "where kategori='" . $data->kategori . "'";
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