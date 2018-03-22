<?php

class View
{

    protected $data;


    public function assign($name, $value)
    {

        $this->data[$name] = $value;

    }


    public function display($template)
    {

        echo $this->render($template);

    }


    public function render($template)
    {

        ob_start();

        foreach ($this->data as $var => $data) {
            $$var = $data;
        }

        include $template;

        $str = ob_get_contents();

        ob_end_clean();

        return $str;

    }

}