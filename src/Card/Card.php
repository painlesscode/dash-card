<?php

namespace Painlesscode\Dashcard\Card;

class Card
{
    protected $visible = true;

    public function isVisible()
    {
        return value($this->visible);
    }

    public function visible($visible = true)
    {
        $this->visible = $visible;
        return $this;
    }
}
