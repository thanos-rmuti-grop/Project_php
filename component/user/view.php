
<section class="content">
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><h1 >ข้อมูลผู้ใช้</h1></h3>
  </div>
  <br>
  <div class="card-body p-1">

    <div class="row">
      <div class="col-md-1">
        
      </div>


      <div class="col-md-10">
      
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่มข้อมูล</button>

<span style="float:right;" >
<input   id="myInput" type="text" placeholder="Search..">
<i  class="fas fa-search"></i>
<br>
<br>
</span>

        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                          <thead>
                          
                              <tr role="row" class="info btn-danger" align="center">
                                  
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">คำนำหน้าชื่อ</th>
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">นามสกุล</th>
                                  
                                  <th   tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                  
                                  
                              </tr>
                          </thead>
                          
                            
                           
                          <tbody id="myTable">
                          <?php foreach($result as $data){
                            // print_r($data);
                            ?>
                              <tr >
                                   
                                      <td>
                                      <?php if($data['Title_id']==1){
                                        echo "ผู้ช่วยศาสตราจารย์";
                                      }else if($data['Title_id']==2){
                                        echo "นาย";
                                      }else if($data['Title_id']==3){
                                        echo "นาง";
                                      }else if($data['Title_id']==4){
                                        echo "อาจารย์";
                                      }else if($data['Title_id']==5){
                                        echo "รองศาสตราจารย์";
                                      }else if($data['Title_id']==6){
                                        echo "นางสาว";
                                      }else
                                      echo "ไม่มี";
                                      ?>
                                      </td>

                                      <td>
                                      <?php echo $data['name']; ?>
                                      </td>
                                      <td>
                                      <?php echo $data['lastname']; ?>
                                      </td>
                                  
                                      <td align="center">
                                      <!-- <input type="button" name="view" value="view" id="" class="btn btn-info btn-xs view_data" /> -->
                                    <a class="btn btn-warning btn-sm edit_data" href="#" name="" value="" id="<?php echo $data["Id_card"]; ?> ">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    
                                    <a  class="btn btn-danger btn-sm"    href="index.php?act=user&action=delete&id=<?php echo $data['Id_card'] ?>">
                                        <i class="fas fa-trash">
                                        </i>
                                        
                                        Delete
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
                                                  window.location="index.php?act=user&action=delete&id=<?php echo $data['Id_card'] ?>";
                                                }, 2000);
                                                
                                              } else {
                                                swal("ยกเลิก", "กรุณาทำรายการใหม่", "error");
                                                
                                              }
                                            });

                                          }
                                          </script>
                                    </a>
                                      </td>
                                
                                     
                
                                     
                                     
                                  </tr>
                                  <?php } ?>
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">แสดงชื่อผู้ใช้</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">แก้ไขข้อมูล</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" action="index.php?act=user&action=update">  
                          <label>รหัสบัตรประชาชน</label>  
                          <input type="text" name="Id_card" id="Id_card" class="form-control" />  
                          <br />  
                          <label>คำนำหน้า</label>  
                          <textarea name="Title_id" id="Title_id" class="form-control"></textarea>  
                          <br />  
                          <label>ชื่อ</label>  
                          <input type="text" name="name" id="name" class="form-control" />  

                          <br />  
                          <label>นามสกุล</label>  
                          <input type="text" name="lastname" id="lastname" class="form-control" />  
                          <br />  
                          <label>รหัสผ่าน</label>  
                          <input type="text" name="password" id="password" class="form-control" />  
                          <br />  
                          <label>สาขา</label>  
                          <input type="text" name="code" id="code" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />   -->
                      
                </div>  
                <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="insert" id="insert" value="Insert" type="submit" class="btn btn-primary" data="modal" 
                onclick="return confirm('กรุณากด ยืนยัน เพื่อเพิ่ม')">ยืนยัน
                </button>
</form> 
                </div>  
           </div>  
      </div>  
 </div>   

                          </tbody>
                          
                          </table>

<!-- Button trigger modal -->

<!-- Modal -->
<form action="index.php?act=tc&action=add_cannot" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">ใบอนุมัติสอนแทน</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">

