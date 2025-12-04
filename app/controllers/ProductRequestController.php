<?php
class ProductRequestController extends Controller
{
    public function index()
    {
        $this->view("productRequests/product-request", [
            "current_route" => "product-request",
            "page_title"   => "Product Request",
            "show_breadcrumb" => false,
        ]);
    }
}





