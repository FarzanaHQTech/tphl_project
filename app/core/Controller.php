

<?php
class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        // Project root
        $root = dirname(__DIR__, 2);

        // Load page body
        ob_start();
        require $root . "/app/views/" . $view . ".php";
        $content = ob_get_clean();

        // Load master layout
        require $root . "/app/views/layouts/master.php";
    }
}



