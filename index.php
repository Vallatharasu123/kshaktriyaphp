<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style-a.css">
    <title>Kshaktriya</title>
    <script src="assets/script/jquery.min.js"></script>

</head>

<body onload="closeLoader()" class="show-spinner">
    <style>
        .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    </style>
<div id="load">
<div class="loader"></div>
</div>
    <nav class="top-bar">
        <div class="kshaktriya-title">
            Kshaktriya
        </div>
        <div class="nav-bar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>
    <section class="welcome-container" id="home">

        <div class="black">
            <div class="department-info">
                <div class="bdu-logo">
                    <img src="assets/images/bdu.png" alt="Bdu Image">
                </div>
                <div class="department-name">
                    <p>School of Computer Science , Engineering & Application</p>
                    <p>Bharathidasan University , Tiruchirappalli-24.</p>
                </div>
            </div><br><br>
            <p class="inter-info">International Technical Symposium</p>
            <!-- <button>register</button> -->
            <div class="container register-button">
                <div class="btn "><a href="#">register</a></div>
                <!-- <div class="btn"><a href="#" >Read more 2</a></div>
				<div class="btn"><a href="#" >Read more 3</a></div> -->

            </div>
        </div>
    </section>
    <section class="about-container" id="about">
        <div class="black">
            <h1>About</h1>
        </div>
    </section>
    <section class="contact-container" id="contact">
        <div class="black">
            <h1>contact</h1>
        </div>
    </section>
    <footer>
        Hosting by <a href="https://techcmantix.com/">TECHCMANTIX</a>.Created by Vallatharasu katturaja
       
            <a href="adminlogin.php" class="float-right">Admin Login</a>
        
    </footer>
    <script src="assets/script/loader.js"></script>
</body>

</html>