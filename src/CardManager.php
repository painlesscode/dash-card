<?php

namespace Painlesscode\Dashcard;

use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;
use Painlesscode\Dashcard\Card\Card;

class CardManager
{
    protected $cards = [];

    /**
     * @param Card|Card[] $card
     * @return void
     */
    public function register($card)
    {
        $card = is_array($card) ? $card : Arr::wrap($card);
        $this->cards = array_merge($this->cards, $card);
    }

    public function render()
    {
        return new HtmlString(view('dash-card::container', ['cards' => $this->cards])->render());
    }
}
