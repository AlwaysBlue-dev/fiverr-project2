<?php

require 'steamauth/steamauth.php';
// require 'steamauth/userInfo.php';

if (isset($_SESSION['steamid'])) {
    $id = $_SESSION['steamid'];
    // header('Location: wheel.php');
} else {
    #not logged in
    // header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Raptor Gambling</title>

</head>

<body>
    <div class="cont">
        <div class="demo">
            <div class="login">
                <div class="login__check">
                    <img src="images/steamlogo.png" class="top_img">
                </div>

                <div class="login__form">
                    <?php echo loginbutton() ?>
                    <!-- <button type="button" class="login__submit">Login with Steam</button> -->

                </div>
            </div>
            <div class="app">
                <div class="app__top">
                    <div class="app__menu-btn">
                        <span></span>
                    </div>
                    <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
                        <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
                        <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
                    </svg>
                    <p class="app__hello">Good Morning!</p>
                    <div class="app__user">
                        <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__user-photo" />
                        <span class="app__user-notif">3</span>
                    </div>
                    <div class="app__month">
                        <span class="app__month-btn left"></span>
                        <p class="app__month-name">March</p>
                        <span class="app__month-btn right"></span>
                    </div>
                </div>
                <div class="app__bot">
                    <div class="app__days">
                        <div class="app__day weekday">Sun</div>
                        <div class="app__day weekday">Mon</div>
                        <div class="app__day weekday">Tue</div>
                        <div class="app__day weekday">Wed</div>
                        <div class="app__day weekday">Thu</div>
                        <div class="app__day weekday">Fri</div>
                        <div class="app__day weekday">Sad</div>
                        <div class="app__day date">8</div>
                        <div class="app__day date">9</div>
                        <div class="app__day date">10</div>
                        <div class="app__day date">11</div>
                        <div class="app__day date">12</div>
                        <div class="app__day date">13</div>
                        <div class="app__day date">14</div>
                    </div>
                    <div class="app__meetings">
                        <div class="app__meeting">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-80_5.jpg" alt="" class="app__meeting-photo" />
                            <p class="app__meeting-name">Feed the cat</p>
                            <p class="app__meeting-info">
                                <span class="app__meeting-time">8 - 10am</span>
                                <span class="app__meeting-place">Real-life</span>
                            </p>
                        </div>
                        <div class="app__meeting">
                            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
                            <p class="app__meeting-name">Feed the cat!</p>
                            <p class="app__meeting-info">
                                <span class="app__meeting-time">1 - 3pm</span>
                                <span class="app__meeting-place">Real-life</span>
                            </p>
                        </div>
                        <div class="app__meeting">
                            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
                            <p class="app__meeting-name">FEED THIS CAT ALREADY!!!</p>
                            <p class="app__meeting-info">
                                <span class="app__meeting-time">This button is just for demo ></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="app__logout">
                    <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
                        <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</body>

</html>