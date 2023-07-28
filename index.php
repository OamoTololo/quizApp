<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/590e8175ae.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Quiz Button-->
        <div class="btn"><button>Start Quiz</button></div>

        <!--- Info Box--->
        <div class="info-box">
            <div class="info-title">
                <span>Some Rules of this Quiz</span>
            </div>
            <div class="info-list">
                <div class="info">1. You will have only <span>1 minute</span> per question</div>
                <div class="info">2. Once you select your answer, it can't be undone.</div>
                <div class="info">3. You won't be able to select any option once timer goes off.</div>
                <div class="info">4. You can't exit the quiz once you have started.</div>
                <div class="info">5. You'll get point(s) on the basis of your correct answer.</div>
            </div>
            <div class="buttons">
                <button class="quit">Exit Quiz</button>
                <button class="continue">Continue</button>
            </div>
        </div>

        <!--- Quiz Box ---->
        <div class="quiz-box">
            <header>
                <div class="title">Quiz App</div>
                <div class="timer">
                    <div class="time-text">Time Left:</div>
                    <div class="time-sec"></div>
                </div>
            </header>
            <section>
                <div class="question-text">
                    <span>What does HTML stand for?</span>
                </div>
            </section>
        </div>
</body>
</html>