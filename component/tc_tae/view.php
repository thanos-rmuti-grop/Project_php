
<section class="content">
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><h1 align="center">สอนแทน</h1></h3>
  </div>
  <br>
  <div class="card-body p-1">

    <div class="row">
      <div class="col-md-1">
        
      </div>

      <div class="col-md-10">
      
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">สอนแทน</button>


       

<!-- Button trigger modal -->

<!-- Modal -->
<form action="index.php?act=tc&action=add" method="POST">
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

<!-- **************************************************** -->


    <div align="center">


    <form action="datedb.php" method="post" accept-charset="utf-8">
    <table >
        <tr align="center">
            <td bgcolor="red" colspan="4">ใบสอนแทน</td>
        </tr>
        <tr>
            <td>
                ภาคเรียน
                
            </td>
            <td>
            <select name="Semester" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                ปีการศึกษา : 2562
        </td>
            
            
        </tr>
        <tr>
            <td>
                วันที่งดสอน :
                
            </td>
            <td>
           
 

  

<input type="text" name="daterange" value="01/01/2020-31/12/2020" placeholder="click" />
 
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
    alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
}
);
</script>

        </td>
            
            
        </tr>
        <tr>
            <td>
                เหตุที่ไม่ได้สอน :
                
            </td>
            <td><textarea name="Note" id="" cols="30" rows="10"></textarea></td>
            
            
        </tr>
        <tr align="center">
            <td bgcolor="red" colspan="4">เพิ่มข้อมูลการสอนแทน</td>
        </tr>
        <tr>
            <td>
                วันสอนแทน
                
            </td>
            <td>
            <input name="date_teach" id="date" data-provide="datepicker">
            <script>
            
// var date = new Date();
// date.setDate(date.getDate());

// $('#date').datepicker({ 
//     startDate: date
// });


var date = new Date();
date.setDate(date.getDate()-1);

$('#date').datepicker({ 
    startDate: date
});

            </script>
            </td>
            
            
        </tr>
        <tr>
            <td>
                วิชา
                
            </td>
            <td>
            <select name="" id="">
                    <option value="เขียนเว็ป">เขียนเว็ป</option>
                    <option value="Database">Database</option>
                </select>
            
            
        </tr>
        <tr>
            <td>
                อาจารย์
                
            </td>
            <td>
            <select name="" id="">
                    <option value="">มานพ</option>
                    <option value="">โชคดี</option>
                </select>
            </td>
            
            
        </tr>
        <tr align="center">
            <td colspan="3">
                <input  type="submit" value="เพิ่มรายการ" name="save" class="btn btn-info">
                <input type="reset" value="Reset" class="btn btn-info">
            
            </td>
        </tr>
     
       
        <tr bgcolor="red">
            <td colspan="3">
                
            </td>
        </tr>
    </table>
</form>
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



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

