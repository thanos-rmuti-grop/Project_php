<script>
 function del() {
 
 }
 </script>
  
<div class="col">
<h1>ข้อมูลห้องเรียน</h1>
        <div class="card" style="width: auto ">
            <div class="col">
           <div style="padding-top: 10px; text-align: center;">
           <table class="table table-bordered nowrap" style="width: max-content;"> 
            <tr>
            <th>หมายเลขห้อง</th>
            <th>ชื่อห้อง</th>
            <th>อาคารเรียน</th>
            <th>สาขาวิชา</th>

            <th>ประเภทห้อง</th>
            <th>ผู้ดูแล</th>
            <th>จำนวนที่รองรับ</th>
            <th>จัดการ</th>
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
                 <a  onclick="del()" href="#"  class="btn btn-danger btn-sm" 
               >
                <i class="fas fa-trash"></i> </a>
               </td>
            </tr>
            <?php }?>
        </table>
           </div>
      
<!-- Trigger the modal with a button -->


            </div>
            </div>
            </div>

<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">แก้ไขข้อมูลห้องเรียน</h4>  
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
                          <br />  
                        
          
                         
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                              <p> <input type="submit" class="btn btn-success" value="ยืนยัน">    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>  </p>
                         
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 

            