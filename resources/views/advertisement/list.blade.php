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

         Prikazi ovde oglase...

    @endif

@endsection