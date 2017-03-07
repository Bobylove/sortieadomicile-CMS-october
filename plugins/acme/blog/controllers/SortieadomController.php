<?php namespace Acme\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Acme\Blog\Models\Sortieadom;
use View;
use Response;
use Redirect;

/**
 * Sortieadom Controller Back-end Controller
 */
class SortieadomController extends Controller
{
    public $implement = [
    'Backend.Behaviors.FormController',
    'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Acme.Blog', 'blog', 'sortieadomcontroller');
    }

    public function getRecup (){
       $message =  Sortieadom::All(); 
      
   
        return Redirect::to('home',['user' => $message]); 
    }

   public static function getAfterFilters() {return [];}
   public static function getBeforeFilters() {return [];}
   public static function getMiddleware() {return [];}
   public function callAction($method, $parameters=false) {
     return call_user_func_array(array($this, $method), $parameters);
 }
}


