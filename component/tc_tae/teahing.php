<h1>Teahing</h1><div class="container">
 <form method="post" action="index.php?act=tc&action=update">  
                          
                          <label>รหัสห้อง</label>  
                          <select name="Title_id" id="Title_id" class="form-control" required >
                          <option value="">11111111</option>
                          <option value="">11111111</option>
                          </select>
                          <br />  
                          <label>รหัสอาจารย์</label>  
                          <input type="text" name="name" id="name" class="form-control" required/>  

                          <br />  
                          <label>ห้องสอน</label>  
                          <input type="text" name="lastname" id="lastname" class="form-control" required/>  
                          <br />  
                          <label>วันสอน</label>  
                          <input type="text" name="password" id="password" class="form-control" required/>  
                          <br />  
                          <label>เริ่มเรียน</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>หมดคาบ</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>สาขา</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>เริ่มเรียน(ในเทอม)</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>หมดเทอม</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
                          <br />  
                          <label>เริ่ม</label>  
                          <input type="text" name="code" id="code" class="form-control" required/>  
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