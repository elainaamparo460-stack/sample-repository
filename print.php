<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuition Printing</title>
</head>
<body>
    <?php
    $student = $_POST["student"];
  $fullname= $_POST["fullname"];
  $units= $_POST["units"];
  $rate= $_POST["rate"];
  $labsubjects= $_POST["labsubjects"];
  $labrate= $_POST["labrate"];
  $scholarship= $_POST["scholarship"];
  $paymentsurchage= $_POST["paymentsurchage"];
     $tuition= $_POST["tuition"];
     $labfees= $_POST["labfees"];
     $miscellaneous= $_POST["miscellaneous"];
     $subtotal= $_POST["subtotal"];
 $deduction= $_POST["deduction"];
 $surchage= $_POST["surchage"];
 $payable= $_POST["payable"];
 $down= $_POST["down"];
  $balance= $_POST["balance"];
       



 $tuition = $units * $rate;
 $labfees = $labsubjects * $labfees;
 $subtotal = $tuition + $labfees + $miscellaneous;
$deduction = $subtotal * ($scholarship / 100);
  $overall = $subtotal - $scholarship;
$surchage = $overall * ($surchage / 100 );
  $payable = $overall + $surchage;
$balance = $payable - $down;

 ?>

<table  border = "1" width ="70%" align= "center">
        <tr>
            <td colspan = "2" align = "center"><b>Tuition Fee Details</b></td>
        </tr>
        
            <tr>
                <td>Student ID</td>
                <td><?php echo $student ; ?></td>
            </tr>
          <tr>
            <td>Full Name</td>
            <td><?php echo $fullname; ?></td>
        </tr>
 <tr>
            <td>No. of Units Enrolled</td>
            <td><?php echo $units; ?></td>
            <td>Rate Per Unit</td>
             <td><?php echo $rate; ?></td>
        </tr>
 <tr>
            <td>No. of Lab Subjects</td>
             <td><?php echo $labsubjects; ?></td>
             <td>Lab Rate</td>
                 <td><?php echo $labrate; ?></td>
        </tr>
 <tr>
            <td>Scholarship Rate</td>
           <td><?php echo $scholarship; ?></td>
        </tr>
   <tr>
            <td>Payment Plan Surchage</td>
          <td><?php echo $paymentsurchage; ?></td>
        </tr>


<tr>
    <td colspan = "2" align =  "center"><b>Tuition Summary</b></td>
</tr>
<tr>
    <td>Tuition Fees</td>
    <td><?php echo $tuition; ?></td>
</tr>
<tr>
    <td>Lab-Fees</td>
    <td><?php echo $labfees; ?> </td>
</tr>
<tr>
    <td>Miscellaneous Fees</td>
    <td><?php echo $miscellaneous; ?></td>
</tr>
<tr>
    <td>SUBTOTAL</td>
    <td><?php echo $subtotal; ?> </td>
</tr>
<tr>
    <td>Scholarship Deduction</td>
    <td><?php echo $deduction; ?> </td>
</tr>
<tr>
    <td>Payment Plan Surchage</td>
    <td><?php echo $paymentsurchage; ?> </td>
</tr>
<tr>
    <td>TOTAL PAYABLE</td>
    <td><?php echo $payable; ?> </td>
</tr>
<tr>
    <td>Down Payment</td>
    <td><?php echo $down; ?> </td>
</tr>
<tr>
    <td>REMAINING BALANCE</td>
    <td><?php echo $balance; ?> </td>
</tr>
<tr>
    <td>OVERALL</td>
    <td><?php echo $overall; ?> </td>
</tr>


    </table>


</body>
</html>

body {
    font-family: Arial, sans-serif;
    background-color: #f7f8fa;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 30px;
}

.container {
    background: #fff;
    padding: 25px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    width: 400px;
}

h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-top: 12px;
    font-weight: bold;
}

input, select, button {
    width: 100%;
    padding: 8px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

fieldset {
    margin-top: 15px;
    border: 1px solid #ccc;
    padding: 10px;
}

button {
    background-color: #2980b9;
    color: white;
    font-weight: bold;  
    cursor: pointer;
    margin-top: 15px;
}

.receipt {
    background-color: #ecf0f1;
    padding: 15px;
    margin-top: 25px;
    border-radius: 8px;
}
.radio {

  display: flex;
    justify-content: center;
    align-items: flex-start;

}