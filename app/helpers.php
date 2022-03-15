<?php

if (! function_exists('isSameUser')) {
    function isSameUser($entity){
        return $entity->created_by === auth()->user()->id;
    }
}

?>
