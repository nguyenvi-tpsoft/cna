<?php
require('../views/header.php')
?>
<?php
session_start();
include '../../connectsql.php';
$id_dt = $_GET['iddt'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM chuyenmucdiemtin WHERE ID_CHUYENMUC_DT='$id_dt'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$TEN_CHUYENMUC_DT = $row['TEN_CHUYENMUC_DT'];
$_SESSION['id_dt'] = $id_dt;
?>


<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Sửa chuyên mục điểm tin</h3><br>
      <form action="capnhatchuyenmuc_dt.php" method="POST">
        <table>
          <tr>
            <th>Tên chuyên mục <input type="text" value="<?php echo "$TEN_CHUYENMUC_DT"; ?>" name="tenchuyenmuc"></th>
            <th><input type="submit" class="btn btn-primary btn-sm btn-block btn-success" value="Cập nhật"></th>
          </tr>
        </table>
      </form>

    </div>
  </div>
</div>
<?php
require('../views/footer.php')
?>