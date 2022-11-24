<?php

namespace Painlesscode\Dashcard\Card;

class Pie extends Card
{
    protected $label;
    protected $value;
    public $type;

    public function __construct($label, $value, $type = 'pie')
    {
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
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
        return view('dash-card::pie', ['card' => $this]);
    }
}
