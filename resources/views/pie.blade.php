@php($id = \Illuminate\Support\Str::snake($card->getLabel()).'_'.rand())
<div class="w-full bg-white rounded shadow p-3 {{ $card->getColor() }}">
    <div class="w-full flex justify-between">
        <div class="text-xl">{{ $card->getLabel() }}</div>
    </div>
    <div class="w-full pt-8">
        <div class="w-full text-3xl">
            <canvas id="{{ $id }}"></canvas>
        </div>
        <div class="w-full flex items-end justify-center pt-2">
            @foreach($card->getActions() as $label => $url)
                <a class="block py-1 px-2 text-sm font-semibold border rounded-md mr-2 cursor-pointer"
                   href="{{ $url }}">{{ $label }}</a>
            @endforeach
        </div>
    </div>
    <script>
        (() => {
            const int = setInterval(() => {
                if (window.hasOwnProperty('Chart')) {
                    clearInterval(int)
                    @if($card->getData())
                    new Chart(document.getElementById('{{ $id }}'), {
                        type: '{{ $card->getType() }}',
                        data: @js($card->getData())
                    });
                    @else
                    new Chart(document.getElementById('{{ $id }}'), {
                        type: '{{ $card->getType() }}',
                        data: {
                            labels: @js(array_keys($card->getValue())),
                            datasets: [{
                                data: @js(array_values($card->getValue())),
                                hoverOffset: 4
                            }]
                        }
                    });
                    @endif

                }
            }, 1)
        })()
    </script>
</div>
