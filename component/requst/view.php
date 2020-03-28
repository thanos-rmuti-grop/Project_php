<script type="text/javascript">
$(document).ready(function(){
    

$('#fac').on('change', function(){
var fac = $(this).val();
if(fac){
$.ajax({
type:'POST',
url:'ajax/ajaxRequisition.php',
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <h1>ระบบใบเบิกค่าสอน</h1>
        </div><!-- /.container-fluid -->
      </section>
  
  <!-- start ajex -->
  
  
  <div class="col">
  <div class="card" style="width: 100%">
  <div class="col">
  
  
  
  <!-- end ajex -->
      <!-- Main content -->
      <div >
      <table>
    <tr>
      <td>
       <h5 >คณะ</h5>
      </td>
      <td>
      
      <td>  <select class="form-control "  id ="fac"> 
                <option >กรุณาเลือก</option>
                <?php
                foreach($fac as $row){
                    echo '<option value="'.$row['code'].'">'.$row['name'].'</option>';
                }
                ?>
                </select>
      </td>
      <br>
      <td>
      <h5 >สาขา</h5>
      </td>
      <td>
      <select class="form-control " id="major" >
        <option value="">กรุณาเลือก</option>
      </td>
     
    </tr>

      </table>
  
  </div>
 <div style=" padding-top: 10px;">
 <table class="table table-bordered " style="width: fix-content;" id ="user"> 
          
           
        </table>
 </div>
      
      </div>
  </div>
  </div>
  
  
  