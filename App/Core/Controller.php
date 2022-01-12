<?php
/**
 * Base Controller
 * Loads to models and view
 */
class Controller {

   // Load Model
   public function model($model)
   {
      require_once '../App/Models/' . $model . '.php';
      return new $model();
   }
   
   // Load View
   public function view($view, $data = [])
   {
      if(file_exists('../App/Views/' . $view . '.php')) {
         require_once '../App/Views/' . $view . '.php';
      } else {
         die("View '$view' does not exist.");
      }
   }
}