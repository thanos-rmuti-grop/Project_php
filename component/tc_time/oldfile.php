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





<?php 

// Include the database config file 
include_once 'BaseModel/condb.php'; 
// Fetch all the country data 
$query = "SELECT * FROM `s_organization`"; 
$result = mysqli_query($connect, $query);
?>
<form >

 <select id="country" name='country_id' onchange="showcountry(this.value)>
<option >เลือกสาขา</option>

<?php while($row = mysqli_fetch_array($result))
{
echo'<option value="'.$row['code'].'">'.$row["name"].'</option>';
}
?>
</select></p>

<!-- ************************************************************* -->
<select  id="state" name="state_id">
<option>กรุณาเลือกอาจารย์</option>
</select>
 
<input type="submit" value="Search">


</form>
<br>    
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showcountry(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "s_organization.code?q="+str, true);
  xhttp.send();
}
</script>
<!-- *************************************************** -->
<?php 



if(isset($_POST['country_id'])){
  $code = $_POST['country_id'];
}
if(isset($_POST['state_id'])){
  $tc = $_POST['state_id'];
}








$mysqli = new mysqli("localhost","root","","minipro2");
error_reporting (E_ALL ^ E_NOTICE);
                                     
$datalenght = 0;
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if ($result = $mysqli -> query("SELECT *
FROM teaching as t NATURAL JOIN user as u NATURAL JOIN title NATURAL JOIN timetable as ti NATURAL JOIN ess_course  as cr NATURAL JOIN classroom as c
WHERE  t.teacher_id = u.id_card and u.title_id = title.title_id and ti.course_id = cr.course_id and t.timetable_id = ti.timetable_id and t.class_id = c.class_id
and  t.code = $code 
and  u.id_card = $tc



order by t.day_id ,t.period_begin asc"))    {
    foreach($result as $data){
        $title[$datalenght] = $data['title_short'];
        $tcfname[$datalenght]  = $data['name'];
        $tclname[$datalenght]  = $data['lastname'];
        $teaching[$datalenght]  = $data['teaching_id'];
        $starttime[$datalenght]  =  $data['period_begin'];
        $endtime[$datalenght]    =  $data['period_end'];
        $stday[$datalenght]    = $data['day_id'];
        $crouse[$datalenght]  = $data['COURSE_TITLE'];
        $crouse_code[$datalenght]  = $data['COURSE_CODE'];
        $std[$datalenght]  = $data['std_id'];
        $class[$datalenght]  = $data['class_id'];
        $col[$datalenght] = $endtime[$datalenght] - $starttime[$datalenght]+1;
        $datalenght++;

    }
}
?>

<?php $days = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
    //$time = array("08.00","09.00","10.00","11.00","12.00","13.00","14.00","15.00","16.00","17.00","18.00","19.00","20.00","21.00");
    $countdays = 0;
    $counttime =1;
  
    
    ?>


<div class="row">
<table class="table table-bordered";>
   

   <thead bgcolor="#CCFFCC">
       <th colspan="3">วัน</th>
  
       <th scope="col" value="1">08.00</th>
       <th scope="col" value="2">09.00</th>
       <th scope="col" value="3">10.00</th>
       <th scope="col" value="4">11.00</th>
       <th scope="col" value="5">12.00</th>
       <th scope="col" value="6">13.00</th>
       <th scope="col" value="7">14.00</th>
       <th scope="col" value="8">15.00</th>
       <th scope="col" value="9">16.00</th>
       <th scope="col" value="10">17.00</th>
       <th scope="col" value="10">18.00</th>
       <th scope="col" value="11">19.00</th>
       
   </thead> 
    <br>
<?php 
//for($i = 0; $i < $datalenght ; $i++ ){
   // echo " This is I ".$i." <br>";
    
    for($day = 0 ; $day < 7 ; $day++){
           
       ?> <tr>    <th  scope="row"> <?php echo $days[$day];?> </th>  <?php 

            
  
        for($time = 0 ; $time < 14 ; $time++){
           
           ?> <td>
            <?php           
                            for($i = 0; $i < $datalenght ; $i++ ) {
                                
                                if($day == $stday[$i] && $starttime[$i] == $time){
                                   
                                    ?> 
                                            
                                            <td align="left" bgcolor="#CCFFCC" colspan="<?php echo $col[$i] ?> "><?php
                                       echo "[".$crouse_code[$i]."] ".$crouse[$i]."<br>";
                                       echo  "(".$std[$i].") ห้อง ".$class[$i]."<br>".$title[$i]." ".$tcfname[$i]." ".$tclname[$i]."<br>";?>
<div align="right" ><a href="#"><i class="fas fa-user-edit"></i></a></div>
<?php
                                        if($time == $starttime[$i+1] && $day == $stday[$i+1]){
                                      echo " ".$title[$i+1]." ".$tcfname[$i+1]." ".$tclname[$i+1]."<br>";
                                    }
                                   
                                              
                                
                                           
                                            
                                       /* foreach($stday as $value){
                                            if($day == $value){
                                                    foreach($teaching as $tec){
                                                        if($starttime[$i] == $time){
                                                        echo $tec." ";
                                                            }
                                                    }
                                                
                                                
                                            }
                                        }*/
                                      ?>
                                      
                                      
                                      </td> 
                                        <?php $time = $endtime[$i]+1?>
                                        
                                    <?php
                                }
                            }
                        
               ?> 
           
           </td> <?php
        }
       ?> </tr><?php 
    }
//}
?>
</table>

</tr>
     </table>
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

