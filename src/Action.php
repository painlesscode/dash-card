<?php

namespace Painlesscode\Dashcard;

class Action
{
    protected string $label;
    protected string $url;

    protected bool $shouldAlert;

    public function __construct($label, $url, $shouldAlert = false)
    {
        $this->label = $label;
        $this->url = $url;
        $this->shouldAlert = $shouldAlert;
    }

    public static function make($label, $url, $shouldAlert = false)
    {
        return new self($label, $url, $shouldAlert);
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function shouldAlert(): bool
    {
        return $this->shouldAlert;
    }
}
