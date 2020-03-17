<style>
.pagination {
	background: #F1334F;
	padding: 1rem;
	margin-bottom: 1rem;
	text-align: center;
	display: flex;
	justify-content: center;
}
#numbers {
	padding: 0;
	margin: 0 2rem;
	list-style-type: none;
	display: flex;
}

#numbers li a {
	color: #fff;
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#numbers li a:hover {
	opacity: 1;
}

#numbers li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}
</style>
<section class="content">
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><h1 >ระบบสอนแทน</h1></h3>
  </div>
  <br>
  <div class="card-body p-1">

    <div class="row">
      <div class="col-md-1">
        
      </div>


      <div class="col-md-10">
      
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">เพิ่มข้อมูลอาจารย์</button> -->

<span style="float:right;" >
<input   id="myInput" type="text" placeholder="Search..">
<i  class="fas fa-search"></i>
<br>
<br>
</span>
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
<a class="btn btn-warning btn-sm" href="index.php?act=tc&action=teahing" name="" value="" >
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        เพิ่มเวลาสอน
                                    </a>
        <table id="my-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                          <thead>
                          
                              <tr role="row" class="info btn-danger" align="center">
                                  
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">คำนำหน้าชื่อ</th>
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">นามสกุล</th>
                                  
                                  <th   tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                  
                                  
                              </tr>
                          </thead>
                          
                          

                          
                          <tbody id="myTable ">
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
                                  
                                      <td  align="center">
                                      <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#exampleModal">สอนแทน</button>
                                      <input type="button" name="view" value="view" id="<?php echo $data["Id_card"]; ?> " class="btn btn-info btn-xs view_data" />

                                    <a class="btn btn-warning btn-sm edit_data" href="#" name="" value="" id="<?php echo $data["Id_card"]; ?> ">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    
                                    <a  class="btn btn-danger btn-sm"  onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" href="index.php?act=tc&action=delete&id=<?php echo $data["Id_card"];?>">
                                        <i class="fas fa-trash">
                                        </i>
                                        
                                        Delete
                                    </a>
                                      </td>
                                
                                     
                
                                     
                                     
                                  </tr>
                                  <?php } ?>
                                  <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                     <h4 class="modal-title">วิชาที่สอน</h4>  

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
                     <form method="post" action="index.php?act=tc&action=update">  
                          <label>รหัสบัตรประชาชน</label>  
                          <input type="text" name="Id_card" id="Id_card" class="form-control"  readonly/>  
                          <br />  
                          <label>คำนำหน้า</label>  
                          <input name="Title_id" id="Title_id" class="form-control" required />
                          <br />  
                          <label>ชื่อ</label>  
                          <input type="text" name="name" id="name" class="form-control" required/>  

                          <br />  
                          <label>นามสกุล</label>  
                          <input type="text" name="lastname" id="lastname" class="form-control" required/>  
                          <br />  
                          <label>รหัสผ่าน</label>  
                          <input type="text" name="password" id="password" class="form-control" required/>  
                          <br />  
                          <label>สาขา</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>สถานะการใช้งาน</label>  
                          <input type="text" name="allow_id" id="allow_id" class="form-control" required/>  
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
                          <div  class="pagination">
	<ol id="numbers"></ol>
</div>

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
        <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
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
<!-- *************************************************** -->







</div>
<!-- /.col -->
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
// var date = new Date();
// date.setDate(date.getDate());

// $('#date').datepicker({ 
//     startDate: date
// });
        var date = new Date();
        date.setDate(date.getDate()-365);
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
                     $('#title_name').val(data.title_name);  
                     $('#name').val(data.name);  
                     $('#lastname').val(data.lastname);  
                     $('#password').val(data.password);  
                     $('#allow_id').val(data.allow_id);  
                     $('#code').val(data.code);  
                    
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
                                                  alert(bodyx)
                                                  window.location="index.php?act=tc&action=delete&id=";
                                                }, 2000);
                                                
                                              } else {
                                                swal("ยกเลิก", "กรุณาทำรายการใหม่", "error");
                                                
                                              }
                                            });

                                          }
                                          </script>
                                          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
// Basic example
$(function() {
	const rowsPerPage = 3;
	const rows = $('#my-table tbody tr');
	const rowsCount = rows.length;
	const pageCount = Math.ceil(rowsCount / rowsPerPage); // avoid decimals
	const numbers = $('#numbers');
	
	// Generate the pagination.
	for (var i = 0; i < pageCount; i++) {
		numbers.append('<li><a href="#">' + (i+1) + '</a></li>');
	}
		
	// Mark the first page link as active.
	$('#numbers li:first-child a').addClass('active');

	// Display the first set of rows.
	displayRows(1);
	
	// On pagination click.
	$('#numbers li a').click(function(e) {
		var $this = $(this);
		
		e.preventDefault();
		
		// Remove the active class from the links.
		$('#numbers li a').removeClass('active');
		
		// Add the active class to the current link.
		$this.addClass('active');
		
		// Show the rows corresponding to the clicked page ID.
		displayRows($this.text());
	});
	
	// Function that displays rows for a specific page.
	function displayRows(index) {
		var start = (index - 1) * rowsPerPage;
		var end = start + rowsPerPage;
		
		// Hide all rows.
		rows.hide();
		
		// Show the proper rows for this page.
		rows.slice(start, end).show();
	}
});
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

