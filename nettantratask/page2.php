<?php
include 'db_conn.php';

function detail_insert2(){
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST)){
            $conn = mysqli_connect("localhost",'root','','nettantra_task');
            if ($conn){
                $querr = "insert into page2(Hsc_institute,Hsc_board,Hsc_score,Ssc_institute,Ssc_board,Ssc_score,cur_course,cur_institute,overall_score,backlog) values('{$_POST['HSC_name']}','{$_POST['HSC_boardname']}','{$_POST['HSC_score']}','{$_POST['SSC_name']}','{$_POST['SSC_boardname']}','{$_POST['SSC_score']}','{$_POST['cur_course']}','{$_POST['cur_instname']}','{$_POST['overall_prsntg']}','{$_POST['rd_button']}') ";
                if (mysqli_multi_query($conn, $querr)){
                    header("Location:page3.php");
                    exit();
                }
            }
        }
    }
}
detail_insert2();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main_div2" style="height:99vh;display: flex;">
        <form action="page2.php" id="internal2" method="post">

            <div id="hsc_instname">HSC Institution name<span style="color: red;">*</span></div>
            <div id="hsc_brdname">HSC Board <span style="color: red;">*</span></div>
            <div id="hsc_score">HSC Score <span style="color: red;">*</span></div>
        
            <input type="text" name="HSC_name" id="HSC_name" placeholder="Enter HSC institute name" required autofocus>
            <input type="text" name="HSC_boardname" id="HSC_brd_name" placeholder="e.g-CBSC,ICSC,State board" required>
            <input type="text" name="HSC_score" id="HSC_score" placeholder="score in %" required pattern="[0-9]{2}"><br>

            <div id="ssc_instname">SSC Institution name <span style="color: red;">*</span></div>
            <div id="ssc_brdname">SSC Board <span style="color: red;">*</span></div>
            <div id="ssc_score">SSC Score <span style="color: red;">*</span></div>

            <input type="text" name="SSC_name" id="SSC_name" placeholder="Enter SSC institute name" required>
            <input type="text" name="SSC_boardname" id="SSC_brd_name" placeholder="e.g-CBSC,ICSC,State board" required>
            <input type="text" name="SSC_score" id="SSC_score" placeholder="score in %" required pattern="[0-9]{2}"><br>

            <div id="cur_stdy">Currently pursuing <span style="color: red;">*</span></div>
            <div id="cur_inst">Current institution name<span style="color: red;">*</span></div>
            <div id="ovrl_score">Overall Score<span style="color: red;">*</span></div>
            
            <input type="text" name="cur_course" id="cur_course" placeholder="Enter current course name" required>
            <input type="text" name="cur_instname" id="cur_inst_name" placeholder="Enter current institute name" required>
            <input type="text" name="overall_prsntg" id="overall_prsntg" placeholder="score in %" required pattern="[0-9]{2}">

            <div id="backlogs">Currently backlogs if any
                <select name="rd_button" id="rd_button">
                    <option value="No" selected>No</option>
                    <option value="Yes" >Yes</option>
                </select>
            </div>

            <input type="submit" value="Next" id="nxt_btn">
        </form>
    </div>
</body>
</html>