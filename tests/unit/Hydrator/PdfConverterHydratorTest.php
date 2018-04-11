<?php
/**
 * PdfConverterHydratorTest.php
 *
 * @date        11/04/18
 * @file        PdfConverterHydratorTest.php
 */

use PdfGenerator\Entity\Store;
use PHPUnit\Framework\TestCase;

/**
 * PdfConverterHydratorTest
 */
class PdfConverterHydratorTest extends TestCase
{
    public function testExtract()
    {
        $data = [
            'type' => \PdfGenerator\Entity\PdfConverter::HTML,
            'data' => '<b>Test</b>',
            'store' => Store::NONE,
            'download' => false,
            'output_filename' => 'toto.pdf',
            'category' => 123,
        ];

        $pdfConverter = new \PdfGenerator\Entity\PdfConverter();

        $pdfConverter->setType($data['type'])
            ->setData($data['data'])
            ->setStore($data['store'])
            ->setDownload($data['download'])
            ->setOutputFilename($data['output_filename'])
            ->setCategory($data['category']);

        $extracted = (new \PdfGenerator\Hydrator\PdfConverterHydrator())->extract($pdfConverter);

        $this->assertEquals($extracted['type'], $data['type']);
        $this->assertEquals($extracted['data'], $data['data']);
        $this->assertEquals($extracted['store'], $data['store']);
        $this->assertEquals($extracted['download'], $data['download']);
        $this->assertEquals($extracted['output_filename'], $data['output_filename']);
        $this->assertEquals($extracted['category'], $data['category']);
    }

    public function testHydrate()
    {
        $extracted = [
            'type' => \PdfGenerator\Entity\PdfConverter::HTML,
            'data' => '<b>Test</b>',
            'store' => Store::NONE,
            'download' => false,
            'output_filename' => 'toto.pdf',
            'category' => 123,
        ];

        $pdfConverter = (new \PdfGenerator\Hydrator\PdfConverterHydrator())->hydrate($extracted, new \PdfGenerator\Entity\PdfConverter());

        $this->assertEquals($pdfConverter->getType(), $extracted['type']);
        $this->assertEquals($pdfConverter->getData(), $extracted['data']);
        $this->assertEquals($pdfConverter->getStore(), $extracted['store']);
        $this->assertEquals($pdfConverter->isDownload(), $extracted['download']);
        $this->assertEquals($pdfConverter->getOutputFilename(), $extracted['output_filename']);
        $this->assertEquals($pdfConverter->getCategory(), $extracted['category']);
    }
}