<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PRINT GRADE</title> 
</head> 
<body> 
    <?php 
    $fname      =   $_POST["firstname"];
    $mname      =   $_POST["middlename"];   
    $lname      =   $_POST["lastname"];  
    $course     =   $_POST["course"]; 
    $yearlvl    =   $_POST["year"];  
    $prelim     =   $_POST["prelim"]; 
    $midterm   =   $_POST["midterm"]; 
    $finals     =   $_POST["final"];     
     
    $average    =   ($prelim + $midterm + $finals)/3; 
 
    if ($average >= 75) { 
        $remarks = "PASSED"; 
    } else { 
        $remarks = "FAILED"; 
    } 
 
    if($yearlvl == "1") { 
        $year = "First Year"; 
    } elseif ($yearlvl == "2") { 
        $year = "Second Year"; 
    } elseif ($yearlvl == "3") { 
        $year = "Third Year"; 
    } else { 
        $year = "Fourth Year"; 
    } 
    ?>     
 
    <table width="40%" align="center" border="1"> 
            <tr> 
                <td colspan="2"><b>STUDENT GRADE</b></td> 
            </tr> 
            <tr> 
                <td>Full Name: </td> 
                <td><?php echo $fname , " " , $mname , " " , $lname; ?></td> 
            </tr> 
            <tr> 
                <td>Course: </td> 
                <td><?php echo $course; ?></td> 
            </tr> 
            <tr> 
                <td><b>Year: <b></td> 
                <td><?php echo $year; ?></td> 
            </tr> 
            <tr> 
                <td colspan="2"><b>Term Grades<b></td> 
            </tr> 
            <tr> 
                <td>Prelim Grade:</td>     
                <td><?php echo $prelim; ?></td> 
            </tr>     
            <tr> 
                <td>Midterm Grade:</td>     
                <td><?php echo $midterm; ?></td> 
            </tr>   
            <tr> 
                <td>Final Grade:</td>     
                <td><?php echo $finals; ?></td> 
            </tr> 
            <tr> 
                <td>AVERAGE:</td>     
                <td><?php echo $average; ?></td> 
            </tr>     
            <tr> 
                <td>REMAKRS:</td>     
                <td><?php echo $remarks; ?></td> 
            </tr>  

    </table> 
</body> 
</html> 
 