function filtro(){
    var nombre,email,tabla,tr,i;
    nombre = document.getElementById('name').value.toUpperCase();
    email = document.getElementById('email').value.toUpperCase();
    tabla = document.getElementById('t-clientes');
    tr = document.getElementsByTagName('tr');
    for (i = 0; i < tr.length; i++){
      var tdNombre = tr[i].getElementsByTagName("td")[0];
      var tdEmail = tr[i].getElementsByTagName("td")[1];
      var tdIngreso = tr[i].getElementsByTagName("td")[2];
      var tdMarca = tr[i].getElementsByTagName("td")[3];
      var tdContacto = tr[i].getElementsByTagName("td")[4];
      if(tdNombre||tdEmail){
        if(
          (tdNombre.textContent.toUpperCase().indexOf(nombre) > -1) &&
          (tdEmail.textContent.toUpperCase().indexOf(email) > -1)
        ){
            tr[i].style.display = "";
        }else{
            tr[i].style.display = "none";
        }
      }
      
    }
}