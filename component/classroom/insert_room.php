

<?php 
// Include the database config file 
// Fetch all the country data
$con= mysqli_connect("localhost","root","","mini_project_database_compelete");

$query1 = "SELECT * FROM `s_organization` WHERE code  not LIKE '%0'"; 
$result1 = mysqli_query($con, $query1);
?>


<script type="text/javascript">
$(document).ready(function(){
    $("#selectbuilding").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
       $("#textresults").val(selectedCountry+"-");
    });
  $("#selectss").change(function() { 
      var countryID = $(this).val();
                $("#textval").val(countryID);
            });

$('#country').on('change', function(){
var countryID = $(this).val();
if(countryID){
$.ajax({
type:'POST',
url:'ajax/ajaxData1.php',
data:'country_id='+countryID,
success:function(html){
$('#state').html(html);
$('#city').html('<option value="">เลือกสาขาวิชาก่อน</option>'); 
}
}); 
}else{
$('#state').html('<option value="">เลือกสาขาวิชาก่อน</option>');
$('#city').html('<option value="">Select state first</option>'); 
}
});
$('#state').on('change', function(){
var stateID = $(this).val();
if(stateID){
$.ajax({
type:'POST',
url:'ajaxData1.php',
data:'state_id='+stateID,
success:function(html){
$('#city').html(html);
}
}); 
}else{
$('#city').html('<option value="">Select state first</option>'); 
}
});

document.getElementById('b4').onclick = function(){
	swal({
		title: "คุณต้องการเพิ่มห้องเรียนใช่ไหม",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ตกลง',
        cancelButtonText: "ยกเลิก",
        closeOnConfirm: false,
		closeOnCancel: false
	},
	function(){
		swal("สำเร็จ!", "", "success");
	});
};

});
</script>




    <!-- Content Header (Page header) -->


    <!-- start ajex -->




    <div class="col">
        <div class="card" style="width: 100% ">
            <div class="col">
            <h1>ค้นหาห้องเรียน</h1>


                <tr>
                    <td>
                        <h6>
                            อาคาร
                        </h6>

                    </td>
                    <td>
                        <?php 
           
            $getbuilding = "SELECT * FROM `building` ";
            $result = $con->query($getbuilding);

      
          ?>
                        <select id="selectbuilding" class="form-control w-25" style="width: fit-content;" >
                        <option value="">กรุณาเลือก</option>
                        <?php
                        foreach($result as $row){
                        
                           

                            echo '<option value="'.$row['building_id'].'">'.$row['building_id'].' '.$row['building_name'].'</option>';
                             
                             
                              
                            }
                            
                           
                           ?> 
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>
                        <h6>
                            หมายเลขห้อง
                        </h6>
                    </td>
                    <td>
                        <input id="textresults" class="form-control w-25" type="text">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>
                            ชื่อห้อง
                        </h6>
                    </td>
                    <td>
                        <input class="form-control w-25" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>สาขาวิชา</h6>
                    </td>
                    <td>
                 <select class="form-control w-25" id="country" name='country_id'>
<option value="">กรุณาเลือก</option>
<?php while($row = mysqli_fetch_array($result1))
{
echo'<option value="'.$row['code'].'">'.$row["name"].'</option>';
}
?>
</select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>ผู้ดูแล</h6>
                    </td>
                    <td>
                    <select class="form-control w-25" id='state' name='state_id'>
<option value="">กรุณาเลือก</option>
</select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>
                            จำนวนที่รองรับ
                        </h6>
                    </td>
                    <td>
                        <input class="form-control w-25" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6> ประเภทห้อง</h6>
                    </td>
                    <td>
                    <?php
                    $kind  = "SELECT * FROM kind ";
                     $kind1 = $con->query($kind);

                    
                    ?>
                        <select class="form-control w-25">
                            <option>กรุณาเลือก</option>
                            <?php
                            foreach($kind1 as $row){
                                echo'<option value="'.$row['kind_id'].'">'.$row["kind_name"].'</option>';
                            }
                            
                            
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <br>
                    <td>
                        <button id="b4" type="submit" class="btn btn-primary">ตกลง</button> &nbsp;
                        <button type="button" class="btn btn-secondary">ยกเลิก</button>
                    </td>
                </tr>








            </div>



        </div>

    </div>




 

