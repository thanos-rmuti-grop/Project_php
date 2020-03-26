
  
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 Launch demo modal
                </button>
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post"  action="index.php?act=insert_room&action=edit_classroom">  
                          <label>หมายเลขห้อง</label>  
                          <input type="text" name="class_id" id="class_id" class="form-control" />  
                          <br />  
                          <label>ชื่อห้อง</label>  
                          <input name="class_name" id="class_name" class="form-control"></textarea>  
                          <br />  
                         
                          <label>อาคารเรียน</label>  
                          <select name="building_id" id="building_id" class="form-control w-50"> 
                          <?php
                            foreach($building as $row){
                              echo '<option value="'.$row['building_id'].'">'.$row['building_id'].' '.$row['building_name'].'</option>';  
                              }
                         
                          ?>
                          </select>
                          <label>สาขาวิชา</label> 
                          <select class="form-control w-50" id="code" name='code'>
                         <?php  foreach($code as $row){
                              
                              echo'<option value="'.$row['code'].'">'.$row["name"].'</option>';
                              }
                              ?>
                          </select>
                          <label>ผู้ดูแล</label> 
                          <input class="form-control w-50" type="text" id="keeper">
                          <label>ประเภท</label>  
                          <select class="form-control w-50" name="kind_id"id="kind_id"  >
                          <?php
                          foreach($kind as $row){
                              echo'<option value="'.$row['kind_id'].'">'.$row["kind_name"].'</option>';
                          }
                          
                          ?>
                           </input>
                          <input type="text" name="keeper" id="keeper" class="form-control" />  
                          <br />  
                          <label>จำนวนที่รองรับ</label>  
                          <input type="text" name="amount" id="amount" class="form-control" />  
                          <br />  
                        
                          <!-- <input type="text" name="kind_id" id="kind_id" class="form-control" />   -->
                       
                         
                     </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <script>  

      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"ajax/ajax1.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#class_id').val(data.class_id);  
                     $('#class_name').val(data.class_name);  
                     $('#keeper').val(data.keeper);  
                     $('#amount').val(data.amount);  
                     $('#kind_id').val(data.kind_id);  
                     $('#building_id').val(data.building_id);  
                     $('#code ').val(data.code);  
                     
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
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


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 

            