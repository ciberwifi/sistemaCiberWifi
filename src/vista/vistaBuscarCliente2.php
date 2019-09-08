<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Animation</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>
</head>

<body>  
 
 
 <div id="dialog" title="Basic dialog">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
 
<button id="opener">Open Dialog</button>
 
 
  <form method="post" action="enviar.php" class="vista-formGeneral vista-formBuscar">

  
  
  <h2 >Buscar Cliente:</h2>
  
 <section>
	<div>
	<ul>
		<li>Filtar Por:</li>
	<li>
	<select  autofocus  id="tipoFiltro"  >
	<option   value="">Seleccione </option>
	<option value="OptNombre">Nombre y Apellido </option>
	<option value="OptDni">DNI</option>
	<option value="OptDireccion">Direccion</option>
	<option value="OptIp">IP</option>
	</select>
	</li>
	</ul>
	
	
	<div id="OptNombre" class="hidden">
	
	<ul>
		<li>Nombre:</li>
		<li><input autofocus type="text" placeholder="Juan" > </li>
	</ul>
	<ul>	
		<li>Apellido:</li>
		<li> <input  type="text" placeholder="Perez"> </li>
	</ul>
	</div>
	
	<div id="OptDni" class="hidden">
	<ul>
		<li>DNI:</li>
		<li><input  type="text" placeholder="30255446" ></li>
		
	</ul>
	</div>
	<div id="OptDireccion" class="hidden">
	<ul>
		<li>Tipo Domicilio</li>
	<li>
	<select name="tipoDomicilio" id="tipoDomicilioSelect"  >
	<option value="">Seleccione </option>
	<option value="OptEdif">Edificio </option>
	<option value="OptCasa">Casa</option>
	</select>
	</li>
	</ul>
	
	<div id="OptEdif" class="hidden">
	
	<ul>
		<li>Localidad:</li>
	<li>
	<select required>
	<option value="">Seleccione </option>
	<option value=""> Laferrere</option>
	<option value=""> Isidro Casanova </option>
	</select>
	</li>
	</ul>
	
	<ul>
		<li>Barrio:</li>
	<li>
	<select required>
	<option value="">Seleccione </option>
	<option value=""> B20 Junio </option>
	<option value=""> Terrabuela </option>
	</select>
	</li>
	</ul>
	
	
	<ul>
		<li>Edificio:</li>
	<li>
	<select required>
	<option value="">Seleccione </option>
	<option value=""> Edif 12</option>
	<option value=""> Edif Terrabuela </option>
	</select>
	</li>
	</ul>
	
	
	<ul>
		<li>Entrada/ Palier</li>
	<li>
	<select required>
	<option value="">Seleccione </option>
	<option value=""> 1 </option>
	<option value=""> 2 </option>
	<option value=""> A </option>
	</select>
	</li>
	</ul>
	
	<ul >
		<li>Piso</li>
		<li><input  class="inputform" type="text"></li>
		
	</ul>
	
	
	<ul>
		<li>Depto</li>
		<li><input class="inputform" type="text"></li>
		
	</ul>
	</div> 
	
	<div id="OptCasa" class="hidden">
	<ul >
		<li>Calle:</li>
		<li><input  type="text" placeholder="weisman"></li>
		
	</ul>
	<ul >
		<li>Altura:</li>
		<li><input class="inputform" type="number" placeholder="1141"></li>
		
	</ul >
	
	<ul>
		<li>Localidad:</li>
	<li>
	<select required>
	<option value="">Seleccione </option>
	<option value=""> Laferrere</option>
	<option value=""> Isidro Casanova </option>
	</select>
	</li>
	</ul>
	</div>
	
</div>	
<div id="OptIp" class="hidden">
	<ul >
		<li>IP:</li>
		<li><input  type="text" placeholder="192.168.4.100"></li>
		
	</ul>

</div>
<div>

<button id="tipoBuscar" class="buttonRelative" type="submit">Buscar</button>
</div>
</div>

<div id="resultadosTabla"class="hidden"  >

	  <table id="tablaClientes">
	  <tr>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Direccion</th>
		
	</tr>
	<tr>
		<td>John</td>
		<td>Doe</td>
		<td>35088778</td>
		<td> Weisman 1141</td>
	</tr>
	<tr>
		<td>John</td>
		<td>Doe</td>
		<td>35088778</td>
		<td> Weisman 1141</td>
	</tr>
	<tr>
		<td>John</td>
		<td>Doe</td>
		<td>35088778</td>
		<td> Weisman 1141</td>
	</tr>
	

	  </table>
	
   
   </div>
   
   </section>
 </form>
 
 
   
    

		<script src="js/vendor/jquery-1.9.1.js"></script>
		<script src="js/vendor/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="js/main.js"></script>
        <script>
		
		
	document.querySelector("#tipoFiltro").addEventListener("change", function(){
		 
    if (this.value.length){
		document.querySelector("#"+"OptNombre").className = "hidden";
		document.querySelector("#"+"OptDni").className = "hidden";
       document.querySelector("#"+"OptDireccion").className = "hidden";
		  document.querySelector("#"+"OptIp").className = "hidden";
	   document.querySelector("#" + this.value).className = "visibility";
		
    }
   
	}, false);
	
	document.querySelector("#tipoDomicilioSelect").addEventListener("change", function(){
		 
    if (this.value.length){
		document.querySelector("#"+"OptCasa").className = "hidden";
		document.querySelector("#"+"OptEdif").className = "hidden";
        document.querySelector("#" + this.value).className = "visibility";
		
    }
   
	}, false);
	
	
	$(document).ready(function(){
	$("button[id=tipoBuscar]").click(function(){
	     document.querySelector("#" + "resultadosTabla").className = "visibility";
	});
});

   
   $("#tablaClientes").on('dblclick','tr td', function() {
	  
	  //document.querySelector("#" + "modal").className = "visibility"

	  });
	  
	  
 $(document).ready(function(){
	$("button[id=cerrarVentana]").click(function(){
	     document.querySelector("#" + "modal").className = "hidden";
	});
});
  
	

 </script>
 
 </body>

	</html>