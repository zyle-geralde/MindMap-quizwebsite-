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


        /*-----*/
        .aboutwebtitle {
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-size: 25px;
            color: #67729D;
            margin-bottom: 50px;
        }

        .f1ben {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 900px;
            padding: 50px;
        }

        .benimage1 {
            object-position: center;
            display: flex;
            align-items: center;
        }

        .caption1 {
            word-wrap: break-word;
            padding-right: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: rgb(55, 55, 55);
            font-size: 20px;
        }

        .captitl {
            font-weight: bolder;
            font-size: 50px;
            margin-bottom: 20px;
            color: rgb(34, 34, 34);
        }

        .captdesc {
            margin-bottom: 30px;
        }

        .abtwcont {
            background-color: #fff7fb;
            border-radius: 30px;
        }

        .abtwcen {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .imgabt {
            border-radius: 20px;
        }

        .abtpers {
            margin-top: 120px;
            padding: 60px 0px;
            background-color: #67729D;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .meetg {
            font-size: 50px;
            font-weight: bold;
            color: white;
            margin-bottom: 60px;
        }

        .fperson{
            width: 1100px;
            background-color: #FED9ED;
            margin-bottom: 120px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            border-radius: 50px;
            padding: 30px;
            position: relative;
            box-shadow: 5px 5px 10px rgb(49, 49, 49);
        }

        .sperson {
            width: 1100px;
            background-color: #BB9CC0;
            margin-bottom: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            border-radius: 50px;
            padding: 30px;
            position: relative;
            box-shadow: 5px 5px 10px rgb(49, 49, 49);
        }

        .desccont1,.desccont2{
            width: 400px;
            word-wrap: break-word;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #67729D;
        }
        .desccont2{
            color: white;
        }

        .featcont1 {
            word-wrap: break-word;
            display: flex;
            flex-direction: column;
            align-items: left;
            padding: 30px;
            color: #67729D;
            font-weight: bold;
            height: 100px;
            justify-content: space-between;
        }
        .featcont2 {
            word-wrap: break-word;
            display: flex;
            flex-direction: column;
            align-items: left;
            padding: 30px;
            color: white;
            font-weight: bold;
            height: 100px;
            justify-content: space-between;
        }

        .name1,.name2{
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .feat1,
        .feat2 {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .featname1,
        .featname2 {
            margin-right: 10px;
        }

        .evalbar,
        .evalbar2,.evalbar3{
            width: 200px;
            border-style: solid;
            border-width: 4px;
            border-color: #BB9CC0;
            height: 10px;
            border-radius: 1000px;
        }
        .evalbar3{
            border-color: #E7BCDE;
        }

        .egood {
            background-color: white;
            height: 100%;
            width: 75%;
            border-radius: 1000px;
        }

        .egood2 {
            background-color: white;
            height: 100%;
            width: 90%;
            border-radius: 1000px;
        }

        .piccont,.piccont2{
            flex: 1;
            height: 100%;
        }

        .pic1,.pic2{
            top: -35px;
            position: absolute;
            border-radius: 1000px;
            border-style: double;
            border-width: 10px;
            border-color: rgb(231, 93, 112);
        }
        .pic2{
            width: 287px;
            height: 277px;
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

    <div class="aboutwebtitle">
        <h1>About MindMap</h1>
    </div>


    <div class="abtwcen">
        <div class="abtwcont">
            <div class="f1ben">
                <div class="caption1">
                    <div class="captitl">
                        Making a Difference
                    </div>
                    <div class="captdesc">MindMap is an engaging and interactive website designed to facilitate
                        knowledge sharing through quizzes and flashcards. The platform empowers users to create, share,
                        and explore a wide array of quizzes and flashcards, fostering a collaborative learning
                        environment.


                    </div>
                    <div class="captdesc">
                        Users can easily contribute to the MindMap community by posting their own quizzes and
                        flashcards, allowing them to share their expertise and insights on various subjects. This
                        collaborative feature encourages the exchange of knowledge and promotes a sense of
                        community-driven learning.
                    </div>
                </div>
                <div class="benimage1">
                    <img src="hardwork.png" class="imgabt">
                </div>
            </div>
        </div>
    </div>

    <div class="abtpers">
        <div class="meetg">
            MEET THE TEAM
        </div>
        <div class="fperson">
            <div class="desccont1">
                <div class=name1>
                    Zyle Geralde L. de la Pena
                </div>
                <div class=desc1>
                    
                Hello, I'm Zyle, a web developer for this website. I'm responsible for coding and building
                the site's features. If you have any technical questions or encounter issues, I'm here to help. 
                Explore and enjoy your experience!
                </div>
            </div>

            <div class="piccont">
                <img src="zylepic.jpg" class=pic1>
            </div>

            <div class="featcont1">
                <div class=feat1>
                    <div class="featname1">
                        Risk taker
                    </div>
                    <div class="featbar1">
                        <div class=evalbar>
                            <div class="egood">

                            </div>
                            <div class="ebad">

                            </div>
                        </div>
                    </div>
                </div>

                <div class=feat2>
                    <div class="featname2">
                        Passionate
                    </div>
                    <div class="featbar2">
                        <div class=evalbar2>
                            <div class="egood2">

                            </div>
                            <div class="ebad2">

                            </div>
                        </div>
                    </div>
                </div>

                <div class=feat1>
                    <div class="featname1">
                        Hardworker
                    </div>
                    <div class="featbar1">
                        <div class=evalbar>
                            <div class="egood">

                            </div>
                            <div class="ebad">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sperson">
            <div class="desccont2">
                <div class=name1>
                    Theodore Ladera
                </div>
                <div class=desc1>
                    Hello, I'm Theodore, a web designer of MindMap. I take pride in crafting visually appealing and
                    user-friendly interfaces.
                    From selecting color schemes to perfecting layouts, my focus is on creating a seamless and enjoyable
                    experience for our visitors.
                    Welcome, and enjoy your stay!
                </div>
            </div>

            <div class="piccont2">
                <img src="theodorepic.jpg" class=pic2>
            </div>

            <div class="featcont2">
                <div class=feat1>
                    <div class="featname1">
                        Risk taker
                    </div>
                    <div class="featbar1">
                        <div class=evalbar3>
                            <div class="egood">

                            </div>
                            <div class="ebad">

                            </div>
                        </div>
                    </div>
                </div>

                <div class=feat2>
                    <div class="featname2">
                        Passionate
                    </div>
                    <div class="featbar2">
                        <div class=evalbar3>
                            <div class="egood2">

                            </div>
                            <div class="ebad2">

                            </div>
                        </div>
                    </div>
                </div>

                <div class=feat1>
                    <div class="featname1">
                        Hardworker
                    </div>
                    <div class="featbar1">
                        <div class=evalbar3>
                            <div class="egood">

                            </div>
                            <div class="ebad">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">

    </div>

</body>

</html>