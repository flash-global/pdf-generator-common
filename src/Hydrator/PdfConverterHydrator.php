<?php
/**
 * PdfConverterHydrator.php
 *
 * @date        11/04/18
 * @file        PdfConverterHydrator.php
 */

namespace PdfGenerator\Hydrator;

use PdfGenerator\Entity\PdfConverter;
use Zend\Hydrator\HydratorInterface;

/**
 * PdfConverterHydrator
 */
class PdfConverterHydrator implements HydratorInterface
{

    /**
     * Extract values from an object
     *
     * @param  PdfConverter $object
     *
     * @return array
     */
    public function extract($object)
    {
        return [
            'type' => $object->getType(),
            'data' => $object->getData(),
            'store' => $object->getStore(),
            'download' => $object->isDownload(),
            'output_filename' => $object->getOutputFilename(),
            'category' => $object->getCategory(),
        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array        $data
     * @param  PdfConverter $object
     *
     * @return PdfConverter
     * @throws \Exception
     */
    public function hydrate(array $data, $object)
    {
        $object->setType($data['type'])
            ->setData($data['data'])
            ->setStore($data['store'])
            ->setDownload($data['download'])
            ->setOutputFilename($data['output_filename'])
            ->setCategory($data['category']);

        return $object;
    }
}
