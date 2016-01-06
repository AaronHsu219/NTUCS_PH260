<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PH260作業二</title>
</head>

<body>
<form>
<table width="500" border="1" bgcolor="black">
  <tr bgcolor="gray" >
    <td colspan="2" align="center" height="40"><font size="+2">點餐內容</font></td>
  </tr>
  <tr bgcolor="white">
    <td rowspan="5">※丼飯類：</td>
    <td><input type="checkbox" name="var_cb1" id="checkbox"><label for="checkbox2">親子丼</label>
      <input name="var_radio1" type="radio" value="1" checked>套餐 
      <input name="var_radio1" type="radio" value="2" >單點 
            
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb2" id="checkbox2">
      <label for="checkbox2">牛丼</label>
      <input name="var_radio2" type="radio" value="1" checked>套餐 
      <input name="var_radio2" type="radio" value="2" >單點       
      
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb3" id="checkbox3">
      <label for="checkbox3">天丼</label>
      <input name="var_radio3" type="radio" value="1" checked>套餐 
      <input name="var_radio3" type="radio" value="2" >單點 
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb4" id="checkbox4">
      <label for="checkbox4">咖哩飯</label>
      <input name="var_radio4" type="radio" value="1" checked>套餐 
      <input name="var_radio4" type="radio" value="2" >單點 
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb5" id="checkbox5">
      <label for="checkbox5">鰻魚飯</label>
      <input name="var_radio5" type="radio" value="1" checked>套餐 
      <input name="var_radio5" type="radio" value="2" >單點 
     </td>
  </tr>
  <tr  bgcolor="white">
    <td rowspan="3">※麵食類：</td>
    <td><input type="checkbox" name="var_cb6" id="checkbox6">
      <label for="checkbox6">炒烏龍麵</label>      
      <input name="var_radio6" type="radio" value="1" checked>套餐 
      <input name="var_radio6" type="radio" value="2" >單點       
     </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb7" id="checkbox7">
      <label for="checkbox7">味增拉麵</label>
      <input name="var_radio7" type="radio" value="1" checked>套餐 
      <input name="var_radio7" type="radio" value="2" >單點       
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb8" id="checkbox8">
      <label for="checkbox8">豚骨拉麵</label>
      <input name="var_radio8" type="radio" value="1" checked>套餐 
      <input name="var_radio8" type="radio" value="2" >單點       
      </td>
  </tr>
  <tr  bgcolor="white">
    <td rowspan="3">※甜點類：</td>
    <td><input type="checkbox" name="var_cb9" id="checkbox9">
      <label for="checkbox9">抹茶冰淇淋</label>
    
      </td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb10" id="checkbox10">
      <label for="checkbox10">烤布蕾</label></td>
  </tr>
  <tr  bgcolor="white">
    <td><input type="checkbox" name="var_cb11" id="checkbox11">
      <label for="checkbox11">巧克力聖代</label></td>
  </tr>
  <tr bgcolor="gray">
    <td colspan="2" align="center" height="40"><font size="+2">顧客資訊</font></td>
  </tr>
  <tr  bgcolor="white">
    <td bgcolor="#CCCCCC">桌號：</td>
    <td>
    <input name="var_txt1" type="text" size="10">桌號    
    </td>
  </tr>
  <tr  bgcolor="white">
    <td bgcolor="#CCCCCC">人數：</td>
    <td>
     <input name="var_txt2" type="text" size="10" >個人
    </td>
  </tr>
  <tr  bgcolor="white">
    <td bgcolor="#CCCCCC">服務生：</td>
    <td>
     <input name="var_txt3" type="text" >
    </td>
  </tr>
  <tr  bgcolor="white">
    <td bgcolor="#CCCCCC">其他註記：</td>
    <td><label for="textarea"></label>
      <textarea name="var_ta" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr bgcolor="gray">
    <td colspan="2" height="30">
    <div align="center">
    <input type="submit" name="var_sub" value="填完送出">
      <input type="submit" name="var_clr" value="清空重填">
      </div>
      </td>
  </tr>
</table>
</form>
</body>
</html>