<?php
?>

<!DOCTYPE HTML>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> Job GURU </title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

        <script type="application/javascript">
            $(document).ready(function(){
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) 
                        event.preventDefault();   
                    var hash = this.hash;   
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){       
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            
        </script>
    </head>   
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Job GURU</a>
      </div>
    <ul class="nav navbar-nav">
      <li class="active"><a  href="#">Home</a></li>
        <li><a  href="#recent">Recent Jobs</a></li>
      <li><a  href="jobseeker/register_user.php">Job Seeker</a></li>
      <li><a  href="employer/register_emp.php">Employer</a></li>
      <li><a  href="#contact">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="bmsTop">
    <ul>
        <li style="font-size: 15px; font-weight: bold">Top Recruiters:</li>
        <li><a href="https://careers.cognizant.com/in/en" target="_blank">
                <img src="images/1.gif">
            </a></li>
        <li><a href="https://www.interglobe.com/careers" target="_blank">
                <img src="images/2.gif" >
            </a></li>
        <li><a href="https://www.polaris.com/en-us/careers/" target="_blank">
                <img src="images/3.gif" ></a>
        </li>
        <li><a href="https://www.genpact.com/careers" target="_blank">
                <img src="images/4.gif" ></a></li>
        <li><a href="https://www.synechron.com/en-in" target="_blank">
                <img src="images/5.gif" ></a>
        </li>
    </ul>
</div>

<div class="container-fluid" id="main1"> 
<div class="jumbotron text-center" id="searchjum">
<h1 style="color:#1c4980;font-family: Inter, sans-serif !important ">Find the <span style="color:#000000;font-family: Inter, sans-serif !important">Right Job</span> In the<br/><span style="color:#000000;font-family: Inter, sans-serif !important">Right Companies</span></h1>
    <p style="color:#1c4980; font-family: Inter, sans-serif !important">Got fired..!! Get Ready to be hired</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div>

<div class="container" id="subcontent" style="background: transparent">
 
</div>
<div class="page-header" style="background:linear-gradient(45deg, #014C96 2%, #0073E6 25%, #014C96 48%, #0073E6 77%, #014C96 98%)"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this website for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                   <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                    <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px;">Better Exposure <br>
                        Better Support</p>
                </div>
                <div class="panel-footer">
                    <h3>$4</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg disabled">Upgrade</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: linear-gradient(45deg, #014C96 2%, #0073E6 25%, #014C96 48%, #0073E6 77%, #014C96 98%)"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Greater Noida, India</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 8423130604</p>
                <p><span class="glyphicon glyphicon-envelope"></span> abhayraj14444@gmail.com</p>
            </div>
        
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input  class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button onclick="window.location.href = './index.php';" class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        
        </div>
    </div> 

</div>
 <div class="page-header" style="background: linear-gradient(45deg, #014C96 2%, #0073E6 25%, #014C96 48%, #0073E6 77%, #014C96 98%)"></div>
</div> 


<!-- Add Google Maps -->
<iframe style="width: 100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.959193399208!2d77.58161751020953!3d28.450646475663447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cbf94deb6bc39%3A0x7ba6bedc9a2b537f!2sBennett%20University%20(Times%20of%20India%20Group)!5e0!3m2!1sen!2sin!4v1714215785371!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>



<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Job GURU</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
