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
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, est obcaecati quia unde iste nisi amet dolorem exercitationem minus, totam veritatis a doloremque debitis dicta ad vero quidem, omnis optio.
            </p>
        <div class="button">
            <a href="">bla</a>
        </div>
    </div>

    <div id="portion2" class="portion two">
    <h2>Benefits</h2>
    </div>

    <div  class="info">
        <h3>Benefits</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quia dolore harum inventore explicabo libero doloribus totam, esse expedita fuga neque labore voluptatibus, autem accusamus similique asperiores modi veritatis vitae.
            </p>
        <div class="button">
             <a href="">bla</a>
        </div>
    </div>

    <div id="portion3" class="portion">
    <h2>AboutUS</h2>
    </div>

    <div  class="info">
        <h3>AboutUS</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, ex? Explicabo culpa voluptatibus rerum, repellendus deleniti odio iure minus exercitationem magni sint, omnis quis esse vero. Numquam harum quia dolor!
        </p>
        <div class="button">
            <a href="">bla</a>
        </div>
    </div>

    <div id="portion4" class="portion two">
    <h2>Login/Register</h2>
    </div>

        <div  class="info">
            <h3>bla4</h3>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsam quos reiciendis corrupti, laudantium ea delectus, perferendis tempora doloremque rerum esse, natus soluta enim nostrum tempore eaque? Facilis, alias deleniti.
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


