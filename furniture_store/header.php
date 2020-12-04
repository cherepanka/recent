<html>
<head>
    <title>Ремонт жилищных помещений</title>

    <style>
        body {
            font: 13pt Arial, Helvetica, sans-serif; /* Шрифт теста */
            background: #e1dfb9; /* Цвет фона */
        }
        h2 {
            font-size: 18px; /* Размер шрифта в заголовке */
            color: #080808; /* Цвет заголовка */
            margin-top: 0; /* Отступ сверху */
        }
        .container {
            width: 600px; /* Ширина слоя */
            margin: 0 auto; /* Выравнивнить весь блок по центру */
            background: #f0f0f0; /* Цвет фона левой колонки */
        }
        .header {
            font-size: 38px; /* Размер текста в шапке */
            text-align: center; /* Выравнивание текст шапки по центру */
            padding: 5px; /* Отступы внутри блока шапки */
            background: #8fa09b; /* Цвет фона шапки */
            color: #fff; /* Цвет текста */
        }
        .sidebar {
            margin-top: 10px;
            width: 110px; /* Ширина блока */
            padding: 0 10px; /* Отступы внутри левого блока */
            float: left; /* Обтекание блока по правому краю */
        }
        .content {
            margin-left: 130px; /* Отступ слева */
            padding: 10px; /* Отступы внутри правого блока */
            background: #fff; /* Цвет фона правого блока */
        }
        .footer {
            background: #8fa09b; /* Цвет фона нижнего блока-подвала */
            color: #fff; /* Цвет текста подвала */
            padding: 5px; /* Отступы внутри блока */
            clear: left; /* Отменяем действие float */
        }

        html {
            min-height: 100%;
        }

        body {
            background: radial-gradient(ellipse at bottom left, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25), rgba(42, 60, 87, 0.4)), linear-gradient(135deg, #670d10, #092756);
        }

        h1 {
            color: white;
            padding-left: 10px;
        }

        #hover {
            color: rgba(188, 175, 204, 0.9);
        }

        h2#testimonials {
            color: #fffae3;
        }

        div#all {
            width: 100%;
            height: 100%;
        }



        .bloggood-ru-div
        {
            display: none;
        }
        a.bloggood-ru-ssilka:hover+div
        {
            display: block;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 40px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #ff0000;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Авторизация</button>

<div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php">


        <div class="container">
            <label for="uname"><b>Логин</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Авторизация</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Запомнить
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Назад</button>
            <span class="psw"> <a href="#">Забыли пароль?</a></span>
        </div>
    </form>
</div>



<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        .moda {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal1-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
<body>

<button onclick="document.getElementById('id011').style.display='block'" style="width:auto;">Регистрация</button>

<div id="id011" class="moda">
    <span onclick="document.getElementById('id011').style.display='none'" class="close" title="Close Moda">×</span>
    <form class="moda-content" action="/action_page.php">
        <div class="container">
            <h1>Регистрация</h1>
            <p>Регистрация</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Подтверждение пароля</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомнить
            </label>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id011').style.display='none'" class="cancelbtn">Назад</button>
                <button type="submit" class="signupbtn">Зарегистрироваться</button>
            </div>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var moda = document.getElementById('id011');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == moda) {
            moda.style.display = "none";
        }
    }
</script>

</body>

</head>
<body>
<div class="container">
    <div class="header">Ремонт жилищных помещений</div>
    <div class="sidebar">
        <p><a href="#">Наши услуги</a></p>
        <p><a href="#">Ремонтируется</a></p>
        <p><a href="#">Отремонтировано</a></p>
    </div>
    <div class="content">
        <h2>Добро пожаловать на сайт услуг по ремонту жилищных помещений</h2>
        <p>
            Как часто вы задумываетесь над ремонтом и улучшением своих жилищных помещений?
            Мы вам поможем навести порядок и улучшить ваши дома
        </p>
    </div>
    <a href="#" class="bloggood-ru-ssilka">До ремонта</a>
    <div class="bloggood-ru-div"><img src="images/ремонт%20помещений/2306fcd60e4be9c56ef145cafcd06b67.jpg"></div>
    <p></p>
    <a href="#" class="bloggood-ru-ssilka">После ремонта</a>
    <div class="bloggood-ru-div"><img src="images/ремонт%20помещений/empty interior design.jpg"></div>
    <p></p>


    <div class="footer">
        <p class="fon"><strong>Телефон:<br> 265-48-76</strong> </p>
        <p class="fax"><strong>Факс:<br> 265-85-97</strong></p>
        <p class="mail"><strong>Адрес:<br>Трактовая 88</strong></p>
    </div>
</div>
</body>
</html>