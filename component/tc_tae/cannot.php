<div class="container">
    <div class="row">
        <h3>ใบอนุมัติสอนแทน</h3>
    </div>
    <br>


    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">ภาคเรียน</span>
            </div>
            <input type="date" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">First and last name</span>
  </div>
  <input type="text" aria-label="First name" class="form-control">
  <input type="text" aria-label="Last name" class="form-control">
</div>
        </div>
        </div>

        <form class="form-horizontal" action="create.php" method="post">
            <div class="form-group ">
                <label class="col-sm-2 control-label">Name</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="name" type="text" placeholder="Name" value="">

                    <span class="help-block"></span>

                </div>
            </div>
            <div class="input-group-prepend">
                <label class="col-sm-2 control-label">Email Address</label>
                <div class="controls col-sm-6">
                    <input class="control" name="email" type="text" placeholder="Email Address" value="">

                    <span class="help-block"></span>

                </div>
            </div>
            <div class="form-group ">
                <label class="col-sm-2 control-label">Mobile Number</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="Mobile Number" value="">

                    <span class="help-block"></span>

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a class="btn btn-default" href="index.php">Back</a>
                </div>
            </div>
        </form>
    </div>
</div> 







    <h1>ใบอนุมัติสอนแทน</h1>
    <div align="center">


    <form action="datedb.php" method="post" accept-charset="utf-8">
    <table >
        <tr align="center">
            <td bgcolor="primary" colspan="4">ใบสอนแทน</td>
        </tr>
        <tr>
            <td>
                ภาคเรียน
                
            </td>
            <td>
            <select name="" id="">
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
            <td><textarea name="Address" id="" cols="30" rows="10"></textarea></td>
            
            
        </tr>
        <tr align="center">
            <td bgcolor="red" colspan="4">เพิ่มข้อมูลการสอนแทน</td>
        </tr>
        <tr>
            <td>
                วันสอนแทน
                
            </td>
            <td>
            <input id="date" data-provide="datepicker">
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