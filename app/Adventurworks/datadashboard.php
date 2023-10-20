<?php
require('koneksi.php');

$sql1 = "SELECT  
FORMAT(SUM(fs.sub_total), 0) AS sub_total, 
MIN(t.tahun) AS MinTahun, 
MAX(t.tahun) AS MaxTahun       
FROM sales_fact fs
JOIN time t ON t.Time_id = fs.Time_id";

$result1 = mysqli_query($conn, $sql1);

$datadashboard1 = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard1, array(
        "TotalSubTotal" => $row['sub_total'],
        "MinTahun" => $row['MinTahun'],
        "MaxTahun" => $row['MaxTahun']
    ));
}

$data1 = json_encode($datadashboard1);


$sql1 = "SELECT COUNT(salesfactID) AS SalesReason FROM sales_fact;";

$result1 = mysqli_query($conn, $sql1);

$datadashboard2 = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard2, array(
        "SalesReason" => $row['SalesReason']
    ));
}

$data2 = json_encode($datadashboard2);

$sql1 = "SELECT COUNT(DISTINCT `Group`) AS 'Group' FROM `address`;";

$result1 = mysqli_query($conn, $sql1);

$datadashboard3 = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard3, array(
        "Group" => $row['Group']
    ));
}

$data3 = json_encode($datadashboard3);
