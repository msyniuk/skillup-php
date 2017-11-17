<?php

    class SmartForm extends Form
{

    private $form = [];

    public function set($key, $value)
    {
        $this->form[$key] = $value;
    }

    public function get($key)
    {
        return isset($this->form[$key]) ? $this->form[$key] : null;
    }
}
