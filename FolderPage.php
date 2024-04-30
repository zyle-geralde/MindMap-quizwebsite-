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
            background-color: #b1507c;
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


        .addquest {
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

            <div style="display: flex; flex-direction: column; margin-left: 40px;">
                <div style="display: flex; flex-direction: row; align-items: center; margin-left: 8px;
                margin-bottom: 20px;">
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

        <div style="display: flex; flex-direction: row;">
            <p class="showquiz">All Folder</p>
            <p class="showquiz2">Your Folder</p>
        </div>

        <div style="display: flex; flex-direction: row;">
            <div style="display: flex; flex-direction: row;">
                <input class="fnameinpp" type="text" name="qsearch" placeholder="Quiz name" required>
                <div class="Submitbut" style="margin-right: 20px;">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: space-between;
        width: 150px; align-items: center;">
            <div class="Logbut" style="margin-right: 20px;">
                Log Out
            </div>
            <div style="background-color: #603F8B; color: white;height: 30px; width: 30px;
            display: flex; flex-direction: row; align-items: center; justify-content: center; border-radius: 100px;
            cursor: pointer;">
                <i class="fa fa-level-up"></i>
            </div>
        </div>
    </div>


    <div class="mainFolderCont" style="align-items: start;">
        <div style="display: flex; flex-direction: column; margin-left: 30px;">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <div style="font-size: 20px;">Folder Id:</div>
                <div style="font-size: 20px;" class="IdHold"></div>
            </div>
            <div style="display: flex; flex-direction: row; align-items: center;">
                <div style="font-size: 20px;">Folder Name:</div>
                <div style="font-size: 20px; width: 500px; overflow-x: auto; white-space: nowrap;" class="NameHold">
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; align-items: center; width: 100%;
        margin-top: 30px;">
            <button type="button" data-bs-toggle="modal" data-bs-target="#showTasks" class="AddQuiz">
                Add Quiz
            </button>

            <div class="QuizContainer">

            </div>
        </div>
    </div>





    <div class="modal fade" id="showTasks" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: fit-content;">
            <div class="modal-content" style="border-radius: 60px;">
                <div class=addquest style="padding: 20px; justify-content: space-between;">
                    <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                        <div style="display: flex; flex-direction: row; align-items: center; font-size: 15px;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Title:</div>
                            <input type="text" placeholder="Quiz Title" style="border-radius: 100px;
                            height: 30px; width: 150px;" class="quiztitle">
                        </div>

                        <div style="display: flex; flex-direction: row; align-items: center;margin-top: 15px;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Description:</div>
                            <textarea type="text" placeholder="Quiz Description" style="border-radius: 5px;
                            height: 50px; width: 300px;" class="quizdescrip"></textarea>
                        </div>

                        <div style="display: flex; flex-direction: row; align-items: center;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Type:</div>
                            <select style="border-radius: 100px;
                            height: 30px;" class="quiztype">
                                <option value="---">---</option>
                                <option value="Mult">Multiple Choice</option>
                                <option value="Flash">FlashCard</option>
                            </select>
                        </div>
                    </div>

                    <div class="Questcont" style="width: 100%; margin-top: 30px;">

                    </div>


                    <div class="addSub" style="display: flex; flex-direction: row; margin-top: 30px;">
                        <div class="EditFolderbut AddQuestion" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px;">Ok</div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="EditTaskMe" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: fit-content;">
            <div class="modal-content" style="border-radius: 60px;">
                <div class=addquest style="padding: 20px; justify-content: space-between;">
                    <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                        <div style="display: flex; flex-direction: row; align-items: center; font-size: 15px;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Title:</div>
                            <input type="text" placeholder="Quiz Title" style="border-radius: 100px;
                            height: 30px; width: 150px;" class="quiztitle">
                        </div>

                        <div style="display: flex; flex-direction: row; align-items: center;margin-top: 15px;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Description:</div>
                            <textarea type="text" placeholder="Quiz Description" style="border-radius: 5px;
                            height: 50px; width: 300px;" class="quizdescrip"></textarea>
                        </div>

                        <div style="display: flex; flex-direction: row; align-items: center;">
                            <div style="margin-right: 10px; color: white; font-weight: bold;">Type:</div>
                            <select style="border-radius: 100px;
                            height: 30px;" class="quiztype">
                                <option value="---">---</option>
                                <option value="Mult">Multiple Choice</option>
                                <option value="Flash">FlashCard</option>
                            </select>
                        </div>
                    </div>

                    <div class="Questcont" style="width: 100%; margin-top: 30px;">

                    </div>


                    <div class="addSub" style="display: flex; flex-direction: row; margin-top: 30px;">
                        <div class="EditFolderbut AddQuestion" style="margin-right: 20px; height: 50px; width:150px; margin-bottom: 0px;">Ok</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function getAllQuiz() {
            $.ajax({
                url: "./api/GetAllQuiz.php",
                method: "GET",
                data: {
                    folderId: localStorage.getItem("FolderId"),
                    userid: localStorage.getItem("UserId")
                },
                success: function(data) {
                    var quizfold = document.querySelector(".QuizContainer");
                    quizfold.innerText = "";
                    data = JSON.parse(data);
                    if (data.length == 0) {
                        console.log("pass");
                        return;
                    }


                    for (a of data) {
                        var quizfold = document.querySelector(".QuizContainer");
                        var addthis = document.createElement("div");
                        quizfold.append(addthis);
                        addthis.innerHTML = `<div style="height: 250px;background-color: #603F8B;border-style: double;border-width: 8px;
                border-color: #f21f57;border-radius: 10px;color: white; width: 900px; display: flex;
                flex-direction: row;">
                    <div style="width: 70%; border-right-style: solid;
                    border-color:#f698c5; display: flex; flex-direction: column; justify-content: center;">
                        <div style = "display:flex; flex-direction:row; align-items:center">
                            <div style = "margin-left:10px;">${a["QuizContainer_Id"]}</div>
                            <div style="overflow-y: auto; font-size: 25px; white-space:nowrap; margin-left: 10px;
                                margin-right: 10px;">${a["Quiz_Name"]}
                            </div>
                        </div>
                        <div style="overflow-x: auto; font-size: 15px; margin-left: 10px; margin-top: 10px; height: 110px;
                        background-color: #A16AE8; margin-right: 10px; word-break: break-all; border-radius: 5px; padding: 5px;">
                            ${a["Quiz_Description"]}
                        </div>

                        <div style="display: flex; flex-direction: row; justify-content: space-between; margin-right: 10px;
                        margin-top: 10px;">
                            <div style="display: flex; flex-direction: row; margin-left: 10px;">
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Type: </div>
                                    <div>${a["Quiz_Type"]}</div>
                                </div>
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Items: </div>
                                    <div>${a["Number_of_Items"]}</div>
                                </div>
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Recent Score: </div>
                                    <div>0</div>
                                </div>
                            </div>
    
                            <div style="display: flex; flex-direction: row; ${(a.hasOwnProperty("profid")) ? 'opacity:1;' : 'opacity:0;'}">
                                <div class = "fa-solid fa-trash trashme" style="margin-right: 10px;"></div>
                                <div class = "fa-solid fa-pen-to-square editme" type="button" data-bs-toggle="modal" data-bs-target="#EditTaskMe"></div>
                            </div>
                        </div>

                    </div>
                    <div>
                    </div>
                </div>`
                    }

                    var trashcan = document.querySelectorAll(".trashme");
                    for (var a of trashcan) {
                        a.addEventListener("click", function(e) {
                            var storId = e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText;
                            $.ajax({
                                url: "./api/deleteQuiz.php",
                                method: "POST",
                                data: {
                                    id: e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText
                                },
                                success: function(data) {
                                    console.log(data);
                                    getAllQuiz();
                                }
                            })
                        })
                    }

                    var editme = document.querySelectorAll(".editme");
                    for(var edt of editme){
                        console.log(edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText)
                        if(edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult"){
                            edt.style.opacity = "0";
                        }
                        else{
                            editme.addEventListener("click",function(e){
                                
                            })
                        }
                    }

                }
            })
        }
        $(document).ready(function() {
            getAllQuiz();
            $.ajax({
                url: "./api/buttonMod.php",
                method: "GET",
                data: {
                    userid: localStorage.getItem("UserId"),
                    folderId: localStorage.getItem("FolderId"),
                },
                success: function(data) {

                    if (data == "bad") {
                        console.log(data);
                        var choose = document.querySelector(".AddQuiz");
                        choose.style.pointerEvents = "none";
                        choose.style.opacity = "0";
                    } else {

                    }
                }
            })
            $(".HoldUName").text(localStorage.getItem("UserName"));
            $(".HoldUId").text(localStorage.getItem("UserId"));
            console.log(localStorage)

            $(".IdHold").text(localStorage.getItem("FolderId"))
            $(".NameHold").text(localStorage.getItem("FolderName"))


            $('#signupmodal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $('#editFoldermodal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $('#showTasks').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $("#EditTaskMe").on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })

            $(".AddQuestion").click(function(e) {
                if (e.target.innerText == "Ok") {
                    if ($(".quiztitle").val().trim() == "" || $(".quizdescrip").val().trim() == "" || $(".quiztype").val().trim() == "---") {
                        console.log("no");
                    } else {
                        e.target.innerText = "Add Questions"
                        var qtitle = document.querySelector(".quiztitle");
                        var qdesc = document.querySelector(".quizdescrip");
                        var qtype = document.querySelector(".quiztype");

                        qtitle.readOnly = true;
                        qdesc.readOnly = true;
                        qtype.disabled = true;

                        var addq = document.querySelector(".addSub")
                        var divme = document.createElement("div");
                        divme.setAttribute("class", "EditFolderbut SubmitQuizme subdelme");
                        divme.style = "margin-right: 20px; height: 50px;"
                        divme.setAttribute("aria-label", "Close");
                        addq.append(divme)
                        divme.innerText = "Submit"
                        divme.addEventListener("click", function(e) {
                            var proceed = false;
                            var questiontitle = document.querySelectorAll(".QuestionName");
                            var Ans = document.querySelectorAll(".Aans");
                            var Bans = document.querySelectorAll(".Bans");
                            var Cans = document.querySelectorAll(".Cans");
                            var Dans = document.querySelectorAll(".Dans");
                            var FlAns = document.querySelectorAll(".FlAns");
                            var opA = document.querySelectorAll(".QchoiceA");
                            var opB = document.querySelectorAll(".QchoiceB");
                            var opC = document.querySelectorAll(".QchoiceC");
                            var opD = document.querySelectorAll(".QchoiceD");

                            if (questiontitle.length == 0) {
                                proceed = false;
                                return;
                            }

                            var tr1 = true;
                            for (qq of questiontitle) {
                                if (qq.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }

                            var tr1 = true;
                            for (aa of Ans) {
                                if (aa.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }


                            var tr1 = true;
                            for (bb of Bans) {
                                if (bb.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }

                            var tr1 = true;
                            for (cc of Cans) {
                                if (cc.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }

                            var tr1 = true;
                            for (dd of Dans) {
                                if (dd.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }

                            var tr1 = true;
                            for (fl of FlAns) {
                                if (fl.value.trim() == "") {
                                    tr1 = false;
                                    return;
                                }
                            }

                            var count = 0;
                            var size = 0;
                            for (op1 of opA) {
                                if (op1.style.color == "rgb(202, 16, 106)") {
                                    count++;
                                }
                                size++;
                            }

                            for (op2 of opB) {
                                if (op2.style.color == "rgb(202, 16, 106)") {
                                    count++;
                                }
                                size++;
                            }

                            for (op3 of opC) {
                                if (op3.style.color == "rgb(202, 16, 106)") {
                                    count++;
                                }
                                size++;
                            }


                            for (op4 of opD) {
                                if (op4.style.color == "rgb(202, 16, 106)") {
                                    count++;
                                }
                                size++;
                            }

                            var confl = opA.length;
                            if (count < confl) {
                                return;
                            }

                            $.ajax({
                                url: "./api/AddQuiz.php",
                                method: "POST",
                                data: {
                                    title: $(".quiztitle").val().trim(),
                                    desc: $(".quizdescrip").val().trim(),
                                    type: $(".quiztype").val().trim(),
                                    items: questiontitle.length,
                                    folderId: localStorage.getItem("FolderId")
                                },
                                success: function(data) {
                                    var dat = parseInt(data);
                                    console.log(dat);

                                    if (qtype.value == "Mult") {
                                        for (qq of questiontitle) {
                                            var answerme;
                                            var optn1 = qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.value;
                                            var optn2 = qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.nextElementSibling.lastElementChild.value;
                                            var optn3 = qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.lastElementChild.value;
                                            var optn4 = qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.lastElementChild.value;
                                            console.log(optn1)
                                            console.log(optn2)
                                            console.log(optn3)
                                            console.log(optn4)

                                            console.log(qq.value);
                                            console.log(qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.value);
                                            if (qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.previousElementSibling.style.color == "rgb(202, 16, 106)") {
                                                answerme = qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.value;
                                            }

                                            console.log(qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.nextElementSibling.lastElementChild.value);
                                            if (qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.nextElementSibling.lastElementChild.previousElementSibling.style.color == "rgb(202, 16, 106)") {
                                                answerme = qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.nextElementSibling.lastElementChild.value
                                            }

                                            console.log(qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.lastElementChild.value);

                                            if (qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.lastElementChild.previousElementSibling.style.color == "rgb(202, 16, 106)") {
                                                answerme = qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.lastElementChild.value
                                            }
                                            console.log(qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.lastElementChild.value);
                                            if (qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.lastElementChild.previousElementSibling.style.color == "rgb(202, 16, 106)") {
                                                answerme = qq.parentElement.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.lastElementChild.value
                                            }

                                            console.log(answerme);

                                            console.log("")

                                            var optnlist = [optn1,optn2,optn3,optn4];

                                            (function(optnlistme){$.ajax({
                                                url: "./api/addQuestions.php",
                                                method: "POST",
                                                data: {
                                                    quest: qq.value,
                                                    ans: answerme,
                                                    QuizId: dat
                                                },
                                                success: function(data) {

                                                    var datpars = parseInt(data);

                                                    for(var obb of optnlistme){
                                                        console.log(obb);
                                                        $.ajax({
                                                            url: "./api/addOptions.php",
                                                            method: "POST",
                                                            data: {
                                                                option: obb,
                                                                QuestId: datpars
                                                            },
                                                            success: function(data) {

                                                            }
                                                        })
                                                    }

                                                }
                                            })})(optnlist)


                                        }
                                    } else {
                                        for (qq of questiontitle) {
                                            var answerme;
                                            console.log(qq.value);

                                            answerme = qq.parentElement.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.value;


                                            console.log(answerme);

                                            console.log("")

                                            $.ajax({
                                                url: "./api/addQuestions.php",
                                                method: "POST",
                                                data: {
                                                    quest: qq.value,
                                                    ans: answerme,
                                                    QuizId: dat
                                                },
                                                success: function(data) {
                                                }                                               
                                            })
                                        }
                                    }
                                }
                            })

                            console.log(questiontitle.length)

                            //$('#showTasks').modal('hide');

                        })


                    }
                } else {
                    var qtype = document.querySelector(".quiztype");

                    if (qtype.value == "Mult") {
                        var questionCont = document.querySelector(".Questcont");

                        var divcreate = document.createElement("div");
                        questionCont.append(divcreate);

                        divcreate.innerHTML = `<div style="height: 200px;background-color: rgb(251, 144, 208); width: 100%; margin-bottom: 10px; border-radius: 30px; padding-top: 10px;
    padding-bottom: 10px; position:relative;">
        <div class = "fa-solid fa-trash delQuest" style="position:absolute; bottom: 20px; left:15px; color:rgb(202, 16, 106);"></div>
        <div style="display: flex; flex-direction: row; align-items: center;">
            <div style="color:rgb(72, 1, 125); font-weight: bold; font-size: 20px; margin-left: 30px;">Question:</div>
            <input type="text" class = "QuestionName" placeholder="Question" style="width: 600px; margin-left: 20px; border-radius: 1000px;
            font-size: 18px; height: 50px; padding-left: 10px; padding-right: 10px;"> 
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-right: 30px;">
                    <div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold; cursor: pointer; border-style: solid;
                    border-radius: 100px; width: 35px; display: flex; flex-direction: row; justify-content: center;" class = "QchoiceA">A</div>
                    <input type="text" placeholder="choice" style="width: 200px; margin-left: 20px; border-radius: 1000px;
                    font-size: 20px; height: 40px; padding-left: 10px; padding-right: 10px;" class = "Aans">
                </div>

                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
                    <div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold; cursor: pointer;border-style: solid;
                    border-radius: 100px; width: 35px; display: flex; flex-direction: row; justify-content: center;" class = "QchoiceB">B</div>
                    <input type="text" placeholder="choice" style="width: 200px; margin-left: 20px; border-radius: 1000px;
                    font-size: 20px; height: 40px; padding-left: 10px; padding-right: 10px;" class = "Bans">
                </div>
            </div>

            <div style="display: flex; flex-direction: row; margin-top: 10px;">
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-right: 30px;">
                    <div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold; cursor: pointer;border-style: solid;
                    border-radius: 100px; width: 35px; display: flex; flex-direction: row; justify-content: center;" class = "QchoiceC">C</div>
                    <input type="text" placeholder="choice" style="width: 200px; margin-left: 20px; border-radius: 1000px;
                    font-size: 20px; height: 40px; padding-left: 10px; padding-right: 10px;" class = "Cans">
                </div>

                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
                    <div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold; cursor: pointer;border-style: solid;
                    border-radius: 100px; width: 35px; display: flex; flex-direction: row; justify-content: center;" class = "QchoiceD">D</div>
                    <input type="text" placeholder="choice" style="width: 200px; margin-left: 20px; border-radius: 1000px;
                    font-size: 20px; height: 40px; padding-left: 10px; padding-right: 10px;" class = "Dans">
                </div>
            </div>
        </div>
    </div>`

                        var delQuest = document.querySelectorAll(".delQuest");
                        var questionparent = document.querySelector(".Questcont");

                        delQuest[delQuest.length - 1].addEventListener("click", function(e) {
                            questionparent.removeChild(e.target.parentElement.parentElement);
                        })

                        var opA = document.querySelectorAll(".QchoiceA");
                        var opB = document.querySelectorAll(".QchoiceB");
                        var opC = document.querySelectorAll(".QchoiceC");
                        var opD = document.querySelectorAll(".QchoiceD");
                        console.log(opA)

                        if (opA.length == 0) {} else {
                            var count = 0;
                            for (var loop = 0; loop < opA.length; loop++) {
                                opA[loop].addEventListener("click", (function(loopCopy) {
                                    return function(e) {
                                        e.target.style.color = "rgb(202, 16, 106)";
                                        e.target.style.borderColor = "rgb(202, 16, 106)"

                                        opB[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.color = "rgb(72, 1, 125)"

                                        opB[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                    }
                                })(loop))

                                opB[loop].addEventListener("click", (function(loopCopy) {
                                    return function(e) {
                                        e.target.style.color = "rgb(202, 16, 106)";
                                        e.target.style.borderColor = "rgb(202, 16, 106)"

                                        opA[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.color = "rgb(72, 1, 125)"

                                        opA[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                    }
                                })(loop))


                                opC[loop].addEventListener("click", (function(loopCopy) {
                                    return function(e) {
                                        e.target.style.color = "rgb(202, 16, 106)";
                                        e.target.style.borderColor = "rgb(202, 16, 106)"

                                        opB[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opA[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.color = "rgb(72, 1, 125)"

                                        opB[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opA[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opD[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                    }
                                })(loop))

                                opD[loop].addEventListener("click", (function(loopCopy) {
                                    return function(e) {
                                        e.target.style.color = "rgb(202, 16, 106)";
                                        e.target.style.borderColor = "rgb(202, 16, 106)"

                                        opB[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.color = "rgb(72, 1, 125)"
                                        opA[loopCopy].style.color = "rgb(72, 1, 125)"

                                        opB[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opC[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                        opA[loopCopy].style.borderColor = "rgb(72, 1, 125)"
                                    }
                                })(loop))
                            }
                        }
                    } else {
                        var questionCont = document.querySelector(".Questcont");

                        var divcreate = document.createElement("div");
                        questionCont.append(divcreate);

                        divcreate.innerHTML = `<div style="height: 200px;background-color: rgb(251, 144, 208); width: 100%; margin-bottom: 10px; border-radius: 30px; padding-top: 10px;
    padding-bottom: 10px; position:relative;">
        <div class = "fa-solid fa-trash delQuest" style="position:absolute; bottom: 20px; left:15px; color:rgb(202, 16, 106);"></div>
        <div style="display: flex; flex-direction: row; align-items: center;">
            <div style="color:rgb(72, 1, 125); font-weight: bold; font-size: 20px; margin-left: 30px;">Question:</div>
            <input type="text" class = "QuestionName" placeholder="Question" style="width: 600px; margin-left: 20px; border-radius: 1000px;
            font-size: 18px; height: 50px; padding-left: 10px; padding-right: 10px;"> 
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-right: 30px;">
                    <div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold;  width: 35px; display: flex; flex-direction: row; justify-content: center;">Answer</div>
                    <input type="text" placeholder="choice" style="width: 300px; margin-left: 20px; border-radius: 1000px;
                    font-size: 20px; height: 50px; padding-left: 10px; padding-right: 10px;" class = "FlAns">
                </div>
            </div>
        </div>
    </div>`
                    }

                    var delQuest = document.querySelectorAll(".delQuest");
                    var questionparent = document.querySelector(".Questcont");

                    delQuest[delQuest.length - 1].addEventListener("click", function(e) {
                        questionparent.removeChild(e.target.parentElement.parentElement);
                    })
                }
            })

            $(".AddQuiz").click(function(e) {
                $(".AddQuestion").text("Ok");
                $(".quiztitle").val("")
                $(".quizdescrip").val("")
                $(".quiztype").val("---")

                var qtitle = document.querySelector(".quiztitle");
                var qdesc = document.querySelector(".quizdescrip");
                var qtype = document.querySelector(".quiztype");

                qtitle.readOnly = false;
                qdesc.readOnly = false;
                qtype.disabled = false;

                var questionCont = document.querySelector(".Questcont");
                questionCont.innerText = ""

                var addq = document.querySelector(".subdelme");
                addq.parentElement.removeChild(addq);

            })


            $(".SubmitQuizme").click(function(e) {
                if ($(".quiztitle").val().trim() == "" || $(".quizdescrip").val().trim() == "" || $(".quiztype").val().trim() == "---") {} else {
                    $.ajax({
                        url: "./api/AddQuiz.php",
                        method: "POST",
                        data: {
                            title: $(".quiztitle").val().trim(),
                            desc: $(".quizdescrip").val().trim(),
                            type: $(".quiztype").val().trim(),
                            items: 0,
                            folderId: localStorage.getItem("FolderId")
                        },
                        success: function(data) {
                            console.log("success");
                            getAllQuiz();
                        }
                    })
                }

            })

            $(".Submitbut").click(function(e) {
                var quizfold = document.querySelector(".QuizContainer");
                quizfold.innerText = "";
                if ($(".fnameinpp").val().trim() == "") {
                    getAllQuiz();
                    $(".fnameinpp").val("");
                } else {
                    $.ajax({
                        url: "./api/GetQuiz.php",
                        method: "GET",
                        data: {
                            name: $(".fnameinpp").val().trim(),
                            folderId: localStorage.getItem("FolderId"),
                            userid: localStorage.getItem("UserId")
                        },
                        success: function(data) {
                            data = JSON.parse(data);
                            $(".fnameinpp").val("");
                            if (data.length == 0) {
                                getAllQuiz();
                                return;
                            }
                            console.log(data);


                            for (a of data) {
                                var quizfold = document.querySelector(".QuizContainer");
                                var addthis = document.createElement("div");
                                quizfold.append(addthis);
                                addthis.innerHTML = `<div style="height: 250px;background-color: #603F8B;border-style: double;border-width: 8px;
                border-color: #f21f57;border-radius: 10px;color: white; width: 900px; display: flex;
                flex-direction: row;">
                    <div style="width: 70%; border-right-style: solid;
                    border-color:#f698c5; display: flex; flex-direction: column; justify-content: center;">
                        <div style = "display:flex; flex-direction:row; align-items:center">
                            <div style = "margin-left:10px;">${a["QuizContainer_Id"]}</div>
                            <div style="overflow-y: auto; font-size: 25px; white-space:nowrap; margin-left: 10px;
                                margin-right: 10px;">${a["Quiz_Name"]}
                            </div>
                        </div>
                        <div style="overflow-x: auto; font-size: 15px; margin-left: 10px; margin-top: 10px; height: 110px;
                        background-color: #A16AE8; margin-right: 10px; word-break: break-all; border-radius: 5px; padding: 5px;">
                            ${a["Quiz_Description"]}
                        </div>

                        <div style="display: flex; flex-direction: row; justify-content: space-between; margin-right: 10px;
                        margin-top: 10px;">
                            <div style="display: flex; flex-direction: row; margin-left: 10px;">
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Type: </div>
                                    <div>${a["Quiz_Type"]}</div>
                                </div>
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Items: </div>
                                    <div>${a["Number_of_Items"]}</div>
                                </div>
                                <div style="display: flex; flex-direction: row; margin-right: 10px;">
                                    <div>Recent Score: </div>
                                    <div>0</div>
                                </div>
                            </div>
    
                            <div style="display: flex; flex-direction: row; ${(a.hasOwnProperty("profid")) ? 'opacity:1;' : 'opacity:0;'}">
                                <div class = "fa-solid fa-trash trashme" style="margin-right: 10px;"></div>
                                <div class = "fa-solid fa-pen-to-square editme" type="button" data-bs-toggle="modal" data-bs-target="#EditTaskMe"></div>
                            </div>
                        </div>

                    </div>
                    <div>
                    </div>
                </div>`

                            }
                            var trashcan = document.querySelectorAll(".trashme");
                            for (var a of trashcan) {
                                console.log(a);
                                a.addEventListener("click", function(e) {
                                    var storId = e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText;
                                    $.ajax({
                                        url: "./api/deleteQuiz.php",
                                        method: "POST",
                                        data: {
                                            id: e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText
                                        },
                                        success: function(data) {
                                            console.log(data);
                                            getAllQuiz();
                                        }
                                    })
                                })
                            }
                        }
                    })
                }
            })

        })
    </script>

</body>

</html>