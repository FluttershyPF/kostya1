<?php

class D
{
    function line($b, $c):array
    {
        if ($c == 0)
        {
            throw new InvalidArgumentException("Equation doesn't exist");
        }
        return $this->X=array($b/$c);
    }
    protected $X;
}?>