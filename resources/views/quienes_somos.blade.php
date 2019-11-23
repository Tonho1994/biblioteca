@extends('layouts.app')
@section('title', '| ¿Quienes Somos?')
@section('content')
<div class="container-fluid">


    <div class="jumbotron">
        <h1 class="display-3">Mi Biblioteca Digital</h1>
            <p class="lead text-justify">
                En un día como cualquiera surgió la idea de formar una colección de libros, revistas o cualquier tipo de escrito en un formato digital con la finalidad de incluir a todas las personas en esta idea se creó la Empresa llamada Mi Biblioteca Digital siendo uno de sus principales propósitos es el compartir diversa información ya sea para diversión o por un uso académico.
            </p>
        <hr class="my-4">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Objetivos</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Misión</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Visión</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Valores</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <h3>Objetivos</h3>
                           <p class="text-justify">Objetivos de las bibliotecas digitales:<br>
                            Promover la digitalización, el acceso y la preservación del patrimonio cultural y científico.<br>
                            Brindar acceso a todos los usuarios a los recursos informativos acopiados por las bibliotecas, respetando los derechos de propiedad intelectual.<br>
                            Crear sistemas interoperables para las bibliotecas digitales, a fin de promover normas abiertas y el libre acceso.<br>
                            Fomentar la función esencial de las bibliotecas y los servicios de información para la promoción de normas comunes y prácticas idóneas.<br>
                            Crear conciencia sobre la necesidad apremiante de garantizar una accesibilidad permanente al material digital.<br><br>

                            Objetivo de nuestro proyecto:<br>
                            Que el alumno partícipe de la asignatura de Administración de Tecnologías de la Información reafirme lo visto en anteriores clases haciendo uso de todos sus conocimientos como el análisis de problemas, la creación y desarrollo de aplicaciones o programas que cumplan con la solución y demanda del cliente como es la creación y uso de bases de datos entre otras cosas.<br>
                            El alumno reafirme sus conocimientos en cuanto a programación web enfatizando el uso de distintos frameworks.<br>
                            Lograr que el usuario final tenga el servicio disponible cuando este desee utilizarlo siempre poder tenerlo cuando alguien requiera utilizarlo.<br>
                            </p>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <h3>Misión</h3>
                            <p class="text-justify">
                            Satisfacer las necesidades de información de todos nuestros usuarios ofreciendo nuestra colección de libros, revistas, artículos con el fin de que ésta adquiera y acreciente libremente el conocimiento en todas las ramas del saber y del mismo modo fomentar el uso de las Tecnologías de la Información.
                            </p>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <h3>Visión</h3>
                            <p class="text-justify">
                            Que nuestra biblioteca virtual facilite recursos y servicios de información de una alta calidad, de igual forma que fomente el autoaprendizaje y la satisfacción de los usuarios para consultar información del tipo que deseen creando un entorno favorable para el aprendizaje y la generación de nuevos conocimientos.
                            </p>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <h3>Valores</h3>
                            <p class="text-justify">Los valores que nos definen son los siguientes:<br>
                            <strong>Calidad:</strong> ofrecemos a nuestros usuarios servicios de excelencia<br>
                            <strong>Accesibilidad:</strong> facilitamos el acceso a nuestros espacios, servicios y página Web<br/>
                            <strong>Aprendizaje:</strong> promovemos un mayor nivel de alfabetización informacional de nuestros usuarios de forma que sean autosuficientes<br/>
                            <strong>Investigación:</strong> ofrecemos unos servicios de excelencia que satisfagan las necesidades de la investigación y contribuyan a la difusión de la producción científica<br>
                            La orientación al usuario<br>
                            La innovación educativa y tecnológica</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
