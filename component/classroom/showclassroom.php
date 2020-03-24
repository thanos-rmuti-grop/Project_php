
  
<div class="col">
<h1>ข้อมูลห้องเรียน</h1>
        <div class="card" style="width: auto ">
            <div class="col">
           <div style="padding-top: 10px; text-align: center;">
           <table class="table table-bordered " style="width: fix-content;"> 
            <tr>
            <th>หมายเลขห้อง</th>
            <th>ชื่อห้อง</th>
            <th>อาคารเรียน</th>
            <th>สาขาวิชา</th>

            <th>ประเภทห้อง</th>
            <th>ผู้ดูแล</th>
            <th>จำนวนที่รองรับ</th>
            <th style="width: max-content;" >จัดการ</th>
            </tr>
            <tr>
            <?php 
            
            foreach($class as $row){
                 ?>
                <td><?php echo $row['class_id'] ?></td>
                <td><?php echo $row['class_name'] ?></td>
                <td><?php echo $row['building_id']?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['kind_name'] ?></td>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['amount'] ?></td>
               
               
                <td >
                <a type="button" name="edit"
                id="<?php echo $row["class_id"]; ?>" class="btn btn-info btn-sm" >
                <i class="fas fa-edit"> </i></a>
                <a  class="btn btn-danger btn-sm"   onclick="del()" href="index.php?act=classroom&action=delete&id=<?php echo $row["class_id"]; ?>">
                                        <i class="fas fa-trash">
                                        </i>
                                        <script>
                                          function del() {
                                              swal({
                                              title: "ลบข้อมูลใช่ไหม?",
                                              text: "กรุณาตรวจสอบให้ดีก่อน กดยืนยัน",
                                              type: "warning",
                                              showCancelButton: true,
                                              confirmButtonColor: '#F7022E',
                                              cancelButtonColor: '#F7022E',
                                              confirmButtonText: 'ยืนยันการลบ!',
                                              cancelButtonText: "ปฏิเสธการลบ",
                                              closeOnConfirm: false,
                                              closeOnCancel: false
                                            },
                                            function(isConfirm){
                                              if (isConfirm){
                                                swal("ลบข้อมูลสำเร็จ!", "ข้อมูลของท่านจะหายไป!", "success");
                                                setTimeout(() => {
                                                 
                                                  window.location="index.php?act=classroom&action=delete";
                                                }, 1500);
                                                
                                              } else {
                                                swal("ยกเลิก", "กรุณาทำรายการใหม่", "error");
                                                setTimeout(() => {
                                                 
                                                 window.location="index.php?act=classroom&action=showroom";
                                               }, 1500);
                                                
                                              }
                                            });

                                          }
                                          </script>
                                    </a>
               </td>
            </tr>
            <?php }?>
        </table>
           </div>

            </div>
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 

            