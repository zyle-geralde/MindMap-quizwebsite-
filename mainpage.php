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


    <div class="mainFolderCont">
        <button type="button" data-bs-toggle="modal" data-bs-target="#signupmodal" class="AddFolder">
            Add Folder
        </button>
        <div class="FolderCont">
        </div>
    </div>



    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">

            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupmodalLabel">Add a Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #A16AE8;">
                    <div class=AddFolderForm>
                        <div>
                            <div class="format1">
                                <div style="font-size: 20px;"> Enter Folder Name:</div>
                                <input class=qnameinp type="text" placeholder="  Folder name">
                            </div>
                            <div class="format1">
                                <div style="font-size: 20px;"> Enter Description:</div>
                                <textarea class=qdecinp type="text" placeholder="  Description"></textarea>
                            </div>
                            <div style="display: flex; flex-direction: row; justify-content: center; margin-top: 30px;">
                                <div class="AddFolderbut" style="margin-right: 20px;" data-bs-dismiss="modal" aria-label="Close">Add</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editFoldermodal" tabindex="-1" role="dialog" aria-labelledby="editFolderLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog mm" role="document">

            <div class="modal-content" style="width: 550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFoldermodal">Edit Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #A16AE8;">
                    <div class=AddFolderForm>
                        <div>
                            <div class="format1">
                                <div style="font-size: 20px;">ID:</div>
                                <input class=Idinp type="text" readonly>
                            </div>
                            <div class="format1">
                                <div style="font-size: 20px;"> Enter Folder Name:</div>
                                <input class=Eqnameinp type="text" placeholder="  Folder name">
                            </div>
                            <div class="format1">
                                <div style="font-size: 20px;"> Enter Description:</div>
                                <textarea class=Eqdecinp type="text" placeholder="  Description"></textarea>
                            </div>
                            <div style="display: flex; flex-direction: row; justify-content: center; margin-top: 30px;">
                                <div class="EditFolderbut" style="margin-right: 20px;" data-bs-dismiss="modal" aria-label="Close">Edit</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="showTasks" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true" style="color: black;font-family: 'Dosis', sans-serif;">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: fit-content;">
            <div class=addquest>

            </div>
        </div>
    </div>

    <script>
        function getAllFolder() {
            var storage = localStorage;
            console.log(storage);

            $(".HoldUName").text(localStorage.getItem("UserName"));
            $(".HoldUId").text(localStorage.getItem("UserId"));
            $.ajax({
                url: "./api/GetAllFolder.php",
                method: "GET",
                data: {
                    userId: localStorage.getItem("UserId")
                },
                success: function(data) {
                    var data = JSON.parse(data);
                    console.log(data)
                    var Foldercont = document.querySelector(".FolderCont");
                    Foldercont.innerText = "";
                    for (a of data) {
                        var addhere = document.querySelector(".FolderCont");
                        var folditem = document.createElement("div");
                        folditem.setAttribute("class", "folderItemcont");
                        addhere.insertBefore(folditem, addhere.firstChild);
                        var fid = a["Folder_Id"];
                        var fname = a["Folder_Name"];

                        var niddiv = document.createElement("div");
                        niddiv.style.display = "flex";
                        niddiv.style.flexDirection = "row";
                        niddiv.style.alignItems = "center";
                        folditem.append(niddiv);

                            //Immediately invoked function
                        (function(fid, fname) {
                            niddiv.addEventListener("click", function(e) {
                                localStorage.setItem("FolderId", fid);
                                localStorage.setItem("FolderName", fname);
                                window.location.href = "./FolderPage.php"
                            })
                        })(fid, fname);

                        var idcont = document.createElement("div");
                        idcont.setAttribute("class", "folderid");
                        niddiv.append(idcont);
                        idcont.style.marginLeft = "10px"
                        idcont.innerText = a["Folder_Id"]

                        var foldname = document.createElement("div");
                        foldname.setAttribute("class", "Foldname");
                        niddiv.append(foldname);
                        foldname.innerText = a["Folder_Name"]


                        var folddesc = document.createElement("div");
                        folddesc.innerText = a["Folder_Description"]
                        folddesc.setAttribute("class", "Folddesc");
                        folditem.append(folddesc);


                        (function(fid, fname) {
                            folddesc.addEventListener("click", function(e) {
                                localStorage.setItem("FolderId", fid);
                                localStorage.setItem("FolderName", fname);
                                window.location.href = "./FolderPage.php"
                            })
                        })(fid, fname);


                        var numcont = document.createElement("div");
                        numcont.setAttribute("class", "numcont");

                        var numname = document.createElement("div");
                        numcont.append(numname);
                        numname.innerText = "Number of Items"


                        var numcount = document.createElement("div");
                        numcount.setAttribute("class", "numcount");
                        numcont.append(numcount);
                        numcount.innerText = a["Number_of_Items"]

                        var divcont = document.createElement("div");
                        divcont.style.display = "flex";
                        divcont.style.flexDirection = "row";
                        divcont.style.alignItems = "center";
                        divcont.append(numcont);
                        folditem.append(divcont);

                        var iconcont = document.createElement("div");
                        iconcont.style.display = "flex";
                        iconcont.style.flexDirection = "row";
                        divcont.append(iconcont);


                        if (a.hasOwnProperty("profid")) {
                            var trash = document.createElement("i");
                            trash.setAttribute("class", "editme fa-solid fa-trash");
                            trash.style.cursor = "pointer"
                            iconcont.append(trash)
                            trash.addEventListener("click", function(e) {
                                var idd = parseInt(e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText);
                                $.ajax({
                                    url: "./api/deleteFolder.php",
                                    method: "POST",
                                    data: {
                                        id: idd
                                    },
                                    success: function(e) {
                                        getAllFolder();
                                    }
                                })
                            })

                            var edit = document.createElement("i");
                            edit.setAttribute("class", "editme fa-solid fa-pen-to-square");
                            edit.style.cursor = "pointer"
                            edit.style.marginLeft = "10px"
                            edit.setAttribute("data-bs-toggle", "modal");
                            edit.setAttribute("data-bs-target", "#editFoldermodal");
                            iconcont.append(edit)

                            edit.addEventListener("click", function(e) {
                                var idd = parseInt(e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText);
                                var ename = document.querySelector(".Eqnameinp");
                                var edesc = document.querySelector(".Eqdecinp");
                                var eid = document.querySelector(".Idinp");

                                ename.value = e.target.parentElement.parentElement.parentElement.firstElementChild.lastElementChild.innerText
                                edesc.value = e.target.parentElement.parentElement.parentElement.firstElementChild.nextElementSibling.innerText
                                eid.value = idd;

                            })
                        } else {

                        }

                    }
                }
            })
        }

        $(document).ready(function() {
            getAllFolder();
            $('#signupmodal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $('#editFoldermodal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $('#showTasks').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $(".AddFolderbut").click(function(e) {
                if ($(".qnameinp").val().trim() == "" || $(".qdecinp").val().trim() == "") {
                    return;
                }
                $.ajax({
                    url: "./api/addFolder.php",
                    method: "POST",
                    data: {
                        name: $(".qnameinp").val(),
                        description: $(".qdecinp").val(),
                        items: 0,
                        userId: localStorage.getItem("UserId"),
                    },
                    success: function(data) {
                        console.log("success");
                        $(".qnameinp").val("")
                        $(".qdecinp").val("")
                        getAllFolder();
                    }
                })
            })

            $(".Submitbut").click(function(data) {
                if ($(".fnameinpp").val().trim() === "") {
                    getAllFolder();
                } else {
                    $.ajax({
                        url: "./api/GetFolder.php",
                        method: "GET",
                        data: {
                            name: $(".fnameinpp").val(),
                            userId: localStorage.getItem("UserId")
                        },
                        success: function(data) {
                            if (data.length == 0) {
                                getAllFolder();
                                return
                            }
                            var data = JSON.parse(data);
                            var Foldercont = document.querySelector(".FolderCont");
                            Foldercont.innerText = "";
                            for (a of data) {
                                var addhere = document.querySelector(".FolderCont");
                                var folditem = document.createElement("div");
                                folditem.setAttribute("class", "folderItemcont");
                                addhere.insertBefore(folditem, addhere.firstChild);

                                var fid = a["Folder_Id"];
                                var fname = a["Folder_Name"];

                                var niddiv = document.createElement("div");
                                niddiv.style.display = "flex";
                                niddiv.style.flexDirection = "row";
                                niddiv.style.alignItems = "center";
                                folditem.append(niddiv);

                                                                //Immediately invoked function
                                (function(fid, fname) {
                                    niddiv.addEventListener("click", function(e) {
                                        localStorage.setItem("FolderId", fid);
                                        localStorage.setItem("FolderName", fname);
                                        window.location.href = "./FolderPage.php"
                                    })
                                })(fid, fname);

                                var idcont = document.createElement("div");
                                idcont.setAttribute("class", "folderid");
                                niddiv.append(idcont);
                                idcont.style.marginLeft = "10px"
                                idcont.innerText = a["Folder_Id"]

                                var foldname = document.createElement("div");
                                foldname.setAttribute("class", "Foldname");
                                niddiv.append(foldname);
                                foldname.innerText = a["Folder_Name"]


                                var folddesc = document.createElement("div");
                                folddesc.innerText = a["Folder_Description"]
                                folddesc.setAttribute("class", "Folddesc");
                                folditem.append(folddesc);

                                (function(fid, fname) {
                                    folddesc.addEventListener("click", function(e) {
                                        localStorage.setItem("FolderId", fid);
                                        localStorage.setItem("FolderName", fname);
                                        window.location.href = "./FolderPage.php"
                                    })
                                })(fid, fname);


                                var numcont = document.createElement("div");
                                numcont.setAttribute("class", "numcont");

                                var numname = document.createElement("div");
                                numcont.append(numname);
                                numname.innerText = "Number of Items"


                                var numcount = document.createElement("div");
                                numcount.setAttribute("class", "numcount");
                                numcont.append(numcount);
                                numcount.innerText = a["Number_of_Items"]

                                var divcont = document.createElement("div");
                                divcont.style.display = "flex";
                                divcont.style.flexDirection = "row";
                                divcont.style.alignItems = "center";
                                divcont.append(numcont);
                                folditem.append(divcont);

                                var iconcont = document.createElement("div");
                                iconcont.style.display = "flex";
                                iconcont.style.flexDirection = "row";
                                divcont.append(iconcont);

                                if (a.hasOwnProperty("profid")) {
                                    var trash = document.createElement("i");
                                    trash.setAttribute("class", "editme fa-solid fa-trash");
                                    trash.style.cursor = "pointer"
                                    iconcont.append(trash)
                                    trash.addEventListener("click", function(e) {
                                        var idd = parseInt(e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText);
                                        $.ajax({
                                            url: "./api/deleteFolder.php",
                                            method: "POST",
                                            data: {
                                                id: idd
                                            },
                                            success: function(e) {
                                                getAllFolder();
                                            }
                                        })
                                    })

                                    var edit = document.createElement("i");
                                    edit.setAttribute("class", "editme fa-solid fa-pen-to-square");
                                    edit.style.cursor = "pointer"
                                    edit.style.marginLeft = "10px"
                                    edit.setAttribute("data-bs-toggle", "modal");
                                    edit.setAttribute("data-bs-target", "#editFoldermodal");
                                    iconcont.append(edit)

                                    edit.addEventListener("click", function(e) {
                                        var idd = parseInt(e.target.parentElement.parentElement.parentElement.firstElementChild.firstElementChild.innerText);
                                        var ename = document.querySelector(".Eqnameinp");
                                        var edesc = document.querySelector(".Eqdecinp");
                                        var eid = document.querySelector(".Idinp");

                                        ename.value = e.target.parentElement.parentElement.parentElement.firstElementChild.lastElementChild.innerText
                                        edesc.value = e.target.parentElement.parentElement.parentElement.firstElementChild.nextElementSibling.innerText
                                        eid.value = idd;

                                    })
                                } else {

                                }

                            }
                        }
                    })
                }
            })

            $(".EditFolderbut").click(function(e) {
                var Idme = parseInt($(".Idinp").val());
                var newname = $(".Eqnameinp").val();
                var newdesc = $(".Eqdecinp").val();
                console.log(Idme, newname.newdesc)

                if ($(".Eqnameinp").val().trim() == "" || $(".Eqdecinp").val().trim() == "") {
                    return;
                }
                $.ajax({
                    url: "./api/updateFolder.php",
                    method: "POST",
                    data: {
                        name: newname,
                        desc: newdesc,
                        id: Idme
                    },
                    success: function(data) {
                        getAllFolder();
                    }
                })

            })

            $(".Logbut").click(function(e){
                window.location.href = "./login.php";
            })
        })
    </script>

</body>

</html>