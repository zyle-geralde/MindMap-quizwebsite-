<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/tt-norms-pro?styles=70921,70916,70923,70922,70915,70914,70918,70917,70920,70919,70909,70908,70913,70912,70907,70906,70911,70910" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="./css/mainpagestyle.css" rel="stylesheet">
    
    <link href="./css/folderstyles.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body class="mainbody">
    <div class="mainhead">
    <div class="center">
            <div class="circle-container">
                <div class="circle-1"></div>
            </div>
            <div class="user-info">
                <div class="username-info">
                    <div class="label">Username:</div>
                    <div class="username HoldUName"></div>
                </div>
            </div>
        </div>

        <div class="search-container">
            <div class="search-input">
                <input class="fnameinpp" type="text" name="qsearch" placeholder="Quiz Name..." required style="width:320px">
                <div class="search-btn Submitbut">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>

        <div class="menu-options">
            <div class="logout-btn Logbut">Log Out</div>
            <div class="up-level-btn">
                <i class="fa fa-level-up"></i>
            </div>
        </div>
    </div>


    <div class="mainFolderCont">
        <div class="cf1">
            <a class="cfbtn" href = "mainpage.php">Back</a>
            <div class="cf1i" style="display: none;">
                <div class="placeHolder">Folder Id:</div>
                <div class="placeHolder" style="display: none;" class="IdHold"></div>
            </div>

        </div>

        <div class="cf2">
            <div class="middleHeader">
                <div class="cf2i">
                    <div class="placeHolder">Folder Name:</div>
                    <div class="folderName" class="NameHold">
                    </div>
                </div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#showTasks" class="AddQuiz">
                    Add Quiz
                </button>
            </div>


            <div class="QuizContainer">

            </div>
        </div>
    </div>

    <div class="modal fade" id="showTasks" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class=addquest>
                    <div class="mc1">
                        <div class="mc1Holder">
                            <div class="mc1HolderD1">Title:</div>
                            <input type="text" placeholder="Quiz Title" class="quiztitle">
                        </div>

                        <div class="mc1Holder2">
                            <div  class="mc1HolderD1" >Description:</div>
                            <textarea type="text" placeholder="Quiz Description" class="quizdescrip"></textarea>
                        </div>

                        <div class="mc1Holder3">
                            <div class="mc1Holder3D1">Type:</div>
                            <select class="quiztype">
                                <option value="---">---</option>
                                <option value="Mult">Multiple Choice</option>
                                <option value="Flash">FlashCard</option>
                            </select>
                        </div>
                    </div>

                    <div class="Questcont">
                    </div>


                    <div class="addSub">
                        <div class="EditFolderbut AddQuestion" >Ok</div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="EditTaskMe" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="editquest">
                    <div class="eq">
                        <div class="eqHolder1">
                            <div class="eqHolderP1">Title:</div>
                            <input type="text" placeholder="Quiz Title"class="quiztitleedit">
                        </div>

                        <div class="eqHolder2">
                            <div class="eqHolderP1">Description:</div>
                            <textarea type="text" placeholder="Quiz Description" class="quizdescripedit"></textarea>
                        </div>

                        <div class="eqHolder3">
                            <div class="eqHolderP1">Type:</div>
                            <select class="quiztypeedit">
                                <option value="---">---</option>
                                <option value="Mult">Multiple Choice</option>
                                <option value="Flash">FlashCard</option>
                            </select>
                        </div>
                    </div>

                    <div class="Questcontedit">
                    </div>


                    <div class="addSub" >
                        <div class="EditFolderbut EditQuiz">Apply Changes</div>
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
                        addthis.classList.add("holder");
                        quizfold.append(addthis);
                        addthis.innerHTML = `<div class="quizCC">
                        <div class ="quizCCInner">
                            <div class = "OpenTaskhead">
                                <div style = "display:none;">
                                ${a["QuizContainer_Id"]}
                                </div>
                                <div class="quizCCName">
                                ${a["Quiz_Name"]}
                                </div>
                            </div>
                        <div class = "OpenBodyQuiz">
                            ${a["Quiz_Description"]}
                        </div>
                        <div class="quizCCInfo">
                            <div class="displayF">
                                <div class="displayF">
                                    <div>Type: </div>
                                    <div>${a["Quiz_Type"]}</div>
                                </div>
                                <div class="displayF">
                                    <div>Items: </div>
                                    <div>${a["Number_of_Items"]}</div>
                                </div>
                            </div>
    
                            <div class="displayF" ${(a.hasOwnProperty("profid")) ? 'opacity:1;' : 'opacity:0;'}">
                                <div class = "fa-solid fa-trash trashme" style="margin-right: 10px;"></div>
                                <div class = "fa-solid fa-pen-to-square editme" type="button" data-bs-toggle="modal" data-bs-target="#EditTaskMe"></div>
                            </div>
                        </div>

                    </div>
                    <div>
                    </div>
                </div>`
                    }

                    var openhead = document.querySelectorAll(".OpenTaskhead");
                    var openbody = document.querySelectorAll(".OpenBodyQuiz");
                    for (var opnh of openhead) {
                        (function(opnhh) {
                            opnhh.addEventListener("click", function(e) {
                                if (opnhh.nextElementSibling.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                                    localStorage.setItem("QuizId", opnhh.firstElementChild.innerText)
                                    window.location.href = "./AnswerMult.php"
                                } else {
                                    localStorage.setItem("QuizId", opnhh.firstElementChild.innerText)
                                    window.location.href = "./FlashCardAns.php"
                                }
                            })
                        })(opnh)
                    }

                    for (var opnb of openbody) {
                        (function(opnbb) {
                            opnbb.addEventListener("click", function(e) {
                                if (opnbb.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                                    localStorage.setItem("QuizId", opnbb.previousElementSibling.firstElementChild.innerText)
                                    window.location.href = "./AnswerMult.php"
                                } else {
                                    localStorage.setItem("QuizId", opnbb.previousElementSibling.firstElementChild.innerText)
                                    window.location.href = "./FlashCardAns.php"
                                }
                            })
                        })(opnb)
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
                    for (var edt of editme) {
                        console.log(edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText)
                        if (edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                            edt.style.opacity = "0";
                        } else {
                            (function(edtp) {
                                edtp.addEventListener("click", function(e) {
                                    $.ajax({
                                        url: "./api/getFlashCard.php",
                                        method: "GET",
                                        data: {
                                            qid: parseInt(edtp.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText),
                                        },
                                        success: function(data) {
                                            var handle = JSON.parse(data);
                                            //console.log(handle)

                                            var qtypeedit = document.querySelector(".quiztypeedit")
                                            $(".quiztypeedit").val(edtp.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText);
                                            qtypeedit.disabled = true;
                                            console.log(edtp.parentElement.parentElement.previousElementSibling.innerText)
                                            $(".quizdescripedit").val(edtp.parentElement.parentElement.previousElementSibling.innerText);

                                            $(".quiztitleedit").val(edtp.parentElement.parentElement.previousElementSibling.previousElementSibling.lastElementChild.innerText);

                                            localStorage.setItem("QuizId", parseInt(edtp.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText));
                                            console.log(localStorage);

                                            var questionCont = document.querySelector(".Questcontedit");
                                            questionCont.innerText = ""

                                            for (var hnd of handle) {
                                                var questionCont = document.querySelector(".Questcontedit");

                                                var divcreate = document.createElement("div");
                                                questionCont.append(divcreate);

                                                divcreate.innerHTML = divcreate.innerHTML = 
                                                `<div class="question-container">
                                                    <div class="question-header">
                                                        <div class="Qeditid">${hnd["Question_Id"]}</div>
                                                        <div class="question-label">Question:</div>
                                                        <input type="text" class="QuestionEditName" placeholder="Question" value="${hnd["Question"]}"> 
                                                    </div>

                                                    <div class="answer-container">
                                                        <div class="answer-header">
                                                            <div class="answer-label">Answer</div>
                                                            <input type="text" placeholder="choice" class="FlEditAns" value="${hnd["Answer"]}">
                                                        </div>
                                                    </div>
                                                </div>
                                                `;

                                            }
                                        }
                                    })
                                })
                            })(edt);
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

            $(".Logbut").click(function(e){
                window.location.href = "./login.php";
            })


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

            $(".EditQuiz").click(function(data) {
                $.ajax({
                    url: "./api/updateQuiz.php",
                    method: "POST",
                    data: {
                        quizid: parseInt(localStorage.getItem("QuizId")),
                        title: $(".quiztitleedit").val(),
                        descme: $(".quizdescripedit").val()
                    },
                    success: function(data) {
                        $('#EditTaskMe').modal('hide');
                        getAllQuiz();
                    }
                })

                var questid = document.querySelectorAll(".Qeditid");
                var questname = document.querySelectorAll(".QuestionEditName");
                var questans = document.querySelectorAll(".FlEditAns");
                console.log(questid);
                console.log(questname);
                console.log(questans);

                for (var ll = 0; ll < questid.length; ll++) {
                    $.ajax({
                        url: "./api/updateQuestion.php",
                        method: "POST",
                        data: {
                            qstid: parseInt(questid[ll].innerText),
                            qstname: questname[ll].value,
                            qstans: questans[ll].value
                        },
                        success: function(data) {

                        }
                    })
                }
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

                                            var optnlist = [optn1, optn2, optn3, optn4];

                                            (function(optnlistme) {
                                                $.ajax({
                                                    url: "./api/addQuestions.php",
                                                    method: "POST",
                                                    data: {
                                                        quest: qq.value,
                                                        ans: answerme,
                                                        QuizId: dat
                                                    },
                                                    success: function(data) {

                                                        var datpars = parseInt(data);

                                                        for (var obb of optnlistme) {
                                                            console.log(obb);
                                                            (function(obbo){$.ajax({
                                                                url: "./api/addOptions.php",
                                                                method: "POST",
                                                                data: {
                                                                    option: obbo,
                                                                    QuestId: datpars
                                                                },
                                                                success: function(data) {

                                                                }
                                                            })})(obb);
                                                        }

                                                    }
                                                })
                                            })(optnlist)


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
                                                success: function(data) {}
                                            })
                                        }
                                    }
                                }
                            })

                            console.log(questiontitle.length)

                            $('#showTasks').modal('hide');
                            getAllQuiz();

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
                        <div style = "display:flex; flex-direction:row; align-items:center" class = "OpenTaskhead">
                            <div style = "margin-left:10px;">${a["QuizContainer_Id"]}</div>
                            <div style="overflow-y: auto; font-size: 25px; white-space:nowrap; margin-left: 10px;
                                margin-right: 10px;">${a["Quiz_Name"]}
                            </div>
                        </div>
                        <div style="overflow-x: auto; font-size: 15px; margin-left: 10px; margin-top: 10px; height: 110px;
                        background-color: #A16AE8; margin-right: 10px; word-break: break-all; border-radius: 5px; padding: 5px;" class = "OpenBodyQuiz">
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

                            var openhead = document.querySelectorAll(".OpenTaskhead");
                            var openbody = document.querySelectorAll(".OpenBodyQuiz");
                            for (var opnh of openhead) {
                                (function(opnhh) {
                                    opnhh.addEventListener("click", function(e) {
                                        if (opnhh.nextElementSibling.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                                            localStorage.setItem("QuizId", opnhh.firstElementChild.innerText)
                                            window.location.href = "./AnswerMult.php"
                                        } else {
                                            localStorage.setItem("QuizId", opnhh.firstElementChild.innerText)
                                            window.location.href = "./FlashCardAns.php"
                                        }
                                    })
                                })(opnh)
                            }

                            for (var opnb of openbody) {
                                (function(opnbb) {
                                    opnbb.addEventListener("click", function(e) {
                                        if (opnbb.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                                            localStorage.setItem("QuizId", opnbb.previousElementSibling.firstElementChild.innerText)
                                            window.location.href = "./AnswerMult.php"
                                        } else {
                                            localStorage.setItem("QuizId", opnbb.previousElementSibling.firstElementChild.innerText)
                                            window.location.href = "./FlashCardAns.php"
                                        }
                                    })
                                })(opnb)
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

                            var editme = document.querySelectorAll(".editme");
                            for (var edt of editme) {
                                console.log(edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText)
                                if (edt.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText == "Mult") {
                                    edt.style.opacity = "0";
                                } else {
                                    (function(edtp) {
                                        edtp.addEventListener("click", function(e) {
                                            $.ajax({
                                                url: "./api/getFlashCard.php",
                                                method: "GET",
                                                data: {
                                                    qid: parseInt(edtp.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText),
                                                },
                                                success: function(data) {
                                                    var handle = JSON.parse(data);
                                                    //console.log(handle)

                                                    var qtypeedit = document.querySelector(".quiztypeedit")
                                                    $(".quiztypeedit").val(edtp.parentElement.parentElement.firstElementChild.firstElementChild.lastElementChild.innerText);
                                                    qtypeedit.disabled = true;
                                                    console.log(edtp.parentElement.parentElement.previousElementSibling.innerText)
                                                    $(".quizdescripedit").val(edtp.parentElement.parentElement.previousElementSibling.innerText);

                                                    $(".quiztitleedit").val(edtp.parentElement.parentElement.previousElementSibling.previousElementSibling.lastElementChild.innerText);

                                                    localStorage.setItem("QuizId", parseInt(edtp.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText));
                                                    console.log(localStorage);

                                                    var questionCont = document.querySelector(".Questcontedit");
                                                    questionCont.innerText = ""

                                                    for (var hnd of handle) {
                                                        var questionCont = document.querySelector(".Questcontedit");

                                                        var divcreate = document.createElement("div");
                                                        questionCont.append(divcreate);

                                                        divcreate.innerHTML = `<div style="height: 200px;background-color: rgb(251, 144, 208); width: 100%; margin-bottom: 10px; border-radius: 30px; padding-top: 10px;
padding-bottom: 10px; position:relative;">
<div style="display: flex; flex-direction: row; align-items: center;">
<div style = "display:flex; flex-direction:row; align-items:center;">
<div class = "Qeditid" style = "margin-left: 30px;">${hnd["Question_Id"]}</div>
<div style="color:rgb(72, 1, 125); font-weight: bold; font-size: 20px;">Question:</div>
</div>

<input type="text" class = "QuestionEditName" placeholder="Question" style="width: 600px; margin-left: 20px; border-radius: 1000px;
font-size: 18px; height: 50px; padding-left: 10px; padding-right: 10px;" value = ${hnd["Question"]}> 
</div>
<div style="display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
<div style="display: flex; flex-direction: row;">
<div style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-right: 30px;">
<div style="font-size: 20px; color: rgb(72, 1, 125); font-weight: bold;  width: 35px; display: flex; flex-direction: row; justify-content: center;">Answer</div>
<input type="text" placeholder="choice" style="width: 300px; margin-left: 20px; border-radius: 1000px;
font-size: 20px; height: 50px; padding-left: 10px; padding-right: 10px;" class = "FlEditAns" value = ${hnd["Answer"]}>
</div>
</div>
</div>
</div>`
                                                    }
                                                }
                                            })
                                        })
                                    })(edt);
                                }
                            }
                        }
                    })
                }
            })

        })
    </script>

</body>

</html>