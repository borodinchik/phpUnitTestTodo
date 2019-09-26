<?php

namespace Controllers\Core\Web;

class Pages
{
    public function render()
    {
        return "Hello World";
    }

    public function returnTrue()
    {
        return true;
    }

    public function returnArray()
    {
        return ['Vika', 'Dasha', 'Katia', 'Veronika'];
    }
}