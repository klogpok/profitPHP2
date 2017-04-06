<?php

namespace Models;

class View
{
    use \Magic;

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    public function display($template)
    {
        echo $this->render($template);
    }
}