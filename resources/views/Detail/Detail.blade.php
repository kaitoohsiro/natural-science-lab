
@include('detail.head')
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
                                    <span class="content3">{{ $detailPost['body'] }}</span>
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
    @yield('head')
</head>
<body>
<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>
</html>
