<!DOCTYPE html>
<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8" />
  <title>ЗАГОЛОВОК СТРАНИЦЫ</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/fabric.js"></script>
  <script src="js/custom-file-input.js"></script>
  <script src="js/kinetic-v5.1.0.js"></script>
</head>

<body id="2" style=" background: none">
<div id="user-info" style="position: absolute"></div> 
<center>

<div id="container" style="background: url(images/uploadbg.png);" >

<!--img src="images/ribbon.png" style="
margin-top: 4%"-->
<div>
<div id="container" >
    

    <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
    </form>

    <canvas id="imageCanvas" width="800" height="450"></canvas>
    <input type="file" id="imageLoader" name="imageLoader" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
    <label id="imageLoader" for="imageLoader" style="
color: black;
    width: 300px;
    height: 90px;
    border: none;
    margin-top: 4%;
    z-index: 999999;
    position: relative"><span style="
margin: 20px;
    padding: 0px;
    border: none;
    /* background: none; */
    color: white;
    text-decoration: none;
    font-size: 34px;
    cursor: pointer;
    position: absolute;
    margin-top: 24px;
    /* position: ; */
    /* margin-left: -75px; */
    font-weight: 500;
    width: 300px;
    height: 90px;
    left: -180px;
    top: -79px;
    background: url(images/button.png) no-repeat center top;
    padding-top: 25px;">Încarcă foto</span></label>
    <button id="fb-auth" class="nybutton" style="
width: 300px;
    height: 90px;
    border: none;
    margin-top: 4%;
    position: relative;
    right: -150px;
    top: -30px;"><a id="imageSaver" onclick="hover()" > <input type="button" onclick="uploadEx()" value="SALVEAZĂ" style=" margin: 20px; border: none; background: none; color: white; text-decoration: none; font-size: 34px; cursor: pointer; position: absolute; margin-top: -4px; margin-left: -81px;"></a></button>

</div>
<img src="./images/incarca.png" style=" margin-top: 4%; position: relative; top: -647px; left:5px; z-index: 99990">



 </div>
 </div>
</center>
<div id="result_friends"></div>
<div id="fb-root"></div>

<script>

var canvas = new fabric.Canvas('imageCanvas');

canvas.setOverlayImage('images/123.png', canvas.renderAll.bind(canvas));

var imageLoader = document.getElementById('imageLoader');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.3,
                scaleY: 0.3,
            })
            canvas.centerObject(imgInstance);
         canvas.add(imgInstance);    
        }
        img.src = event.target.result;

    }
    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}
canvas.controlsAboveOverlay = true;

function hover() {
	        canvas.controlsAboveOverlay = false;
            canvas.deactivateAll().renderAll();
}
//image crate & upload
function uploadEx() {

                var canvas = document.getElementById("imageCanvas");

                var dataURL = canvas.toDataURL('png');
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'share.php', true);
                xhr.upload.onprogress = function(f) {
                    if (f.lengthComputable) {
                        var percentComplete = (f.loaded / f.total) * 100;
                        console.log(percentComplete + '% uploaded');
                    }
                };
 
                xhr.onload = function() {
                    console.log('saved');
                    window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };  

// передаем ссылку на следующую страничку 

var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
			{
			    var label    = input.nextElementSibling,
			        labelVal = label.innerHTML;
			});


</script>

</body>
</html>