<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0px;
            font-family: "Lato", sans-serif;
            width: 100%;
            background-color: #e6d9e0;
            overflow-y: scroll;
        }

        /*------------------------*/
        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
            box-shadow: 0px 0px 10px rgb(156, 156, 156);
            background-color: white;
        }

        .traverse {
            font-family: "Lato", sans-serif;
            text-decoration: none;
            color: rgb(38, 38, 38);
            font-weight: bold;
            font-size: 14px;
        }

        .traverse2 {
            font-family: "Lato", sans-serif;
            text-decoration: none;
            color: #67729D;
            font-weight: bold;
            font-size: 14px;

        }

        .traverse3 {
            font-family: "Lato", sans-serif;
            text-decoration: none;
            color: rgb(38, 38, 38);
            font-weight: bold;
            font-size: 14px;
            color: rgb(255, 255, 255);
        }

        .WebTitle {
            font-family: "Lato", sans-serif;
            font-size: 30px;
            font-weight: bold;
            color: #67729D;
            display: flex;
            flex-direction: row;
            align-items: center;
            pointer-events: none;
        }

        .Cpart1 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .Cpart2 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .inalign1,
        .inalign2,
        .inalign3 {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 20px 20px;
            transition: 0.2s;
            cursor: pointer;
        }

        .inalign1:hover {
            background-color: rgb(237, 237, 237);
        }

        .inalign2:hover {
            background-color: rgb(237, 237, 237);
        }

        .inalign3:hover {
            background-color: rgb(237, 237, 237);
        }

        .Signdiv {
            background-color: #BB9CC0;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.2s;
            margin-left: 20px;
            cursor: pointer;
            display: inline-block;
        }

        .Signdiv:hover {
            background-color: #947a98;
        }
        .headme{
            height: 500px;
            overflow: hidden;
            object-fit:contain;
            object-position:top;
            position: relative;
        }
        .picture{
            height: 900px;
            width: 1920px;
        }
        .insideword{
            position: absolute;
            font-size: 60px;
            font-weight: bold;
            color: white;
            top: 30%;
            right: 25%;
            z-index: 2;
            word-wrap: break-word;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .darkback{
            position: absolute;
            background-color: rgba(0, 0, 0, 0.444);
            top: 0px;
            bottom: 0px;
            right: 0px;
            left: 0px;
            z-index: 1;
        }
        .descme{
            text-align: center;
            width: 700px;
            font-size: 30px;
            font-weight: normal;
        }
        .contacts{
            display: grid;
            grid-template-columns: 500px 500px;
            column-gap: 30px;
            row-gap: 30px;
            margin-top: 60px;
            z-index: 2;
        }
        .c1,.c2{
            background-color: white;
            height: 260px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            text-align: center;
            justify-content: space-between;
        }
        .c2{
            margin-top: 30px;
            width: 500px;
        }
        .centerme{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .picicon{
            height: 90px;
            width: 90px;
        }
        .headcont{
            font-weight: bold;
        }
        .info{
            color: blue;
        }
        .footer{
            height: 50px;
        }

        
        /**/
        ::-webkit-scrollbar {
            width: 12px;
        }

        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 6px;
        }

       
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="Cpart1">
            <div class="WebTitle">MindMAP</div>
            <div class="inalign1">
                <a href="index.php" class="traverse">Home</a>
            </div>
            <div class="inalign2">
                <a href="aboutus.php" class="traverse">About Us</a>
            </div>
            <div class="inalign3">
                <a href="contuctus.php" class="traverse">Contact Us</a>
            </div>
        </div>

        <div class="Cpart2">
            <div class="Logdiv">
                <a href="login.php" class="traverse2">LogIn</a>
            </div>
            <div class="Signdiv">
                <a href="login.php" class="traverse3">SignUp</a>
            </div>
        </div>
    </div>

    <div class = headme>
        <img src = "pexels-pixabay-326576.jpg" class = "picture">
        <div class = "insideword">
            <div>Get In Touch</div>
            <div class = descme>We love to hear from you.This is how you can reah us</div>
        </div>
        <div class = darkback>

        </div>
    </div>

    <div class = centerme>
        <div class = contacts>
            <div class = "c1">
                <img src="./mycollection (1)/png/002-call.png" class = "picicon">
                <div class = "headcont">Talk to us</div>
                <div>Interested in MindMAP? Talk to us directly through this phone number.</div>
                <div class = "info">+1 678 123 9007</div>
            </div>
            <div class = "c1">
                <img src="./mycollection (1)/png/003-chat-bubbles.png" class = "picicon">
                <div class = "headcont">Customer Support</div>
                <div>Sometimes, you need from a MinpMap support representative. We got you covered</div>
                <div class = "info">minmapsupportrep123@email.com</div>
            </div>
            <div class = "c1">
                <img src="./mycollection (1)/png/001-email.png" class = "picicon">
                <div class = "headcont">Email Infos</div>
                <div>Don't have a phone? Contact us through these emails</div>
                <div class = "info">mindmapCompany@gmail.com</div>
                <div class = "info">mindmapCompany@yahoo.com</div>
                <div class = "info">mindmapCompany@email.com</div>
            </div>
            <div class = "c1">
                <img src="./mycollection (1)/png/004-saving.png" class = "picicon">
                <div class = "headcont">Schedule details</div>
                <div>See when we will open.</div>
                <div class = "info">Working Days: Monday-Friday</div>
                <div class = "info">Working Hours: 8am-10pm</div>
            </div>
        </div>
        <div class = "c2">
            <img src="location.png" class = "picicon">
            <div class = "headcont">Location</div>
            <div>See where you can find us</div>
            <div class = "info">Gov. M. Cuenco Ave, Cebu City, 6000 Cebu</div>
        </div>
    </div>


    <div class="footer">

    </div>

</body>

</html>

<!--images-->
<!--<div>Icons made by <a href="https://www.flaticon.com/authors/flat-icons" title="Flat Icons">Flat Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
<a href="https://www.flaticon.com/free-icons/location" title="location icons">Location icons created by Flat Icons - Flaticon</a>-->