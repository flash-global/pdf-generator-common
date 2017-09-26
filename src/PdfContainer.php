<?php
/**
 * PdfContainer.php
 *
 * @date        26/09/17
 * @file        PdfContainer.php
 */

namespace PdfGenerator\Entity;

use Fei\Entity\AbstractEntity;

/**
 * PdfContainer
 */
class PdfContainer extends AbstractEntity
{
    /** @var string */
    protected $data;

    /** @var string */
    protected $originName;

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return PdfContainer
     */
    public function setData(string $data): PdfContainer
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginName(): string
    {
        return $this->originName;
    }

    /**
     * @param string $originName
     *
     * @return PdfContainer
     */
    public function setOriginName(string $originName): PdfContainer
    {
        $this->originName = $originName;

        return $this;
    }
}
