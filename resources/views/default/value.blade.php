<div class="w-full bg-white rounded shadow p-3 {{ $card->getColor() }}">
    <div class="w-full flex justify-between">
        <div class="text-xl">{{ $card->getLabel() }}</div>
    </div>
    <div class="w-full pt-8 flex justify-between">
        <div class="flex items-end">
            @foreach($card->getActions() as $action)
                <a class="block py-1 px-2 text-sm font-semibold border rounded-md mr-2 cursor-pointer"
                   @if($action->shouldAlert()) onclick="return confirm('Are you sure you want to execute this action ?')" @endif
                   href="{{ $action->getUrl() }}">{{ $action->getLabel() }}</a>
            @endforeach
        </div>
        <div class="text-3xl">{{ $card->getValue() }}</div>
    </div>
</div>
