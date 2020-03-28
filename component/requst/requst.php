
    <script type="text/javascript">
$(document).ready(function(){
$('#selecmonth').on('change', function(){
var fac = $(this).val();
if(fac){
$.ajax({
type:'POST',
url:'ajax/ajaxReport.php',
data:'selecmonth='+fac,
success:function(html){
$('#month').html(html);
}
}); 
}else{
$('#month').html('<option value="">เลือกสาขาวิชาก่อน</option>'); 
}
});
$('#major').on('change', function(){
var major = $(this).val();
if(major){
$.ajax({
type:'POST',
url:'ajax/ajaxRequisition.php',
data:'major='+major,
success:function(html){
$('#user').html(html);

}
}); 
}else{

}
});
});
</script>

  
  
    <section class="content-header">
        <div class="container-fluid">
          <h1>ออกรายงานใบเบิก</h1>
        </div><!-- /.container-fluid -->
      </section>
  
  <!-- start ajex -->
  
  
  <div class="col">
  <div class="card" style="width: 100% ">
  <div class="col">
  <h5 >นาย กิตติพงษ์ ปลิงกระโทก</h5>
  <br>
  <div align="center">
  <table>
    <tr>
      <td>
       <h5 >ภาคเรียน</h5>
      </td>
     
      
      <td>  <select class="form-control "  name="selecmonth" id="selecmonth"  > 
                <option >กรุณาเลือก</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
      </td>
      <td><h5>เดือน</h5></td>
     <td><select class="form-control " name="month" id ="month"> 
                <option >กรุณาเลือก</option>
                </select></td>

      <td>
      <h5 >ปีการศึกษา:</h5>
      </td>
      <td>
      <select class="form-control " id="" >
        <option value="">กรุณาเลือก</option>
        <option >2561</option>
        <option >2562</option>
        <option >2563</option>
        </select>
      </td>
     
    

<td> <h5 >ประเภทใบเบิก:</h5></td>
<td> <select class="form-control " name="type" >
        <option value="">กรุณาเลือก</option>
        <option value="1">ใบเบิกภาคปกติ</option>
        <option value="2">ใบเบิกภาคสมทบ</option>
        </select>
        </td>
      

        </tr>
        <tr align="center">
        <td colspan="8" id="btn">
        <br>
        <button class="btn btn-success"name = "btn">ค้นหา</button>
        </td>
        
        </tr>

      </table> 
      <br>
        <table class="table table-bordered "style="width: fix-content;" id="report">
        <tr>
        <th>สัปดา</th>
        <th>วันที่</th>
        <th>รหัสวิชา</th>
        <th>ชื่อวิชา</th>
        <th>คาบเรียน</th>
        <th>ภาคท</th>
        <th>ภาคป</th>
        <th>ระดับปวส</th>
        <th>ระดับป.ตรี</th>
        </tr>
        <?php
        
       foreach($user as $row){

       
        echo '<tr>';
        echo '<td>'.'</td>';
        echo '<td>'.$row['start_date'].'</td>';
        echo '<td>'.$row['COURSE_CODE'].'</td>';
        echo '<td>'.$row['COURSE_TITLE'].'</td>';
        echo '<td>'.$row['period_begin'].'-'.$row['period_end'].'</td>';
        echo '<td>'.$row['theory_hours'].'</td>';
        echo '<td>'.$row['practical_hours'].'</td>';
        echo '</tr>';
        
      }?>
        
        
        </table>
      <br>
  </div>
  
  

      
      </div>
  </div>
  </div>
  
  
  