<?php
    function setActive($ruta){
        return request()->routeIs($ruta) ? 'active' : '';
    }

    function obtenerLink($nombreRuta){
        return route($nombreRuta,[],false);
    }