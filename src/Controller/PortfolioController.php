<?php
//
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

class PortfolioController extends AppController {
    public function index() {

        $target = str_replace("/", "", Router::url() );

        if( $target != "" ) {
            $this -> render ( "/Portfolio/" . $target );
        }
    }
}