<!-- ************************************************************* -->


          <div class="form-group">
                      <label for="sectorInput2">วันที่งดสอน</label>
                        <input class="form-control" type="text" name="daterange" value="01/01/2020-31/12/2020" placeholder="click" required/>
                    </div>
          <div class="form-group">
            <label for="sectorInput3">เหตุที่ไม่ได้สอน</label>
            <textarea class="form-control" name="Note" id="" cols="30" rows="10" required></textarea>

          </div>
          <hr>
          
          <div class="form-group">
            <label for="sectorInput3">วันที่สอนแทน</label>
            <input class="form-control" name="date_teach" id="date" data-provide="datepicker" required>

          </div>
                                  <div class="form-group">
                                    <label for="DepartmentInput2">วิชา</label>
                                    <!-- name="subject" รอไว้ -->
                                    <select class="form-control" id="country" name='subject'   required>
                                    <option  value="">กรุณาเลือกวิชา</option>
                                    <?php foreach($ess_cour as $data){

                                     ?>
                                        <option   value="<?php echo $data['COURSE_ID'] ?>"><?php echo $data['COURSE_TITLE'] ?></option>
                                        <?php }?>
                                        
                                   
                                      </select>
                                    </div>
                                  <div class="form-group">
                                    <label for="DepartmentInput2">อาจารย์</label>
                                    <select class="form-control" name="Teacher_replace_id" id="state" required>
                                        <option   value="">กรุณาเลือก วิชาก่อน</option>
                                        
                                      </select>
                                    </div>

<!-- ********************************************************************* -->
</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary" data="modal" onclick="return confirm('กรุณากด ยืนยัน เพื่อเพิ่ม')">ยืนยัน</button>
</div>
</div>
</div>
</div>
</form>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> แก้ไขผู้ใช้ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="index.php?act=user&action=update" method="POST">

            <div class="modal-body">

                
                <div class="form-group">
                    <label> หมายเลขบัตรประชาชน </label>
                    <input type="text" name="Id_card" id="Id_card" class="form-control" placeholder="" readonly>
                </div>

                <div class="form-group">
                    <label> คำนำหน้า </label>
                    <input type="text" name="Title_id" id="Title_id" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label> ชื่อ </label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label> นามสกุล </label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label> รหัสผ่าน </label>
                    <input type="text" name="passsword" id="passsword" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label> คณะ </label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label> ตำแหน่ง </label>
                    <input type="text" name="positin_id" id="positin_id" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label> สถานะ </label>
                    <input type="text" name="status_id" id="status_id" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label> ### </label>
                    <input type="text" name="allow_id" id="allow_id" class="form-control" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- ***************************** -->

<!-- Modal -->
<!-- EDIT POP UP FORM (Bootstrap MODAL) -->


<!-- ************************** -->






<!-- ************************************************ --
<div class="example">
<button id="b1">A basic message</button>
<button id="b2">A title with a text under</button>
<button id="b3">A success message!</button>
<button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
<button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
<button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
<button id="b5">... and by passing a parameter, you can execute something else for "Cancel".</button>
<button id="b6">A message with a custom icon</button>
</div> -->
<!-- ****************************************************** -->
</div>


</div>
</div>
</div>
        
      </div>


      <div class="col-md-1">
        
      </div>

    </div>

  </div>
    
</div>







</div>
<!-- /.col -->
</div>



</section>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type="text/javascript">
$('input[name="daterange"]').daterangepicker(
{
    
    locale: {
      format: 'DD/MM/YYYY'
    },
    startDate: '01/01/2020',
    endDate: '31/12/2020'
}, 
 
function(start, end, label) {
    // alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
}
);
</script>
<script>
$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        var str = myTrim
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#Id_card').val(myTrim(data[0]));
            $('#Title_id').val(myTrim(data[1]));
            $('#name').val(myTrim(data[2]));
            $('#lastname').val(myTrim(data[3]));

            
            $('#passsword').val(myTrim(data[5]));
            $('#code').val(myTrim(data[4]));
            $('#positin_id').val(myTrim(data[6]));
            $('#status_id').val(myTrim(data[7]));
            $('#allow_id').val(myTrim(data[7]));
            // $('#rrr').val(myTrim(data[9]));
    });
});
</script>
<script>       
// var date = new Date();
// date.setDate(date.getDate());

// $('#date').datepicker({ 
//     startDate: date
// });
        var date = new Date();
        date.setDate(date.getDate()+1);
        $('#date').datepicker({ 
            startDate: date
        });

            </script>
  <!-- // แก้ไข และ แสดง -->
            <script>
   $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"ajax/fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#Id_card').val(data.Id_card);  
                     $('#Title_id').val(data.Title_id);  
                     $('#name').val(data.name);  
                     $('#lastname').val(data.lastname);  
                     $('#password').val(data.password);  
                     $('#code').val(data.code);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"ajax/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
  </script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

