<?php
namespace Ailtonr\Boleto;

use Ailtonr\Boleto\Util\Substr;
use Ailtonr\Boleto\Util\UnidadeMedida;

abstract class Gerador
{
    public static function getDirImages()
    {
        return __DIR__ . '/Resources/imgs/';
    }

}