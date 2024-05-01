<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .mainbody {
            display: flex;
            flex-direction: column;
            /*min-height: 740px;*/
            /*background-color:blanchedalmond;*/
            background-color: #603F8B;
            font-family: 'Lilita One', sans-serif;
            overflow: auto;
            margin: 0px;
        }

        .mainhead {
            position: fixed;
            top: 0px;
            right: 0px;
            left: 0px;
            background-color: #603F8B;
            height: 130px;
            border-bottom-style: double;
            border-width: 10px;
            border-bottom-color: #f698c5;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

        }

        .showquiz,
        .showquiz2 {
            color: white;
            ;
            text-decoration: none;
            margin-right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .fnameinpp {
            height: 40px;
            padding: 10px;
            width: 150px;
            border-radius: 50px;
            border-style: none;
            margin-right: 10px;
        }

        .Submitbut {
            background-color: rgb(210, 63, 151);
            border-style: solid;
            border-width: 2px;
            border-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            width: 50px;
            height: 39px;
            color: rgb(255, 238, 253);
            border-radius: 50px;
            cursor: pointer;
            transition: 0.2s;
            font-family: 'Lilita One', sans-serif;

        }

        .Logbut {
            background-color: rgb(202, 16, 106);
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 50px;
            border-radius: 1000px;
            color: white;
            border-style: solid;
            border-width: 2px;
            border-color: white;
            cursor: pointer;
        }

        .Logbut:hover {
            width: 105px;
        }

        .Logbut:active {
            transition: 0.0s;
            background-color: rgb(136, 10, 71);
        }


        .Submitbut:hover {
            height: 40px;
            width: 58px;
        }

        .Submitbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .mainCont {
            position: fixed;
            top: 130px;
            bottom: 0px;
            left: 0px;
            display: flex;
            flex-direction: column;
            width: 230px;
            background-color: #feacd1;
            padding-left: 20px;
            justify-content: space-between;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .mainFolderCont {
            margin-top: 170px;
            margin-left: 10px;
            margin-right: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .FolderCont {
            flex: 1;
            width: 100%;
        }

        .AddFolder,
        .AddQuiz {
            background-color: rgb(210, 63, 151);
            border-style: solid;
            border-width: 2px;
            border-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            width: 120px;
            height: 39px;
            color: rgb(255, 238, 253);
            border-radius: 50px;
            cursor: pointer;
            transition: 0.2s;
            font-family: 'Lilita One', sans-serif;
            margin-bottom: 20px;
        }

        .AddFolder:hover {
            height: 40px;
            width: 130px;
        }

        .AddFolder:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .AddQuiz:hover {
            height: 40px;
            width: 130px;
        }

        .AddQuiz:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .AddFolderForm {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background-color: #A16AE8;
            transition: 0.5s;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: white;
        }

        .qnameinp,
        .Eqnameinp,
        .Idinp {
            height: 30px;
            border-radius: 100px;
            border-style: none;
            font-size: 15px;
        }

        .qdecinp,
        .Eqdecinp {
            width: 500px;
            height: 150px;
            border-radius: 20px;
            padding: 10px;
            border-style: none;
            font-size: 15px;
        }

        .qtypeinp {
            height: 30px;
            border-radius: 100px;
            border-style: none;
            font-size: 15px;
        }

        .AddFolderbut,
        .EditFolderbut,
        .AddQuiz {
            background-color: rgb(210, 63, 151);
            border-style: solid;
            border-width: 2px;
            border-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            width: 120px;
            height: 39px;
            color: rgb(255, 238, 253);
            border-radius: 50px;
            cursor: pointer;
            transition: 0.2s;
            font-family: 'Lilita One', sans-serif;
            margin-bottom: 20px;
        }

        .AddFolderbut:hover {
            height: 40px;
            width: 130px;
        }

        .AddFolderbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .EditFolderbut:hover {
            height: 40px;
            width: 130px;
        }

        .EditFolderbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }




        .CancelFolderbut {
            background-color: rgb(210, 63, 151);
            border-style: solid;
            border-width: 2px;
            border-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            width: 120px;
            height: 39px;
            color: rgb(255, 238, 253);
            border-radius: 50px;
            cursor: pointer;
            transition: 0.2s;
            font-family: 'Lilita One', sans-serif;
            margin-bottom: 20px;
        }

        .CancelFolderbut:hover {
            height: 40px;
            width: 130px;
        }

        .CancelFolderbut:active {
            transition: 0.0s;
            background-color: rgb(233, 126, 190);
        }

        .FolderCont {
            display: grid;
            grid-template-columns: 400px 400px 400px;
            row-gap: 10px;
            column-gap: 10px;
            justify-content: center;
        }

        .QuizContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .folderItemcont {
            height: 250px;
            background-color: #603F8B;
            border-style: double;
            border-width: 8px;
            border-color: #f21f57;
            border-radius: 10px;
            color: white;
        }

        .Foldname {
            font-size: 40px;
            overflow-x: auto;
            white-space: nowrap;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            color: blanchedalmond;
        }

        .Folddesc {
            word-break: break-all;
            height: 100px;
            overflow-y: auto;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            background-color: #A16AE8;
            border-radius: 10px;
        }

        .numcont {
            display: flex;
            flex-direction: row;
            margin-right: 10px;
            margin-left: 10px;
        }

        .numcount {
            margin-left: 10px;
        }


        .addquest,
        .editquest {
            height: 600px;
            width: 900px;
            background-color: rgb(72, 1, 125);
            border-radius: 50px;
            border-style: double;
            border-color: rgb(253, 70, 167);
            border-width: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: auto;

        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body class="mainbody">
    <div class="mainhead">
        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
            <div style="height: 100px;width: 100px; border-color: white; border-radius: 300px; 
            border-style: solid; position: relative; overflow: hidden;margin-top: 20px; margin-bottom: 20px; background-color: rgb(238, 130, 191);
            margin-left: 30px;">
                <div style="position: absolute; height: 50px;width: 50px; border-color: white; border-radius: 300px;
                border-style: solid; top: 5px; right: 23px;"></div>
                <div style="position: absolute; height: 80px;width: 80px; border-color: white; border-radius: 300px;
                border-style: solid; bottom: -50px; left: 8px;"></div>
            </div>

            <div style="display: flex; flex-direction: row; margin-left: 40px; align-items: center;">
                <div style="display: flex; flex-direction: row; align-items: center; margin-left: 8px;
                ">
                    <div style="color: rgb(255, 221, 227); font-size: 20px; font-weight: bold; margin-right: 20px;">
                        Username: </div>
                    <div style="color: white;" class="HoldUName"></div>
                </div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-left: 8px;">
                    <div style="color: rgb(255, 221, 227); font-size: 20px; font-weight: bold; margin-right: 20px;">
                        UserId: </div>
                    <div style="color: white;" class="HoldUId"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="mainFolderCont" style="align-items: start;">

        <div style="display: flex; flex-direction: column; align-items: center; width: 100%;
        margin-top: 30px;">
            <a class="EditFolderbut EditQuiz" style=" height: 50px; width:150px; margin-bottom: 10px;
            text-decoration:none;" href="./FolderPage.php">Back
            </a>
            <div class="QuizContainer" style="border-style: double; border-color: #f21f57; border-width:8px; width: 1000px;
            border-radius: 20px; align-items: start; padding: 40px;">
                <div style="font-size: 18px;" class = "forscore">
                    <div style="display: flex; font-size: 22px; color: rgb(255, 221, 227); margin-bottom: 20px;">
                        <div style="margin-right: 10px; color:white; border-style: solid; height: fit-content;
                        border-radius: 1000px; min-width: 38px; display:flex;flex-direction: row; justify-content: center;" class="numq">
                            1
                        </div>
                        <div style="word-break: break-all; width: 800px;" class="QuestionContainer">
                            kjadbfkjbadsjkfbakjsdbfjksabfkjabsdkjfbaskjdbkjabsdfkjbajkfbaskjbfdlkdsfnalksjfdnlksajdnfjlsadfjaslfkjsaklfdjsalkfdjklasjdf
                            alksdjfklsajfdlksajdklfjsaklfjklsadjfklasjfdlkjsdflkajsfdlkjaskldfjaslkdfjalksdfjlkasdjflksajfdlkasjdflksajdfklasjfdklasjdflk
                            alksdjfklsajfdklsajflkjaskldfjaslkfdjslkafjsalkjflaksjlksajfalskfdjlaksjfdklasjflkasjfl
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: center;">
                        <div class="EditFolderbut EditQuiz Showans" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px; margin-top: 20px;">Show Answer
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-direction: row; justify-content: center; width: 700px; background-color:#f698c5; color:white; font-size: 25px; word-break: break-all;
            margin-bottom: 20px; padding: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; height: 0px; padding: 0px; overflow: hidden;" class = "AnsHold">
                kasjdfnkjsafdkjsabdfkjbsakjdfbaskjdfbkjasbfdkbsafkjasbdkjfbaskjdfbkjadbfjksadbjkfabskjdfbaskjfda
            </div>

            <!--<div class="EditFolderbut EditQuiz SubmitAns" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px; margin-top: 20px;">Submit
            </div>-->
            <div style="display: flex; flex-direction: row;">
                <div class="EditFolderbut EditQuiz PrevPage" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px; margin-top: 20px;">Prev
                </div>
                <div class="EditFolderbut EditQuiz NextPage" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px; margin-top: 20px;">Next
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
           $(".HoldUName").text(localStorage.getItem("UserName"));
            $(".HoldUId").text(localStorage.getItem("UserId"));
            console.log(localStorage)
            var cc = 0;
            var holdquest;
            var number = 1;

            $.ajax({
                url: "./api/GetQuestions.php",
                method: "GET",
                data: {
                    quizid: parseInt(localStorage.getItem("QuizId"))
                },
                success: function(data) {
                    var hold = JSON.parse(data);
                    console.log(hold)

                    holdquest = hold;
                    var contquest = document.querySelector(".QuestionContainer");
                    contquest.innerText = holdquest[0]["Question"]

                    var anshh = document.querySelector(".AnsHold");
                    anshh.innerText = holdquest[0]["Answer"]
                }
            })

            $(".Showans").click(function(e){
                var showans = document.querySelector(".AnsHold");
                if(showans.style.height == "0px"){
                    showans.style.height = "auto";
                    showans.style.padding = "20px"
                }
                else{
                    showans.style.height = "0px";
                    showans.style.padding = "0px"
                }
            })
            $(".NextPage").click(function(data){
                cc++;
                number++;
                if(cc >= holdquest.length){
                    cc = 0;
                    number = 1;
                }

                var numme = document.querySelector(".numq");
                numme.innerText = number;
                var contquest = document.querySelector(".QuestionContainer");
                contquest.innerText = holdquest[cc]["Question"]

                var anshh = document.querySelector(".AnsHold");
                anshh.innerText = holdquest[cc]["Answer"]
                
            })
            $(".PrevPage").click(function(data){
                cc--;
                number--;
                if(cc < 0){
                    cc = holdquest.length-1;
                    number = holdquest.length
                }

                var numme = document.querySelector(".numq");
                numme.innerText = number;

                var contquest = document.querySelector(".QuestionContainer");
                contquest.innerText = holdquest[cc]["Question"]

                var anshh = document.querySelector(".AnsHold");
                anshh.innerText = holdquest[cc]["Answer"]
                
            })
        })
        /*$(document).ready(function() {
            var holdquest;
            var cc = 1;

            $.ajax({
                url: "./api/GetQuestions.php",
                method: "GET",
                data: {
                    quizid: parseInt(localStorage.getItem("QuizId"))
                },
                success: function(data) {
                    var hold = JSON.parse(data);
                    console.log(hold)

                    for (var hhl of hold) {
                        var count = 0;
                        (function(hhll) {
                            $.ajax({
                                url: "./api/GetOptions.php",
                                method: "GET",
                                data: {
                                    questId: hhll["Question_Id"]
                                },
                                success: function(data) {
                                    var opthold = JSON.parse(data);
                                    hhll["Options"] = opthold;
                                    if (count == 0) {
                                        var chca = document.querySelector(".ChAH");
                                        chca.innerText = holdquest[0]["Options"][0]["OptionText"];

                                        var chcb = document.querySelector(".ChBH");
                                        chcb.innerText = holdquest[0]["Options"][1]["OptionText"];

                                        var chcc = document.querySelector(".ChCH");
                                        chcc.innerText = holdquest[0]["Options"][2]["OptionText"];

                                        var chcd = document.querySelector(".ChDH");
                                        chcd.innerText = holdquest[0]["Options"][3]["OptionText"];
                                        count++;
                                    }
                                }
                            })
                        })(hhl);
                    }

                    holdquest = hold;
                    var contquest = document.querySelector(".QuestionContainer");
                    contquest.innerText = holdquest[0]["Question"]

                    var anshh = document.querySelector(".Anshold");
                    anshh.innerText = holdquest[0]["Answer"]
                }
            })


            $(".HoldUName").text(localStorage.getItem("UserName"));
            $(".HoldUId").text(localStorage.getItem("UserId"));
            console.log(localStorage)

            $(".ChA").click(function(data) {
                this.style.borderColor = "black"
                this.style.color = "black"

                var choiceb = document.querySelector(".ChB");
                choiceb.style.borderColor = "rgb(255, 221, 227)"
                choiceb.style.color = "rgb(255, 221, 227)"

                var choicec = document.querySelector(".ChC");
                choicec.style.borderColor = "rgb(255, 221, 227)"
                choicec.style.color = "rgb(255, 221, 227)"

                var choiced = document.querySelector(".ChD");
                choiced.style.borderColor = "rgb(255, 221, 227)"
                choiced.style.color = "rgb(255, 221, 227)"
            })


            $(".ChB").click(function(data) {
                this.style.borderColor = "black"
                this.style.color = "black"

                var choicea = document.querySelector(".ChA");
                choicea.style.borderColor = "rgb(255, 221, 227)"
                choicea.style.color = "rgb(255, 221, 227)"

                var choicec = document.querySelector(".ChC");
                choicec.style.borderColor = "rgb(255, 221, 227)"
                choicec.style.color = "rgb(255, 221, 227)"

                var choiced = document.querySelector(".ChD");
                choiced.style.borderColor = "rgb(255, 221, 227)"
                choiced.style.color = "rgb(255, 221, 227)"
            })


            $(".ChC").click(function(data) {
                this.style.borderColor = "black"
                this.style.color = "black"

                var choiceb = document.querySelector(".ChB");
                choiceb.style.borderColor = "rgb(255, 221, 227)"
                choiceb.style.color = "rgb(255, 221, 227)"

                var choicea = document.querySelector(".ChA");
                choicea.style.borderColor = "rgb(255, 221, 227)"
                choicea.style.color = "rgb(255, 221, 227)"

                var choiced = document.querySelector(".ChD");
                choiced.style.borderColor = "rgb(255, 221, 227)"
                choiced.style.color = "rgb(255, 221, 227)"
            })


            $(".ChD").click(function(data) {
                this.style.borderColor = "black"
                this.style.color = "black"

                var choiceb = document.querySelector(".ChB");
                choiceb.style.borderColor = "rgb(255, 221, 227)"
                choiceb.style.color = "rgb(255, 221, 227)"

                var choicec = document.querySelector(".ChC");
                choicec.style.borderColor = "rgb(255, 221, 227)"
                choicec.style.color = "rgb(255, 221, 227)"

                var choicea = document.querySelector(".ChA");
                choicea.style.borderColor = "rgb(255, 221, 227"
                choicea.style.color = "rgb(255, 221, 227)"
            })


            $(".SubmitAns").click(function(e) {
                if (this.innerText == "Submit") {
                    var picked;
                    var choiceb = document.querySelector(".ChB");
                    var choicec = document.querySelector(".ChC");
                    var choiced = document.querySelector(".ChD");
                    var choicea = document.querySelector(".ChA");
                    if (choicea.style.color != "black" && choiceb.style.color != "black" && choicec.style.color != "black" && choiced.style.color != "black") {
                        return
                    }
                    if (choicea.style.color == "black") {
                        picked = choicea.nextElementSibling.innerText;
                    } else if (choiceb.style.color == "black") {
                        picked = choiceb.nextElementSibling.innerText;
                    } else if (choicec.style.color == "black") {
                        picked = choicec.nextElementSibling.innerText;
                    } else if (choiced.style.color == "black") {
                        picked = choiced.nextElementSibling.innerText;
                    }
                    var ansholdme = document.querySelector(".Anshold");
                    if (picked == ansholdme.innerText) {
                        var showans = document.querySelector(".showAns");
                        var anslbl = document.querySelector(".Anslbl");
                        var anshold = document.querySelector(".Anshold");

                        var choiceb = document.querySelector(".ChB");
                        var choicec = document.querySelector(".ChC");
                        var choiced = document.querySelector(".ChD");
                        var choicea = document.querySelector(".ChA");

                        if (choicea.style.color != "black" && choiceb.style.color != "black" && choicec.style.color != "black" && choiced.style.color != "black") {
                            return
                        }

                        showans.style.opacity = "1";
                        anslbl.style.color = "rgb(6, 215, 132)"
                        anshold.style.borderBottomColor = "rgb(6, 215, 132)"


                        if (choicea.style.color == "black") {
                            choicea.style.borderColor = "rgb(6, 215, 132)";
                            choicea.style.color = "rgb(6, 215, 132)";
                        } else if (choiceb.style.color == "black") {
                            choiceb.style.borderColor = "rgb(6, 215, 132)";
                            choiceb.style.color = "rgb(6, 215, 132)";
                        } else if (choicec.style.color == "black") {
                            choicec.style.borderColor = "rgb(6, 215, 132)";
                            choicec.style.color = "rgb(6, 215, 132)";
                        } else if (choiced.style.color == "black") {
                            choiced.style.borderColor = "rgb(6, 215, 132)";
                            choiced.style.color = "rgb(6, 215, 132)";
                        }

                        var numquest = document.querySelector(".numq");
                        numquest.style.borderColor = "rgb(6, 215, 132)";
                        numquest.style.color = "rgb(6, 215, 132)";

                        var scorecount = document.querySelector(".scorecount");
                        scorecount.innerText = parseInt(scorecount.innerText) + 1

                        this.innerText = "Next";

                        var showmes = document.querySelector(".showCW");
                        showmes.style.opacity = "1";
                        showmes.style.color = "rgb(6, 215, 132)";
                        showmes.innerText = "CORRECT"

                        cc++;
                    } else {
                        var showans = document.querySelector(".showAns");
                        var anslbl = document.querySelector(".Anslbl");
                        var anshold = document.querySelector(".Anshold");

                        var choiceb = document.querySelector(".ChB");
                        var choicec = document.querySelector(".ChC");
                        var choiced = document.querySelector(".ChD");
                        var choicea = document.querySelector(".ChA");

                        if (choicea.style.color != "black" && choiceb.style.color != "black" && choicec.style.color != "black" && choiced.style.color != "black") {
                            return
                        }

                        showans.style.opacity = "1";
                        anslbl.style.color = "#f44c79"
                        anshold.style.borderBottomColor = "#f44c79"


                        if (choicea.style.color == "black") {
                            choicea.style.borderColor = "#f44c79";
                            choicea.style.color = "#f44c79";
                        } else if (choiceb.style.color == "black") {
                            choiceb.style.borderColor = "#f44c79";
                            choiceb.style.color = "#f44c79";
                        } else if (choicec.style.color == "black") {
                            choicec.style.borderColor = "#f44c79";
                            choicec.style.color = "#f44c79";
                        } else if (choiced.style.color == "black") {
                            choiced.style.borderColor = "#f44c79";
                            choiced.style.color = "#f44c79";
                        }

                        var numquest = document.querySelector(".numq");
                        numquest.style.borderColor = "#f44c79";
                        numquest.style.color = "#f44c79";

                        this.innerText = "Next";

                        var showmes = document.querySelector(".showCW");
                        showmes.style.opacity = "1";
                        showmes.style.color = "#f44c79";
                        showmes.innerText = "WRONG"
                        cc++;
                    }

                } else if(this.innerText == "Back"){
                    window.location.href = "./FolderPage.php";
                }
                else {
                    if (cc > holdquest.length) {
                        var showscore = document.querySelector(".forscore");
                        showscore.innerText = "";
                        showscore.parentElement.style.display = "flex";
                        showscore.parentElement.style.flexDirection = "row";
                        showscore.parentElement.style.justifyContent = "center";

                        var showmess = document.createElement("div");
                        var scorecount = document.querySelector(".scorecount");

                        showmess.innerText = `CONGRATULATIONS YOUR SCORE IS ${scorecount.innerText}\\${holdquest.length}`
                        showmess.style.color = "rgb(255, 221, 227)"
                        showmess.style.fontSize = "50px"
                        showscore.append(showmess)

                        var showmes = document.querySelector(".showCW");
                        showmes.style.opacity = "0";

                        this.innerText = "Back";
                        
                        return;
                    } else {
                        console.log("show")
                        var showans = document.querySelector(".showAns");
                        var anslbl = document.querySelector(".Anslbl");
                        var anshold = document.querySelector(".Anshold");

                        var choiceb = document.querySelector(".ChB");
                        var choicec = document.querySelector(".ChC");
                        var choiced = document.querySelector(".ChD");
                        var choicea = document.querySelector(".ChA");

                        showans.style.opacity = "0";
                        anslbl.style.color = "rgb(6, 215, 132)"
                        anshold.style.borderBottomColor = "rgb(6, 215, 132)"



                        choicea.style.borderColor = "rgb(255, 221, 227)";
                        choicea.style.color = "rgb(255, 221, 227)";

                        choiceb.style.borderColor = "rgb(255, 221, 227)";
                        choiceb.style.color = "rgb(255, 221, 227)";

                        choicec.style.borderColor = "rgb(255, 221, 227)";
                        choicec.style.color = "rgb(255, 221, 227)";

                        choiced.style.borderColor = "rgb(255, 221, 227)";
                        choiced.style.color = "rgb(255, 221, 227)";

                        var numquest = document.querySelector(".numq");
                        numquest.style.borderColor = "white";
                        numquest.style.color = "white";

                        var showmes = document.querySelector(".showCW");
                        showmes.style.opacity = "0";

                        var numquest = document.querySelector(".numq");
                        numquest.innerText = parseInt(numquest.innerText)+1;


                        this.innerText = "Submit";



                        var contquest = document.querySelector(".QuestionContainer");
                        contquest.innerText = holdquest[cc - 1]["Question"]

                        var anshh = document.querySelector(".Anshold");
                        anshh.innerText = holdquest[cc - 1]["Answer"]

                        var chca = document.querySelector(".ChAH");
                        chca.innerText = holdquest[cc - 1]["Options"][0]["OptionText"];

                        var chcb = document.querySelector(".ChBH");
                        chcb.innerText = holdquest[cc - 1]["Options"][1]["OptionText"];

                        var chcc = document.querySelector(".ChCH");
                        chcc.innerText = holdquest[cc - 1]["Options"][2]["OptionText"];

                        var chcd = document.querySelector(".ChDH");
                        chcd.innerText = holdquest[cc - 1]["Options"][3]["OptionText"];



                    }
                }

            })
        })*/
    </script>

</body>

</html>