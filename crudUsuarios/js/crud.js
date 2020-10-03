function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
			
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id').val(r['id']);
			$('#nombreu').val(r['nombre']);
			$('#passwordu').val(r['contraseña']);
			$('#emailu').val(r['email']);
			$('#usuariou').val(r['tipo de usuario']);
		}
	});
	
}

function actualizarDatos() {
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			if(r==1){
				mostrar();
				swal("actualizado con exito!", ":D" , "success");
			}else{
				swal("Error!", ",:(","Error");
			}

			
		}
	});
	
}



function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsert')[0].reset();//limpiar formulario//
				mostrar();
				swal("agregado con exito!", ":D" , "success");
			}else{
				swal("Error!", ",:(","Error");
			}

			
		}
	});
 return false;
}