<?php
namespace Ailtonr\Boleto;

use Ailtonr\Boleto\Util\Substr;
use Ailtonr\Boleto\Util\UnidadeMedida;
use Picqer\Barcode\BarcodeGeneratorPNG;

/**
 * Class CodigoBarras
 * @package Ailtonr\Boleto
 */
class CodigoBarras
{

    public function gerar(Boleto $boleto)
    {
        $generator = new BarcodeGeneratorPNG();
        echo $generator->getBarcode(
            $boleto->getLinha(),
            $generator::TYPE_INTERLEAVED_2_5,
            1,
            49.13
        );
    }
}