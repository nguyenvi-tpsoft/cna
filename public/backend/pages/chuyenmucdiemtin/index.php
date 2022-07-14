<?php
require('../views/header.php')
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> CHUYÊN MỤC ĐIỂM TIN </h3><br>
      <form action="themchuyenmuc_dt.php" method="POST">
        <table>
          <tr>
            <th> Tên chuyên mục <input type="text" value="" name="tenchuyenmuc"></th>
            <th><input type="submit" class="btn btn-primary btn-sm btn-block btn-success" value="Thêm"></th>
          </tr>
        </table>
      </form>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> STT </th>
                  <th> Tên chuyên mục điểm tin </th>
                  <th> Chức năng </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>


                <?php

                include '../../connectsql.php';
                $sql = "SELECT * FROM chuyenmucdiemtin";
                //echo $sql; 
                $result = $con->query($sql);

                $stt = 0;
                while ($row = $result->fetch_assoc()) {
                  $stt = $stt + 1;
                  echo "<tr>
                                <td >" . $stt . " </td>
                                <td >" . $row['TEN_CHUYENMUC_DT'] . "</td>
                                <td><a href='suathongtindt.php?iddt=" . $row['ID_CHUYENMUC_DT'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                                <td><a href='xoathongtindt.php?iddt=" . $row['ID_CHUYENMUC_DT'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                                
                                </tr>";
                }
                echo "</tbody></table>";
                $con->close();


                ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- partial -->
</div>
<?php
require('../views/footer.php')
?>