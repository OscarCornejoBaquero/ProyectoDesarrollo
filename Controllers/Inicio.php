<?php


class Inicio extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function inicio(){
        $data['tag_page'] = "Inicio Sistema";
        $data['page_title'] = "Inicio del Sistema";
        $data['page_name'] = "inicio";
        $this->views->getView($this,"inicio",$data);
    }
}