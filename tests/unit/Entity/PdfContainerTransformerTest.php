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
use PdfGenerator\Entity\PdfConverter;
use PdfGenerator\Entity\PdfConverterTransformer;

/**
 * PdfContainerTransformerTest
 */
class PdfContainerTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransformer()
    {
        $values = [
            'responseStatus' => 200,
            'sourceContainer' => new PdfConverter(),
            'url' => 'www.pdf.fr',
        ];

        $pdfContainer = new PdfContainer();
        $pdfContainer->setResponseStatus($values['responseStatus'])
            ->setSourceContainer($values['sourceContainer'])
            ->setUrl($values['url']);

        $pdfContainerTransformer = new PdfContainerTransformer();

        $transformed = $pdfContainerTransformer->transform($pdfContainer);

        $pdfConverterTransformer = new PdfConverterTransformer();

        $sourceContainer = $pdfConverterTransformer->transform($pdfContainer->getSourceContainer());

        $this->assertEquals($transformed['responseStatus'], $pdfContainer->getResponseStatus());
        $this->assertEquals($transformed['sourceContainer'], $sourceContainer);
        $this->assertEquals($transformed['url'], $pdfContainer->getUrl());
    }
}
