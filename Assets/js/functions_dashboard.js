function requestAll(){
    return  request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
}

//Funcion para validar el Modal a mostrar
function urlAjax(intId_rol, RESPUESTA_QUERY){
    var ajaxUrl;
    if(intId_rol>RESPUESTA_QUERY){
        ajaxUrl = base_url+'Usuarios/editUsuario';
    }
    if(intId_rol==RESPUESTA_QUERY){
        ajaxUrl = base_url+'Usuarios/setUsuario';
    }
    return ajaxUrl;
}

window.addEventListener("load", function() {
    setTimeout(() => {
        fntCantUsuario();
        tProductosActivos();
        tVentasRealizadas();
        tCategorias();
    }, 500);
}, false);

function fntCantUsuario(){
    var ajaxUrl = base_url+'Dashboard/contarUsuarios';
    var request = requestAll();
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            document.querySelector('#nameCard').innerHTML = objData.data.usuariosActivos;
        }
    }
}


function tProductosActivos(){
    var ajaxUrl = base_url+'Dashboard/contarUsuarios';
    var request = requestAll();
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            document.querySelector('#producAct').innerHTML = objData.data.usuariosActivos;
        }
    }
}
function tVentasRealizadas(){
    var ajaxUrl = base_url+'Dashboard/contarUsuarios';
    var request = requestAll();
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            document.querySelector('#ventasR').innerHTML = objData.data.usuariosActivos;
        }
    }
}
function tCategorias(){
    var ajaxUrl = base_url+'Dashboard/contarUsuarios';
    var request = requestAll();
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);
            document.querySelector('#catPro').innerHTML = objData.data.usuariosActivos;
        }
    }
}
