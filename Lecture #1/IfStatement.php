<?php

class IfStatement
{
    public function checkIf()
    {
        $variable = 0;
        $result = '';
        if ($variable > 0) {
            $result = '$variable > 0';
        } elseif($variable < 0) {
            $result = '$variable < 0';
        } else {
            $result = '$variable = 0';
        }

        return $result;
    }
}
