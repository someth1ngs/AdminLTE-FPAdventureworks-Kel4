<?php
require('koneksi.php');

$sql = "SELECT t.tahun, SUM(sf.order_qty) AS total_qty
FROM sales_fact sf
JOIN time t ON sf.time_id = t.time_id
GROUP BY t.tahun";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "tahun" => $row['tahun'],
        "total_qty" => $row['total_qty']
    ));
}

$data = json_encode($hasil);