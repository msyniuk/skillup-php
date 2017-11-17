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


    protected function prepareAtr(array $atr)
    {

        if(isset($atr['name']) && isset($atr['value'])
            && isset($_REQUEST[$atr['name']]))
        {
            $atr['value'] = $_REQUEST[$atr['name']];
        }

        return parent:: prepareAtr($atr);
    }

}
