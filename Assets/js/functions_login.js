function requestAll(){
    return  request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
}
document.addEventListener('DOMContentLoaded', function(){
    if(document.querySelector("#formLogin")){
        let formLogin = document.querySelector("#formLogin");
        formLogin.onsubmit = function(e) {
            e.preventDefault();
            var request = requestAll();
            var ajaxUrl = base_url+'Login/loginUser';
            var formData = new FormData(formLogin);
            request.open("POST",ajaxUrl,true);

            request.send(formData);
            console.log(request);

            request.onreadystatechange = function(){
                if(request.readyState != 4) return;
                if(request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        swal("Atención", objData.msg, "success");
                        window.location = base_url+'dashboard';

                    }else{
                        swal("Atención", objData.msg, "error");
                        document.querySelector('#txtPassword').value = "";
                    }
                }else{
                    swal("Atención","Error en el proceso", "error");
                }
                //divLoading.style.display = "none";
                return false;
            }

        }
    }
}, false);
