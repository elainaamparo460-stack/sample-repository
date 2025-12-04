<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
      <form name="tuition" action="print.php" method = "post">
 <table  border = "1" width ="70%" align= "center">
      <tr>
            <td colspan = "4" align = "center"><b>Tuition Fee Details</b></td>
        </tr>
        <tr>
            <td>Student ID</td>
            <td><input type="text" name = "student" required></td>
        </tr>
  <tr>
            <td>Full Name</td>
            <td><input type="text" name = "fullname" required></td>

        </tr>
 <tr>
            <td>No. of Units Enrolled</td>
            <td><input type="text" name = "units" required></td>
             <td>Rate Per Unit</td>
                 <td><input type="text" name = "rate" required></td>
        </tr>
         <tr>
            <td>No. of Lab Subjects</td>
            <td><input type="text" name = "labsubjects" required></td>
             <td>Lab Rate</td>
                 <td><input type="text" name = "labrate" required></td>
        </tr>
         <tr>
            <td>Scholarship Rate</td>
            <td><input type="text" name = "scholarship" required></td>
        </tr>
   <tr>
            <td>Payment Plan Surchage</td>
            <td><input type="text" name = "paymentsurchage" required></td>
        </tr>
        <tr>
            <td colspan = "4" align = "center"><b>Tuition Summary</b></td>
        </tr>
       <tr>
    <td>Tuition Fees</td>
    <td><input type="number" name = "tuition" required> </td>
</tr>
<tr>
    <td>Lab-Fees</td>
    <td><input type="number" name = "labfees" required> </td>
</tr>
<tr>
    <td>Miscellaneous Fees</td>
    <td><input type="number" name = "miscellaneous" required> </td>
</tr>
<tr>
    <td>SUBTOTAL</td>
    <td><input type="number" name = "subtotal" required> </td>
</tr>
<tr>
    <td>Scholarship Deduction</td>
    <td><input type="number" name = "deduction" required> </td>
</tr>
<tr>
    <td>Payment Plan Surchage</td>
    <td><input type="number" name = "surchage" required> </td>
</tr>
<tr>
    <td>TOTAL PAYABLE</td>
    <td><input type="number" name = "payable" required> </td>
</tr>
<tr>
    <td>Down Payment</td>
    <td><input type="number" name = "down" required> </td>
</tr>
<tr>
    <td>Remaining Balance</td>
    <td><input type="number" name = "balance" required> </td>
</tr>


<tr>


  <td colspan = "4 " align= "center">
<input type="submit" name= "btnSubmit" value ="Print Invoice">
  </td>
</tr>





</body>
</html>