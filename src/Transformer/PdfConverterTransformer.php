<?php
/**
 * PdfConverterTransformer.php
 *
 * @date        30/11/17
 * @file        PdfConverterTransformer.php
 */

namespace PdfGenerator\Transformer;

use League\Fractal\TransformerAbstract;
use PdfGenerator\Entity\PdfConverter;

/**
 * PdfConverterTransformer
 */
class PdfConverterTransformer extends TransformerAbstract
{
    /**
     * @param PdfConverter $pdfConverter
     *
     * @return array
     */
    public function transform(PdfConverter $pdfConverter)
    {
        return [
            'store' => $pdfConverter->getStore(),
            'download' => $pdfConverter->isDownload(),
            'data' => $pdfConverter->getData(),
            'type' => $pdfConverter->getType(),
            'category' => $pdfConverter->getCategory(),
            'outputFilename' => $pdfConverter->getOutputFilename(),
        ];
    }
}
