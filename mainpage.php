<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/tt-norms-pro?styles=70921,70916,70923,70922,70915,70914,70918,70917,70920,70919,70909,70908,70913,70912,70907,70906,70911,70910" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="./css/mainstyle.css" rel="stylesheet">
    <link href="./css/mainpagestyle.css" rel="stylesheet">

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
                <!-- <div class="user-id-info">
                    <div class="label">UserId:</div>
                    <div class="userid HoldUId"></div>
                </div> -->
            </div>
        </div>




        <div class="search-container">
            <div class="search-input">
                <input class="fnameinpp" type="text" name="qsearch" placeholder="Folder Name..." required>
                <div class="search-btn Submitbut">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>

        <div class="menu-options">
            <a href="statistics.php" class="statistics-link">Statistics</a>
            <div class="logout-btn Logbut">Log Out</div>
            <div class="up-level-btn">
                <i class="fa fa-level-up"></i>
            </div>
        </div>
    </div>

    <div class="mainFolderCont">
        <div class="add-folder-section">
            <button type="button" class="AddFolder" data-bs-toggle="modal" data-bs-target="#signupmodal">
                Add Folder
            </button>
        </div>
        <div class="folder-container FolderCont">
        </div>
    </div>

<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel" aria-hidden="true">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupmodalLabel">Add a Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-folder-form">
                        <div class="input-field">
                            <div class="label">Enter Folder Name:</div>
                            <input class="qnameinp" type="text" placeholder="  Folder name">
                        </div>
                        <div class="input-field">
                            <div class="label">Enter Description:</div>
                            <textarea class="qdecinp" type="text" placeholder="  Description"></textarea>
                        </div>
                        <div class="btn-container">
                            <div class="AddFolderbut" data-bs-dismiss="modal" aria-label="Close">Add</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Folder Modal -->
    <div class="modal fade" id="editFoldermodal" tabindex="-1" role="dialog" aria-labelledby="editFolderLabel" aria-hidden="true">
        <div class="modal-dialog mm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFolderLabel">Edit Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="edit-folder-form">
                        <div class="input-field" style="display:none;">
                            <div class="label">ID:</div>
                            <input class="Idinp" type="text" readonly>
                        </div>
                        <div class="input-field">
                            <div class="label">Enter Folder Name:</div>
                            <input class="Eqnameinp" type="text" placeholder="  Folder name">
                        </div>
                        <div class="input-field">
                            <div class="label">Enter Description:</div>
                            <textarea class="Eqdecinp" type="text" placeholder="  Description"></textarea>
                        </div>
                        <div class="btn-container">
                            <div class="EditFolderbut" data-bs-dismiss="modal" aria-label="Close">Edit</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Show Tasks Modal -->
    <div class="modal fade" id="showTasks" tabindex="-1" role="dialog" aria-labelledby="showTasksLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: fit-content;">
            <div class="add-quest-container">
                <!-- Content for showTasks will be dynamically added here -->
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
                                localStorage.setItem("olderName", fname);
                                window.location.href = "./FolderPage.php"
                            })
                        })(fid, fname);

                        var idcont = document.createElement("div");
                        idcont.setAttribute("class", "folderid");
                        niddiv.append(idcont);
                        idcont.style.marginLeft = "10px"
                        idcont.style.display = "none"; 
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
                        numname.innerText = "No. of Items"


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
                                idcont.style.display = "none"; 
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