<?php

namespace Painlesscode\Dashcard\Card;

class Pie extends Card
{
    protected $label;
    protected $value;
    protected $type;
    protected $data;

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

    public function getType()
    {
        return $this->type;
    }

    public function getData()
    {
        return value($this->data);
    }

    public function type($type)
    {
        throw_unless(in_array($type, ['pie','doughnut']), 'Unsupported chart type');
        $this->type = $type;
        return $this;
    }

    /**
     * Set array data that will be passed to Chart.js data object encoded to JSON
     * See : https://www.chartjs.org/docs/latest/samples/other-charts/pie.html
     *
     * @param [] $data
     * @return $this
     */
    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    public function render()
    {
        return view('dash-card::pie', ['card' => $this]);
    }
}
