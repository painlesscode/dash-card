<div class="w-full border-b-2 border-orange-500 rounded shadow p-3 {{ $card->getColor() }}">
    <div class="w-full flex justify-between">
        <div class="text-xl">{{ $card->getLabel() }}</div>
    </div>
    <div class="w-full pt-8 flex justify-between relative overflow-hidden">
        <div class="flex items-end z-10">
            @foreach($card->getActions() as $action)
                <a class="block py-1 px-2 text-sm font-semibold border rounded-md mr-2 cursor-pointer"
                   @if($action->shouldAlert()) onclick="return confirm('Are you sure you want to execute this action ?')" @endif
                   href="{{ $action->getUrl() }}">{{ $action->getLabel() }}</a>
            @endforeach
        </div>
        <div class="text-orange-100 absolute z-0 top-7">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
            </svg>
        </div>
        
        <div class="text-3xl">{{ $card->getValue() }}</div>
    </div>
</div>
