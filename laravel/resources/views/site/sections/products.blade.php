@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="profile-user">
    <div class="icon"></div>
    <ul>
        <li><a href="#">Ingreso de clientes</a></li>
        <li><a href="#">Proveedores</a></li>
        <li><a href="/solicitud">Solicitud de Crédito</a></li>
        <li><a href="/alta-de-clientes">Alta de clientes</a></li>
    </ul>
</div>

<div class="section-site productos">
    <div class="container">
        <h1 class="title-bold title-mobile-orange">PRODUCTOS</h1>
        <div class="row">
            <div class="col-md-3 no-padding-mobile">
                <div class="sec-menu">
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <span>{{ $category->name }}</span>
                            <ul>
                                @foreach($products as $product)
                                    @if($category->id == $product->category_id)
                                        <li><span data-target_id="{{$product->id}}">{{$product->name}}</span></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-height-100">
                <div class="row result-list ">
                    @foreach($products as $product)
                        <div class="col-md-3 element" data-id="{{ $product->id }}" data-image="{{ $product->img  }}" data-description="{{ $product->description }}" data-body="{{ $product->body }}">
                            <div class="circle" style="background-image: url('{{ $product->img  }}')"></div>
                            <p class="name-target">{{ $product->name }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="row single-element-view hidden">
                    <div class="col-md-4 left-moment">
                        <div class="mobile-show">
                            <h2>ESN LIBERACIÓN CONTROLADA</h2>
                        </div>
                        <div class="avatar" id="avatar-deposit" style="background-image: url('/assets/images/extras/accesointerno.jpg')"></div>
                        <p>Contiene</p>
                        <ul class="element-details">
                            @if($product->table_1)
                                <li><div class="circle">{{$product->table_1}}</div><span>{{$product->table_1_copy}}</span></li>
                            @endif
                            @if($product->table_2)
                                <li><div class="circle">{{$product->table_2}}</div><span>{{$product->table_2_copy}}</span></li>
                            @endif
                            @if($product->table_3)
                                <li><div class="circle">{{$product->table_3}}</div><span>{{$product->table_3_copy}}</span></li>
                            @endif
                            @if($product->table_4)
                                <li><div class="circle">{{$product->table_4}}</div><span>{{$product->table_4_copy}}</span></li>
                            @endif
                            @if($product->table_5)
                                <li><div class="circle">{{$product->table_5}}</div><span>{{$product->table_5_copy}}</span></li>
                            @endif
                            @if($product->table_6)
                                <li><div class="circle">{{$product->table_6}}</div><span>{{$product->table_6_copy}}</span></li>
                            @endif
                            @if($product->table_7)
                                <li><div class="circle">{{$product->table_7}}</div><span>{{$product->table_7_copy}}</span></li>
                            @endif
                            @if($product->table_8)
                                <li><div class="circle">{{$product->table_8}}</div><span>{{$product->table_8_copy}}</span></li>
                            @endif
                            @if($product->table_9)
                                <li><div class="circle">{{$product->table_9}}</div><span>{{$product->table_9_copy}}</span></li>
                            @endif
                            @if($product->table_10)
                                <li><div class="circle">{{$product->table_10}}</div><span>{{$product->table_10_copy}}</span></li>
                            @endif
                            {{--<li><div class="circle">0</div><span>P</span></li>--}}
                            {{--<li><div class="circle">0</div><span>K</span></li>--}}
                            {{--<li><div class="circle">15</div><span>Zn</span></li>--}}
                            {{--<li><div class="circle">7.5</div><span>Fe</span></li>--}}
                            {{--<li><div class="circle">7.5</div><span>Mn</span></li>--}}
                            {{--<li><div class="circle">3.5</div><span>S</span></li>--}}
                            {{--<li><div class="circle">-</div><span>X</span></li>--}}
                            {{--<li><div class="circle">-</div><span>X</span></li>--}}
                            {{--<li><div class="circle">-</div><span>X</span></li>--}}
                        </ul>
                        {{--<div class="download-label">--}}
                            {{--<span>DESCARGABLES</span>--}}
                        {{--</div>--}}
                        {{--<ul class="download-list">--}}
                            {{--<li><a href="#">Ficha Técnica <img src="/assets/images/icons/down-clean.svg" alt="Descargar"></a></li>--}}
                            {{--<li><a href="#">Hoja de Seguridad <img src="/assets/images/icons/down-clean.svg" alt="Descargar"></a></li>--}}
                        {{--</ul>--}}
                    </div>
                    <div class="col-md-8 right-moment">
                        <div class="return_btn desktop-show">
                            <button class="btn">Regresar</button>
                        </div>
                        <h2 class="desktop-show" id="name-deposit"></h2>
                        <div class="tabs">
                            <div class="head">
                                <ul>
                                    <li class="active"><span>DESCRIPCIÓN</span></li>
                                    <li><span>CARACTERÍSTICAS</span></li>
                                    {{--<li><span>UTILIDAD</span></li>--}}
                                    {{--<li><span>RECOMENDACIONES</span></li>--}}
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="active"></li>
                                    <li class="mobile-content" data-type="CARACTERÍSTICAS"></li>
                                    {{--<li class="mobile-content" data-type="UTILIDAD">--}}
                                        {{--<p>Tres</p>--}}
                                    {{--</li>--}}
                                    {{--<li class="mobile-content" data-type="RECOMENDACIONES">--}}
                                        {{--<p>Cuatro</p>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="related">
                            <div class="title">
                                QUIZÁ TAMBIÉN TE INTERESE
                            </div>
                            <div class="row articles">
                                @foreach($random as $single)
                                    <div class="col-md-3">
                                        <a href="#">
                                            <div class="image" style="background-image: url('{{ $single->img  }}')"></div>
                                        <span class="title">
                                            {{ $product->name }}
                                            {{ $product->formula }}
                                            </span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('javascript')
    <script>
        $('header').addClass('block');

        $(".site .section-site.productos .sec-menu > ul > li ul li span").on('click', function () {
            var _$this = $(this),
                    _id = _$this.data('target_id');

            console.log(_id);
            console.log( $(".site .section-site.productos .result-list .element[data-id="+_id+"]") );

            $(".site .section-site.productos .result-list .element[data-id="+_id+"]").trigger('click');
        });


        $(".site .section-site.productos .sec-menu > ul > li > span").on('click', function () {
            if($(this).closest('li').hasClass('active')){
                $(this).closest('li').removeClass('active');
            }else{
                $(".site .section-site.productos .sec-menu > ul > li").removeClass('active');
                $(this).closest('li').addClass('active');
            }
        });


        if($(window).width() <= 768){
            $(".site .section-site.productos .single-element-view .right-moment .tabs .head ul li.active").on('click', function () {
                if($(this).hasClass('showed')){
                    $(this).removeClass('showed');
                    $(".site .section-site.productos .single-element-view .right-moment .tabs .body ul li.mobile-content").addClass('byebye');

                }else{
                    $(this).addClass('showed');
                    $(".site .section-site.productos .single-element-view .right-moment .tabs .body ul li.mobile-content").removeClass('byebye');
                }
            });
        }

        var type = parseInt(getParameterByName('data'));
        console.log(type);
        setTimeout(function () {
            if(type>0){
                $(".site .section-site.productos .sec-menu > ul > li").eq(type-1).find('span').trigger('click');
            }
        }, 300);

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
    </script>
@endsection