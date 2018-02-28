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
                                    <input placeholder="npr. Laptop ili Kosilica 4x4..." type="text" name="title" id="title" value="{{ old('title') }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="adv_typ">Tip oglasa*: </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="radio" name="sell_or_buy" id="fk_type" value="1" {{ old('sell_or_buy')=="1" ? 'checked' : old('sell_or_buy')=="" ? 'checked' : '' }}> Prodajem
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="sell_or_buy" id="fk_type" value="2" {{ old('sell_or_buy')=="2" ? 'checked' : '' }}> Kupujem
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="price">Cena*: </label>
                                </td>
                                <td>
                                    <label>
                                        <input type="text" name="price" id="price" value="{{ old('price') }}">
                                    </label>

                                    <label title="RSD - Republika Srbija Dinar" style="margin-left: 10px;">
                                        <input type="radio" name="fk_price_currency" id="fk_price_currency" value="RSD" {{ old('fk_price_currency')=="RSD" ? 'checked' : old('fk_price_currency')=="" ? 'checked' : '' }}> Din
                                    </label>

                                    <label title="EURO" style="margin-left: 10px;">
                                        <input type="radio" name="fk_price_currency" id="fk_price_currency" value="EUR" {{ old('fk_price_currency')=="EUR" ? 'checked' : '' }}> <span class="glyphicon-class glyphicon glyphicon-euro"></span>
                                    </label>

                                    <div>
                                        <label>
                                            <input type="checkbox" name="accept_replacement" value="1" id="accept_replacement" {{ old('accept_replacement')=="2" ? 'checked' : '' }}> Prihvatam zamenu
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
                                        <input type="radio" name="fk_condition" value="1" {{ old('fk_condition')=="1" ? 'checked' : old('fk_condition')=="" ? 'checked' : '' }}> Polovno (korišćeno)
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="2" {{ old('fk_condition')=="2" ? 'checked' : '' }}> Novo
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="3" {{ old('fk_condition')=="3" ? 'checked' : '' }}> Neispravno (oštećeno)
                                    </label>

                                    <label style="margin-left: 10px;">
                                        <input type="radio" name="fk_condition" value="4" {{ old('fk_condition')=="4" ? 'checked' : '' }}> Nedefinisano
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Opis oglasa*: </label>
                                </td>
                                <td>
                                    <textarea id="description" name="description">{{ old('description') }}</textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kategorija: </label>
                                </td>
                                <td>
                                    <select name="fk_category" class="form-control">
                                        <option value="" {{ old('fk_category')=="" ? 'selected' : '' }}></option>
                                        <option value="1" {{ old('fk_category')=="1" ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ old('fk_category')=="2" ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ old('fk_category')=="3" ? 'selected' : '' }}>3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Grupa: </label>
                                </td>
                                <td>
                                    <select name="fk_group" class="form-control">
                                        <option value="" {{ old('fk_group')=="" ? 'selected' : '' }}></option>
                                        <option value="1" {{ old('fk_group')=="1" ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ old('fk_group')=="2" ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ old('fk_group')=="3" ? 'selected' : '' }}>3</option>
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
                                        <option value="" {{ old('fk_place')=="" ? 'selected' : '' }}></option>
                                        <option value="1" {{ old('fk_place')=="1" ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ old('fk_place')=="2" ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ old('fk_place')=="3" ? 'selected' : '' }}>3</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kontakt osoba*: </label>
                                </td>
                                <td>
                                    <input type="text" name="contact_name" id="contact_name" value="{{  old('contact_name')!="" ? old('contact_name') : Auth::user()->first_name.' '.Auth::user()->last_name }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for="description">Kontakt telefon: </label>
                                </td>
                                <td>
                                    <input type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone')!="" ? old('contact_phone') : Auth::user()->telephone }}">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                </td>
                                <td>
                                    <div>
                                        <label>
                                            <input type="checkbox" name="accepted_publish_condition" value="1" id="accepted_publish_condition" {{ old('accepted_publish_condition')=="1" ? 'checked' : '' }}> Prihvatam <a href="#nogo">pravila i uslove</a> za oglašavanje na portalu svezaprodaju.com
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