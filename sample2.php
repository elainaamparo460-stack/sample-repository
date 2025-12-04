<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>ARITHMETIC & IF-ELSE</title> 
</head> 
<body> 
<form name="frmData" method="POST" action="print.php"> 
<table width="40%" align="center" border="1"> 
<tr> 
<td colspan="2"><b>STUDENT GRADE</b></td> 
</tr> 
<tr> 
<td></td> 
<td><input type="text" name="firstname" required></td> 
</tr> 
<tr> 
<td>Middle Name: </td> 
<td><input type="text" name="middlename"></td> 
</tr> 
<tr> 
<td>Last Name: </td> 
<td><input type="text" name="lastname" required></td> 
</tr> 
<tr> 
<td>Course: </td> 
<td> 
<select name="course" required> 
<option value="">--SELECT COURSE--</option> 
<option value="BSCS">--BS Computer Science--</option> 
<option value="BSIT">--BS Information Technology--</option> 
<option value="ACT">--Associate in Computer technology--</option> 
</select> 
</td> 
</tr> 
<tr> 
<td>Year Level: </td> 
<td> 
<input type="radio" name="year" value="1" required>1<sup>st</sup> Year<br> 
<input type="radio" name="year" value="2">2<sup>st</sup>Year<br> 
<input type="radio" name="year" value="3">3<sup>st</sup>Year<br> 
<input type="radio" name="year" value="4">4<sup>st</sup>Year 
</td> 
</tr> 
<tr> 
<td colspan="2">Term Grades</td> 
</tr> 
<tr> 
<td>Prelim Grade:</td> 
<td><input type="number" name="prelim" required></td> 
</tr> 
<tr> 
<td>Midterm Grade:</td> 
<td><input type="number" name="midterm" required></td> 
</tr> 
<tr> 
<td>Final Grade:</td> 
<td><input type="number" name="final" required></td> 
</tr> 
<tr> 
<td colspan="2"> 
<input type="submit" name="btnsubmit" value="PRINT"> 
<input type="reset" name="btnreset" value="CLEAR"> 
</tr> 
<table> 
</form> 
</body> 
</html> 