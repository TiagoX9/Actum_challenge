<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hire Tiago 2017</title>

    <!-- DEAR ACTUM RECRUITER;
    LOST MY CONTACTS AND STILL WANT TO TALK TO ME?
    HERE YOU GO: 
    - +420 723 752 537
    - tiagojopereira@gmail.com
    - linkedin.com/tiagopereirax9
    - github.com/TiagoX9
    -->

</head>

<body>
<?php

// CONNECT TO DATABASE

$pdo = new PDO('mysql:host=localhost;dbname=actum;charset=utf8', 'Cantshowusername', 'NotactualPassword');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
if($_POST){
    $stmt = $pdo->prepare('INSERT INTO actum(name, surname, dateofbirth, email, gender, numberofchildren ) VALUES (?, ?, ?, ?, ?, ?)'); 
    $stmt->execute(array($_POST['name'], $_POST['surname'], $_POST['dateofbirth'], $_POST['email'], $_POST['gender'], $_POST['numberofchildren']));
}
?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#top">
                    <svg class="image" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="290%" height="290%" viewBox="0 0 325.482 293.984" enable-background="new 0 0 325.482 293.984"
                        xml:space="preserve">
                        <text transform="matrix(1 0 0 1 80.9958 152.9924)" fill="#FF0000" font-family="'Anton-Regular'" font-size="72">HIRE</text>
                        <text transform="matrix(1 0 0 1 82.4958 215.9895)" fill="#FFFFFF" font-family="'Anton-Regular'" font-size="72">TIAGO</text>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" cx="145.992" cy="151.992" r="124.494" />
                    </svg>
                </a>
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#registration">Registration <span class="sr-only">(current)</span></a></li>
                    <li>|</li>
                    <li><a href="#submit">Submit</a></li>
                    <li>|</li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="top" class="row">
            <div class="col-md-4 col-s-1 col-xs-1">
            </div>
            <div class="logo col-md-4 col-s-8 col-xs-8">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="325.482px" height="293.984px" viewBox="0 0 325.482 293.984" enable-background="new 0 0 325.482 293.984"
	 xml:space="preserve">
<text transform="matrix(1 0 0 1 80.9958 152.9924)" fill="#FF0000" font-family="'Anton-Regular'" font-size="72">HIRE</text>
<text transform="matrix(1 0 0 1 82.4958 215.9895)" fill="#FFFFFF" font-family="'Anton-Regular'" font-size="72">TIAGO</text>
<circle fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" cx="145.992" cy="151.992" r="124.494"/>
</svg>
            </div>
            <div class="col-md-4 col-s-1 col-xs-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-0">
            </div>
            <div class="col-md-6 col-xs-12">
                <form onsubmit="CheckForm()" id="registration" action="" method="post">
                    <h4 class="formtext">Name:</h4>
                    <input class="formeffect" name="name" type="text" placeholder="Name" required>
                    <br>
                    <h4 class="formtext">Surname:</h4>
                    <input class="formeffect" name="surname" type="text" placeholder="Surname" required>
                    <br>
                    <h4 class="formtext">Date of birth:</h4>
                    <input  class="formeffect" name="dateofbirth" type="date" placeholder="Date of birth" required>
                    <br>
                    <h4 class="formtext">Email:</h4>
                    <input class="formeffect" name="email" type="email" placeholder="email" required>
                    <br>
                    <h4 class="formtext">Gender</h4>
                    <div><input type="radio" name="gender" value="male" checked>
                        <p>Male<p>
                    </div><br>
                    <div><input type="radio" name="gender" value="female">
                        <p>Female<p>
                    </div><br>
                    <br>
                    <h4 class="formtext"> Number of children</h4>
                    <input name="numberofchildren" class="formeffect" type="number" placeholder="Number of children">
                    <br>
                    <input  id="submit" class="formeffect" type="submit" value="Register">
                </form>
            </div>
            <div class="col-md-3 col-xs-0">
            </div>
        </div>
    </div>
    <div class="footer">
        <h1>My form for ACTUM</h1>
        <div>
            <a href="https://github.com/TiagoX9" target="_blank"><img class="icon" src="img/github.png" alt="GitHub"></a>
            <a href="https://www.linkedin.com/in/tiagopereirax9/" target="_blank"><img class="icon" src="img/linkedin.png" alt="LinkedIn"></a>
            <a href="mailto:tiagojopereira@gmail.com" target="_blank"><img class="icon" src="img/gmail.png" alt="Gmail"></a>
        </div>
        <p>© by Tiago Pereira</p>
        <p>Done with HMTL, CSS, Bootstrap, jQuery, AJAX and JavaScript</p>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


<!-- ON BLUR -->

      <script>
        $('.formeffect').change(function(){
       alert('Required fields');  
});
</script>

    <!-- SMOOTH SCROLLING -->

<script>
        $('a[href^="#"]').on('click', function (event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    </script>

<!-- COOKIES -->

    <script>
var cname = "FormSubmitted" 
var data ="1";  


function CheckForCookie()
{
  if( ExistsCookie(cname) )
   {
     document.write('<h1>You have already submitted the form!!</h1>');
    }        
    }
    function CheckForm()
{
  if( !ExistsCookie(cname) )
  {
    now= new Date();  
    expiry = new Date();
    expiry.setTime((now.getTime() + 30*24*60*60*1000)); 

	  WriteCookie(cname,data,expiry); 
	  return true;
  }
  alert("You have already submitted this form");
  return false;
}  
</script>

<!-- AJAX -->

<script>
    var actumForm = $('#registration');

    actumForm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: actumForm.attr('method'),
            url: actumForm.attr('action'),
            data: actumForm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });
    </script>
  

</body>

</html>