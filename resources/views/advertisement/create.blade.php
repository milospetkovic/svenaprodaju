@extends('welcome')

@section('content')

    <div class="row wrapper wrapper-content">
        <div class="tabs-container col-xs-12">

            <div>
                Formular za unos oglasa
            </div>

            <div class="panel-body">
                <form action="{{ action('AdvertisementController@viewCreateForm') }}" method="post" class="form-horizontal">
                    <div class="">
                        <label for="title">Naziv oglasa</label>
                        <input placeholder="npr. Laptop ili Kosilica 4x4..." type="text" name="title" id="title">
                    </div>
                    <div class="">
                        <label for="description">Opis oglasa</label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary m-r"><span class="fa fa-check"></span> @lang('Sačuvaj')</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection