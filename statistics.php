<?php
include "connect.php"
?>

<!DOCTYPE html>
<html>

<head>
    <title>STATISTICS</title>

    <link rel="stylesheet" href="./css/report1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="mainbody">

    <div class="centerme">
        <div style = "color: rgb(255, 238, 253); font-size:50px; margin-top: 30px;">STAT 1: DISPLAY STATS ON MULTIPLE CHOICE CARDS</div>
    </div>

    <div style="display: grid; grid-template-columns: 400px 400px; background-color: white; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px">
        <div>TOTAL NUMBER OF MULTIPLE CHOICE CARDS</div>
        <div>AVG OF MULTIPLE CARDS NO. OF ITEMS OF MULT CARDS</div>
    </div>

    <div style="display: grid; grid-template-columns:  400px 400px; background-color: white;min-height:10px; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px" class="stat1">
    </div>


    <div class="centerme">
        <div style = "color: rgb(255, 238, 253); font-size:50px; margin-top: 30px;">STAT 2: DISPLAY STATS ON FLASH CARDS</div>
    </div>

    <div style="display: grid; grid-template-columns: 400px 400px; background-color: white; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px">
        <div>TOTAL NUMBER OF FLASH CARDS</div>
        <div>AVG OF MULTIPLE CARDS NO. OF ITEM OF FLASH CARDS</div>
    </div>

    <div style="display: grid; grid-template-columns:  400px 400px; background-color: white;min-height:10px; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px" class="stat2">
    </div>

    <div class="centerme">
        <div style = "color: rgb(255, 238, 253); font-size:50px; margin-top: 30px;">STAT 3: DISPLAY STATS ON FOLDER WITH NO QUIZZES</div>
    </div>

    <div style="display: grid; grid-template-columns: 400px 400px; background-color: white; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px">
        <div>TOTAL NUMBER OF FOLDERS</div>
        <div>AVG OF FOLDERS WITH </div>
    </div>

    <div style="display: grid; grid-template-columns:  400px 400px; background-color: white;min-height:10px; row-gap:10px; column-gap:10px; border-radius:10px; padding:10px; margin-top: 20px" class="stat3">
    </div>



</div>




    <script>
        $(document).ready(function(e) {
            $.ajax({
                url: "./api/getStat.php",
                method: "GET",
                success: function(data) {
                    if (true) {
                        console.log(data);
                        var data = JSON.parse(data);
                        var classadd = document.querySelector(".stat1");
                        var classadd2 = document.querySelector(".stat2");
                        var classadd3 = document.querySelector(".stat3");

                        var sample = data[0];
                        
                        
                        var a = document.createElement("div");
                        a.style.wordBreak = "break-all"
                        a.innerText = sample["total_number_mult"];
                        classadd.append(a);

                        var b = document.createElement("div");
                        b.style.wordBreak = "break-all"
                        b.innerText = sample["average_mult"];
                        classadd.append(b);      

                        a = document.createElement("div");
                        a.style.wordBreak = "break-all"
                        a.innerText = sample["total_number_flash"];
                        classadd2.append(a);

                        b = document.createElement("div");
                        b.style.wordBreak = "break-all"
                        b.innerText = sample["average_flash"];
                        classadd2.append(b);

                        
                        a = document.createElement("div");
                        a.style.wordBreak = "break-all"
                        a.innerText = sample["total_number_folders"];
                        classadd3.append(a);

                        b = document.createElement("div");
                        b.style.wordBreak = "break-all"
                        b.innerText = sample["average_folders"];
                        classadd3.append(b);
                    }
                }
            });
        });
    </script>
</body>

</html>
