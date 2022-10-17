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

    public function render()
    {
        return view('dash-card::value', [
            'label' => $this->label,
            'value' => $this->value,
        ]);
    }
}
