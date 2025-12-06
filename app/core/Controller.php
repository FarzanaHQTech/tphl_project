<?php
class Controller
{
    public function view($view, $data = [])
    {
        // Inject global base_url into data
        $data['base_url'] = $GLOBALS['base_url'];

        // extract for child view
        extract($data);

        $root = dirname(__DIR__, 2);

        // Load child view
        ob_start();
        require $root . "/app/views/" . $view . ".php";
        $content = ob_get_clean();

        // extract again so master layout also gets variables
        extract($data);

        // Load master layout
        require $root . "/app/views/layouts/master.php";
    }
}





