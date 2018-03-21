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
    /** @var int */
    protected $responseStatus;

    /** @var PdfContainer */
    protected $sourceContainer;

    /** @var string */
    protected $url;

    /**
     * @return int
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param int $responseStatus
     *
     * @return $this
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;

        return $this;
    }

    /**
     * @return PdfContainer
     */
    public function getSourceContainer()
    {
        return $this->sourceContainer;
    }

    /**
     * @param PdfContainer $sourceContainer
     *
     * @return $this
     */
    public function setSourceContainer(PdfContainer $sourceContainer)
    {
        $this->sourceContainer = $sourceContainer;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
