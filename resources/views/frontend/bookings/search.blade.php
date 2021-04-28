<h1>Booking</h1>

<pre>{{ $bengs }}</pre>

<ul>
@foreach ($bengs as $beng)
    <li>
        <p>{{ $beng->typeName }}</p>
        <p>{{ $beng->vue }}</p>
        <p>
        @foreach ($beng->services as $service)
            {{ $service['name'] }}, 
        @endforeach</p>
        
        <p><a href="{{ route('Booking.bookit', ['type'=>$beng->typeId, 'view'=>$beng->vueid]) }}">Reserver</a></p>
        <p>{{ $beng->typeId.', '.$beng->vueid }}</p>
        <p></p>
    </li>
@endforeach
</ul>