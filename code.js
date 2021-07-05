function eliminar(id){
    window.location.href="index.php?button=eliminar&id="+id;
}
function modificar(id){
    var nombre=document.getElementById("nombre"+id);
    var edad=document.getElementById("edad"+id);
    var sexo=document.getElementById("sexo"+id);
    var rfc=document.getElementById("rfc"+id);
    window.location.href="index.php?button=modificar&id="+id+"&nombre="+nombre.value+"&edad="+edad.value+"&sexo="+sexo.value+"&rfc="+rfc.value;
}