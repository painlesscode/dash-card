<?php

namespace Painlesscode\Dashcard;

use Illuminate\Support\HtmlString;
use Painlesscode\Dashcard\Card\Card;

class CardManager
{
    protected $cards = [];

    public function register(Card $card)
    {
        $this->cards[] = $card;
    }

    public function render()
    {
        return new HtmlString(view('dash-card::container', ['cards' => $this->cards])->render());
    }
}
