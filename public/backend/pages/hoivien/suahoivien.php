<?php
require('../views/header.php')
?>

<?php
session_start();
include '../../connectsql.php';
$id_hv = $_GET['id_hv'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM hoivien where ID_HV='$id_hv'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$idadmin = $row['ID_ADMIN'];
$ten_hv = $row['TEN_HV'];
$hinhanh = $row['ANH_HV'];
echo $hinhanh;
$_SESSION['id_hv'] = $id_hv;

?>



<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> HỘI VIÊN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="capnhathoivien.php" method="POST" enctype='multipart/form-data'>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Sửa hội viên</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tên hội viên</th>
                    <td><input tyle='text' value="<?= $ten_hv ?>" name='ten_hv'></td>
                  </tr>
                  <tr>
                    <th>Hình ảnh hội viên</th>
                    <td><input type='file' name='hinhanhhv'> </td>
                    <!-- echo '<img  src= '.$row['HINHANH_DT']. ' style ="width:200px; height:200px">';?> -->
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;" name="id_hv" value='<?php echo $id_hv ?>'>Cập nhật</button>
              <!-- <td> <input type='submit' class='btn btn-primary btn-sm btn-block btn-success' value='Cập nhật' name="iddt"></td> -->
            </form>




          </div>
        </div>
      </div>
    </div>
    <br>




    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<?php
require('../views/footer.php')
?>