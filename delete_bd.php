<?php
    require('config/constants.php')
?>
<?php

    $bd_id = $_GET['bd_id'];

    $sql = "DELETE FROM blood_donor WHERE blood_donor.bd_id = $bd_id";

    echo $sql;

    $res = mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $_SESSION['noti'] = "Xóa thành công";
        header("location:".$SITEURL.'index.php');
    }
    else{
        $_SESSION['noti'] = "Lỗi khi xóa";
        header("location:".$SITEURL.'index.php');

    }

?>