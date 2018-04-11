<?php
/**
 * PdfContainerTransformer.php
 *
 * @date        26/09/17
 * @file        PdfContainerTransformer.php
 */

namespace PdfGenerator\Transformer;

use League\Fractal\TransformerAbstract;
use PdfGenerator\Entity\PdfContainer;

/**
 * PdfContainerTransformer
 */
class PdfContainerTransformer extends TransformerAbstract
{
    /**
     * @param PdfContainer $pdfContainer
     *
     * @return array
     */
    public function transform(PdfContainer $pdfContainer)
    {
        $pdfConverterTransformer = new PdfConverterTransformer();

        return [
            'responseStatus' => $pdfContainer->getResponseStatus(),
            'sourceContainer' => $pdfConverterTransformer->transform($pdfContainer->getSourceContainer()),
            'url' => $pdfContainer->getUrl(),
        ];
    }
}
