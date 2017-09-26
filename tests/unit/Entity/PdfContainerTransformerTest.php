<?php
/**
 * PdfContainerTransformerTest.php
 *
 * @date        26/09/17
 * @file        PdfContainerTransformerTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfContainer;
use PdfGenerator\Entity\PdfContainerTransformer;

/**
 * PdfContainerTransformerTest
 */
class PdfContainerTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransformer()
    {
        $values = [
            'data' => 'sbleh',
            'originName' => 'bloubloublou.pdf'
        ];

        $pdfContainer = new PdfContainer();
        $pdfContainer->setData($values['data'])
            ->setOriginName($values['originName']);

        $pdfContainerTransformer = new PdfContainerTransformer();

        $transformed = $pdfContainerTransformer->transform($pdfContainer);

        $this->assertEquals($transformed['data'], $pdfContainer->getData());
        $this->assertEquals($transformed['originName'], $pdfContainer->getOriginName());
    }
}
