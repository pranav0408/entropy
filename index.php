<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="assets/css/index.css"></link>

    <title>Document</title>
</head>
<body>
<header>
  <nav>
    <span class="movetext">Entropy</span>
    <a href="#portion1" class="active">HealthBook</a>
    <a href="#portion2">Benefits</a>
    <a href="#portion3">AboutUs</a>
    <a href="#portion4">Login/Register</a>
  </nav>
</header>
    <div id="portion1" class="portion">
    <h2>HealthBook</h2>
    </div>

    <div  class="info">
        <h3>HealthBook</h3>
            <p>We introduce you Entropy HealthBook to go paperless with your medical record. This is the place which will help you stay fit with the help of data transparency with your doctor.
            </p>
        <!-- <div class="button">
            <a href="">bla</a>
        </div> -->
    </div>

    <div id="portion2" class="portion two">
    <h2>Benefits</h2>
    </div>

    <div  class="info">
        <h3>Benefits</h3>
            <p>
                It is easily accessible anywhere for you to update it. Paperless reports. It is cost effective as there is no need of travelling to the hospital to get your reports and even your doctor can see your health status anywhere.
            </p>
        <!-- <div class="button">
             <a href="">bla</a>
        </div> -->
    </div>

    <div id="portion3" class="portion">
    <h2>AboutUS</h2>
    </div>

    <div  class="info">
        <h3>AboutUS</h3>
        <p>
            We can have everything with us and that too in a smart way. People's medical info can be securely accessed by them anywhere at anytime with help of healthbook record.
        </p>
        <!-- <div class="button">
            <a href="">bla</a>
        </div> -->
    </div>

    <div id="portion4" class="portion two">
    <h2>Login/Register</h2>
    </div>

        <div  class="info">
            <h3>Login/Register</h3>
        <p>
            We assure you full security and data integrity so you can trust us always. Stay healthy!
        </p>

       <div style="display: inline;"> 
        
        <div class="button">
            <a href="login.html">Login</a>
        </div>
        <br>
        <div class="button">
            <a href="signup.html">Register</a>
        </div>
       
       </div>
    </div>
    
<footer class="info">
    <div id="toTop"><a href="#"><i class="fa fa-arrow-up"></i></a></div>
  <p><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;Built by Entropy</p>
  
</footer>
<!--   </div>  -->
<script type="text/javascript">
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
<script src="assets/script/index.js"></script>
</body>


