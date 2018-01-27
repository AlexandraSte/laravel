
    @extends('template') //наследуемся от страници с главным шаблоном

    /*часть, которую нужно подставлять*/
    @section('content')

    @foreach($pages as $page)

        <div class="col-md-4">
            <h2>{{ $page['title'] }}</h2>
            <p> {{ $page['alias'] }} </p>
            <p> {{ $page['intro'] }} </p>
            <p> {{ $page['content'] }} </p>
            <p><a class="btn btn-secondary" href="/product" role="button">View details »</a></p>
        </div>


   @endforeach

    @endsection

    @section('jumbotron')

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Clothes!</h1>
                <p>Мы знаем, что модно, и тщательно формируем ассортимент. Мы предлагаем вам только лучшее и актуальное — без громких слов о новых коллекциях и наценок розничной сети.</p>

            </div>
        </div>

    @endsection