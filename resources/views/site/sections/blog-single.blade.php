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
                    <a href="#" class="label">Noticias</a>
                    <div class="date">08/03/2017</div>

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
                        <h2>NUEVOS ELEMENTOS PARA LOS SUELOS</h2>
                        <div class="mobile-show">
                            <img src="/assets/images/home/01_isaosa_img_home_productos2.jpg" class="mobile-image-single" alt="Entrada de blog">
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur cing elit. Praesent elit ipsum, rhoncus vitae sapien in, ornare aliquet justo. Curabitur sit amet conse</p>
                        </div>
                    </div>
                    <div class="full-text">
                        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                        <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
                        <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ips.</p>
                    </div>
                </div>
                <div class="tags">
                    <span>TAGS:</span>
                    <ul>
                        <li><a href="#">Fertilizantes</a></li>
                        <li><a href="#">Tierra</a></li>
                        <li><a href="#">Cosecha</a></li>
                    </ul>
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
        <div class="row">
            <div class="col-md-8">

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