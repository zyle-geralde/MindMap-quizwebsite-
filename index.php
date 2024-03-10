<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
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


        /*topcont*/
        .TopPic {
            height: 680px;
            overflow: hidden;
            position: relative;
        }

        .quote {
            font-size: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-weight: bold;
            white-space: nowrap;
            color: white;
            text-align: center;
        }

        .hideimg {
            z-index: 1;
            position: absolute;
            height: 1280px;
            min-width: 1920px;
        }

        .blackbg {
            z-index: 2;
            position: absolute;
            top: 0px;
            bottom: 0px;
            right: 0px;
            left: 0px;
            background-color: rgba(0, 0, 0, 0.373);
        }

        .subq {
            font-size: 20px;
            font-weight: normal;
            word-break: break-all;
            width: 545px;
            color: white;
            line-height: 30px;
            margin: 20px;
            text-align: center;
        }

        .posdiv {
            position: absolute;
            z-index: 3;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hideimg {
            overflow: hidden;
            object-position: center;
        }

        /*----------*/
        .FeatureNav {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .headFeatureNav {
            padding-top: 70px;
            font-weight: bold;
            font-size: 50px;
            text-align: center;
            margin-bottom: 60px;
            color: rgb(34, 34, 34);
            text-shadow: 2px 2px 4px #67729D;;
        }

        .FeatureCont {
            display: flex;
            flex-direction: column;
            padding: 10px 60px;
            padding-top: 60px;
            padding-right: 0px;
            border-radius: 30px;
            background-color: #fff8fc;
            box-shadow: 5px 5px 10px rgb(125, 125, 125);
            margin-bottom: 190px;
        }

        .ft1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 360px;
            margin-right: 60px;
        }

        .ftimg {
            width: 250px;
            height: 250px;
            border-radius: 10px;
        }

        .fttitle {
            font-size: 20px;
            font-weight: bold;
            display: flex;
            flex-direction: row;
            text-align: center;
            margin-top: 25px;
            background-color: #67729D;
            color: white;
            border-radius: 5px;
            padding: 10px 10px;
        }
        .comp1{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
        }

        /*new cont me*/

        .benifitcont{
            background-color:#a0abd6;
            padding: 80px 0px;
        }
        .f1ben{
            display: flex;
            flex-direction: row;
        }
        .f2ben{
            display: flex;
            flex-direction: row;
            margin-top: 60px;
        }
        .f3ben{
            display: flex;
            flex-direction: row;
            margin-top: 60px;
        }
        .benifitcont{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .benimage1{
            width: 400px;
            overflow: hidden;
            object-position: center;
            display: flex;
            align-items: center;
        }
        .caption1{
            width: 300px;
            word-wrap: break-word;
            padding-right: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }
        .benimage2{
            width: 400px;
            overflow: hidden;
            object-position: center;
            display: flex;
            align-items: center;
        }
        .caption2{
            width: 300px;
            word-wrap: break-word;
            padding-left: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }
        .captitl{
            font-weight: bolder;
            font-size: 50px;
            margin-bottom: 20px;
            color: white;
        }
        .captdesc{
            font-size: 25px;
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

    <div class="TopPic">
        <div class="blackbg"></div>
        <div class="hideimg">
            <img src="laptop-3087585_1920.jpg" style="width: 100%;" class="image1">
        </div>
        <div class="posdiv">
            <div class="quote">
                <div>Unlock your capabilities</div>
                <div>Unleash your knowledge</div>
            </div>
            <div class="subq">
                MindMap goes beyond than just a quiz tool. It nurtures interactivity connecting people from across the
                globe to collaborate informations.
                Dive into our epressive network for leaners,where you will be able to utilize MindMap's collaborative
                MindMapping, interactive quizes, and
                a rich envirionment. Join us as we delve deep into what you are capable of.
            </div>

            <div class="Signdiv">
                <a href="login.php" class="traverse3">SignUp</a>
            </div>
        </div>
    </div>

    <div class="FeatureNav">
        <div class="headFeatureNav">Cultivate Your Intellect with Our Colaborative Platform</div>
        <div class="FeatureCont">

            <div class = "comp1">
                <div class="ft1">
                    <img src="dynamicquizess.png" class="ftimg">
                    <div class="fttitle">Large Ecosystem of Quizess and Flashcards</div>
                </div>
                <div class="ft1">
                    <img src="UserFriendly.png" class="ftimg">
                    <div class="fttitle">User Friendly Interface</div>
                </div>
                <div class="ft1">
                    <img src="Collaborative.png" class="ftimg">
                    <div class="fttitle">Collaborate with Other Users</div>
                </div>
            </div>

            <div class = "comp1">
                <div class="ft1">
                    <img src="CreateQuiz.png" class="ftimg">
                    <div class="fttitle">Create and Personalize Quizess</div>
                </div>
                <div class="ft1">
                    <img src="feedback.png" class="ftimg">
                    <div class="fttitle">Efficient Feedback System</div>
                </div>
            </div>

        </div>
    </div>

    <div class = "benifitcont">
        <div class = "f1ben">
            <div class = "caption1">
                <div class = "captitl">Enhance your knowledge</div>
                <div class = "captdesc">Have access to multiple flashcards and quizes on different</div>
            </div>
            <div class = "benimage1">
                <img src="knowledge.png">
            </div>
        </div>


        <div class = "f2ben">
            <div class = "benimage2">
                <img src="Untitled design.png">
            </div>
            <div class = "caption2">
                <div class = "captitl">Start for Free</div>
                <div class = "captdesc">Sign up for free and gain access to MinMaps core functionalities</div>
            </div>
        </div>


        <div class = "f3ben">
            <div class = "caption1">
                <div class = "captitl">Go beyond your capabilities</div>
                <div class = "captdesc">Know your limits and test your intellect</div>
            </div>
            <div class = "benimage1">
                <img src="Untitled design (1).png">
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
</body>

</html>