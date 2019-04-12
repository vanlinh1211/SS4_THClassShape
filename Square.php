<?php

class Square extends Rectangle
{
    function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}
?>