@if ($categoria == 'casa')
    @include('categorie.casa')
@elseif ($categoria == 'lavoro')
    @include('categorie.lavoro')
@else
 errore categoria
@endif