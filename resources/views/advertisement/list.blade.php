@extends('welcome')

@section('content')

    <p>Izlistaj moje oglase ({{ $my_ads_count }})</p>

    @if (!($my_ads_count))
        <p class="text-warning">Nemate jos uvek kreiran nijedan oglas.</p>
        <p class="text-info">Ako želite da postavite oglas možete učiniti klikom na dugme ispod.</p>

        <p class="text-center">
            <a class="btn btn-primary" href="{{ route('advertisementcreate') }}" role="button">Novi oglas</a>
        </p>

    @else

        <hr>

        <ul class="media-list">

            @foreach($my_ads as $my_ad)
                <li class="media">
                    {{--
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="..." alt="...">
                        </a>
                    </div>
                    --}}
                    <div class="media-body">
                        <a href="{{ route('') }}">
                            <h4 class="media-heading">{{ $my_ad->title }}</h4>
                            <p>{{ $my_ad->description }}</p>
                        </a>
                    </div>

                    <hr>

                </li>
            @endforeach
        </ul>

    @endif

@endsection