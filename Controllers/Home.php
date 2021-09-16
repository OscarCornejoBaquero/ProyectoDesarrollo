<?php
class Home extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function home(){
        $data['tag_page'] = "Vero Cakes";
        $data['page_title'] = "Inicio de la Página";
        $data['page_name'] = "home";
       $this->views->getView($this,"home",$data);
    }

}
?>