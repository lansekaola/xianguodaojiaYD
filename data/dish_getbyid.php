<?php
/**根据id查询商品**/
header('Content-Type:application/json');

@$id = $_REQUEST['id'];
if(empty($id)){
    echo '[]';
    return;
}

require('init.php');
$sql = "SELECT did,name,price,img_lg,material,detail FROM  kf_dish WHERE did=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);  //此处无需循环
if(empty($row))
   echo '[]';
else
{
    $output[] = $row;
    echo json_encode($output);
}
?>