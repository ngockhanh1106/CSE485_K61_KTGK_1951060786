<?php
require('menu.php');
?>
<div class="main">
    <div class="container">
        <div class="wrapper">
            <h1>Sửa danh bạ</h1>
            <br /><br />
        </div>
        <?php

        //1. Get the ID of Selected Admin
        if (isset($_GET['manv'])) {
            $manv = $_GET['manv'];
        }
        //2. Create SQL Query to Get the Details
        $sql = "SELECT * FROM db_nhanvien WHERE manv=$manv";
        //echo $sql;

        //Execute the Query
        $res = mysqli_query($conn, $sql);


        //Check whether the query is executed or not
        if ($res == true) {
            // Check whether the data is available or not
            $count = mysqli_num_rows($res);
            //Check whether we have admin data or not
            if ($count == 1) {
                // Get the Details
                //echo "Admin Available";
                $row = mysqli_fetch_assoc($res); //

                $tennv = $row['tennv'];
                $chucvu = $row['chucvu'];
                $email = $row['email'];
                $mayban = $row['mayban'];
                $sodidong = $row['sodidong'];
                $current_image = $row['image_name'];
                $madv = $row['madv'];
                $old_madv = $madv;
            } else {
                //Redirect to Manage Admin PAge
                header('location:' . SITEURL . 'index.php');
            }
        }
        ?>

        <form action="#" method="POST" class="mb-4" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="bd_id" class="col-sm-2 col-form-label">Mã người hiến máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bd_id" value="<?php echo $bd_id;?>" >
                </div>
            </div>

            <div class="row mb-3">
                <label for="bd_name" class="col-sm-2 col-form-label">Tên người tình nguyện</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bd_name" value="<?php echo $bd_name; ?> ">
                </div>
            </div>


            <div class="row mb-3">
                <label for="bd_sex" class="col-sm-2 col-form-label">Giới Tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bd_sex" value="<?php echo $bd_sex; ?> " >
                </div>
            </div>

            <div class="row mb-3">
                <label for="bd_age" class="col-sm-2 col-form-label">Năm sinh(Tuổi)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bd_age" value="<?php echo $bd_age; ?> " >
                </div>
            </div>

            <div class="row mb-3">
                <label for="bd_bgroup" class="col-sm-2 col-form-label">Nhóm máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bd_bgroup" value="<?php echo $bd_bgroup; ?> " >
                </div>
            </div>

            <div class="row mb-3">
                <label for="bd_reg_date" class="col-sm-2 col-form-label">Ngày đăng kí hiến máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtsodidong" name="bd_reg_date" value="<?php echo $bd_reg_date; ?> " >
                </div>
            </div>

            <div class="row mb-3">
                <label for="bd_phno" class="col-sm-2 col-form-label">Số di động</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" name="bd_phno" value="<?php echo $bd_phno; ?> " >
                </div>
            </div>


            <button type="submit" class="add" name="btnUpdate">Sửa</button>
        </form>
    </div>
</div>


<?php
//Check whether the Submit Button is Clicked or not
if (isset($_POST['btnUpdate'])) {
    $bd_id = $_POST['bd_id'];
    $bd_name = $_POST['bd_name'];
    $bd_sex = $_POST['bd_sex'];
    $bd_bgroup = $_POST['bd_bgroup'];
    $bd_reg_date = $_POST['bd_reg_date'];
    $bd_phno = $_POST['bd_phno'];
    include('./config/constants.php');

    $sql = "INSERT INTO blood_donor(bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno)
     VALUES( '$bd_id','$bd_name','$bd_sex','$bd__age','$bd_group','$bd_reg_date','$bd_phno')";

    if (mysqli_query($conn, $sql) == TRUE) {
        $_SESSION['noti'] = "thêm thành công";
        header("location:" . SITEURL . 'index.php');
    } else {
        $_SESSION['noti'] = "Lỗi không thành công";
        header("location:" . SITEURL . 'index.php');
    }
    mysqli_close($conn);
}
?>
