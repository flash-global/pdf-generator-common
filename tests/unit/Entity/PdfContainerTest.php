<?php
/**
 * PdfContainerTest.php
 *
 * @date        26/09/17
 * @file        PdfContainerTest.php
 */

namespace Tests\PdfGenerator\Entity;

use PdfGenerator\Entity\PdfContainer;

/**
 * PdfContainerTest
 */
class PdfContainerTest extends \PHPUnit_Framework_TestCase
{
    public function testEntity()
    {
        $values = [
            'data' => 'sbleh',
            'originName' => 'bloubloublou.pdf'
        ];

        $pdfContainer = new PdfContainer();
        $pdfContainer->setData($values['data'])
            ->setOriginName($values['originName']);

        $this->assertEquals($values['data'], $pdfContainer->getData());
        $this->assertEquals($values['originName'], $pdfContainer->getOriginName());
    }
}
