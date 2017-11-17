<?php

    class Form
{

    private function stringAtr($atr){
        $strAtr = '';
        foreach ($atr as $key=>$value){
            $strAtr .= $key . '="' . $value . '" ';
        }

        return $strAtr;
    }

    public function input($atr){
        $html = '<input ' . $this->stringAtr($atr). '>';
        return $html;

    }

    public function submit($atr){
        $html = '<input type="submit" ' . $this->stringAtr($atr) .'>';
        return $html;
    }

    public function textarea($atr){
        $html = '<textarea ' . $this->stringAtr($atr) . '></textarea>';
        return $html;
    }

    public function password($atr){
        $html = '<input type="password" ' . $this->stringAtr($atr) .'>';
        return $html;
    }

    public function open($atr){
        $html = '<form ' . $this->stringAtr($atr) . '>';
        return $html;
    }

    public function close(){
        $html = '</form>';
        return $html;
    }


}
