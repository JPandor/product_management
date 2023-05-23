<?php

class App {
    public $controller = "home";
    public $method = "index";
    public $params = [];
    public $url;

    public function __construct () {
        //getting url info 
        $this->url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
        
        if ($this->url == '/'){
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->method], $this->params);
        }else{

            //see if controller exists 
            if (file_exists("../app/controllers/" . $this->url[0] . ".php")){
                $this->controller = $this->url[0];
            }

            //instantiating controller class
            $this->controller = new $this->controller;

            //checking if method is exists and setting it
            if (isset($this->url[1])){
                if (method_exists($this->controller, $this->url[1])){
                    $this->method = $this->url[1];
                }
            }

            //getting paramaters
            $this->params = array_slice($this->url, 2);

            //running the controller and method 
            call_user_func_array([$this->controller, $this->method], $this->params);

        }

    }
}