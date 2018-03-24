@extends('welcome')

@section('content')

    <div class="container">
        <div class="row">

            <article>
                <div>{{ $title }}</div>

                <div>
                    {!! $body !!}
                </div>

            </article>

        </div>
    </div>
@endsection
