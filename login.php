<?php
include "connect.php"
?>

<?php
$message = "";

if (isset($_POST["Loginbut"])) {
    $message = "";
    $uname = $_POST["uname"];
    $pass = $_POST["passme"];

    $alluser = "Select * from tbluseraccount where username = '" . $uname . "'";
    $result = mysqli_query($connection, $alluser);

    $nums = mysqli_num_rows($result);
    $counts = mysqli_fetch_array($result);

    if ($nums == 0) {
        $message = "User not Found";
    } elseif (password_verify($pass, $counts[3])) {
        echo "<script>
        localStorage.setItem('UserId',".$counts[0].");
        localStorage.setItem('UserName','".$counts[2]."');
        window.location.href = 'mainpage.php';
        </script>";
        exit;
    } else {
        $message = "Password is incorrect";
    }
}


if (isset($_POST['Registerbut'])) {
    $message = "";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["emailme"];
    $gender = $_POST["genme"];
    $username = $_POST["usename"];
    $passwordd = $_POST["pass"];
    $password = password_hash($passwordd, PASSWORD_DEFAULT);



    $sqlins2 = "Select * from tbluseraccount where username='" . $username . "'";
    $res = mysqli_query($connection, $sqlins2);
    $nums = mysqli_num_rows($res);


    if ($nums == 0) {
        $sqlins1 = "Insert into tbluserprofile(firstname,lastname,gender) values('" . $fname . "','" . $lname . "','" . $gender . "')";
        mysqli_query($connection, $sqlins1);
        $sqlins3 = "Insert into tbluseraccount(emailadd,username,password) values('" . $email . "','" . $username . "','" . $password . "')";
        mysqli_query($connection, $sqlins3);
        $message = "User is Unique";
    } else {
        $message = "User is already existing";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>FORUM APP</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/loginstyle.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .hoverme {
            position: absolute;
            background-color: rgb(207, 207, 207);
            top: -200px;
            font-size: 30px;
            animation-name: drop;
            border-radius: 10px;
            animation-duration: 2s;
            animation-fill-mode: backwards;
            z-index: 100;
        }

        @keyframes drop {
            0% {
                top: -200px;
            }

            50% {
                top: 60px;
            }

            60% {
                top: 60px;
            }

            100% {
                top: -200px
            }
        }
    </style>

</head>

<body class="mainbody"><!--class = mainbody-->
    <div class="hoverme"><?php echo $message; ?></div>
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


    <script src="./js/logjs.js">
        $('.registerForm').submit(function(event) {
            event.preventDefault();
            var message = "<?php echo $message; ?>";
            var hoverme = $('.hoverme');
            hoverme.text(message);
            hoverme.css('animationName', 'drop');
            hoverme.css('animation-duration','0s');
        });

        $('.Logme').submit(function(event) {
            event.preventDefault();
            var message = "<?php echo $message; ?>";
            var hoverme = $('.hoverme');
            hoverme.text(message);
            hoverme.css('animationName', 'drop');
            hoverme.css('animation-duration','0s');
        });
    </script>
</body>

</html>