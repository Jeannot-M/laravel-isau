<?php

if (! function_exists('page_title')) {

    function page_title($title) {

        $base_title = 'Institut Supérieur d\'Architecture et Urbanisme';

        if ($title === '') {
            return $base_title;
        } else {
            return $title . ' | ' . $base_title;
        }
    }
    # code...
}