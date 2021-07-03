<?php

namespace Core;

class Controller 
{

    public function view($view)
    {

        require './views/layout/header.php';
        include './views/'.$view.'.php';
        require './views/layout/footer.php';

    }


}