<?php
/**
 * PdfConverterTest.php
 *
 * @date        30/11/17
 * @file        PdfConverterTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfConverter;

/**
 * PdfConverterTest
 */
class PdfConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testEntity()
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

        $this->assertEquals($values['type'], $pdfContainer->getType());
        $this->assertEquals($values['data'], $pdfContainer->getData());
        $this->assertEquals($values['download'], $pdfContainer->isDownload());
        $this->assertEquals($values['store'], $pdfContainer->getStore());
        $this->assertEquals($values['outputFilename'], $pdfContainer->getOutputFilename());
    }
}
