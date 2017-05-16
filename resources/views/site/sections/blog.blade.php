@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="profile-user">
    <div class="icon"></div>
    <ul>
        <li><a href="#">Ingreso de clientes</a></li>
        <li><a href="#">Solicitud de Crédito</a></li>
        <li><a href="#">Alta de clientes</a></li>
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
            <div class="col-md-8 no-padding-mobile">
                <div class="blog-carousel">
                    <div class="carousel-card">
                        <div class="container">
                            <div class="vertical-align">
                                <h2>NUEVOS ELEMENTOS</h2>
                                <div class="line"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur cing elit. Praesent elit ipsum, rhoncus vitae sapien in, ornare aliquet justo. Curabitur sit amet conse</p>
                                <a href="#">
                                    <img src="/assets/images/icons/mas.svg" alt="Leer más">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </div>
                        <div class="background" style="background-image: url('/assets/images/home/01_isaosa_img_home_productos2.jpg')"></div>
                    </div>
                    <div class="carousel-card">
                        <div class="container">
                            <div class="vertical-align">
                                <h2>NUEVA GENERACIÓN</h2>
                                <div class="line"></div>
                                <p>Nuevas tecnologías que permiten mayor eficiencia y control en la entrega de nutrientes al suelo.</p>
                                <a href="#">
                                    <img src="/assets/images/icons/mas.svg" alt="Leer más">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </div>
                        <div class="background" style="background-image: url('/assets/images/home/01_isaosa_img_home_productos2.jpg')"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-right desktop-show">
                <div class="orange-first">
                    <div class="block"></div>
                    <span>ENTRADAS MÁS RECIENTES</span>
                </div>
                <div class="article-list">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"></div>
                                <span class="title">ANÁLISIS DEL SUELO</span>
                                <span class="date">08/03/2017</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"></div>
                                <span class="title">ANÁLISIS DEL SUELO</span>
                                <span class="date">08/03/2017</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"></div>
                                <span class="title">ANÁLISIS DEL SUELO</span>
                                <span class="date">08/03/2017</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"></div>
                                <span class="title">ANÁLISIS DEL SUELO</span>
                                <span class="date">08/03/2017</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff4.jpg')"></div>
                                <span class="title">ANÁLISIS DEL SUELO</span>
                                <span class="date">08/03/2017</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="desktop-show">
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="article-preview block-style">
                    <a href="#">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <div class="image" style="background-image: url('/assets/images/home/01_isaosa_img_home_productos2.jpg')"></div>
                        </div>
                        <div class="col-md-8 col-xs-8">
                            <div class="pre">
                                <div class="label">Eventos</div>
                                <div class="date">08/03/2017</div>
                            </div>
                            <h5>
                                ANÁLISIS DEL SUELO Y COMPONENTES BÁSICOS
                            </h5>
                            <div class="decription">
                                <p>Banksy XOXO seitan street art direct trade flannel letterpress 8-bit occupy vegan PBR&B. Lo-fi cornhole pickled Helvetica. Mixtape cornhole gastropub, single-origin...</p>
                            </div>
                            <div class="cta">
                                <button class="btn">LEER MÁS</button>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="article-preview">
                    <a href="#">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff3.jpg')"></div>
                        </div>
                        <div class="col-md-8 col-xs-8">
                            <div class="pre">
                                <div class="label">Eventos</div>
                                <div class="date">08/03/2017</div>
                            </div>
                            <h5>
                                ANÁLISIS DEL SUELO Y COMPONENTES BÁSICOS
                            </h5>
                            <div class="decription">
                                <p>Banksy XOXO seitan street art direct trade flannel letterpress 8-bit occupy vegan PBR&B. Lo-fi cornhole pickled Helvetica. Mixtape cornhole gastropub, single-origin...</p>
                            </div>
                            <div class="cta">
                                <button class="btn">LEER MÁS</button>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="article-preview">
                    <a href="#">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff.jpg')"></div>
                        </div>
                        <div class="col-md-8 col-xs-8">
                            <div class="pre">
                                <div class="label">Eventos</div>
                                <div class="date">08/03/2017</div>
                            </div>
                            <h5>
                                ANÁLISIS DEL SUELO Y COMPONENTES BÁSICOS
                            </h5>
                            <div class="decription">
                                <p>Banksy XOXO seitan street art direct trade flannel letterpress 8-bit occupy vegan PBR&B. Lo-fi cornhole pickled Helvetica. Mixtape cornhole gastropub, single-origin...</p>
                            </div>
                            <div class="cta">
                                <button class="btn">LEER MÁS</button>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="pagination">
                    <div class="place">PÁGINA 1 / 10</div>
                    <div class="arrows">
                        <a href="#" class="prev"></a>
                        <a href="#" class="next"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 desktop-show">
                <div class="block-style">
                    <div class="title">
                        <div class="rec"></div>
                        <span>Categorías</span>
                    </div>
                    <ul>
                        <li class="label"><a href="#">Eventos</a></li>
                        <li class="label"><a href="#">Noticias</a></li>
                        <li class="label"><a href="#">Resultados</a></li>
                    </ul>
                </div>
                <div class="block-style">
                    <div class="title">
                        <div class="rec"></div>
                        <span>Archivos</span>
                    </div>
                    <ul>
                        <li><a href="#">Abril</a></li>
                        <li><a href="#">Marzo</a></li>
                        <li><a href="#">Febrero</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-show">
        <div class="spacing"></div>
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