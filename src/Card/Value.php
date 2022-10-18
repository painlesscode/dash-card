<?php

namespace Painlesscode\Dashcard\Card;

class Value extends Card
{
    protected $label;
    protected $value;

    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    public static function make($label, $value)
    {
        return new self($label, $value);
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getValue()
    {
        return value($this->value);
    }

    public function render()
    {
        return view('dash-card::value', ['card' => $this]);
    }
}
