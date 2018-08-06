<?php

use PdfGenerator\Entity\PdfContainer;
use PdfGenerator\Entity\PdfConverter;
use PdfGenerator\Entity\Store;
use PdfGenerator\Hydrator\PdfContainerHydrator;
use PHPUnit\Framework\TestCase;

/**
 * Class PdfContainerHydratorTest
 */
class PdfContainerHydratorTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testExtract()
    {
        $fixturePdfContainer = (new PdfContainer())
            ->setUrl('url')
            ->setSourceContainer(
                (new PdfConverter())
                    ->setData('data-1234')
                    ->setType(PdfConverter::HTML)
                    ->setStore(Store::FILER)
            )
            ->setResponseStatus(200);

        $expectedData = [
            'responseStatus' => 200,
            'sourceContainer' => [
                'type' => PdfConverter::HTML,
                'data' => 'data-1234',
                'store' => Store::FILER,
                'download' => null,
                'output_filename' => null,
                'category' => null
            ],
            'url' => 'url',
        ];

        $pdfContainerHydrator = new PdfContainerHydrator();
        $result = $pdfContainerHydrator->extract($fixturePdfContainer);

        $this->assertEquals($expectedData, $result);
    }

    /**
     * @throws Exception
     */
    public function testHydrate()
    {
        $fixtureData = [
            'responseStatus' => 200,
            'sourceContainer' => [
                'type' => PdfConverter::HTML,
                'data' => 'data-1234',
                'store' => Store::FILER,
                'download' => null,
                'output_filename' => null,
                'category' => null
            ],
            'url' => 'url',
        ];

        $expectedPdfContainer = (new PdfContainer())
            ->setUrl('url')
            ->setSourceContainer(
                (new PdfConverter())
                    ->setData('data-1234')
                    ->setType(PdfConverter::HTML)
                    ->setStore(Store::FILER)
            )
            ->setResponseStatus(200);

        $pdfContainer = new PdfContainer();
        $pdfContainerHydrator = new PdfContainerHydrator();
        $result = $pdfContainerHydrator->hydrate($fixtureData, $pdfContainer);

        $this->assertEquals($expectedPdfContainer, $pdfContainer);
        $this->assertEquals($expectedPdfContainer, $result);
    }
}
