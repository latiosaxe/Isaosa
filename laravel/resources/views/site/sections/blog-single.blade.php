@extends ('site.master')
@section ('content')

{{--    {{ dd($new) }}--}}
<div class="fake-header"></div>

<div class="profile-user">
    <div class="icon"></div>
    <ul>
        <li><a href="http://200.76.34.67/isaosaweb/login.aspx">Ingreso de clientes</a></li>
        <li><a href="#">Proveedores</a></li>
        <li><a href="/solicitud">Solicitud de Crédito</a></li>
        <li><a href="/alta-de-clientes">Alta de clientes</a></li>
    </ul>
</div>


<div class="plug-share desktop-show">
    <ul>
        <li><a href="#" target="_blank"><img src="/assets/images/icons/facebook.svg" alt="Compartir de Facebook"></a></li>
        <li><a href="#" target="_blank"><img src="/assets/images/icons/twitter.svg" alt="Compartir de Twitter"></a></li>
        <li><a href="#" target="_blank"><img src="/assets/images/icons/linkedin.svg" alt="Compartir de Linkedin"></a></li>
    </ul>
</div>

<div class="section-site blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title-mobile-orange">Noticias</h1>
            </div>
            <div class="col-md-4 text-right desktop-show">
                <form class="search-input" onsubmit="return false;">
                    <input type="text">
                    <img src="/assets/images/icons/buscar.svg" alt="Buscar" class="icon">
                </form>
            </div>
        </div>
        <div class="mobile-show">
            <ul class="alt-blog">
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Resultados</a></li>
                <li><a href="#">Recientes</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-8">
               <div class="featured-image desktop-show">
                   <img src="/assets/images/home/01_isaosa_img_home_productos2.jpg" alt="Entrada de blog">
               </div>
                <div class="spacing desktop-show"></div>
                <div class="meta">
                    <a href="/blog?noticias" class="label">Noticias</a>
                    <div class="date">{{ \Carbon\Carbon::parse($single->datetime_created)->format('d/m/Y')}}</div>

                    <div class="mobile-show">
                        <div class="mobile-share-single">
                            <ul>
                                <li><a href="#" target="_blank"><img src="/assets/images/icons/facebook.svg" alt="Compartir de Facebook"></a></li>
                                <li><a href="#" target="_blank"><img src="/assets/images/icons/twitter.svg" alt="Compartir de Twitter"></a></li>
                                <li><a href="#" target="_blank"><img src="/assets/images/icons/linkedin.svg" alt="Compartir de Linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="wrapper">
                        <h2>{{$single->title  }}</h2>
                        <div class="mobile-show">
                            <img src="/assets/images/home/01_isaosa_img_home_productos2.jpg" class="mobile-image-single" alt="Entrada de blog">
                        </div>
                        <div class="description">
                            <p>{{$single->description  }}</p>
                        </div>
                    </div>
                    <div class="full-text">
                        {!! $single->body !!}
                    </div>
                </div>
                {{--<div class="tags">--}}
                    {{--<span>TAGS:</span>--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Fertilizantes</a></li>--}}
                        {{--<li><a href="#">Tierra</a></li>--}}
                        {{--<li><a href="#">Cosecha</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-4 blog-right desktop-show">
                <div class="orange-first">
                    <div class="block"></div>
                    <span>ENTRADAS MÁS RECIENTES</span>
                </div>
                <div class="article-list">
                    <ul>
                        @foreach( $news as $new)
                            <li>
                                <a href="/publicacion/{{ $new->id }}">
                                    {{--style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"--}}
                                    <div class="image"></div>
                                    <span class="title">{{ $new->title }}</span>
                                    <span class="date">
                                        {{ \Carbon\Carbon::parse($new->datetime_created)->format('d/m/Y')}}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="desktop-show">
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                </div>

                <div class="block-style desktop-show">
                    <div class="title">
                        <div class="rec"></div>
                        <span>Categorías</span>
                    </div>
                    <ul>
                        {{--<li class="label"><a href="#">Eventos</a></li>--}}
                        <li class="label"><a href="/blog?noticias">Noticias</a></li>
                        {{--<li class="label"><a href="#">Resultados</a></li>--}}
                    </ul>
                </div>
                <div class="block-style">
                    <div class="title">
                        <div class="rec"></div>
                        <span>Archivos</span>
                    </div>
                    <ul>
                        <li><a href="#">Julio</a></li>
                    </ul>
                </div>

                <!-- Your like button code -->
                <div class="fb-like" data-href="https://www.facebook.com/ISAOSA-164861660285225/" data-width="200" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                <br><br>
                <a class="twitter-timeline" data-lang="es" data-height="500" href="https://twitter.com/isaosa_mexico">Tweets by isaosa_mexico</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="pagination">--}}
                    {{--<div class="place">PÁGINA 1 / 10</div>--}}
                    {{--<div class="arrows">--}}
                        {{--<a href="#" class="prev"></a>--}}
                        {{--<a href="#" class="next"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4"></div>--}}
        {{--</div>--}}
    </div>

    <div class="mobile-show">
        <div class="spacing"></div>
    </div>

    <div class="go-up-action center-element">
        <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
    </div>
</div>

@endsection
@section('javascript')
    <script>
        $('header').addClass('block');
    </script>
@endsection