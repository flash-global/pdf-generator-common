<?php
/**
 * PdfConverterTest.php
 *
 * @date        30/11/17
 * @file        PdfConverterTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfConverter;
use PdfGenerator\Entity\Store;

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
            'store' => Store::FILER,
            'download' => true,
            'category' => 1,
            'outputFilename' => 'test',
        ];

        $pdfConverter = new PdfConverter();
        $pdfConverter->setType($values['type'])
            ->setData($values['data'])
            ->setDownload($values['download'])
            ->setStore($values['store'])
            ->setCategory($values['category'])
            ->setOutputFilename($values['outputFilename']);

        $this->assertEquals($values['type'], $pdfConverter->getType());
        $this->assertEquals($values['data'], $pdfConverter->getData());
        $this->assertEquals($values['download'], $pdfConverter->isDownload());
        $this->assertEquals($values['store'], $pdfConverter->getStore());
        $this->assertEquals($values['category'], $pdfConverter->getCategory());
        $this->assertEquals($values['outputFilename'], $pdfConverter->getOutputFilename());
    }

    /**
     * @expectedException \Exception
     * @throws \Exception
     */
    public function testWrongType()
    {
        $pdfConverter = new PdfConverter();

        $pdfConverter->setType(5464);
    }
}
