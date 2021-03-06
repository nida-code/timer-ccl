<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="timer-container">
        <div class="digits-holder">
            <div class="digits">
                <div class="time-increment">
                    <button class="min" id="min-up"><img src="images/up.svg" alt=""></button>
                    <button class="sec" id="sec-up"><img src="images/up.svg" alt=""></button>
                </div>
                <div class="time">
                    <div class="minute-time" id="minute-time">00</div>
                    <div class="colon">:</div>
                    <div class="second-time"  id="second-time">00</div>
                </div>
                <div class="time-decrement">
                    <button class="min" id="min-down"><img src="images/down.svg" alt=""></button>
                    <button class="sec" id="sec-down"><img src="images/down.svg" alt=""></button>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="btn btn-primary" id="start-button">START</button>
            <button class="btn btn-secondary" id="reset-button">RESET</button>
        </div>
    </div>
    

    <script src="js/main.js"></script>
</body>
</html>