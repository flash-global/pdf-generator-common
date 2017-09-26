<?php
/**
 * PdfContainerTransformer.php
 *
 * @date        26/09/17
 * @file        PdfContainerTransformer.php
 */

namespace PdfGenerator\Entity;

use League\Fractal\TransformerAbstract;

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
        return [
            'data' => $pdfContainer->getData(),
            'originName' => $pdfContainer->getOriginName()
        ];
    }
}
