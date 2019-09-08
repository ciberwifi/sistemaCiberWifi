<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <title>jQuery UI Dialog - Animation</title>
		<script src="js/vendor/jquery-1.9.1.js"></script>
		<script src="js/vendor/jquery-ui.js"></script>
     
  <script>
  

  $( function openDialog() { 

	var loadUrl = "src/vista/contenidoDialog.php"; // paso parametro accion e id
      $( "#dialog" ).dialog().load(loadUrl);
	 
	  
    });
  
  </script>
  
 </head>
<body>
 
<div id="dialog" title="Datos Cliente"  >
 
 
</div>
 
 
 
</body>
</html>