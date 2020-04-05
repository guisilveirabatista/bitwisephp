<?php

class Kpi
{

    public $bit1;
    public $bit2;
    public $bit3;
    public $bit4;
    public $bit5;
    public $bit6;
    public $bit7;
    public $bit8;
    public $bit9;
    public $bit10;
    public $bit11;
    public $bit12;
    public $bit13;
    public $bit14;
    public $flags = 8195;


    public function isFlagSet($flag)
    {
        return (($this->flags & $flag) == $flag);
    }

    protected function setFlag($flag, $value)
    {
        if ($value) {
            $this->flags |= $flag;
        } else {
            $this->flags &= ~$flag;
        }
    }
}
