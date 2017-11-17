<?php

    class Form
{

    protected function stringAtr($atr){
        $strAtr = '';
        foreach ($atr as $key=>$value){
            $strAtr .= $key . '="' . htmlspecialchars($value) . '" ';
        }

        return $strAtr;
    }

    public function input(array $atr){
        $atr = $this->prepareAtr($atr);
        $html = '<input ' . $this->stringAtr($atr). '>';
        return $html;

    }

    public function submit(array $atr){
        $atr['type'] = "submit";
        $html = '<input ' . $this->stringAtr($atr) .'>';
        return $html;
    }

    public function textarea(array $atr){
        $atr = $this->prepareAtr($atr);
        if (isset($atr['value'])) {
            $value = $atr['value'];
            unset($atr['value']);
        } else {
            $value ='';
        }
        $html = '<textarea ' . $this->stringAtr($atr) . '>' . $value . '</textarea>';
        return $html;
    }

    public function password(array $atr){
        $atr['type'] = "password";
        $html = '<input ' . $this->stringAtr($atr) .'>';
        return $html;
    }

    public function open(array $atr){
        $html = '<form ' . $this->stringAtr($atr) . '>';
        return $html;
    }

    public function close(){
        $html = '</form>';
        return $html;
    }

    protected function prepareAtr(array $atr){
        return $atr;
    }


}
