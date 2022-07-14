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
function savecliente(){
    var id = $("#idtx").val();
    var num_ter = $("#num_terx").val();
    var tip_ter = $("#tip_terx").val();
    var nom_ter = $("#nom_terx").val();
    var tel_ter = $("#tel_terx").val();
    var cor_ter = $("#cor_terx").val();
    var dir_ter = $("#dir_terx").val();
    var dep_ter = '';
    var mun_ter = '';
    var cred_ter = '';
    var cup_ter = '';
    var tip_pro = $("#tip_prox").val();
   
    var est_ter = '';
    var prov_ter = $("#eps_terx").val();
    if(num_ter===''){
        swal({icon: 'warning',text: 'Digite el numero de documento'});
        $("#num_ter").focus();
        return false;
    }
    if(tip_ter===''){
          swal({icon: 'warning',text: 'selecciones el tipo de documento'});
        $("#tip_ter").focus();
        return false;
    } 
//    if(prov_ter===''){
//          swal({icon: 'warning',text: 'selecciones la eps'});
//        $("#eps_terx").focus();
//        return false;
//    }
     
    
    $.ajax({
		 type: 'GET',
                 data:'id='+id+'&num_ter='+num_ter+'&tip_pro='+tip_pro+'&tip_ter='+tip_ter+'&nom_ter='+nom_ter+'&tel_ter='+tel_ter+'&cor_ter='+cor_ter+'&dir_ter='+encodeURIComponent(dir_ter)+
                      '&dep_ter='+dep_ter+'&mun_ter='+mun_ter+'&cred_ter='+cred_ter+'&cup_ter='+cup_ter+'&prov_ter='+prov_ter+'&est_ter='+est_ter+'&sw=1',
		  url: '../vistas/terceros/acciones.php',
		success: function(d){
                    swal({icon: 'success',text: 'Se guardo con exito'});
		  var id = $("#idtx").val('');
    var num_ter = $("#num_terx").val('');
    var tip_ter = $("#tip_terx").val('');
    var nom_ter = $("#nom_terx").val('');
    var tel_ter = $("#tel_terx").val('');
    var cor_ter = $("#cor_terx").val('');
    var dir_ter = $("#dir_terx").val('');
				}
			});
}
function consultar_ter(){
    var id =$("#num_terx").val();
   $.ajax({
				type: 'GET',
                                data:'id='+id+'&sw=4',
				url: '../vistas/terceros/acciones.php',
				success: function(datos){
                                    var p = eval(datos);
                                   $("#idtx").val(p[0]);
//                                   $("#num_ter").val(p[2]);
                                   $("#tip_terx").val(p[1]);
                                   $("#nom_terx").val(p[3]);
                                   $("#tel_terx").val(p[5]);
                                   $("#cor_terx").val(p[4]);
                                   $("#dir_terx").val(p[6]);
                                  
                                    
				}
			});  
}
function productos(){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
				url: '../vistas/productos/index.php',
				success: function(data){
                                    $('#titulo').html('Listado de Productos');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function encabezado(){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
				url: '../vistas/confpagina/formulario.php',
				success: function(data){
                                    $('#titulo').html('Encabezado Info');
					$('#controlador').html(data);
                                        $('#cargar').html('');
				}
			});   
}
function baner(){

    			$.ajax({
				type: 'GET',
				url: '../vistas/confpagina/slider.php',
				success: function(data){
                                    $('#titulo').html('Encabezado Info');
					$('#controlador').html(data);
                                        $('#cargar').html('');
				}
			});   
}
function pagina(){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
				url: '../vistas/productos/pagina.php',
				success: function(data){
                                    $('#titulo').html('Productos de Pagina web');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function productosc(){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
				url: '../vistas/productos_comp/index.php',
				success: function(data){
                                    $('#titulo').html('Listado de Productos');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function caja(){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
				url: '../vistas/facturas/caja.php',
				success: function(data){
                                    $('#titulo').html('Modulo de Caja');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function vercaja(id){
//$('#cargar').html('<img src="../images/guardando.gif"> Cargando.......');
    			$.ajax({
				type: 'GET',
                                data:'arq='+id,
				url: '../vistas/facturas/caja.php',
				success: function(data){
                                    $('#titulo').html('Modulo de Caja');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function categorias(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/categorias/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de Categorias');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}    
function subcategoria(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/subcategorias/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de Subcategorias');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
} 
function bodegas(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/bodegas/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de bodegas');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}

function Tercer(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/terceros/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de terceros');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function Prove(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/terceros/index_1.php',
				success: function(data){
                                    $('#titulo').html('Lista de Proveedores');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function eps(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/eps/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de EPS');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function Marcas(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/marcas/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de marcas');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function TipoMov(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/tipomovimientos/index.php',
				success: function(data){
                                    $('#titulo').html('Configuracion de Tipos');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function formmovimientos(tipo,id,page){
    			$.ajax({
				type: 'GET',
                                data: 'tipo='+tipo+'&id='+id+'&page='+page,
				url: '../vistas/movimientos/formulario.php',
				success: function(data){
                                    $('#titulo').html('MOVIMIENTO DE '+tipo);
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        
				}
			});   
}
function formmovimientospaginacion(tipo,id,page){
    			$.ajax({
				type: 'GET',
                                data: 'tipo='+tipo+'&id='+id+'&page='+page,
				url: '../vistas/movimientos/formulario.php',
				success: function(data){
                                    $('#titulo').html('MOVIMIENTO DE '+tipo);
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        
				}
			});   
}
function formfacturas(tipo,id){
    			$.ajax({
				type: 'GET',
                                data: 'tipo='+tipo+'&id='+id,
				url: '../vistas/facturas/formulario.php',
				success: function(data){
                                    $('#titulo').html('FACTURACION DE PRODUCTOS');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        
				}
			});   
}
function formcotizacion(id){
    			$.ajax({
				type: 'GET',
                                data: 'id='+id,
				url: '../vistas/cotizacion/formulario.php',
				success: function(data){
                                    $('#titulo').html('COTIZACION DE PRODUCTOS');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        
				}
			});   
}
function listmovimientos(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/movimientos/index.php',
				success: function(data){
                                    $('#titulo').html('LISTADO DE MOVIMIENTOS ENTRADAS ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function listmovimientossal(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/movimientos/index_salidas.php',
				success: function(data){
                                    $('#titulo').html('LISTADO DE MOVIMIENTOS SALIDAS ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function listmovimientossalenproceso(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/movimientos/index_salidas_1.php',
				success: function(data){
                                    $('#titulo').html('SALIDAS EN PROCESO');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function listmovimientossalnula(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/movimientos/index_salidas_1_1.php',
				success: function(data){
                                    $('#titulo').html('SALIDAS ANULADAS');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function listfacturas(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/facturas/index.php',
				success: function(data){
                                    $('#titulo').html('LISTADO DE FACTURAS ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function listfacturascredito(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/facturas/creditos.php',
				success: function(data){
                                    $('#titulo').html('LISTADO DE FACTURAS CREDITO ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}

function listasarqueos(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/facturas/arqueos.php',
				success: function(data){
                                    $('#titulo').html('LISTADO DE ARQUEOS ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function buscarrips(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/reportes/index.php',
				success: function(data){
                                    $('#titulo').html('GENERAR RIPS');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function conffacturas(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/empresa/configuracion.php',
				success: function(data){
                                    $('#titulo').html('Configuracion de Facturacion ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       TableManageDefault.init();
				}
			});   
}
function usuarios_i(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/usuario/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de usuarios');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function empresa_i(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/empresa/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de empresa');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}
function popup(carpeta,titulo,parametro){
    $('#modal-popup').modal('show');
    $("#bus_parametro").val(parametro);
    tablapopup(carpeta,titulo,1);
}
function tablapopup(carpeta,titulo,page){
    var nombre = $("#bus_nombre").val();
    var parametro = $("#bus_parametro").val();
    $.ajax({
				type: 'GET',
                                data:'page='+page+'&nombre='+nombre+'&parametro='+parametro+'&car='+carpeta+'&tit='+titulo,
				url: '../vistas/popup/'+carpeta+'/index.php',
				success: function(data){
                                    $('#modal_titulo').html(titulo);
					$('#modal_mostrar_tabla').html(data);
  
				}
			});
}
function tema(id,t){
    $.ajax({
				type: 'GET',
                                data:'id='+id+'&t='+t+'&sw=4',
				url: '../vistas/empresa/acciones.php',
				success: function(data){   
                                    location.href = "../index.php";
				}
			});
}
function kardex(){
    $.ajax({
				type: 'GET',
				url: '../vistas/movimientos/kardex.php',
				success: function(data){
                                    $('#titulo').html('Reporte de Inventario por Pacientes ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       
				}
			}); 
}
function kardexPro(){
    $.ajax({
				type: 'GET',
				url: '../vistas/movimientos/kardex_pro.php',
				success: function(data){
                                    $('#titulo').html('Reporte de Inventario ');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       
				}
			}); 
}
function admin(){
    $.ajax({
				type: 'GET',
				url: '../vistas/administrativo/index.php',
				success: function(data){
                                    $('#titulo').html('');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                       
				}
			}); 
}
function cotizaciones(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/cotizacion/index.php',
				success: function(data){
                                    $('#titulo').html('Lista de Cotizaciones Activas');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
} 
function cotizacionesapro(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/cotizacion/index_1.php',
				success: function(data){
                                    $('#titulo').html('Lista de Cotizaciones Aprobadas');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
} 
function formrecibo(id){
    			$.ajax({
				type: 'GET',
                 data: 'id='+id,
				url: '../vistas/facturas/recibo.php',
				success: function(data){
                                    $('#titulo').html('Comprobante de Caja');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        
				}
			});   
} 
 function countdown(ano,mes,dia,hora,minuto,segundo){
            var fecha=new Date(ano,mes,dia,hora,minuto,segundo)
             console.log(fecha);
            var hoy=new Date()
            var dias=0
            var horas=0
            var minutos=0
            var segundos=0

            if (fecha>hoy){
                    var diferencia=(fecha.getTime()-hoy.getTime())/1000
                    dias=Math.floor(diferencia/86400)
                    diferencia=diferencia-(86400*dias)
                    horas=Math.floor(diferencia/3600)
                    diferencia=diferencia-(3600*horas)
                    minutos=Math.floor(diferencia/60)
                    diferencia=diferencia-(60*minutos)
                    segundos=Math.floor(diferencia)

                    var q ='' + dias + ' D&iacute;as, ' + horas + ' H, ' + minutos + ' Min, ' + segundos + ' Sg'

                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            $("#contador").html(q);
                            
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='' + dias + ' D&iacute;as, ' + horas + ' H, ' + minutos + ' Min, ' + segundos + ' Sg'
            }
        }

        function tarea(){
        	$("#modaltarea").modal('show');

        }
function guardartarea(){
	var id = $("#idtarea").val();
	var asu = $("#casu").val();
	var tipo = $("#ctipo").val();
	var dia = $("#cdia").val();
    var mes = $("#cmes").val();
	var ano = $("#cano").val();
	var fecha = dia+'/'+mes+'/'+ano;
	var hora = $("#chora").val();
	var des = $("#cdes").val();
	var est = $("#cest").val();
	if(asu==''){
		alert("Digite el asunto");
		 $("#casu").focus();
		 return false;
	}
	if(tipo==''){
		alert("Digite el tipo");
		 $("#ctipo").focus();
		 return false;
	}
	if(asu==''){
		alert("Digite el asunto");
		 $("#casu").focus();
		 return false;
	}
	if(dia==''){
		alert("Seleccione el dia");
		 $("#cdia").focus();
		 return false;
	}
	if(mes==''){
		alert("Seleccione el mes");
		 $("#cmes").focus();
		 return false;
	}
	if(hora==''){
		alert("Seleccione la hora");
		 $("#chora").focus();
		 return false;
	}
	if(des==''){
		alert("Digite la descripcion");
		 $("#cdes").focus();
		 return false;
	}
$.ajax({
				type: 'GET',
                 data: 'id='+id+'&asu='+asu+'&tipo='+tipo+'&fecha='+fecha+'&hora='+hora+'&des='+des+'&est='+est+'&sw=1',
				url: '../vistas/crm/insert.php',
				success: function(d){
					alert(d);
                      location.reload();      
                                        
				}
			});

}
function mostrartarea(id){
	tarea();
     $.ajax({
				type: 'GET',
                 data: 'id='+id+'&sw=2',
				url: '../vistas/crm/insert.php',
				success: function(data){
                     var p = eval(data);  
                     console.log(p);
                    $("#idtarea").val(p[0]);
					$("#casu").val(p[3]);
					$("#ctipo").val(p[11]);
					$("#cdia").val(p[12]);
					$("#cmes").val(p[13]);
					$("#cano").val(p[14]);
					$("#chora").val(p[9]);
					$("#cdes").val(p[4]);
					$("#cest").val(p[6]);
                                        
				}
			});
}
function detallesinv(){
    			$.ajax({
				type: 'GET',
				url: '../vistas/productos/index_1.php',
				success: function(data){
                                    $('#titulo').html('Detalles de inventario');
					$('#controlador').html(data);
                                        $('#cargar').html('');
                                        TableManageDefault.init();
				}
			});   
}