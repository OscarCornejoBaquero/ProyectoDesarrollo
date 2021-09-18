<?php
class Errors extends Controllers{
    public function __construct()
    {
        session_start();
        parent::__construct();

    }
    public function notFound(){
        $data['tag_page'] = " Página no Encontrada ";
        $data['page_title'] = "Página no Encontrada";
        $data['page_name'] = "error";
       $this->views->getView($this,"error", $data);
    }
}
$notFound = new Errors();
$notFound->notFound();
?>