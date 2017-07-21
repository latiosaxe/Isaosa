@extends ('site.master')
@section ('content')
<div class="fake-header"></div>

<div class="profile-user">
    <div class="icon"></div>
    <ul>
        <li><a href="#">Ingreso de clientes</a></li>
        <li><a href="#">Proveedores</a></li>
        <li><a href="#">Solicitud de Crédito</a></li>
        <li><a href="#">Alta de clientes</a></li>
    </ul>
</div>

<div class="section-site servicios">
    <div class="container aux-relative">
        <div class="row servicios_tab">
            <div class="mobile-show">
                <p>SERVICIOS</p>
            </div>
            <div class="col-md-4 sec-navigation">
                <h1>SERVICIOS</h1>
                <ul class="head">
                    @foreach( $services as $service)
                        <li>
                            <span>
                                {{$service->name }}
                            </span>
                        </li>
                    @endforeach
                    {{--<li class="active">--}}
                        {{--<span>PARCELAS<br/>DEMOSTRATIVAS</span>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<span>ANÁLISIS<br/>DEL SUELO</span>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<span>ANÁLISIS<br/>FOLIAR</span>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<span>ÁREA<br/>TÉCNICA</span>--}}
                    {{--</li>--}}
                </ul>


                <div class="go-up-action">
                    <img src="/assets/images/icons/ir_arriba.svg" alt="Ir arriba">
                </div>
            </div>
            <div class="col-md-8 orange">
                <ul class="descriptions">
                    @foreach( $services as $service)
                        <li>
                            {!! $service->body !!}
                        </li>
                    @endforeach
                    {{--<li class="active">--}}
                        {{--<img src="/assets/images/icons/parcelas.svg" alt="Parcelas demostrativas" class="icon">--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="title-2">PARCELAS DEMOSTRATIVAS</div>--}}
                        {{--</div>--}}
                        {{--<p>Hemos observado en las diversas regiones de Mxico la manera como los productores del campo fertlizan sus cultivos y nos hemos dado cuenta que slo una minora hacen esta labor adecuadamenta. Encontramos productores agrcolas tradicionalistas que tienen 20 o 30 aos. aplicando los mismos fertilizantes en las mismas dosis; por lo regular emplean nitrgeno y fsforo, sin tomar en cuenta que para la produccin se requieren los 13 nutrientes esenciales.</p>--}}

                        {{--<p>La reserva de algunos nutrientes en el suelo est disminuyendo, debido al establecimiento de cultivos, tal es el caso del la zona productora de trigo del noroeste, donde los 52 kg de fsforo aplicados son ya insuficientes.</p>--}}

                        {{--<p>Otros casos extremos, como el del Bajo, estn aplicando 1000 o mas kgs de sulfato de amonio con alguna fuente fosforada, en algunas ocasiones con aplicacin de potasio. Con esta forma de fertilizar tenemos un exceso de aplicacin de azufre, cuando por otro lado se requiere hacer un mejor balance con otros nutrientes.</p>--}}

                        {{--<p>ISAOSA pretende contribuir en la orientacin a los productores agrcolas para que apliquen una fertilizacin balanceada a cada terreno, evitando excesos que pueden ser perjudiciales y suministrando los nutrientes faltantes al suelo para lograr un buen nivel de fertilidad en los cultivos.</p>--}}

                        {{--<p>ISAOSA est buscando constantemente en el mercado internacional fertilizantes que contribuyan a elevar la produccin y productividad de los cultivos en el pas y que contaminen menos, como es el caso de la UREA DE LENTA LIBERACION (ESN).</p>--}}

                        {{--<p>DISEÑO DE LA MEZCLA FISICA DE FERTILIZANTE</p>--}}

                        {{--<p>La base del diseo de la mezcla fsica balanceada es el anlisis de suelo y foliar, por esta razn ISAOSA tienen un convenio con laboratorios A & L de Canad, empresa que tienen experiencia, equipos, metodologa y diagnstico de primer nivel; de esta manera contamos con un diagnstico de suelo y planta altamente confiable. Como productos base para la mezcla fsica balanceada se consideran los de nueva generacin:</p>--}}

                        {{--<p>UREA ESN</p>--}}
                        {{--<p>MICROESSENTIALS - SZ</p>--}}

                        {{--<p>Además se complementan con otros fertilizantes de acuerdo al anlisis de suelo</p>--}}

                        {{--<p>CONCLUSIONES</p>--}}

                        {{--<p>Los rendimientos de los cultivos se pueden incrementar mediante la UREA ESN y el MICROESSENTIALS</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN, puede utilizarse en las diversas zonas agrcolas del pas y en los diferentes cultivos</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN muestra ser mas eficiente que otras fuentes de nitrgeno, pero se debe combinar con nitrgeno de aportacin rpida, como el CAN-27, SULFONIT, SULFATO DE AMONIO o la misma UREA convencional, para hacer un mejor uso del nitrgeno.</p>--}}
                        {{--<p>zacin balanceada, y con ello lograr el incremento den la produccin de los cultivos</p>--}}
                        {{--<p>Para cereales de grano pequeo, como el trigo, sorgo, cebada y avena, con una sola fetilizacin en la siembra es suficiente para lograr su cosecha, generarando un</p>--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="close-tab"></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img src="/assets/images/icons/analisis_foliar.svg" alt="Análisis foliar" class="icon">--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="title-2">ANÁLISIS DEL SUELO</div>--}}
                        {{--</div>--}}
                        {{--<p>Hemos observado en las diversas regiones de Mxico la manera como los productores del campo fertlizan sus cultivos y nos hemos dado cuenta que slo una minora hacen esta labor adecuadamenta. Encontramos productores agrcolas tradicionalistas que tienen 20 o 30 aos. aplicando los mismos fertilizantes en las mismas dosis; por lo regular emplean nitrgeno y fsforo, sin tomar en cuenta que para la produccin se requieren los 13 nutrientes esenciales.</p>--}}


                        {{--<p>Otros casos extremos, como el del Bajo, estn aplicando 1000 o mas kgs de sulfato de amonio con alguna fuente fosforada, en algunas ocasiones con aplicacin de potasio. Con esta forma de fertilizar tenemos un exceso de aplicacin de azufre, cuando por otro lado se requiere hacer un mejor balance con otros nutrientes.</p>--}}

                        {{--<p>ISAOSA pretende contribuir en la orientacin a los productores agrcolas para que apliquen una fertilizacin balanceada a cada terreno, evitando excesos que pueden ser perjudiciales y suministrando los nutrientes faltantes al suelo para lograr un buen nivel de fertilidad en los cultivos.</p>--}}

                        {{--<p>ISAOSA est buscando constantemente en el mercado internacional fertilizantes que contribuyan a elevar la produccin y productividad de los cultivos en el pas y que contaminen menos, como es el caso de la UREA DE LENTA LIBERACION (ESN).</p>--}}
                        {{--<p>La reserva de algunos nutrientes en el suelo est disminuyendo, debido al establecimiento de cultivos, tal es el caso del la zona productora de trigo del noroeste, donde los 52 kg de fsforo aplicados son ya insuficientes.</p>--}}

                        {{--<p>DISEÑO DE LA MEZCLA FISICA DE FERTILIZANTE</p>--}}

                        {{--<p>La base del diseo de la mezcla fsica balanceada es el anlisis de suelo y foliar, por esta razn ISAOSA tienen un convenio con laboratorios A & L de Canad, empresa que tienen experiencia, equipos, metodologa y diagnstico de primer nivel; de esta manera contamos con un diagnstico de suelo y planta altamente confiable. Como productos base para la mezcla fsica balanceada se consideran los de nueva generacin:</p>--}}

                        {{--<p>UREA ESN</p>--}}
                        {{--<p>MICROESSENTIALS - SZ</p>--}}

                        {{--<p>Además se complementan con otros fertilizantes de acuerdo al anlisis de suelo</p>--}}

                        {{--<p>CONCLUSIONES</p>--}}

                        {{--<p>Los rendimientos de los cultivos se pueden incrementar mediante la UREA ESN y el MICROESSENTIALS</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN, puede utilizarse en las diversas zonas agrcolas del pas y en los diferentes cultivos</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN muestra ser mas eficiente que otras fuentes de nitrgeno, pero se debe combinar con nitrgeno de aportacin rpida, como el CAN-27, SULFONIT, SULFATO DE AMONIO o la misma UREA convencional, para hacer un mejor uso del nitrgeno.</p>--}}
                        {{--<p>zacin balanceada, y con ello lograr el incremento den la produccin de los cultivos</p>--}}
                        {{--<p>Para cereales de grano pequeo, como el trigo, sorgo, cebada y avena, con una sola fetilizacin en la siembra es suficiente para lograr su cosecha, generarando un</p>--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="close-tab"></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img src="/assets/images/icons/analisis_suelo.svg" alt="Análisis del suelo" class="icon">--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="title-2">ANÁLISIS FOLIAR</div>--}}
                        {{--</div>--}}
                        {{--<p>La base del diseo de la mezcla fsica balanceada es el anlisis de suelo y foliar, por esta razn ISAOSA tienen un convenio con laboratorios A & L de Canad, empresa que tienen experiencia, equipos, metodologa y diagnstico de primer nivel; de esta manera contamos con un diagnstico de suelo y planta altamente confiable. Como productos base para la mezcla fsica balanceada se consideran los de nueva generacin:</p>--}}
                        {{--<p>Hemos observado en las diversas regiones de Mxico la manera como los productores del campo fertlizan sus cultivos y nos hemos dado cuenta que slo una minora hacen esta labor adecuadamenta. Encontramos productores agrcolas tradicionalistas que tienen 20 o 30 aos. aplicando los mismos fertilizantes en las mismas dosis; por lo regular emplean nitrgeno y fsforo, sin tomar en cuenta que para la produccin se requieren los 13 nutrientes esenciales.</p>--}}

                        {{--<p>La reserva de algunos nutrientes en el suelo est disminuyendo, debido al establecimiento de cultivos, tal es el caso del la zona productora de trigo del noroeste, donde los 52 kg de fsforo aplicados son ya insuficientes.</p>--}}

                        {{--<p>Otros casos extremos, como el del Bajo, estn aplicando 1000 o mas kgs de sulfato de amonio con alguna fuente fosforada, en algunas ocasiones con aplicacin de potasio. Con esta forma de fertilizar tenemos un exceso de aplicacin de azufre, cuando por otro lado se requiere hacer un mejor balance con otros nutrientes.</p>--}}

                        {{--<p>ISAOSA pretende contribuir en la orientacin a los productores agrcolas para que apliquen una fertilizacin balanceada a cada terreno, evitando excesos que pueden ser perjudiciales y suministrando los nutrientes faltantes al suelo para lograr un buen nivel de fertilidad en los cultivos.</p>--}}

                        {{--<p>ISAOSA est buscando constantemente en el mercado internacional fertilizantes que contribuyan a elevar la produccin y productividad de los cultivos en el pas y que contaminen menos, como es el caso de la UREA DE LENTA LIBERACION (ESN).</p>--}}

                        {{--<p>DISEÑO DE LA MEZCLA FISICA DE FERTILIZANTE</p>--}}


                        {{--<p>UREA ESN</p>--}}
                        {{--<p>MICROESSENTIALS - SZ</p>--}}

                        {{--<p>Además se complementan con otros fertilizantes de acuerdo al anlisis de suelo</p>--}}

                        {{--<p>CONCLUSIONES</p>--}}

                        {{--<p>Los rendimientos de los cultivos se pueden incrementar mediante la UREA ESN y el MICROESSENTIALS</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN, puede utilizarse en las diversas zonas agrcolas del pas y en los diferentes cultivos</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN muestra ser mas eficiente que otras fuentes de nitrgeno, pero se debe combinar con nitrgeno de aportacin rpida, como el CAN-27, SULFONIT, SULFATO DE AMONIO o la misma UREA convencional, para hacer un mejor uso del nitrgeno.</p>--}}
                        {{--<p>zacin balanceada, y con ello lograr el incremento den la produccin de los cultivos</p>--}}
                        {{--<p>Para cereales de grano pequeo, como el trigo, sorgo, cebada y avena, con una sola fetilizacin en la siembra es suficiente para lograr su cosecha, generarando un</p>--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="close-tab"></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img src="/assets/images/icons/analisis_tecnico.svg" alt="Análisis técnico" class="icon">--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="title-2">ÁREA TÉCNICA</div>--}}
                        {{--</div>--}}
                        {{--<p>ISAOSA est buscando constantemente en el mercado internacional fertilizantes que contribuyan a elevar la produccin y productividad de los cultivos en el pas y que contaminen menos, como es el caso de la UREA DE LENTA LIBERACION (ESN).</p>--}}

                        {{--<p>La reserva de algunos nutrientes en el suelo est disminuyendo, debido al establecimiento de cultivos, tal es el caso del la zona productora de trigo del noroeste, donde los 52 kg de fsforo aplicados son ya insuficientes.</p>--}}

                        {{--<p>Otros casos extremos, como el del Bajo, estn aplicando 1000 o mas kgs de sulfato de amonio con alguna fuente fosforada, en algunas ocasiones con aplicacin de potasio. Con esta forma de fertilizar tenemos un exceso de aplicacin de azufre, cuando por otro lado se requiere hacer un mejor balance con otros nutrientes.</p>--}}

                        {{--<p>ISAOSA pretende contribuir en la orientacin a los productores agrcolas para que apliquen una fertilizacin balanceada a cada terreno, evitando excesos que pueden ser perjudiciales y suministrando los nutrientes faltantes al suelo para lograr un buen nivel de fertilidad en los cultivos.</p>--}}
                        {{--<p>Hemos observado en las diversas regiones de Mxico la manera como los productores del campo fertlizan sus cultivos y nos hemos dado cuenta que slo una minora hacen esta labor adecuadamenta. Encontramos productores agrcolas tradicionalistas que tienen 20 o 30 aos. aplicando los mismos fertilizantes en las mismas dosis; por lo regular emplean nitrgeno y fsforo, sin tomar en cuenta que para la produccin se requieren los 13 nutrientes esenciales.</p>--}}


                        {{--<p>DISEÑO DE LA MEZCLA FISICA DE FERTILIZANTE</p>--}}

                        {{--<p>La base del diseo de la mezcla fsica balanceada es el anlisis de suelo y foliar, por esta razn ISAOSA tienen un convenio con laboratorios A & L de Canad, empresa que tienen experiencia, equipos, metodologa y diagnstico de primer nivel; de esta manera contamos con un diagnstico de suelo y planta altamente confiable. Como productos base para la mezcla fsica balanceada se consideran los de nueva generacin:</p>--}}

                        {{--<p>UREA ESN</p>--}}
                        {{--<p>MICROESSENTIALS - SZ</p>--}}

                        {{--<p>Además se complementan con otros fertilizantes de acuerdo al anlisis de suelo</p>--}}

                        {{--<p>CONCLUSIONES</p>--}}

                        {{--<p>Los rendimientos de los cultivos se pueden incrementar mediante la UREA ESN y el MICROESSENTIALS</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN, puede utilizarse en las diversas zonas agrcolas del pas y en los diferentes cultivos</p>--}}
                        {{--<p>El nitrgeno de la UREA ESN muestra ser mas eficiente que otras fuentes de nitrgeno, pero se debe combinar con nitrgeno de aportacin rpida, como el CAN-27, SULFONIT, SULFATO DE AMONIO o la misma UREA convencional, para hacer un mejor uso del nitrgeno.</p>--}}
                        {{--<p>zacin balanceada, y con ello lograr el incremento den la produccin de los cultivos</p>--}}
                        {{--<p>Para cereales de grano pequeo, como el trigo, sorgo, cebada y avena, con una sola fetilizacin en la siembra es suficiente para lograr su cosecha, generarando un</p>--}}
                        {{--<div class="mobile-show">--}}
                            {{--<div class="close-tab"></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
    <div class="background-image"></div>

</div>

@endsection
@section('javascript')
    <script>
        $('header').addClass('block');
        $(".section-site.servicios .sec-navigation").height($(".section-site.servicios .orange").height());
        var type = getParameterByName('type');

        setTimeout(function () {
            if(type>0){
                $(".site .section-site.servicios .aux-relative .sec-navigation ul li").eq(type-1).trigger('click')
            }else{
                $(".site .section-site.servicios .aux-relative .sec-navigation ul li span").eq(0).trigger('click');
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