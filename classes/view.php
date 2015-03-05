<?php

class view
{
    protected $data =[];


    public function assign($name, $value)
    {
       $this->data[$name] = $value;
    }

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }
    
    public function display($templata)
    {
        foreach ($this->data as $key => $val) {
            $$key = $val;
        }
        include __DIR__ . '/../views/' . $templata;
    }
} 