<?php

if (! function_exists('isSameUser')) {
    function isSameUserOrAdmin($entity){
        return $entity->created_by === auth()->user()->id || isAdmin();
    }
}

if (! function_exists('isAdmin')) {
    function isAdmin(){
        return auth()->user()->role === 'admin';
    }
}

?>
