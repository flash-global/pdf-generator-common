<?php
/**
 * PdfConverterTransformer.php
 *
 * @date        30/11/17
 * @file        PdfConverterTransformer.php
 */

namespace PdfGenerator\Entity;

use League\Fractal\TransformerAbstract;

/**
 * PdfConverterTransformer
 */
class PdfConverterTransformer extends TransformerAbstract
{
    public function transform(PdfConverter $pdfConverter)
    {
        return [
            'store' => $pdfConverter->getStore(),
            'download' => $pdfConverter->isDownload(),
            'data' => $pdfConverter->getData(),
            'type' => $pdfConverter->getType(),
        ];
    }
}
