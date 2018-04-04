<?php
/**
 * PdfContainerTest.php
 *
 * @date        26/09/17
 * @file        PdfContainerTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfContainer;
use PdfGenerator\Entity\PdfConverter;

/**
 * PdfContainerTest
 */
class PdfContainerTest extends \PHPUnit_Framework_TestCase
{
    public function testEntity()
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

        $this->assertEquals($values['responseStatus'], $pdfContainer->getResponseStatus());
        $this->assertEquals($values['sourceContainer'], $pdfContainer->getSourceContainer());
        $this->assertEquals($values['url'], $pdfContainer->getUrl());
    }
}
