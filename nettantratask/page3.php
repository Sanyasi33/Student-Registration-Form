<?php
include 'db_conn.php';

function detail_insert(){
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST)){
            $conn = mysqli_connect("localhost",'root','','nettantra_task');
            if ($conn){
                $querr = "insert into page3(profile,hsc_marksheet,ssc_marksheet,all_marksheet) values('{$_POST['f1']}','{$_POST['f2']}','{$_POST['f3']}','{$_POST['f4']}') ";
                if (mysqli_multi_query($conn, $querr)){
                    header("Location:last.html");
                    exit();
                }
            }
        }
    }
}
detail_insert();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page3</title>
</head>
<body style="background-color: rgb(204, 244, 244);">
    <div class="container">
        <form action="page3.php" method="post">
            <label for="f1">Recent passport size photograph <span style="color:red;">*</span></label>
            <input type="file" name="f1" id="f1" required style="width: 16vw;font-size: 1.2vw;">(image size less than 4MB)
        <br>
            <label for="f2">HSC mark sheet <span style="color:red">*</span></label>
            <input type="file" name="f2" id="f2" required  style="width: 16vw;font-size: 1.2vw;">(image,pdf,doc size less than 4MB)
        <br>
          <label for="f3">SSC mark sheet <span style="color:red">*</span></label>
          <input type="file" name="f3" id="f3" required style="width: 16vw;font-size: 1.2vw;">(image,pdf,doc size less than 4MB)
        <br>
            <label for="f4">All semesters mark sheet in a single PDF <span style="color:red">*</span></label>
            <input type="file" name="f4" id="f4" required style="width: 16vw;font-size: 1.2vw;">(File size less than 10MB)
        <br>
        <input type="submit" value="Submit" id="submit">
        </form>
    </div>
</body>
</html>