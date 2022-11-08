<div class="w-full flex flex-wrap">
    @foreach($cards as $card)
        @continue(!$card->isVisible())
        <div class="w-full md:w-1/2 lg:w-1/3 p-2">
            {{ $card->render() }}
        </div>
    @endforeach
</div>
