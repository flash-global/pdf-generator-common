<?php
/**
 * PdfConverter.php
 *
 * @date        30/11/17
 * @file        PdfConverter.php
 */

namespace PdfGenerator\Entity;

use ObjectivePHP\Gateway\Entity\Entity;

/**
 * PdfConverter
 */
class PdfConverter extends Entity
{
    const URL = 1;
    const HTML = 2;

    /** @var integer */
    protected $type;

    /** @var string */
    protected $data;

    /** @var string */
    protected $store = Store::NONE;

    /** @var bool */
    protected $download;

    /** @var string */
    protected $outputFilename;

    /** @var mixed */
    protected $category;

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
     * @throws \Exception
     */
    public function setType($type)
    {
        if ($type != PdfConverter::URL && $type != PdfConverter::HTML) {
            throw new \Exception('Wrong type of file descriptor');
        }

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
     * @throws \Exception
     */
    public function setData($data)
    {
        if ($this->getType() == PdfConverter::URL && strpos(substr($data, 0, 5), 'http') === false) {
            throw new \Exception(sprintf('Error : Given URL MUST contain the protocol. Current : %s', $data));
        }
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

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}
