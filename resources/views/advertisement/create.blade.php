@extends('welcome')

@section('content')

    <div class="row wrapper wrapper-content">
        <div class="tabs-container col-xs-12">

            <div>
                <h2>Formular za unos oglasa</h2>
            </div>

            <div class="panel-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ action('AdvertisementController@viewCreateForm') }}" method="post" class="form-horizontal">

                    {{ csrf_field() }}

                    <table class="table table-hover">

                        <tbody>

                            <tr>
                                <td class="text-right">
                                    <label for="title">Naziv oglasa*: </label>
                                </td>
                                <td>
                                    <input placeholder="npr. Laptop ili Kosilica 4x4..." type="text" name="title" id="title">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="adv_typ">Tip oglasa*: </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="radio" name="sell_or_buy" id="fk_type" value="1" checked> Prodajem
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="sell_or_buy" id="fk_type" value="2"> Kupujem
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="price">Cena*: </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="text" name="price" id="price">
                                    </label>

                                    <label title="RSD - Republika Srbija Dinar" style="margin-left: 10px;">
                                        <input type="radio" name="fk_price_currency" id="fk_price_currency" value="RSD" checked> Din
                                    </label>

                                    <label title="EURO" style="margin-left: 10px;">
                                        <input type="radio" name="fk_price_currency" id="fk_price_currency" value="EUR"> <span class="glyphicon-class glyphicon glyphicon-euro"></span>
                                    </label>

                                    <div>
                                        <label>
                                            <input type="checkbox" name="accept_replacement" value="1" id="accept_replacement"> Prihvatam zamenu
                                        </label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Stanje*: </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="radio" name="fk_condition" value="1" checked> Polovno (korišćeno)
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="2"> Novo
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="3"> Neispravno (oštećeno)
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="4"> Nedefinisano
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Opis oglasa*: </label>
                                </td>
                                <td>
                                    <textarea id="description" name="description"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kategorija: </label>
                                </td>
                                <td>
                                    <select name="fk_category" class="form-control">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Grupa: </label>
                                </td>
                                <td>
                                    <select name="fk_group" class="form-control">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                </td>
                                <td>
                                    <div class="bg-info" style="padding: 10px 0 10px 10px; border: 1px solid #ddd;">
                                        Vaši kontakt podaci za oglas
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="place">Mesto*: </label>
                                </td>
                                <td>
                                    <select name="fk_place" class="form-control">
                                        <option value=""></option>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kontakt osoba*: </label>
                                </td>                               <td>
                                    <input type="text" name="contact_name" id="contact_name" value="{{ Auth::user()->first_name.' '.Auth::user()->last_name }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kontakt telefon: </label>
                                </td>
                                <td>
                                    <input type="text" name="contact_phone" id="contact_phone" value="{{ Auth::user()->telephone }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                </td>
                                <td>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="accepted_publish_condition" value="1" id="accepted_publish_condition"> Prihvatam <a href="#nogo">pravila i uslove</a> za oglašavanje na portalu svezaprodaju.com
                                        </label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                </td>
                                <td>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary m-r"><span class="fa fa-check"></span> @lang('Sačuvaj')</button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </form>

            </div>

        </div>
    </div>

@endsection