<?php

use Nikitenko\NikitenkoException;
class E extends D
{

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return array
     */
    function solve($a, $b, $c)
    {
        if ($a == 0) {
            return parent::line($b, $c);
        }
        $discr = $this->discr($a, $b, $c);
        if ($discr < 0) {
            throw new NikitenkoException("Ошибка: уравнение не имеет решений");
        }
        if ($discr == 0) {
            $this->X = array(-$b / 2 / $c);
            return $this->X;
        }
        $discr=sqrt($discr);
        $this->X = array(
            ((-$b + $discr) / (2 * $a)),
            ((-$b - $discr) / (2 * $a))
        );
        return $this->X;
    }

    function discr($a, $b, $c)
    {
        return pow($b, 2) - 4 * $a * $c;
    }
}

?>