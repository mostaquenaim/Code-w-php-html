
<html>
<body>
   <center>
<form action ="../control/process.php" method="POST">
<table>
  <tr> 
    <td> Input-1 : </td> 
    <td><input type="text" name="number_1" placeholder="number_1"></td>
  </tr>
  <tr> 
    <td> Input-2 : </td> 
    <td><input type="text" name="number_2" placeholder="number_2"></td>
  </tr>
  
  <tr>
   <td><input type="radio" name="operator" value = "+">+</td>
   <td><input type="radio" name="operator" value = "-">-</td>
   <td><input type="radio" name="operator" value = "*">*</td>
   <td><input type="radio" name="operator" value = "/">/</td>
  </tr>
 <tr> 
     <td> <input type="submit" name="Submit"  value ="Register"></td>
     <td> <input type="reset" name="clear"  value ="clear"></td>
</tr>
</table>
</form>
</center>
</body>
    </html>