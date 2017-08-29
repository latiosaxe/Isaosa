<h1>Acabas de recibir una nueva Solicitud de Alta de cliente</h1>

<table style="width: 100%;">
    <tbody>
    <tr>
        <td><strong>DATOS GENERALES</strong></td>
        <td></td>
    </tr>
    <tr>
        <td>Regimen de Ventas</td>
        <td>{{ $client->regimen_de_ventas }}</td>
    </tr>
    <tr>
        <td>Regimen Fiscal</td>
        <td>{{ $client->regimen_fiscal }}</td>
    </tr>

    <tr>
        <td>Razón Social</td>
        <td>{{ $client->razon_social }}</td>
    </tr>
    <tr>
        <td>RFC</td>
        <td>{{ $client->rfc }}</td>
    </tr>
    <tr>
        <td>CURP</td>
        <td>{{ $client->curp }}</td>
    </tr>
    <tr>
        <td>Título</td>
        <td>{{ $client->titulo }}</td>
    </tr>
    <tr>
        <td>Nombre Completo</td>
        <td>{{ $client->complete_name }}</td>
    </tr>
    <tr>
        <td>Puesto en la empresa</td>
        <td>{{ $client->job }}</td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>{{ $client->tel }}</td>
    </tr>
    <tr>
        <td>Celular</td>
        <td>{{ $client->cel }}</td>
    </tr>
    <tr>
        <td>Correo Electrónico</td>
        <td>{{ $client->email }}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><strong>DOMICILIO FISCAL</strong></td>
        <td></td>
    </tr>
    <tr>
        <td>Calle y número</td>
        <td>{{ $client->addres_stret }}</td>
    </tr>
    <tr>
        <td>Colonia</td>
        <td>{{ $client->addres_colonia }}</td>
    </tr>
    <tr>
        <td>Ciudad</td>
        <td>{{ $client->addres_city }}</td>
    </tr>
    <tr>
        <td>Código Postal</td>
        <td>{{ $client->addres_cp }}</td>
    </tr>
    <tr>
        <td>Municipio</td>
        <td>{{ $client->addres_municipio }}</td>
    </tr>
    <tr>
        <td>Estado</td>
        <td>{{ $client->addres_state }}</td>
    </tr>
    <tr>
        <td>País</td>
        <td>{{ $client->addres_country }}</td>
    </tr>
    <tr>
        <td>Teléfono 1</td>
        <td>{{ $client->addres_tel }}</td>
    </tr>
    <tr>
        <td>Teléfono 1</td>
        <td>{{ $client->addres_tel2 }}</td>
    </tr>
    <tr>
        <td>Celular</td>
        <td>{{ $client->cel }}</td>
    </tr>
    <tr>
        <td>Sitio Web</td>
        <td>{{ $client->addres_website }}</td>
    </tr>
    <tr>
        <td>Correo Electrónico</td>
        <td>{{ $client->addres_email }}</td>
    </tr>
    <tr>
        <td>Persona de Contacto</td>
        <td>{{ $client->addres_contact }}</td>
    </tr>
    @if($client->comprobante_de_domicilio != 'Sin archivo')
    <tr>
        <td>Comprobante de Domicilio</td>
        <td><a href="{{ $client->comprobante_de_domicilio }}" target="_blank">Liga</a></td>
    </tr>
    @endif
    @if($client->constancia_situacion_fiscal != 'Sin archivo')
    <tr>
        <td>Constancia de situación fiscal</td>
        <td><a href="{{ $client->constancia_situacion_fiscal }}" target="_blank">Liga</a></td>
    </tr>
    @endif
    </tbody>
</table>
