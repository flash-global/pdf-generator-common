<?php

namespace PdfGenerator\Hydrator;

use PdfGenerator\Entity\PdfContainer;
use PdfGenerator\Entity\PdfConverter;
use Zend\Hydrator\HydratorInterface;

class PdfContainerHydrator implements HydratorInterface
{
    /**
     * Extract values from an object
     *
     * @param  PdfContainer $object
     * @return array
     */
    public function extract($object)
    {
        $pdfConverterHydrator = new PdfConverterHydrator();

        return [
            'responseStatus' => $object->getResponseStatus(),
            'sourceContainer' => $pdfConverterHydrator->extract($object->getSourceContainer()),
            'url' => $object->getUrl(),
        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  PdfContainer $object
     *
     * @return object
     *
     * @throws \Exception
     */
    public function hydrate(array $data, $object)
    {
        $pdfConverterHydrator = new PdfConverterHydrator();
        $pdfConverter = new PdfConverter();

        $object->setResponseStatus($data['responseStatus'])
            ->setSourceContainer($pdfConverterHydrator->hydrate($data['sourceContainer'], $pdfConverter))
            ->setUrl($data['url']);

        return $object;
    }
}
