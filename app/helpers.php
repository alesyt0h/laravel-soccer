<?php

if (! function_exists('isSameUser')) {
    function isSameUserOrAdmin($entity){
        return $entity->created_by === (auth()->user()->id ?? 0) || isAdmin();
    }
}

if (! function_exists('isAdmin')) {
    function isAdmin(){
        return (auth()->user()->role ?? null) === 'admin';
    }
}

?>
