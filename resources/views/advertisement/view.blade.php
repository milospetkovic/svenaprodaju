@extends('welcome')

@section('content')

    <div class="row wrapper wrapper-content">
        <div class="tabs-container col-xs-12">

            <div>
                Pregled oglasa
            </div>

            <div class="panel-body">
                <h3>{{ $adv->title }}</h3>

                <p>{{ $adv->description }}</p>
            </div>

        </div>
    </div>

@endsection