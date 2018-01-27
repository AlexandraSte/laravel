
@extends('template')

@section('content')

        @foreach($products as $product)

               <div class="col-md-4">
                        <h2>{{ $product['title'] }}</h2>
                        <p> {{ $product['alias'] }} </p>
                        <p> {{ $product['price'].' '. 'грн' }} </p>
                        <p> {{ $product['description'] }} </p>
                   <p><a class="btn btn-secondary" href="/products/{{ $product['id'] }}" role="button">View details »</a></p>
                    </div>

            @endforeach

    @endsection

@section('jumbotron')

        <div class="jumbotron">
                <div class="container">
                        <h1 class="display-4">Clothes!</h1>
                        <p> Мы знаем, что модно, и тщательно формируем ассортимент. Мы предлагаем вам только лучшее и актуальное — без громких слов о новых коллекциях и наценок розничной сети. </p>
                    </div>
            </div>

    @endsection