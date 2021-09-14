<?php

    function base_url()
    {
        return BASE_URL;
    }

//Retorna la url del Assets
function media(){
    return BASE_URL."Assets/";
}
function headerAdmin($data=""){
    $view_header ="Views/Templates/header.php";
    require_once($view_header);
}
function headerFront($data=""){
    $view_header ="Views/Templates_frontEnd/header.php";
    require_once($view_header);
}
function footerAdmin($data=""){
    $view_footer = "Views/Templates/footer.php";
    require_once($view_footer);
}
//Muestra la informacion en un formato
function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

function getModal(string $nameModal, $data){
    $view_modal = "Views/Template/Modals/{$nameModal}.php";
    require_once $view_modal;
}

    //Copiar funcion de eliminar espacios despues 


    //Generar contraseñas 
    function passGenerador($length = 10)
    {
        $pass ="";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);
        for ($i=1; $i <=$longitudPass; $i++) { 
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }

    //Formato para valores monetarios 
    function formatMoney($cantidad)
    {
        return number_format($cantidad,2,SPD,SPM);
    }
?>
