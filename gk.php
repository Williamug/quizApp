<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Playing General Knowledge Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            color: white;
            background-image: url("images/quiz-bg.jpg");
            background-size: cover;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            min-height: 50px;
            background-image: linear-gradient(to right, #082032, #240054);
            height: 7vh;
            position: fixed;
            top: 0;
            width: 100%
        }

        #title {
            color: #C355F5;
            font-weight: 700;
            font-size: 1.2rem;
            font-family: 'Cinzel Decorative', cursive;
            text-transform: uppercase;
        }

        .head-items {
            display: flex;
            flex-direction: row;
            list-style: none;
            padding: 5vh auto;
            margin-top: 0;
        }

        .head-items>li {
            margin: 0.8rem 1.6rem;
            font-size: 1.1rem;
        }

        .head-items>li>a {
            text-decoration: none;
            color: #BC8CF2;
            font-family: 'Noto Sans', sans-serif;
        }

        .head-items>li>a:hover {
            transition: 500ms;
            color: #EEEEEE;
        }

        #first-item {
            margin-left: 52vw;
        }

        .footer {
            color: #ECF2F9;
            min-height: 50px;
            margin-top: auto;
            font-family: sans-serif;
            width: 100%;
            height: 50px;
            text-align: center;
            background-image: linear-gradient(to right, #3490DE, #6639A6);
            place-items: center;
        }

        main {
            margin: 10vh 15vw;
        }

        #quiz input {
            vertical-align: middle;
        }

        #quiz ol {
            margin: 0 0 10px 20px;
            font-size: 1.4rem;
            padding: 4vh 3vw;
            font-family: 'Montserrat', sans-serif;
        }

        #quiz ol li {
            margin: 0 0 20px 0;
            border: 3px solid #5D8BF4;
            padding: 4vh 3vw;
            border-radius: 20px;
            background: rgba(21, 29, 59, 0.4);
        }

        #quiz ol li div {
            padding: 1rem 2rem;
            border: 1px solid white;
            margin: 0.8rem 0;
            border-radius: 10px;
        }

        #quiz ol li div:hover {
            background: rgba(33, 159, 148,0.2);
        }

        #quiz h3 {
            margin: 0 0 1rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.4rem;
            color: #FFBDE6;
            font-weight: 600;
        }

        label {
            color: #EFFFFD;
            font-size: 1.2rem;
            font-family: 'Noto Serif', serif;
        }

        input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;

            border-radius: 50%;
            width: 1.3rem;
            height: 1.3rem;

            border: 2px solid #999;
            transition: 0.2s all linear;
            margin-right: 10px;
        }

        input:checked {
            border: 7px solid #00B4D8;
            outline: unset !important;
        }

        .submitbtn{
            cursor : pointer;
            margin : 2vh 27vw;
            padding : 1rem 7rem;
            font-size : 1.3rem;
            font-weight : 700;
            border-radius : 20px;
            color : #FBD6D2;
            border : 2px solid #FBD6D2;
            background-color : rgba(206, 73, 191,0.2);
            font-family: 'Montserrat', sans-serif;
        }

        .submitbtn:hover{
            border : 2px solid snow;
            color : snow;
            background-color : rgba(241, 0, 134,0.2);
        }

        .page-head{
            font-family: 'Montserrat', sans-serif;
            margin-left : 22vw;
            margin-top : 3vh;
            font-size : 2.1rem;
        }
    </style>
</head>

<body>
    <?php include 'header.php'?>

    <main>
        <form action="result.php" method="post" id="quiz">
            <h1 class="page-head">General Knowledge Quiz</h1>
            <ol>

                <input type="radio" name="cate" value="gk" checked="checked" style="display:none" />

                <li>
                    <h3>Which is the World’s Saltiest Sea?</h3>

                    <div>
                        <input type="radio" name="q1-answers" value="A" />
                        <label>A) Baltic Sea </label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="B" />
                        <label>B) Red Sea </label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="C" />
                        <label>C) Dead Sea</label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="D" />
                        <label>D) Black Sea</label>
                    </div>

                </li>

                <li>

                    <h3>Which is the Most distant object/structure in Solar System?</h3>

                    <div>
                        <input type="radio" name="q2-answers" value="A" />
                        <label>A) Farfarout</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="B" />
                        <label>B) Kuiper Belt</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="C" />
                        <label>C) Pluto</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="D" />
                        <label>D) Neptune</label>
                    </div>

                </li>

                <li>

                    <h3>Which tree is called as The Most Dangerous Tree in the World by "The Guinness Book of World Records"?</h3>

                    <div>
                        <input type="radio" name="q3-answers" value="A" />
                        <label>A) The Manchineel tree</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="B" />
                        <label>B) The Sandbox Tree</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="C" />
                        <label>C) Cerbera Odollam</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="D" />
                        <label>D) Hemlock</label>
                    </div>

                </li>

                <li>

                    <h3>From which country did COVID-19 (SARS COV-2) Virus originated?</h3>

                    <div>
                        <input type="radio" name="q4-answers" value="A" />
                        <label>A) Germany</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="B" />
                        <label>B) South Africa</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="C" />
                        <label>C) USA</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="D" />
                        <label>D) China</label>
                    </div>

                </li>

                <li>

                    <h3>Which is the largest network of labyrinth(maze) in the world?</h3>

                    <div>
                        <input type="radio" name="q5-answers" value="A" />
                        <label>A) The Masone Labyrinth, Italy</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="B" />
                        <label>B) Yancheng, China</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="C" />
                        <label>C) Labyrinth of Villa Pisani, Italy</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="D" />
                        <label>D) Odessa Catacombs, Ukraine</label>
                    </div>

                </li>

            </ol>

            <button type="submit" class="submitbtn">Submit</button>
        </form>
    </main>

    <?php include 'footer.php'?>
</body>

</html>