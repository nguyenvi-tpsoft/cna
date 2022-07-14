<?php
require('../views/header.php')
?>
<div class="main-panel">
  <div class="content-wrapper content-cap">
    <div class="page-header">
      <h3 class="page-title"> ĐIỂM TIN </h3>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form action="themdiemtin.php" method="POST" enctype="multipart/form-data">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> </th>
                    <th style="font-size:18px; text-align: left;"> Thêm điểm tin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiêu đề điểm tin</th>
                    <td><input style="width: 100%;" type="text" name="tieudediemtin" value=""></td>
                  </tr>
                  <tr>
                    <th>Chuyên mục điểm tin</th>
                    <td><select name="cmdt" id="cmdt">

                        <?php
                        include '../../connectsql.php';

                        $sql = "SELECT * FROM chuyenmucdiemtin";
                        //echo $sql; 
                        $result = $con->query($sql);
                        $stt = 0;
                        while ($row = $result->fetch_assoc()) {
                          $stt = $stt + 1;
                          echo "<option value='" . $row['ID_CHUYENMUC_DT'] . "'>" . $row['TEN_CHUYENMUC_DT'] . " </option><br>";
                        }
                        $con->close();

                        ?>
                      </select></td>
                  </tr>
                  <tr>
                    <th>Nội dung điểm tin</th>
                    <td><textarea id="nddt" name="nddt" rows="8" cols="40"></textarea>
                      <script>
                        //config={};
                        //config.entities_latin=false;
                        //config.language="Vi";
                        CKEDITOR.config.pasteFromWordPromptCleanup = true;
                        CKEDITOR.config.pasteFromWordRemoveFontStyles = false;
                        CKEDITOR.config.pasteFromWordRemoveStyles = false;
                        CKEDITOR.config.language = "Vi";
                        CKEDITOR.config.htmlEncodeOutput = false;
                        CKEDITOR.config.ProcessHTMLEntities = false;
                        CKEDITOR.config.entities = false;
                        CKEDITOR.config.entities_latin = false;
                        CKEDITOR.config.ForceSimpleAmpersand = true;
                        var editor = CKEDITOR.replace('nddt');
                        CKFinder.setupCKEditor(editor);
                      </script>
                    </td>
                  </tr>
                  <tr>
                    <th>Hình ảnh điểm tin</th>
                    <td><input type="file" name="hinhanhdt" value=""></td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn btn-primary btn-fw" style="float:right;">Thêm</button>

            </form>




          </div>
        </div>
      </div>
    </div>
    <br>


    <div class="card">
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> STT </th>
                <th> Tên chuyên mục điểm tin </th>
                <th> Tiêu đề điểm tin</th>

                <th> Hình ảnh điểm tin</th>
                <th> Ngày đăng điểm tin</th>
                <th>Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody>


              <?php

              include '../../connectsql.php';

              $sql = "SELECT * FROM diemtin INNER JOIN chuyenmucdiemtin on diemtin.ID_CHUYENMUC_DT=chuyenmucdiemtin.ID_CHUYENMUC_DT";
              //echo $sql; 
              $result = $con->query($sql);

              $stt = 0;
              while ($row = $result->fetch_assoc()) {
                $stt = $stt + 1;
                echo "<tr>
                               <td >" . $stt . " </td>
                               <td >" . $row['TEN_CHUYENMUC_DT'] . "</td>
                               <td >" . $row['TIEUDE_DT'] . "</td>
                               
                               <td > <img src='../../../upload" . $row['HINHANH_DT'] . "' alt='' style='width:150px;height: 150px;'></td>
                               <td >" . $row['NGAYDANG_DT'] . "</td>
                               <td ><a href='suadiemtin.php?id_dt=" . $row['ID_DT'] . "'><label class='badge badge-info'>Sửa</label></a></td>
                               <td ><a href='xoadiemtin.php?id_dt=" . $row['ID_DT'] . "'><label class='badge badge-danger'>Xóa</label></a></td>
                               </tr>";
              }
              echo "</tbody></table>";
              $con->close();

              ?>

        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>

<?php
include('../views/footer.php')
?>