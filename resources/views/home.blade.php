@extends('template')

@section('title', 'GSLC 1')

@section('content')
    <div>
        @for ($i = 1; $i <= 12; $i++)
            @if ($i < 12 )
               <p> {{$i}} WORD : AKU PASTI BISA <p>
            @elseif ($i == 12)
                <p> LAST WORD : AKHIRNYA BISA </p>
            @endif
        @endfor
    </div>
@endsection
