<div class="wrapper col3">
    <div id="container">
                 <h1 style="text-align: center"> Contacte con nosotros</h1>
                 <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
                 <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger"> <?= $this->session->flashdata('erroor') ?> </div>
    <?php } ?>
         <div class="row">
             <div class="col-md-6" id="map_canvas">
            <p>....Cargando....</p> 
        </div>
             <div class="col-md-6">
                 <h2>Estamos en:</h2>
                 <ul style="display: block">
                        <li>Fernando de la Mora - Zona Sur</li>
                        <li>Capitán Montiel esq/ Mcal. Estigarribia - 1er Piso oficina 2B</li>
                        <li>Tel: 021 3388655-</li>
                        <li>Cel: 0984 64 87 33</li>
                        <li>Email: info@plusmedia.com.py</li>
                        <li><a href="https://www.facebook.com/pages/Plus-Media/101930326597283"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.linkedin.com/in/plusMediapy"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/plus_mediapy"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/b/103952230276043689780/+PlusmediaPy"><i class="fa fa-google-plus"></i> </a></li>
                    </ul>
                 <h1>Formulario de contacto</h1>
                 <form role="form" method="POST" action="<?php echo base_url("contactos/enviar")  ?>">
                 <div class="form-group">
                 <label>Nombre</label>
                 <input type="text" name="nombre" class="form-control" >  
                 </div>
                 <div class="form-group">
                 <label>Telefono</label>
                 <input type="text" name="telefono" class="form-control">  
                 </div>
                 <div class="form-group">
                 <label>email</label>
                 <input type="text" name="email" class="form-control">  
                 </div>
                 <div class="form-group">
                 <label>Mensaje</label>
                 <textarea name="mensaje" class="form-control"></textarea>
                 </div>
                 <div class="form-group">
                     <input type="hidden" name="last">  
               
                     <button class="btn btn-success" style="color: #fff">Enviar</button>
                     
                 </div>
                 
                 </form>
             </div>
         </div>
        

    </div>   <!--container fin-->

</div><!--whaper fin-->
<style type="text/css">
  
#map_canvas {
    height: 500px;
   
}
</style>
<!--<script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery-1.js"></script>
  
<script>

var Mapa = jQuery.noConflict();
function initialize() {
		
        var lat = '-25.323605';
	var lon = '-57.555627';

	var address = '<b>Plusmedia - Diseño de Sitios Web.</b><br>';
	address += 'Capitán Montiel 145 c/ Mcal. Estigarribia,<br>'
	address += '1er Piso oficina 2B <br> ';
	address += 'Fernando de la Mora - Paraguay';
				
	var myOptions = {
		scaleControl: true,
		center: new google.maps.LatLng(lat, lon),
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
	var marker = new google.maps.Marker({
		map: map,
		position: map.getCenter(),
                icon:"public/images/map-marker.png"
	});
						
	var infowindow = new google.maps.InfoWindow();

	infowindow.setContent(address);
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});

	infowindow.open(map, marker);
}

//Mapa.getScript("https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize");
$.getScript("http://maps.google.com/maps/api/js?key=AIzaSyCUvRWTExPbED3AQ-S_ITny8w2wecey61M&libraries=places&sensor=false&callback=initialize");
</script>		

