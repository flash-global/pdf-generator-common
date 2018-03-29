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
use PdfGenerator\Entity\Store;

/**
 * PdfConverterTransformerTest
 */
class PdfConverterTransformerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testTransformer()
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

        $pdfConverterTransformer = new PdfConverterTransformer();

        $transformed = $pdfConverterTransformer->transform($pdfConverter);

        $this->assertEquals($transformed['type'], $pdfConverter->getType());
        $this->assertEquals($transformed['data'], $pdfConverter->getData());
        $this->assertEquals($transformed['store'], $pdfConverter->getStore());
        $this->assertEquals($transformed['download'], $pdfConverter->isDownload());
        $this->assertEquals($transformed['category'], $pdfConverter->getCategory());
        $this->assertEquals($transformed['outputFilename'], $pdfConverter->getOutputFilename());
    }
}
