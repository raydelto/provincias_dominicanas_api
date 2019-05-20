<?php
include("db.php");

function procesarResultado($consulta)
{
    $resultado = mysql_query($consulta);
    if (!$resultado)
        return null;

    $i = 0;
    while ($fila = mysql_fetch_assoc($resultado)) {
        $listado[$i] = $fila;
        $listado[$i]["codigo"] = (int)$fila["codigo"];
        $i++;
    }

    return $listado;
}

function getProvincias()
{
    $consulta = "SELECT provincia_id as codigo, nombre FROM provincias";
    $consulta = func_num_args() > 0 ? $consulta . " where provincia_id =" . func_get_args()[0] : $consulta;
    return procesarResultado($consulta);
}

function getMunicipios()
{
    $consulta = "SELECT municipio_id as codigo, nombre FROM municipios";
    if (func_num_args() > 0) {
        switch (func_get_args()[0]) {
            case "MUNICIPIOS_POR_PROVINCIA":
                $consulta .= " where provincia_id =" . func_get_args()[1];
                break;

            case "MUNICIPIOS_POR_ID":
                $consulta .= " where municipio_id =" . func_get_args()[1];
                break;
        }
    }
    return procesarResultado($consulta);
}

function getDistritosMunicipales()
{
    $consulta = "SELECT distrito_id as codigo, nombre FROM distritos_municipales";
    if (func_num_args() > 0) {
        switch (func_get_args()[0]) {
            case "DISTRITO_MUNICIPAL_POR_ID":
                $consulta .= " where distrito_id =" . func_get_args()[1];
                break;

            case "DISTRITO_MUNICIPAL_POR_MUNICIPIO":
                $consulta .= " where municipio_id =" . func_get_args()[1];
                break;

            case "DISTRITO_MUNICIPAL_POR_PROVINCIA":
                $consulta .= " where municipio_id in (select municipio_id from municipios where provincia_id = " . func_get_args()[1] . ")";
                break;
        }
    }
    return procesarResultado($consulta);
}
