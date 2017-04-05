<?php

namespace Models;

class View
{
    use \Magic;

    public function display($template) {

        //echo $this->render($template);
        include $template;
    }

    public function render($template) {

        //return $res;
    }
}