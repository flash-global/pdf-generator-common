<?php
/**
 * PdfConverter.php
 *
 * @date        30/11/17
 * @file        PdfConverter.php
 */

namespace PdfGenerator\Entity;

use Fei\Entity\AbstractEntity;

/**
 * PdfConverter
 */
class PdfConverter extends AbstractEntity
{
    const URL = 1;
    const HTML = 2;

    const NO_STORE = 0;
    const STORE_FILER = 1;

    /** @var integer */
    protected $type;

    /** @var string */
    protected $data;

    /** @var string */
    protected $store = self::NO_STORE;

    /** @var bool */
    protected $download;

    /** @var string */
    protected $outputFilename;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param string $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDownload()
    {
        return $this->download;
    }

    /**
     * @param bool $download
     *
     * @return PdfConverter
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFilename()
    {
        return $this->outputFilename;
    }

    /**
     * @param string $outputFilename
     *
     * @return $this
     */
    public function setOutputFilename($outputFilename)
    {
        $this->outputFilename = $outputFilename;

        return $this;
    }
}
