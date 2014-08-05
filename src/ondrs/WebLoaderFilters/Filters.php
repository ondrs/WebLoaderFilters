<?php

namespace ondrs\WebLoaderFilters;


use WebLoader\Compiler;

class Filters
{

    /**
     * @param $code
     * @param \WebLoader\Compiler $loader
     * @return string
     */
    public static function cssMin($code, Compiler $loader)
    {
        return \CssMin::minify($code);
    }


    /**
     * @param $code
     * @param \WebLoader\Compiler $loader
     * @return string
     */
    public static function jsMin($code, Compiler $loader)
    {
        return \JSMin::minify($code);
    }


}
