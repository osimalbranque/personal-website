<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * @author Osiris
 * @function site_url
 * @brief Réécriture du helper site_url, pour gérer un array.
 */
if ( ! function_exists('site_url'))
{
    function site_url($uri = '')
    {
        // Transformation de la chaîne en tableau si argument simple.
        if(!is_array($uri))
            $uri = func_get_args();

        $CI =& get_instance();
        return $CI->config->site_url($uri);
    }
}

/*
 * @author Osiris
 * @function site_url
 * @brief Fonction transformant un texte et la liste des dossiers parcourus,
 * en une URL.
 */
if ( ! function_exists('url'))
{
    function url($text, $uri = '')
    {
        if(!is_array($uri))
        {
            $uri = func_get_args();

            /* Suppression du premier élément de $uri : $text,
               si $uri n'est pas un array. */
            array_shift($uri);
        }
        echo '<a href="'.site_url($uri).'">'.htmlentities($text).'</a>';
        return '';
    }
}
