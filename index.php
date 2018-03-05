<?php include('form_process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPP</title>
    
    <link rel="icon" type="image/png" href="img/1497338581_camera.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/mian.css">
    
</head>

<body>


<!--header start-->
    <div class="head">
       <h1>BRAY POLKINGHORNE PHOTOGRAPHY</h1>
        <span class="logo"><img src="img/logotest.png" alt="logo" ></span>
    </div>
    
<!--header end-->
   
<!--   carousel  start -->
<div id="banner">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                   <ol class="carousel-indicators">
                       <li data-target="#carousel" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel" data-slide-to="1"></li>
                       <li data-target="#carousel" data-slide-to="2"></li>
                   </ol>
                                    
                  
                   <!-- Carousel items -->
                   <div class="carousel-inner">
                       <div class="active item"><div class="dim"></div></div>
                       <div class="item"><div class="dim"></div></div>
                       <div class="item"><div class="dim"></div></div>
                   </div>
                   <!-- Carousel nav -->
                   <a class="carousel-control left" href="#carousel" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>    
                   </a>
                   <a class="carousel-control right" href="#carousel" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                   </a>
               </div>
</div>



<!--   carousel  end -->

<!--nav start-->
    <nav id='nav_bar'>
        <ul class='nav_links'>
            <li class="active"><a class="scroll" href="#about">About</a></li>
            <li><a class="scroll" href="#port">Portfolio</a></li>
            <li><a class="scroll" href="#contact">Contact</a></li>
        </ul>
    </nav>
<!--nav end-->

<!--about me start-->
<a name="about"></a>
<div class="clearfix"></div>
<div class="about">
    <h1>About Me</h1>
    <img src="img/portrait.png" />
    <p>My name is Bray Polkinghorne, and I love photography. I first started photography as a freshman in high school and have loved it ever since. I currently live in Colorado which provides me with most of the beautiful scenery in my photos. I love all styles of photo, but my favorite style is nature photography. I love to portray how I view things, and photo allows me to do this.</p>
    
</div>
<a name="port"></a>
<div class="clearfix"></div>
<!--about me end-->

<!--portfolio start   -->

<div class="container" id='change'>
    <div class="port-select">
        <ul>
            <a id="astro" href="astro.html" onMouseOver="changeBgImage('img/astro/right-rocks.png', 'change')"><li>Astrophotography</li></a>
            <a id="macro" href="macro.html" onMouseOver="changeBgImage('img/macro/snowflake.png', 'change')"><li>Macro</li></a>
            <a id="land" href="land.html" onMouseOver="changeBgImage('img/landscape/arch-1.png', 'change')"><li>Landscapes</li></a>
        </ul>
    </div>
</div>    

<a name="contact"></a>    
<div class="clearfix"></div>
<div class="contact">
        <div class="around">
           <h1 id="cme">PRICING</h1>
            <div class="disc">                
                <ul>
                    <li>Contact me with the form below to purchase a print!</li>
                    <li>Sizes shown are most common; however, I am able to print any size.</li>
                </ul>
            </div>
            
            <table>
               <tr>
                   <th>Size</th>
                   <th>Print Only</th>
               </tr>
                <tr>
                    <td>8"x11"</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>16"x16"</td>
                    <td>$50</td>           
                </tr>
                <tr>
                    <td>18"x24"</td>
                    <td>$65</td>               
                </tr>
                <tr>
                    <td>24"x36"</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td class="table-pad">3'x4'</td>
                    <td class="table-pad">$230</td>
                </tr>
            </table>
        </div>
</div>

<div class="clearfix"></div>
<!--form begin-->


<section id="hire">
    <h1>Contact Me</h1>
    
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
	      <div class="field name-box">
		        <input type="text" id="name" placeholder="NAME" name="name" value="<?= $name ?>"/>
        		<label for="name">Name</label>
        		<span class="error"><?= $name_error ?></span>
	      </div>

	      <div class="field email-box">
		        <input type="text" id="email" placeholder="EMAIL" name="email" value="<?= $email ?>"/>
		        <label for="email">Email</label>
		        <span class="error"><?= $email_error; ?></span>
<!--		                     $email_error -->
	      </div>

	      <div class="field msg-box">
		        <textarea id="msg" rows="4" placeholder="YOUR MESSAGE GOES HERE..." name="message" value="<?= $message ?>" ></textarea>
		        <label for="msg">Msg</label>
	      </div>

	      <input class="button" type="submit" value="Send" />
	      
	      <div class="success"><?= $success; ?></div>
  </form>
</section>
    
        
<!--form end-->


<!--script-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script>
//    // Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});
    </script>

<!--    portfolio overview changer-->
    <script>
        function changeBgImage (image, id){
            var element = document.getElementById(id);
            element.style.backgroundImage = "url("+image+")";
        }       
    </script>

</body>
</html>