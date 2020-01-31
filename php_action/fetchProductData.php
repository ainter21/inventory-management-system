<?php 	

require_once 'core.php';

$sql = "SELECT product_id, product_name FROM product WHERE status = 1 AND active = 1";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) { 

    while($row =  mysqli_fetch_array($result)) {
        $row[1] = htmlentities($row[1]);
    }
}
$data = mysqli_fetch_all($result);

mysqli_close($conn);

echo json_encode($data);