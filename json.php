<?php
 
$connect = mysqli_connect("localhost", "id12804499_monica1998", "jlk04pwk", "id12804499_bookinggedung");
$query = "SELECT * from Customer ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
        
    "Nama" => $row["Nama"],
    "Alamat" => $row["Alamat"], 
    "Umur" => $row["Umur"]);
    
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA CUSTOMER\":" . $data . "}";
?>