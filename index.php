<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="img/icon.png">		
<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
<title>Happy Diwali</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$name = $_GET['name'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
	<div class="container">
		<div class="img-top">
			<img src="img/top-star.gif">
		</div>
		<div class="name">
			<h1><?php print_r($name);?></h1>
		</div>
		<div class="img-wish">
			<img src="img/wish.gif">
		</div>
		<div class="name">
			<h2>Happy <img src="img/diya.gif"> Diwali</h2>
		</div>
		<div class="img-diya">
			<img src="img/fl.gif">
		</div>
		<div class="diwali">
			<img src="img/diwali2.gif">
		</div>
		<div class="quota">
			<p>Diwali- A festival full of sweet memories, sky full of fireworks, mouth full of sweets, house full of diyas and heart full of enjoyment.</p>
			<p>- <?php print_r($name);?></p>
		</div>
	</div>
	<div class="subscribe">
	<h1>Create Your Wish</h1>
		<p>Enter Your Name to Wish your Friend and Family Members</p>
		<form action="" method="get">
			<input type="text" name="name" placeholder="Prem Chand Saini">
			<button type="submit">Go</button>
		</form>
		<a data-text="<?php print_r($name);?> send special for you" data-link="<?php print_r($actual_link); ?>" class="whatsapp"><div class="whatsapp-css">Share on Whatsapp</div></a>

		<!-- <a href="whatsapp://send" data-text="How to create the Share on WhatsApp button on your site:" data-href="<?php //print_r($actual_link); ?>" data-action="share/whatsapp/share"><div class="whatsapp">Share on Whatsapp</div></a> -->

		<div class="fb-share-button" data-href="<?php print_r($actual_link) ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print_r($actual_link); ?>"><div class="facebook">Share on Facebook</div></a></div>

	</div>
	<div class="footer">
		<p>Copyright &copy; 2016 Designed By <a href="http://www.pcsaini.in">pcsaini</a> </p>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
 $(document).on("click", '.whatsapp', function() {
        if( isMobile.any() ) {

            var text = $(this).attr("data-text");
            var url = $(this).attr("data-link");
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("Please share this article in mobile device");
        }

    });
});
</script>
</body>
