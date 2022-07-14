$(function(){

     $('#bus_nombre').change(function(){
          var carpeta = $("#carpeta").val();
          var titulo = $("#titulox").val();
          tablapopup(carpeta,titulo,1);
   
     }); 
     $('#bus_parametro').change(function(){
             var carpeta = $("#carpeta").val();
             var titulo = $("#titulox").val();
            tablapopup(carpeta,titulo,1);
     });  
     $('#savecliente').click(function(){
            savecliente();
     });
   
});
function cartera(){

    			$.ajax({
				type: 'GET',
				url: '../cartera/pagos/index.php',
				success: function(data){
                                    $('#titulo').html('Listado de Pagos');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function empresas(){

    			$.ajax({
				type: 'GET',
				url: '../cartera/pagos/index_1.php',
				success: function(data){
                                    $('#titulo').html('Estado de empresas');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function planes(){

                $.ajax({
                type: 'GET',
                url: '../cartera/planes/index.php',
                success: function(data){
                                    $('#titulo').html('Configuracion de Planes');
                    $('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
                }
            });   
}