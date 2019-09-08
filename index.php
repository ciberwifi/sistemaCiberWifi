<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="test api mikrotik">
        <meta name="viewport" content="width=device-width">

   <link rel="stylesheet" href="css/normalize.min.css"> 
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
		
		
                     
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Estas usando una version <strong>desactualizada</strong> del navegador. Por favor <a href="http://browsehappy.com/">actualizalo</a> o <a href="http://www.google.com/chromeframe/?redirect=true">o habilite Google chrome Frame</a> para mejorar su experiencia.</p>
        <![endif]-->

        <div class="header-container">
             <header class="wrapper clearfix"> 
             <h1 class="title">Sistema CiberWifi</h1> 
                <nav>
                    <ul >
					 <li><a href="#" id="btnCortar">Administracion</a></li>  
                       <li><a href="#" id="btnCortar">Ventas</a></li>  
                     <li><a href="#" id="btnCortar">Soporte Tecnico</a></li> 
					<li><a href="#" id="btnCortar">Infraestructura</a></li>
					<li><a href="#Clientes" id="btnClientes"  >Clientes</a></li>
					
					</ul>
                </nav>
            </header> 
        </div>
	
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                  <section>
                    
                    <div id="ajaxMainContenedor"></div>  
                 
                  </section>

                </article>
				
                <aside >
					
						
					
                    <div id="ajaxBotoneraLateral" ></div>  
              
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>Creado por: Laura 2017@</h3>
            </footer>
        </div>

	

        <script src="js/vendor/jquery-1.9.1.js"></script>
		<script src="js/vendor/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="js/main.js"></script>
        <script>
           $.ajaxSetup ({  
				cache: false  
			});
			var ajax_load = "<img src='img/indicator_white_small' alt='loading...' />"; 
			
			
			$("#btnClientes").click(function(){
					var loadUrl = "src/vista/botonerasLaterales/vistaBotoneraLateralClientes.php"; // paso parametro accion e id
					$("#ajaxBotoneraLateral").load(loadUrl); // ejecuto
					var loadUrl = "src/vista/vistaBuscarCliente.php"; // paso parametro accion e id
					$("#ajaxMainContenedor").load(loadUrl); // ejecuto
					
			});	
			
		
			
			
			
        </script>

    </body>
</html>
