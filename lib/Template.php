<?php
 class Template 
{
    public $template;
    protected $var = [];

    public function __construct($template)
    {
        $this->template =$template;
    }
    public function __get($key)
    {
        return $this->var[$key];
    }
    public function __set($key,$value)
    {
        $this->var[$key] = $value;
    }
    public function __toString()
    {
        extract($this->var);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}