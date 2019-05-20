# API de Provincias Dominicanas

Este proyecto es una simple API para consultar el listado de las provincias, municipios y distritos municipales de República Dominicana.

Esta API puede ser accedida mediante la siguiente URL: http://provinciasrd.raydelto.org

## Modo de uso

_Obtener listado de todas las provincias:_


http://provinciasrd.raydelto.org/provincias


_Obtener detalles de una provincia en específico:_

http://provinciasrd.raydelto.org/provincias/1

En esta URL el número *1* representa el código de la provincia de la cual se desea obtener detalles.

_Obtener todos los municipios de una provincia:_

http://provinciasrd.raydelto.org/provincias/4/municipios

En este caso estamos obteniendo todos los municipios de la provincia cuyo código es *4*.

_Obtener todos los distritos municipales de una provincia:_

http://provinciasrd.raydelto.org/provincias/6/distritos_municipales

En este caso estamos obteniendo todos los distritos municipales de la provincia cuyo código es *6*.

_Obtener listado de todos los municipios:_

http://provinciasrd.raydelto.org/municipios

_Obtener detalles de un municipio en específico:_

http://provinciasrd.raydelto.org/municipios/9

En esta URL el *9* representa el código del municipio que se desea obtener.

_Obtener listado de los distritos municipales de un municipio en específico:_

http://provinciasrd.raydelto.org/municipios/7/distritos_municipales

En esta URL el *7* representa el código del municipio del cual se desean obetener los distritos municipales.

_Obtener listado de todos las distritos municipales:_


http://provinciasrd.raydelto.org/distritos_municipales


_Obtener detalles de un distrito municipal en específico:_

http://provinciasrd.raydelto.org/distritos_municipales/9

En esta URL el *9* representa el código del distrito municipal del cual se desea obtener detalles.

## Configurando el ambiente de desarrollo

El script para generar la base de datos de este proyectos puede ser accedido [desde este enlace](https://github.com/raydelto/provincias_dominicanas).

Este proyecto utiliza como dependencia el proyecto [php-rest-service](https://github.com/marcj/php-rest-service) para gestionar el servicio RESTful.

Si no tienes *Composer* instalado descárgalo de [la siguiente URL](http://getcomposer.org/composer.phar):

```
http://getcomposer.org/composer.phar
```

Una vez descargada la herramienta *Composer*, ejecuta el siguiente comando desde el directorio del proyecto. Dicho comando instalará la dependencia:

```
php composer.phar install
```

Puedes contactar al creador de este proyecto mediante el correo electrónico raydelto@yahoo.com .
