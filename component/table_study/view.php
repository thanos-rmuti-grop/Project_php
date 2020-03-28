<form action="test.php" method="POST">
<div class="container">
    <br><br>
        <table class="table table-bordered">


            
            <tr bgcolor="#f45b69">
                <td align="right">ภาคเรียน/ปีการศึกษา :</td>
                <td width="70%">
                    ภาคเรียนที่ <select name="" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>

                    </select>
                    ปีการศึกษา <select name="" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="2560">2560</option>
                        <option value="2561">2561</option>
                        <option value="2562">2562</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"> คณะ :</td>
                <td width="70%">
                    <select name="" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="name1">วิศวกรรมศาสตร์</option>
                        <option value="name2">บริหาร</option>

                    </select>
                </td>
            </tr>
            <tr bgcolor="#f45b69">
                <td align="right">สาขาวิชา :</td>
                <td width="70%">
                <select name="code" id="code" class="form-control" required >
                          <option value="1720">กลุ่มสาขาวิศวกรรมโยธา</option>
                          <option value="1730">สาขาวิศวกรรมไฟฟ้า</option>
                </select> 
                </td>
            </tr>
            <tr>
                <td align="right">อาจารย์ผู้สอน :</td>
                <td width="70%">
                <select name="teacher_id" id="teacher_id " class="form-control" required >
                          <option value="3249900298946">ทิพา</option>
                          <option value="1469900298947">ประกาย</option>
                          </select>

                </td>
            </tr>
            
            <tr bgcolor="#f45b69">
                <td align="right">วิชา :</td>
                <td width="70%">
                    <select class="select-cos">
                        <option>-- กรุณาเลือก --</option>
                        <option></option>
                        <option></option>

                    </select>
                </td>
            </tr>

            <tr>
                <td align="right">กลุ่มนักศึกษา :</td>
                <td width="70%">
                    <select class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option></option>
                        <option></option>

                    </select>
                </td>
            </tr>

            <tr bgcolor="#f45b69">
                <td align="right">วัน/เวลา :</td>
                <td width="70%">
                    วัน <select name="day_id" class="select-css">
                        <option value="">-- กรุณาเลือก --</option>
                        <option value="1">จันทร์</option>
                        <option value="2">อังคาร</option>
                        <option value="3">พุธ</option>
                        <option value="4">พฤหัสบดี</option>
                        <option value="5">ศุกร์</option>
                        <option value="6">เสาร์</option>
                        <option value="7">อาทิตย์</option>

                    </select>
                    คาบเรียนเริ่มต้น <select name="period_begin" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>

                    คาบเรียนสิ้นสุด <select name="period_end" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"> ชั่วโมง ทฤษฏี/ปฏิบัติ :</td>
                <td width="70%">

                    ชั่วโมงทฤษฏี <select name="theory_hours" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                   
                    </select>

                    ชั่วโมงปฏิบัติ <select name="practical_hours" class="select-css">
                        <option>-- กรุณาเลือก --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"> เริ่มเรียน/ จบเทอม :</td>
                <td width="70%">

                   เริ่ม <input type="date" name="start_date"> จบเทอม <input type="date" name="end_date">
                </td>
            </tr>
            <tr>
                <td>
                หลักสูตรภาคเรียน
                </td>
                <td>
                <input type="radio" name="std_nor" value="1">ปกติ
                <input type="radio" name="std_spc" value="1">สมทบ
                </td>
            </tr>
            <tr bgcolor="#f45b69">
                <td align="right">ห้องเรียน :</td>
                <td width="70%">
                <select name="Title_id" id="" class="form-control" required >
                          <option value="4495">4495</option>
                          <option value="4497">4497</option>
                </select>
                </td>
        </table>
        <div align="center">
        <input type="submit" name="btnsubmit " id="btnsubmit" value="เพิ่มตารางสอน">
    </div>
        <div style="margin-top:  3%; margin-left: 20px; margin-right: 20px;">

            
ิ<br>
</div>
</div>
</form>
