<?php
include 'vendor/autoload.php';
include 'includes/engine.php';
use RestService\Server;

Server::create('/')
    ->addGetRoute('provincias', function(){
        return getProvincias();
    })
    ->addGetRoute('provincias/([0-9]+)/municipios', function($provincia_id){
        return getMunicipios("MUNICIPIOS_POR_PROVINCIA", $provincia_id);
    })
    ->addGetRoute('provincias/([0-9]+)/distritos_municipales', function($provincia_id){
        return getDistritosMunicipales("DISTRITO_MUNICIPAL_POR_PROVINCIA", $provincia_id);
    })
    ->addGetRoute('provincias/([0-9]+)', function($provincia_id){
        return getProvincias($provincia_id);
    })
    ->addGetRoute('municipios', function(){
        return getMunicipios();
    })
    ->addGetRoute('municipios/([0-9]+)/distritos_municipales', function($municipio_id){
        return getDistritosMunicipales("DISTRITO_MUNICIPAL_POR_MUNICIPIO", $municipio_id);
    })
    ->addGetRoute('municipios/([0-9]+)', function($municipio_id){
        return getMunicipios("MUNICIPIOS_POR_ID", $municipio_id);
    })
    ->addGetRoute('distritos_municipales', function(){
        return getDistritosMunicipales();
    })
    ->addGetRoute('distritos_municipales/([0-9]+)', function($municipio_id){
        return getDistritosMunicipales("DISTRITO_MUNICIPAL_POR_ID", $municipio_id);
    })
->run();
?>
