<?php

namespace CookieBarStyler\Containers;

use Plenty\Plugin\Templates\Twig;
    
class CookieBarStylerContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CookieBarStyler::content.CookieBarStylerAssets');
    }
}