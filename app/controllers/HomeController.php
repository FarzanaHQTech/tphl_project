<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view("home", [
            "current_route" => "home",
            "page_title"   => "Dashboard",
            "show_breadcrumb" => false,
        ]);
    }
}



