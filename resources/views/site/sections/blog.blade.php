@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="section-site blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Noticias</h1>
            </div>
            <div class="col-md-4 text-right">
                <form class="search-input" onsubmit="return false;">
                    <input type="text">
                    <img src="/assets/images/icons/buscar.svg" alt="Buscar" class="icon">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
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
            <div class="col-md-4 blog-right">
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
        <div class="spacing"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="article-preview">
                    <a href="#">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image" style="background-image: url('/assets/images/home/01_isaosa_img_home_productos2.jpg')"></div>
                        </div>
                        <div class="col-md-8">
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
                        <div class="col-md-4">
                            <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff3.jpg')"></div>
                        </div>
                        <div class="col-md-8">
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
                        <div class="col-md-4">
                            <div class="image" style="background-image: url('/assets/images/extras/isaosa_img_stuff.jpg')"></div>
                        </div>
                        <div class="col-md-8">
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
            <div class="col-md-4">

            </div>
        </div>
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