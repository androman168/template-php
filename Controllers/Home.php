<?php
class Home extends Controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
        // session_destroy();
    }


    public function index()
    {
        $data['page_tag'] = "Dashboard";
        $data['page_title'] = "Desde home";

        $this->views->getView($this, 'index', $data);
    }
}