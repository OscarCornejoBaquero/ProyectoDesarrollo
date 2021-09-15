<?php


class Nosotros extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function nosotros(){
        $data['tag_page'] = "Nosotros";
        $data['page_title'] = "Nosotros";
        $data['page_name'] = "nosotros";
        $this->views->getView($this,"nosotros",$data);
    }
}