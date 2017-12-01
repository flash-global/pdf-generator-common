<?php
/**
 * PdfConverterTransformerTest.php
 *
 * @date        30/11/17
 * @file        PdfConverterTransformerTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfConverter;
use PdfGenerator\Entity\PdfConverterTransformer;

/**
 * PdfConverterTransformerTest
 */
class PdfConverterTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransformer()
    {
        $values = [
            'type' => PdfConverter::HTML,
            'data' => 'sbleh',
            'store' => PdfConverter::STORE_FILER,
            'download' => true,
            'outputFilename' => 'test',
        ];

        $pdfContainer = new PdfConverter();
        $pdfContainer->setType($values['type'])
            ->setData($values['data'])
            ->setDownload($values['download'])
            ->setStore($values['store'])
            ->setOutputFilename($values['outputFilename']);

        $pdfContainerTransformer = new PdfConverterTransformer();

        $transformed = $pdfContainerTransformer->transform($pdfContainer);

        $this->assertEquals($transformed['type'], $pdfContainer->getType());
        $this->assertEquals($transformed['data'], $pdfContainer->getData());
        $this->assertEquals($transformed['store'], $pdfContainer->getStore());
        $this->assertEquals($transformed['download'], $pdfContainer->isDownload());
        $this->assertEquals($transformed['outputFilename'], $pdfContainer->getOutputFilename());
    }
}
