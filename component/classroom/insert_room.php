<script type="text/javascript">
$(document).ready(function(){
    $("#selectbuilding").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
       $("#textresults").val(selectedCountry+"-");
    });
  $("#selectss").change(function() { 
      var major = $(this).val();
                $("#textval").val(major);
            });

$('#fac').on('change', function(){
var fac = $(this).val();
if(fac){
$.ajax({
type:'POST',
url:'ajax/ajaxData1.php',
data:'fac='+fac,
success:function(html){
$('#major').html(html);
}
}); 
}else{
$('#major').html('<option value="">เลือกสาขาวิชาก่อน</option>'); 
}
});
$('#major').on('change', function(){
var major = $(this).val();
if(major){
$.ajax({
type:'POST',
url:'ajax/ajaxData1.php',
data:'major='+major,
success:function(html){
$('#keeper').html(html);

}
}); 
}else{
$('#keeper').html('<option value="">เลือกสาขาวิชาก่อน</option>');

}
});


document.getElementById('b4').onclick = function(){
	
  //confirm("Press a button!");
//   if(confirm("Press a button!")){
//     alert("5asdasd55");
//   }else{
//       alert("5555");
//   }

};

});
</script>




    <!-- Content Header (Page header) -->


    <!-- start ajex -->



     <form action="index.php?act=classroom&action=add" method="post">
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
                       
                        <select id="selectbuilding" class="form-control w-25" style="width: fit-content;"  name="building_id">
                        <option value="">กรุณาเลือก</option>
                        <?php
                            foreach($building as $row){
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
                        <input id="textresults" name="class_id" class="form-control w-25" type="text">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>
                            ชื่อห้อง
                        </h6>
                    </td>
                    <td>
                        <input  name="class_name" class="form-control w-25" type="text">
                    </td>
                </tr>
                <tr>
                <td> <h6>คณะ</h6>
                </td>
                <td>  <select class="form-control w-25" name = "fac" id ="fac"> 
                <option >กรุณาเลือก</option>
                <?php
                foreach($fac as $row){
                    echo '<option value="'.$row['code'].'">'.$row['name'].'</option>';
                }
                ?>
                </select> </td>
                </tr>
                <tr>
                    <td>
                        <h6>สาขาวิชา</h6>
                    </td>
                    <td>
                   
                 <select class="form-control w-25" id="major" name='code'>
                <option value="">กรุณาเลือก</option>
                
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>ผู้ดูแล</h6>
                    </td>
                    <td>
                    <select class="form-control w-25" id='keeper' name='keeper'>
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
                        <input class="form-control w-25" type="text" name="amount">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6> ประเภทห้อง</h6>
                    </td>
                    <td>
                  
                        <select class="form-control w-25" name="kind_id">
                            <option>กรุณาเลือก</option>
                            <?php
                            foreach( $kind as $row){
                                echo '<option value="'.$row['kind_id'].'">'.$row['kind_name'].'</option>';
                            }
                            ?>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <br>
                    <td>
                        <button id="b4" type="submit"  class="btn btn-primary">ตกลง</button> &nbsp;
                        <button type="button" class="btn btn-secondary">ยกเลิก</button>
                    </td>
                    <br>
                </tr>
                <br>







            </div>



        </div>

    </div>

    </form>


 

