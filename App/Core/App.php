<?php 
class App {
   protected $currentController = 'Pages';
   protected $currentMethod = 'index';
   protected $params = [];

   public function __construct() 
   {
      $url = $this->getUrl();
      //print_r($url);

      $controllerName = ucwords($url[0]);

      if(file_exists('../App/Controllers/' . $controllerName . '.php')){
         $this->currentController = $controllerName;
         unset($url[0]);
      } else {
         echo "Class '$controllerName' not exists.";
         exit;
      }

      require_once '../App/Controllers/' . $this->currentController . '.php';

      $this->currentController = new $this->currentController;

      if(isset($url[1])){
         if(method_exists($this->currentController, $url[1])){
            $this->currentMethod = $url[1];
            unset($url[1]);
         } else {
            echo "Method '{$url[1]}' not exists.";
            exit;
         }
      }

      $this->params = array_values($url);

      $method = new ReflectionMethod($this->currentController, $this->currentMethod);

      if(count($method->getParameters()) > 0 && !isset($url[2])){
         echo 'Parameters not exists.';
         exit;
      } 
      
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
   }

   public function getUrl()
   {
      if(isset($_GET['url'])){
         $url = rtrim($_GET['url'], '/');
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode('/', $url);
         return $url;
      } 

      return $url = [$this->currentController];
   }

}