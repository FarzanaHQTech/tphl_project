<?php
class UserController extends Controller
{
    // User List Page
    public function index()
    {
        $this->view("users/user-lists", [
            "current_route"   => "user-lists",        // sidebar active
            "active"         => "user-lists",        // master.php active check
            "page_title"     => "User List",
            "show_breadcrumb"=> true,
        ]);
    }

    // Create User Page
    public function create()
    {
        $this->view("users/create-user", [
            "current_route"   => "create-user",    // sidebar active
            "active"         => "create-user",       
            "page_title"     => "Add User",
            "show_breadcrumb"=> true,
        ]);
    }
public function edit(){
    $this->view("users/edit-user",[
        "current_route" => "edit-user",
        "active" =>"edit-user",
        "psge_title" => "Edit User",
        "show_breadcrumb" => true,
    ]);
}

}
