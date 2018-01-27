
    @extends('template')

    @section('content')

        @foreach($orders as $order)
                
            <div class="col-md-4">
                
                <h3> {{'ФИО:'. ' ' . $order['customer_name'] }}</h3>
                <p> {{'email:'. ' ' . $order['email'] }} </p>
                <p> {{'тел:'. ' ' . $order['phone'] }} </p>
                <p> {{ 'Отзыв:'. ' ' .$order['feedback'] }} </p>

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


