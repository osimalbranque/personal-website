<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Assure que le script ne se lancera pas directement depuis une URL.
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Osiris
 * @function css_url
 * @brief Transformation d'une chaîne en URL css.;
 */

if(!function_exists('css_url'))
{
    function css_url($name)
    {
        return site_url().'assets/css/'.$name.'.css';
    }
}

/*
 * @author Osiris
 * @function js_url
 * @brief Transformation d'une chaîne en URL Javascript.;
 */

if(!function_exists('js_url'))
{
    function js_url($name)
    {
        return site_url().'.assets/js/'.$name.'.js';
    }
}

/*
 * @author Osiris
 * @function img_url
 * @brief Transformation d'une chaîne en URL image.
 */

if(!function_exists('img_url'))
{
    function img_url($name)
    {
        // On ne connaît pas à l'avance l'extension de l'image.
        return site_url().'assets/img/'.$name;
    }
}

/*
 * @author Osiris
 * @function img
 * @brief Transformation d'une URL image en code HTML image.
 */

if(!function_exists('img'))
{
    function img($src, $alt = null)
    {
         return '<img src="'.img_url($src).'" alt="'.$alt.'"'.' />';
    }
}

/*
 * @author Osiris
 * @function js_url
 * @brief Fonction permettant d'obtenir un script JS à partir de son nom.
 */
if ( ! function_exists('js_url'))
{
    function js_url($nom)
    {
          return base_url() . 'assets/javascript/' . $nom . '.js';
    }
}

/*
 * @author Osiris
 * @function img_url
 * @brief Fonction permettant d'obtenir une image à partir de son nom + extension.
 */
if ( ! function_exists('img_url'))
{
    function img_url($nom)
    {
        return base_url() . 'assets/images/' . $nom;
    }
}

if ( !function_exists('css_stylesheet'))
{
    function css_stylesheet($css_name)
    {
        return '<link rel="stylesheet type="text/css" href="'.css_url($css_name).'" />';
    }
}
