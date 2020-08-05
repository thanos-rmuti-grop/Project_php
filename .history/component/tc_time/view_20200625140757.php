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
    <h3 class="card-title"><h1 >ตารางสอน</h1></h3>
  </div>
  <br>
  <div class="card-body p-1">

    <div class="row">
      <div class="col-md-1">
        
      </div>


      <div class="col-md-10">
      
<!-- ************************************************************************************* -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$('#country').on('change', function(){
var countryID = $(this).val();
if(countryID){
$.ajax({
type:'POST',
url:'ajax/ajaxSearch_TC.php',
data:'country_id='+countryID,
success:function(html){
$('#state').html(html);
$('#city').html('<option value="">เลือกอาจารย์</option>'); 
}
}); 
}else{
$('#state').html('<option value="">Select country first</option>');
$('#city').html('<option value="">Select state first</option>'); 
}
});
$('#state').on('change', function(){
var stateID = $(this).val();
if(stateID){
$.ajax({
type:'POST',
url:'ajax/ajaxSearch_TC.php',
data:'state_id='+stateID,
success:function(html){
$('#city').html(html);
}
}); 
}else{
$('#city').html('<option value="">Select state first</option>'); 
}
});
});
</script>
<!-- ************************************************************* -->




<!-- start xml -->
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","xml/getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
<!-- end xml -->
<?php 

// Include the database config file 
include_once 'BaseModel/condb.php'; 
// Fetch all the country data 
$query = "SELECT * FROM `s_organization` WHERE `name` LIKE 'คณะ%'"; 
$code = mysqli_query($connect, $query);
?>
 <select id="country" name='country_id' >
<option >-- เลือกคณะ --</option>

<?php while($row = mysqli_fetch_array($code))
{
echo'<option value="'.$row['code'].'">'.$row["name"].'</option>';
}
?>
</select></p>

 <select id="state" name="state_id" >
<option  >-- เลือกสาขา --</option>


</select></p>

<!-- ************************************************************* -->
<select  id="city" name="users" onchange="showUser(this.value)">
<option>กรุณาเลือกอาจารย์</option>
</select>
<!-- <input type="submit" value="Search"> -->

<br>
<!-- <form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1469900298947">พรภัสสร</option>
<option value="3249900298946">ทิพา</option>
<option value="1469900298945">ประกาย</option>

</select>
</form> -->
<br><br>
<div id="txtHint"></div>


<br>    

</script>
<!-- *************************************************** -->



<div class="row">

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
<div id="edit_tc" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">แก้ไขข้อมูล</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" action="index.php?act=tc_time&action=update_tc">  

                          <label>รหัสการสอน</label>  
                          <input type="text" name="teaching_id" id="teaching_id" class="form-control" readonly/>  
                          <br />  
                          <label>ตารางเวลา</label>  
                          <input type="text" name="timetable_id" id="timetable_id" class="form-control" />  

                          <br />  
                          <label>อาจารย์ผู้สอน</label>  
                          <input type="text" name="teacher_id" id="teacher_id" class="form-control" />  

                          <br />  
                          <label>ห้อง</label>  
                          <input type="text" name="class_id" id="class_id" class="form-control" />  
                          <br />  
                          <label>วัน</label>  
                          <input type="text" name="day_id" id="day_id" class="form-control" />  
                          <br />  
                          <label>คาบเรียนเริ่มสอน</label>  
                          <input type="text" name="period_begin" id="period_begin" class="form-control" />  
                          <br />  

                          <label>คาบเรียนสิ้นสุด</label>  
                          <input type="text" name="period_end" id="period_end" class="form-control" />  
                          <br />  
                          <label>ชั่วโมงทฤษฏี</label>  
                          <input type="text" name="theory_hours" id="theory_hours" class="form-control" />  
                          <br />  
                          <label>ชั่วโมงปฏิบัติ</label>  
                          <input type="text" name="practical_hours" id="practical_hours" class="form-control" />  
                          <br />  
                          <label>สาขา</label>  
                          <input type="text" name="code" id="code" class="form-control" />  
                          <br />  
                          <label>เปิดเทอม</label>  
                          <input type="text" name="start_date" id="start_date" class="form-control" />  
                          <br />  
                          <label>จบเทอม</label>  
                          <input type="text" name="end_date" id="end_date" class="form-control" />  
                          <br />  
                          <label>หลักสูตรภาคเรียน</label>  
                          <input type="text" name="code" id="std_nor" class="form-control" />  
                          <input type="text" name="code" id="std_spc" class="form-control" />  
                         
                          <br />  
                          <!-- <input type="text" name="employee_id" id="employee_id" />   -->
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
           $('#show')[0].reset();  
      });  
      $(document).on('click', '.show_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#address').val(data.address);  
                     $('#gender').val(data.gender);  
                     $('#designation').val(data.designation);  
                     $('#age').val(data.age);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#show_data').modal('show');  
                }  
           });  
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
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#show')[0].reset();  
      });  
      $(document).on('click', '.edit_tc', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"ajax/tae.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#teacher_id').val(data.teacher_id);  
                     $('#teaching_id').val(data.teaching_id);  
                     $('#timetable_id').val(data.timetable_id);  
                     $('#class_id').val(data.class_id);  
                     $('#day_id').val(data.day_id);  
                     $('#period_begin').val(data.period_begin);  
                     $('#period_end').val(data.period_end);  
                     $('#theory_hours').val(data.theory_hours);  
                     $('#practical_hours').val(data.practical_hours);  
                     $('#code').val(data.code);  
                     $('#start_date').val(data.start_date);  
                     $('#end_date').val(data.end_date);  
                     $('#std_nor').val(data.std_nor);  
                     $('#std_spc').val(data.std_spc);  
                     $('#insert').val("Update");  
                     $('#edit_tc').modal('show');  
                }  
           });  
      });  
     
     //  $(document).on('click', '.view_data', function(){  
     //       var employee_id = $(this).attr("id");  
     //       if(employee_id != '')  
     //       {  
     //            $.ajax({  
     //                 url:"select.php",  
     //                 method:"POST",  
     //                 data:{employee_id:employee_id},  
     //                 success:function(data){  
     //                      $('#employee_detail').html(data);  
     //                      $('#dataModal').modal('show');  
     //                 }  
     //            });  
     //       }            
     //  });  
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
