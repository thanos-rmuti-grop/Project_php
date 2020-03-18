<h1>Teahing</h1><div class="container">
 <form method="post" action="index.php?act=tc&action=add_teahing">  
                          
                          <label>รหัสห้อง</label>  
                          <select name="timetable_id" id="Title_id" class="form-control" required >
                          <option value="4495">4495</option>
                          <option value="4497">4497</option>
                          </select>
                          <br />  
                          <label>รหัสอาจารย์</label>  
                          <select name="teacher_id" id="teacher_id " class="form-control" required >
                          <option value="3249900298946">3249900298946</option>
                          <option value="1469900298947">1469900298947</option>
                          </select>
                          <br />  
                          <label>ห้องสอน</label>  
                          <select name="class_id" id="class_id " class="form-control" required >
                          <option value="36-408">36-408</option>
                          </select> 
                          <br />  
                          <label>วันสอน</label>  
                          <input type="text" name="day_id" id="" class="form-control" required/>  
                          <br />  
                          <label>เริ่มเรียน</label>  
                          <input type="text" name="period_begin" id="" class="form-control" required/>  
                          <br />  
                          <label>หมดคาบ</label>  
                          <input type="text" name="period_end" id="" class="form-control" required/>  
                          <br />  
                          <label>ทฤษฏี</label>  
                          <input type="text" name="theory_hours" id="" class="form-control" required/>  
                          <br />  
                          <label>ปฎิบัติ</label>  
                          <input type="text" name="practical_hours" id="" class="form-control" required/>  
                          <br />  
                          <label>สาขา</label> 
                          <select name="code" id="code " class="form-control" required >
                          <option value="1720">กลุ่มสาขาวิศวกรรมโยธา</option>
                          <option value="1730">สาขาวิศวกรรมไฟฟ้า</option>
                          </select> 
                          <br />  
                          <label>เริ่มเรียน(ในเทอม)</label>  
                          <input type="text" name="start_date" id="start_date" class="form-control" required/>  
                          <br />  
                          <label>หมดเทอม</label>  
                          <input type="text" name="end_date" id="end_date" class="form-control" required/>  
                          <br />  
                          <label>เทอมหลัก</label>  
                          <input type="text" name="std_nor" id="std_nor" class="form-control" required/>  
                          <br />  
                          <label>สมทบ</label>  
                          <input type="text" name="std_spc" id="std_nor" class="form-control" required/>  
                          <br />  
                          <input type="hidden" name="" id="" />  
                          <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />   -->
                      
                </div>  
                <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="insert" id="insert" value="Insert" type="submit" class="btn btn-primary" data="modal" 
                onclick="return confirm('กรุณากด ยืนยัน เพื่อเพิ่ม')">ยืนยัน
                </button>
</form> 
</div>