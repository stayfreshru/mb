<?php

?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8" />
  <title>ЗАГОЛОВОК СТРАНИЦЫ</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta property="og:url"           content="" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="La Mulți Ani, 2017!" />
	<meta property="og:description"   content="Felicită-ți prietenii original și tu!" />
	<meta property="og:image"         content="<?php echo $_GET["fb"]?>" />
</head>
<body>

<div id="user-info" style=" position: absolute"></div>
 <div id="container" style=" background: url(../images/bg.jpg);">
<img src="./images/ura.png" style="
margin-top: 4%;
    position: relative;
    z-index: 99999;
left: 5px;
top: -10px">

	<?php

	// Значение переменной найдено
	echo "<img style=' margin-top: 50px; position: relative; top: -223px' src=" . $_GET["fb"] . '>';
	?>

	<button id="fb-auth" class="nybutton" style=" position: relative; top: -235px; left: 5px;"><a href="https://www.facebook.com/sharer.php?u=&http://stayfresh.ru/facebook/<?php echo $_GET["fb"]?>t=НазваниеПоста">SHARE</a></button>

 <br>
<h2 style="
margin-top: 4%;
    position: relative;
    z-index: 99999;
    left: 5px;
    top: -410px">TRANSMITE-O PRIETENILOR tăi </h2>
 
 </div>

<!--div id="result_friends"></div-->
<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<script>
</script>

</body>
</html>