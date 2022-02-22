<?php

function active($route){
    return request()->path($route) == $route ? 'active' : "";
}
function active_params($route){
    return request()->routeIs($route) ? 'active' : "";
}
