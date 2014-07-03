<?php

namespace Defr\AresBundle\Service;

use Defr\Ares;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class AresService
 * @package Defr\ToolBagBundle\Service
 * @author Dennis Fridrich <fridrich.dennis@gmail.com>
 */
class AresService
{

    /**
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * @var \Defr\Ares
     */
    protected $ares;

    /**
     * @param KernelInterface $kernel
     */
    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        $this->ares = new Ares($this->kernel->getCacheDir(), $this->kernel->isDebug());
    }

    /**
     * @param $id
     * @return Ares\AresRecord
     */
    public function findByIdentificationNumber($id)
    {
        return $this->ares->findByIdentificationNumber($id);
    }

    /**
     * @param $id
     * @return Ares\AresRecord
     */
    public function findInResById($id)
    {
        return $this->ares->findInResById($id);
    }

    /**
     * @param $id
     * @return Ares\TaxRecord|mixed
     */
    public function findVatById($id)
    {
        return $this->ares->findVatById($id);
    }

    /**
     * @param $name
     * @param null $city
     * @return array|Ares\AresRecords
     */
    public function findByName($name, $city = null)
    {
        return $this->ares->findByName($name, $city);
    }

}