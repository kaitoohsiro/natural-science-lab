@include('home.head')
@include('components.footer')

@section('content')
    {{-- main --}}
    <div class="header">
        <div class="header-main">
            <video class="mov" src="{{ asset('./video/blog.mp4')  }}" muted loop autoplay poster="{{ asset('./images/blog.jpg')  }}"></video>
            <div class="page-title-space">
                <p class="page-title"><i class="fas fa-book-reader"></i> KaiWorld</p>
            </div>
            <div class="title-space">
                <h1 class="title">Natural Science Lab</h1>
            </div>
            <div class="header-bottom-left">
                <p>I was like a boy playing on the sea-shore,
                    and diverting myself now and then finding a smoother pebble or a prettier shell than ordinary,
                    whilst the great ocean of truth lay all undiscovered before me.
                    <br>
                    by Isaac Newton
                </p>
            </div>
            <div class="header-bottom-center">
                <a href="#">
                    <p>Scroll</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>

    <div class="adventure">
        <div class="adventure_card">
            <img src="{{ asset('./images/adventure.jpg') }}">
            <div class="text-box1">
                <p>価値がある。</p>
                <p>過程にこそ</p>
            </div>
            <div class="text-box2">
                <p>学問ってつまらないですよね。</p>
                <br>
                <p>勉強やっていて、こんなの何の役に立つんだ！どこで使うんだよ。</p>
                <p>そんなことありませんか。けど、何もなくたっていいんじゃないかな。</p>
                <p>そこに何かあると信じて、やってる人もいるんだから。。</p>
                <p>自分の信じているものは、何かの役に立つ！みんなそう思っている。</p>
                <p>他人を笑う奴ってのはすごくかっこ悪いと思うんだ！そいつらのことは無視して、間違っててもやりたいことを貫こう</p>
                <p>世界は私についてくるぐらいの気持ちで前向きに！</p>
                <br>
                <p>以下は、私の自然科学まとめてます。</p>
            </div>
        </div>
        <div></div>
        <div class="text-area">
            <h2>Area</h2>
        </div>
    </div>
    <div class="main">
        <a href="{{ route('math') }}">
            <div class="math areas">
                <p><i class="fas fa-dharmachakra"></i></p>
                <h3>Math</h3>
                <p>数学の冒険へ</p>
            </div>
        </a>
    </div>
    <div class="nav">
        <a href="{{ route('physics') }}">
            <div class="physics areas">
                <p><i class="fas fa-gopuram"></i></p>
                <h3>Physics</h3>
                <p>物理学の冒険へ</p>
            </div>
        </a>
    </div>
    <div class="sidebar">
        <a href="{{ route('brain') }}">
            <div class="brain areas">
                <p><i class="fas fa-brain"></i></p>
                <h3>Brain</h3>
                <p>脳科学の冒険へ</p>
            </div>
        </a>
    </div>
    <div class="about">about</div>
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
