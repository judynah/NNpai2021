<?php
class AppController {
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
        session_start();
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'public/views/'. $template.'.php';
        $output = 'File not found';

        if(file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }

    //obsługa cookies

    public function cookieOn() {
        if (isset($_SESSION['email'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/main_page");
        }
    }

    public function cookieOff() {
        if (!isset($_SESSION['email'])){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
    }

}
?>