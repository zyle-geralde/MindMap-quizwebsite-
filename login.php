<?php
include "connect.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>FORUM APP</title>
    <style>
        .mainbody {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 740px;
            /*background-color:blanchedalmond;*/
            background-color: #b1507c;
            ;
            box-shadow: inset 0px 300px 700px #5d4795;
            font-family: 'Lilita One', sans-serif;
            overflow: hidden;
            margin: 0px;
        }

        .mainContent {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .titleCont {
            width: 450px;
            height: 250px;
            background-color: #603F8B;
            border-style: double;
            border-width: 10px;
            border-color: #f698c5;
            border-radius: 70px;
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            animation-name: anim;
            animation-duration: 2.5s;
            animation-iteration-count: infinite;
            /*animation-name: exitme;
                animation-duration: 0.7s;
                animation-fill-mode: forwards;*/
            pointer-events: none;
            left: 0%;
        }

        @keyframes anim {
            0% {
                top: 0px;
            }

            50% {
                top: 25px;
            }

            100% {
                top: 0px;
            }
        }

        @keyframes exitme {
            0% {
                left: 0%;
            }

            100% {
                left: -500%;
            }
        }

        .triangle {
            width: 0;
            height: 0;
            border-right-width: 70px;
            border-right-style: solid;
            border-right-color: transparent;
            border-bottom-width: 100px;
            border-bottom-style: solid;
            border-bottom-color: #603F8B;
            ;
            transform: rotate(179deg);
            bottom: -94px;
            right: 50px;
            position: absolute;
        }

        .eyes {
            position: absolute;
            top: -20%;
            left: 3%;
            background-color: rgb(210, 63, 151);
            height: 90px;
            width: 90px;
            border-style: solid;
            border-color: white;
            border-width: 15px;
            border-radius: 100px;
            transition: 0.5s;
            animation-name: eyeme;
            animation-duration: 5s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;

        }

        .eyes2 {
            position: absolute;
            top: -20%;
            right: 35%;
            background-color: rgb(210, 63, 151);
            height: 90px;
            width: 90px;
            border-style: solid;
            border-color: white;
            border-width: 15px;
            border-radius: 100px;
            transition: 0.5s;
            animation-name: eyeme;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
        }

        @keyframes eyeme {
            0% {
                top: -20%;
            }

            70% {
                top: -20%;
            }

            80% {
                top: -30%;
            }

            100% {
                top: -20%;
            }
        }

        .titlename {
            margin-top: 40px;
            font-size: 60px;
            color: rgb(250, 178, 226);
        }

        /*Isert User*/
        .InsertUser,
        .LogIn {
            height: 70px;
            width: 250px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            font-size: 25px;
            background-color: rgb(210, 63, 151);
            border-style: double;
            border-width: 7px;
            border-color: white;
            border-radius: 50px;
            color: rgb(255, 236, 236);
            cursor: pointer;
            transition: 0.2s;
            /*animation-name: exitbut;
                animation-duration: 0.7s;
                animation-fill-mode: forwards;*/
            position: relative;
            left: 0%;
        }

        .LogIn {
            margin-top: 30px;
        }

        @keyframes exitbut {
            from {
                left: 0%;
            }

            to {
                left: 700%;
            }
        }

        .LogIn:hover {
            height: 80px;
            width: 280px;
        }

        .LogIn:active {
            transition: 0.0s;
            background-color: rgb(203, 133, 175);
        }

        .InsertUser:hover {
            height: 80px;
            width: 280px;
        }

        .InsertUser:active {
            transition: 0.0s;
            background-color: rgb(203, 133, 175);
        }

        .InsertUserInput,
        .LogInInput {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            background-color: #A16AE8;
            border-style: double;
            border-width: 10px;
            border-color: pink;
            border-radius: 50px;
            padding: 40px;
            z-index: 5;
            top: -900px;
            transition: 0.5s;
        }

        .fnameinp,
        .fnamelog {
            height: 25px;
            padding: 10px;
            width: 240px;
            border-radius: 50px;
            border-style: none;

        }

        .fnamesel {
            border-radius: 50px;
            border-style: none;
            height: 40px;
            width: 240px;
        }

        .Submitbut,
        .Cancelbut,
        .Logbut,
        .CancelLogbut {
            background-color: rgb(210, 63, 151);
            border-style: solid;
            border-width: 4px;
            border-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            width: 150px;
            height: 40px;
            color: rgb(255, 238, 253);
            border-radius: 100px;
            margin-top: 35px;
            cursor: pointer;
            transition: 0.2s;
            font-family: 'Lilita One', sans-serif;

        }

        .Submitbut {
            height: 48px;
        }

        .Logbut {
            height: 48px;
        }

        .Submitbut:hover {
            height: 50px;
            width: 160px;
        }

        .Submitbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .Cancelbut:hover {
            height: 50px;
            width: 160px;
        }

        .Cancelbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .Logbut:hover {
            height: 50px;
            width: 160px;
        }

        .Logbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .CancelLogbut:hover {
            height: 50px;
            width: 160px;
        }

        .CancelLogbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .Subcontme {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body class="mainbody"><!--class = mainbody-->
    <div class=mainContent>
        <div class=titleCont>
            <div class=triangle></div>
            <div class=eyes></div>
            <div class=eyes2></div>
            <div class=titlename>FORUM APP</div>
        </div>

        <div class=InsertUser>
            Register
        </div>
        <div class=InsertUserInput>
            <div style="font-size: 40px; color: rgb(249, 123, 237); margin-bottom: 20px; pointer-events: none;">Register
                New User</div>
            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;
                            font-size: 25px; color: white; margin-bottom: 20px;">

                    <form method="post" class="registerForm" style="display: grid; grid-template-columns: 1fr 1fr; align-items: center; column-gap: 20px; row-gap: 20px;">
                        <div class="format1">
                            <div> Enter Firstname:</div>
                            <input class=fnameinp type="text" name="fname" placeholder="firstname">
                        </div>
                        <div class="format1">
                            <div> Enter Lastname:</div>
                            <input class=fnameinp type="text" name="lname" class=fnameinp placeholder="Lastname">
                        </div>
                        <div>
                            <div>Gender:</div>
                            <select name="genme" class=fnamesel>
                                <option value="">----</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="format1">
                            <div> Enter Email:</div>
                            <input type="text" placeholder="email" name="emailme" class=fnameinp>
                        </div>
                        <div class="format2">
                            <div> Enter Username</div>
                            <input placeholder="username" name="usename" class=fnameinp>
                        </div>
                        <div class="format3">
                            <div> Enter Password</div>
                            <input type="password" placeholder="password" name="pass" class=fnameinp>
                        </div>


                        <input type="submit" name="Registerbut" value="Register" class="Submitbut" style="margin-right: 20px;">
                        <div class="Cancelbut">Cancel</div>

                    </form>
                </div>
            </div>

        </div>

        <div class="LogIn">
            Log In
        </div>

        <div class=LogInInput>
            <div style="font-size: 40px; color: rgb(249, 123, 237); margin-bottom: 20px; pointer-events: none;">LogIn
            </div>
            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;
                            font-size: 25px; color: white; margin-bottom: 20px;">

                    <form class=Logme method="post">
                        <div class="ff">
                            <div class="format1">
                                <div>Username:</div>
                                <input class=fnamelog type="text" placeholder="username" name="uname">
                            </div>
                            <div class="format2">
                                <div>Password</div>
                                <input class=fnamelog type="password" placeholder="password" name="passme">
                            </div>

                            <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
                                <input type="submit" name="Loginbut" value="Login" class="Logbut">
                                <div class="CancelLogbut">Cancel</div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div style="position: fixed; top: 0px; bottom: 0px; right: 0px; left: 0px; background-color: rgb(0, 0, 0); z-index: -1; opacity: 0.0; transition: 0.5s;" class="cover">

    </div>


    <script>
        var userid;
        var usename;
        var cov = document.querySelector(".cover");
        $(document).ready(function() {
            $(".InsertUser").click(function(e) {
                $(".InsertUserInput").css({
                    "top": "10%"
                });
                cov.style.zIndex = "4";
                cov.style.opacity = "0.4";

            })

            $(".LogIn").click(function(e) {
                $(".LogInInput").css({
                    "top": "25%"
                });
                cov.style.zIndex = "4";
                cov.style.opacity = "0.4";

            })

            $(".CancelLogbut").click(function(e) {
                $(".LogInInput").css({
                    "top": "-900px"
                });
                $(".fnamelog").val("");
                cov.style.zIndex = "-1";
                cov.style.opacity = "0.0";
            })


            $(".Cancelbut").click(function(e) {
                $(".InsertUserInput").css({
                    "top": "-900px"
                });
                $(".fnameinp").val("");
                cov.style.zIndex = "-1";
                cov.style.opacity = "0.0";
            })


        })
    </script>
</body>

</html>

<?php
if (isset($_POST["Loginbut"])) {
    $uname = $_POST["uname"];
    $pass = $_POST["passme"];

    $alluser = "Select * from tbluseraccount where username = '" . $uname . "'";
    $result = mysqli_query($connection, $alluser);

    $nums = mysqli_num_rows($result);
    $counts = mysqli_fetch_array($result);
    if ($nums == 0) {
        echo "<script>alert('user not found')</script>";
    } elseif ($counts[3] != $pass) {
        echo "<script>alert('wrong password')</script>";
    } else {
        echo "<script>alert('Logged In')</script>";
    }
}


if (isset($_POST['Registerbut'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["emailme"];
    $gender = $_POST["genme"];
    $username = $_POST["usename"];
    $password = $_POST["pass"];


    $sqlins1 = "Insert into tbuserprofile(firstname,lastname,gender) values('" . $fname . "','" . $lname . "','" . $gender . "')";
    mysqli_query($connection, $sqlins1);

    $sqlins2 = "Select * from tbluseraccount where username='" . $username . "'";
    $res = mysqli_query($connection, $sqlins2);
    $nums = mysqli_num_rows($res);

    if ($nums == 0) {
        $sqlins3 = "Insert into tbluseraccount(emailadd,username,password) values('" . $email . "','" . $username . "','" . $password . "')";
        mysqli_query($connection, $sqlins3);
        echo "<script language='javascript'>
            alert('New record saved.');
        </script>";
    } else {
        echo "<script language='javascript'>
        alert('Already exist.Creating branch profile');
    </script>";
    }
}
?>