<?php

?>

<html>
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

			
				<nav >
				
                    <ul  >
					<div >
					<li><a href="#" id="btnAltaCliente"  >Alta</a></li>
					 
					</div>
					</ul>
                </nav>
				
				<div id="ajaxpr"> 
				</div>
				
 <script src="js/vendor/jquery-1.9.1.js"></script>
<script src="js/vendor/jquery-ui-1.10.2.custom.min.js"></script>
 <script src="js/main.js"></script>
        <script>
           $.ajaxSetup ({  
				cache: false  
			});
			
			//var ajax_load = "<img src='img/indicator_white_small' alt='loading...' />"; 
			
			
			$("#btnAltaCliente").click(function(){
					var loadUrl = "src/vista/vistaAltaCliente.php"; // paso parametro accion e id
					$("#ajaxMainContenedor").load(loadUrl); // ejecuto
					
					
			});	
		
			
        </script>
				

</html>



