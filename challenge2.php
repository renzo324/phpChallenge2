<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JS + CSS + PHP Clock</title>
</head>

<body onload="startTime()">


    <div class="Clock">
        <div id="phtime">
            The time is <span id="currentTime"></span> in Manila
        </div>
    </div>

    <div class="timezone">
        <div id="newyork">
            <?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa") . " in NewYork";
?>
        </div>
        <div id="sydney">
            <?php
        date_default_timezone_set("Australia/Sydney");
        echo "The time is " . date("h:i:sa") . " in Sydney" ;
?>

        </div>
        <div id="hanoi">
            <?php
        date_default_timezone_set("Asia/Seoul");
echo "The time is " . date("h:i:sa") . " in Seoul" ;
?>

        </div>
    </div>
    <style>
        html {
            background: #018DED url(http://unsplash.it/1500/1000?image=881&blur=50);
            background-size: cover;
            font-family: 'helvetica neue';
            text-align: center;
            font-size: 10px;
        }

        body {
            margin: 0;
            font-size: 2rem;
            display: flex;
            flex: 1;
            min-height: 100vh;
            align-items: center;
        }
    </style>

    <script>
        //   function startTime() {
        //     // var today = new Date();
        //     // var h = today.getHours();
        //     // var m = today.getMinutes();
        //     // var s = today.getSeconds();
        //     // m = checkTime(m);
        //     // s = checkTime(s);
        //     // document.getElementById('currentTime').innerHTML =
        //     // h + ":" + m + ":" + s;
        //     // var t = setTimeout(startTime, 500);
        // }
        function startTime() {

            clock();

            function clock() {
                var now = new Date();
                var TwentyFourHour = now.getHours();
                var hour = now.getHours();
                var min = now.getMinutes();
                var sec = now.getSeconds();
                var mid = 'pm';
                if (min < 10) {
                    min = "0" + min;
                }
                if (sec < 10) {
                    sec = "0" + sec;
                }
                if (hour > 12) {
                    hour = hour - 12;
                }

                if (hour == 0) {
                    hour = 12;
                }

                if (TwentyFourHour < 12) {
                    mid = 'am';
                }

                document.getElementById('currentTime').innerHTML = hour + ':' + min + ':' + sec + mid;
                setTimeout(clock, 1000);

            }



        }
    </script>
</body>

</html>