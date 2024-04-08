<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #b1507c;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: "Oswald", sans-serif;
            font-optical-sizing: auto;
            font-weight: bold;
            font-style: normal;
        }

        .welcome {
            font-size: 150px;
            font-family: Cambria;
            color: rgb(106, 26, 95);
            -webkit-text-stroke: 5px rgb(185, 136, 214);
        }

        .contme {
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
            left: 0%;
        }
    </style>
</head>

<body>
    <div class="welcome">Welcome User!</div>

    <div class = "contme">Continue</div>
</body>

</html>