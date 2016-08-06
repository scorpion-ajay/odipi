<?php //include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Welcome Home | ODiPi</title>
    <!--favicon-->
    <link href="" sizes="16x16 32x32" rel="shortcut icon">

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Materialize Core CSS -->
    <link rel="stylesheet" href="css/materialize.min.css" type="text/css">



    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--google material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--font-awesome-icons-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

</head>
<body id="top" class="scrollspy">

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li><a href="#contact" onClick="document.getElementById('icon_prefix').focus();">Report Bugs :(</a></li>
  <li class="divider"></li>
  <li><a href="signout.php">Sign Out</a></li>
</ul>

<!--Navigation-->
 <div class="navbar">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="index.php" id="logo-container" class="brand-logo">Online Debate Portal</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#top">New Forum</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1" >Account<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#top">Sign up/Sign in</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="">Profile</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Dashboard-->
<div class="section" id="index-banner1">
        <div class="row">
        <div class="col l3 s12 m6" style="float: left;">
          <div class="card white ">
            <div class="card-content" style="color: #2196F3;">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
      </div>
                
            </div>     
              <script>
                // set up options
                var hash = <?php include("connect.php"); 
                $sql = "SELECT firstname FROM userinfo";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo  md5($row["firstname"]);
                }
                }
                ?>

                var options = {
                            background: [255, 255, 255, 255],  // rgba white
                            margin: 0.2,                       // 20% margin
                            size: 420                         // 420px square
    };

                // create a base64 encoded PNG
                var data = new Identicon(hash, options).toString();

                // write to a data URI
                document.write('<img width=420 height=420 src="data:image/png;base64,' + data + '">');
          </script>
    </div>
</div>
<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/bg.png"></div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s6">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">ajayverma.tk</h5>
                <ul>
                    <li><a class="white-text" target="_blank" href="http://www.ajayverma.tk/">Home</a></li>
                    <li><a class="white-text" target="_blank" href="http://www.bncsite.wordpress.com/">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" target="_blank" href="https://www.behance.net/joashp">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    <li>
                        <a class="white-text" target="_blank" href="https://www.facebook.com/avcool1">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" target="_blank" href="https://github.com/aries.ajay1">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" target="_blank" href="https://www.linkedin.com/aries.ajay1">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span>Copyright &copy; 2016 Ajay Verma - Handcrafted with <i class="fa fa-heart" style="color:#2196F3"></i> and <i class="fa fa-coffee" style="color:#2196F3"></i> in India.</span>
                    </div>
                </div>
            </div>
        </div>
</footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hide-on-large-only">
        <a class="btn btn-primary" href="#top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="web/js/easyResponsiveTabs.js"></script>
    <script src="min/custom-min.js"></script>
    <script type="text/javascript" src="js/identicon/identicon.js"></script>
    <script type="text/javascript" src="js/identicon/pnglib.js"></script>

    </body>
</html>
