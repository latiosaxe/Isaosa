@extends ('site.master')
@section ('content')
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

<div class="section-site productos">
    <div class="container">
        <h1 class="title-bold title-mobile-orange also_return title-cursor">PRODUCTOS</h1>
        <div class="row">
            <div class="col-md-3 no-padding-mobile">
                <div class="sec-menu">
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <span data-slug="{{ $category->slug }}">{{ $category->name }}</span>
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
{{--                    {{ dd($products) }}--}}
                    @foreach($products as $product)
                        <div class="col-md-3 element" data-slug="{{ $product->product_category->slug }}" data-id="{{ $product->id }}" data-image="{{ $product->img  }}" data-description="{{ $product->description }}" data-body="{{ $product->body }}"
                         @if( !is_null( $product->files ) )
                            data-files="@foreach($product->files as $file){{ $file->file }},{{ $file->name }},{{ $file->file_type }}|@endforeach"
                         @endif
{{--                         @if($product->file_type) data-file="{{ $product->file_type }}" @endif--}}
                        data-table_1="{{ $product->table_1 }}" data-table_2="{{ $product->table_2 }}" data-table_3="{{ $product->table_3 }}" data-table_4="{{ $product->table_4 }}" data-table_5="{{ $product->table_5 }}" data-table_6="{{ $product->table_6 }}" data-table_7="{{ $product->table_7 }}" data-table_8="{{ $product->table_8 }}" data-table_9="{{ $product->table_9 }}" data-table_10="{{ $product->table_10 }}"
                        data-table_1_copy="{{ $product->table_1_copy }}" data-table_2_copy="{{ $product->table_2_copy }}" data-table_3_copy="{{ $product->table_3_copy }}" data-table_4_copy="{{ $product->table_4_copy }}" data-table_5_copy="{{ $product->table_5_copy }}" data-table_6_copy="{{ $product->table_6_copy }}" data-table_7_copy="{{ $product->table_7_copy }}" data-table_8_copy="{{ $product->table_8_copy }}" data-table_9_copy="{{ $product->table_9_copy }}" data-table_10_copy="{{ $product->table_10_copy }}"
                        >
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
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            <li><div class="circle"></div><span></span></li>
                            {{--@if($product->table_1)--}}
                                {{--<li><div class="circle">{{$product->table_1}}</div><span>{{$product->table_1_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_2)--}}
                                {{--<li><div class="circle">{{$product->table_2}}</div><span>{{$product->table_2_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_3)--}}
                                {{--<li><div class="circle">{{$product->table_3}}</div><span>{{$product->table_3_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_4)--}}
                                {{--<li><div class="circle">{{$product->table_4}}</div><span>{{$product->table_4_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_5)--}}
                                {{--<li><div class="circle">{{$product->table_5}}</div><span>{{$product->table_5_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_6)--}}
                                {{--<li><div class="circle">{{$product->table_6}}</div><span>{{$product->table_6_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_7)--}}
                                {{--<li><div class="circle">{{$product->table_7}}</div><span>{{$product->table_7_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_8)--}}
                                {{--<li><div class="circle">{{$product->table_8}}</div><span>{{$product->table_8_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_9)--}}
                                {{--<li><div class="circle">{{$product->table_9}}</div><span>{{$product->table_9_copy}}</span></li>--}}
                            {{--@endif--}}
                            {{--@if($product->table_10)--}}
                                {{--<li><div class="circle">{{$product->table_10}}</div><span>{{$product->table_10_copy}}</span></li>--}}
                            {{--@endif--}}
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
                        <div id="productDownload" class="hidden">
                            <div class="download-label">
                                <span>DESCARGABLES</span>
                            </div>
                            <ul class="download-list" id="hereDownload">
                                {{--<li><a href="#">Ficha Técnica <img src="/assets/images/icons/down-clean.svg" alt="Descargar"></a></li>--}}
                                {{--<li><a href="#">Hoja de Seguridad <img src="/assets/images/icons/down-clean.svg" alt="Descargar"></a></li>--}}
                            </ul>
                        </div>
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
                                        <a href="#" class="shomeMeAnother" data-id="{{ $single->id }}">
                                            <div class="image" style="background-image: url('{{ $single->img  }}')"></div>
                                            <span class="title">
                                                <strong style="display: block;">{{ $single->name }}</strong>
                                                {!! $single->formula !!}
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

            var slug = $(".site .section-site.productos .sec-menu > ul > li.active").find('>span').data('slug');
            $(".site .section-site.productos .result-list .element").hide();
            $(".site .section-site.productos .result-list .element[data-slug='"+slug+"']").show();

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
                var tempList = $(".site .section-site.productos .sec-menu > ul > li").eq(type-1);
                console.log(tempList.find('>span').data('slug'));
                tempList.find('span:first').trigger('click');
//                $(".site .section-site.productos .result-list .element").hide();
//                $(".site .section-site.productos .result-list .element[data-slug='"+tempList.find('>span').data('slug')+"']").show();
//                tempList.find('ul li span:first').trigger('click');
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


<script>
    var add = function (TACOS_AL_PASTOR, CHILAQUILES) {
        return TACOS_AL_PASTOR + CHILAQUILES;
    };
    console.log( add(9824,777) )




    var count_spaces = function (string) {
        return string.split(" ").length-1
    }
    console.log(count_spaces('Hola Ana, eres muy linda'))
</script>