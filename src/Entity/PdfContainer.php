<?php
/**
 * PdfContainer.php
 *
 * @date        26/09/17
 * @file        PdfContainer.php
 */

namespace PdfGenerator\Entity;

use ObjectivePHP\Gateway\Entity\Entity;

/**
 * PdfContainer
 */
class PdfContainer extends Entity
{
    /** @var int */
    protected $responseStatus;

    /** @var PdfConverter */
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
     * @return PdfConverter
     */
    public function getSourceContainer()
    {
        return $this->sourceContainer;
    }

    /**
     * @param PdfConverter $sourceContainer
     *
     * @return $this
     */
    public function setSourceContainer(PdfConverter $sourceContainer)
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
