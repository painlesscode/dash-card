<?php

namespace Painlesscode\Dashcard\Card;

use Painlesscode\Dashcard\Action;

class Card
{
    protected $visible = true;
    protected $color = 'bg-white';
    protected static $colors = [
        'bg-white',
        'bg-green-500',
        'bg-red-500',
        'bg-blue-500',
        'bg-sky-500',
        'bg-pink-500',
        'bg-purple-500',
        'bg-teal-500',
    ];

    protected $actions = [];

    public function isVisible()
    {
        return value($this->visible);
    }

    public function visible($visible = true)
    {
        $this->visible = $visible;
        return $this;
    }

    public function color($color)
    {
        $this->color = is_int($color)
            ? static::$colors[abs($color % count(static::$colors))]
            : $color;
        return $this;
    }

    public function action(Action $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function when($condition, $callable) {
        if (value($condition)) call_user_func($callable, $this);
        return $this;
    }
}
