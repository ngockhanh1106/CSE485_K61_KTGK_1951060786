<?php
include('header.php')
?>
<div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        if (isset($_SESSION['noti'])) //Checking whether the SEssion is Set of Not
        {
          echo $_SESSION['noti']; //Display the SEssion Message if SEt
          unset($_SESSION['noti']); //Remove Session Message
        }
        ?>
        <br />
        <a href="<?php echo SITEURL; ?>add_bd.php" class="add">Thêm</a> 
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <!-- <th scope="col">STT</th> -->
              <th scope="col">Mã người hiến máu </th>
              <th scope="col">Tên người hiến máu</th>
              <th scope="col">Giới tính</th>
              <th scope="col">Năm sinh(Tuổi)</th>
              <th scope="col">Nhóm máu</th>
              <th scope="col">Ngày đăng kí hiến máu</th>
              <th scope="col">Số di động</th>
              <th scope="col">Sửa</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //include ('config/constants.php');

            //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
            $sql = "SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno FROM blood_donor";
            //echo $sql;
            $result = mysqli_query($conn, $sql);
            

            //bước 3 xử lý kết quả trả về
            if (mysqli_num_rows($result) > 0) {
              //$i = 1;
              while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                  <!-- <th scope="row">?php echo $i; ?> </th> -->
                  <td><?php echo $row['bd_id']; ?> </td>
                  <td><?php echo $row['bd_name']; ?> </td>
                  <td><?php echo $row['bd_sex']; ?> </td>
                  <td><?php echo $row['bd_age']; ?> </td>
                  <td><?php echo $row['bd_bgroup']; ?> </td>
                  <td><?php echo $row['bd_reg_date']; ?> </td>
                  <td><?php echo $row['bd_phno']; ?> </td>
                  <td><a href="update_bd.php?manv=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                  <td><a href="delete_bd.php?manv=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                </tr>
            <?php
               // $i++;
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>