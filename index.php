<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETEAccess-Control-Allow-Methods: POST, GET, OPTIONS, DELETE');
header('Content-Type: application/json');
include'config.php';
$query="SELECT * FROM songsdb";
$res=mysqli_query($conn,$query) or die('error query');
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res))
    {
        $data[]=$row;
    }
}

echo json_encode($data);
?>