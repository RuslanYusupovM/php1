<?php

class View
{

    protected $data = [];

    public function __construct()
    {

    }

    public function assign($name, $value)
    {
        $this->data[ $name ] = $value;
    }

    public function display($template)
    {
        $data = $this->data;

        include $this->render($template);
    }

    public function render($template)
    {
        return realpath($template);
    }

}