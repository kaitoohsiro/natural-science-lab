{{--@include('detail.head')--}}
@include('components.footer')

@section('content')
{{-- main --}}
<div class="math">
    <div class="math-space">
        <div class="math-card">
            <div class="card3">
                <div class="box3">
                    @if ($detailPost['image'])
                    <img src="{{ asset('storage/'.$detailPost['image']) }}" class="image3">
                    @else
                    <img class="noImage">
                    @endif
                    <div>
                        <h2 class="title3">{{ $detailPost['title'] }}</h2>
                        <?= html_entity_decode($detailPost['body']); ?>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
@endsection


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KaiWorld</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- style -->
    <link href="{{ asset('./css/detail/detail.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('footer')
</body>

</html>