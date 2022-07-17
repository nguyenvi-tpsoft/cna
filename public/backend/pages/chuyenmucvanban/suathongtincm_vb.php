<?php
require('../views/header.php')
?>
<?php
session_start();
include '../../connectsql.php';
$id_cmvb = $_GET['id_cmvb'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM chuyenmucvanban WHERE ID_CHUYENMUC_VB='$id_cmvb'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$TEN_CHUYENMUC_VB = $row['TEN_CHUYENMUC_VB'];
$_SESSION['id_cmvb'] = $id_cmvb;
?>



<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Sửa chuyên mục điểm văn bản </h3><br>
      <form action="capnhatchuyenmuc_vb.php" method="POST">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Tên chuyên mục &emsp;<input type="text" name="tenchuyenmucvb" value="<?php echo $TEN_CHUYENMUC_VB; ?>"></li>
            <li class="breadcrumb-item active" aria-current="page">
              <button type="submit" class="btn btn-primary btn-fw">Cập nhật</button>
            </li>
          </ol>
        </nav>
      </form>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<?php
require('../views/footer.php')
?>