function Modulos(path){
	$("#barralateral").load(path);
}

function Opciones(path){
	$("#contenido").load(path);
}

function Prueba(path)
{	
    var cadena = ArmaCadena( "form" );	
    path = "http://localhost/Adjweb/web/app_dev.php/expediente/new";
    alert( path );
	$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		url:path,
		beforeSend:inicioEnvio,
		success:llegadaDatos,
		timeout:10000,
		error:problemas
	}); 		 
	function inicioEnvio()
	{
		
	}			
	function llegadaDatos(datos)
	{			
		alert( datos );
		$("#contenido").html( datos );
	}			
	function problemas()
	{
		//FunProblems();
		alert("problema");
	}
}

function Persist(path)
{	
    var cadena = ArmaCadena( "form" );	
    alert( cadena );
	$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		url:path,
		data:"op=op&" + cadena,
		beforeSend:inicioEnvio,
		success:llegadaDatos,
		timeout:10000,
		error:problemas
	}); 		 
	function inicioEnvio()
	{
		
	}			
	function llegadaDatos(datos)
	{			
		alert( datos );
		$("#contenido").html( datos );
	}			
	function problemas()
	{
		//FunProblems();
		alert("problema");
	}
}

function ArmaCadena( Elemento )
{
	var cadena = "";
	$(Elemento + " input,number").each(function(){
		alert($(this).attr("type"));
		if( $(this).attr("type") == "checkbox" )
			cadena+="&"+$(this).attr("name")+"="+$(this).attr("checked");
		if( $(this).attr("type") == "text" || $(this).attr("type") == "hidden" || $(this).attr("type") == "password" )
			cadena+="&"+$(this).attr("name")+"="+$(this).val();
		if( $(this).attr("type") == "select-one" )
			cadena+="&"+$(this).attr("name")+"="+$(this).val();
	});
	$(Elemento + " input,select").each(function(){
		cadena+="&"+$(this).attr("name")+"="+$(this).val();
	});
	return cadena;
}