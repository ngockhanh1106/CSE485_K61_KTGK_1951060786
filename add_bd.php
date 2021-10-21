<?php
include('header.php');
?>

<div class="container">
    <div class="wrapper">
        <h1>Thêm người tình nguyện hiến máu</h1>
        <br /><br />
    </div>
    <form action="#" method="POST" class="mb-4" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="bd_id" class="col-sm-2 col-form-label">Mã người hiến máu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bd_id">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bd_name" class="col-sm-2 col-form-label">Tên người tình nguyện</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bd_name">
            </div>
        </div>
        

        <div class="row mb-3">
            <label for="bd_sex" class="col-sm-2 col-form-label">Giới Tính</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bd_sex">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bd_age" class="col-sm-2 col-form-label">Năm sinh(Tuổi)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bd_age">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bd_bgroup" class="col-sm-2 col-form-label">Nhóm máu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="bd_bgroup">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bd_reg_date" class="col-sm-2 col-form-label">Ngày đăng kí hiến máu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtsodidong" name="bd_reg_date">
            </div>
        </div>

        <div class="row mb-3">
            <label for="bd_phno" class="col-sm-2 col-form-label">Số di động</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control"  name="bd_phno">
            </div>
        </div>


        <button type="submit" class="add" name="btnAdd">Them</button>
    </form>

    <?php


    //kiểm tra xem đã ấn vào nút thêm chưa
    if (isset($_POST['btnAdd'])) {
        $bd_id = $_POST['bd_id'];
        $bd_name = $_POST['bd_name'];
        $bd_sex = $_POST['bd_sex'];
        $bd_sex = $_POST['bd_age'];
        $bd_bgroup = $_POST['bd_bgroup'];
        $bd_reg_date = $_POST['bd_reg_date'];
        $bd_phno = $_POST['bd_phno'];
        include('./config/constants.php');

        $sql = "INSERT INTO db_nhanvien(bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno)
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

</div>