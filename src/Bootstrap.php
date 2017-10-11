<?php

namespace KejawenLab\Application;

use KejawenLab\Framework\GarengFramework\Bootstrap as GarengBootstrap;
use Psr\Cache\CacheItemPoolInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.kejawen@gmail.com>
 */
class Bootstrap extends GarengBootstrap
{
    /**
     * @param string $configDir
     * @param CacheItemPoolInterface|null $cachePool
     * @param array $values
     */
    public function __construct($configDir = 'configs', CacheItemPoolInterface $cachePool = null, array $values = array())
    {
        parent::__construct($cachePool, $values);
        $this->boot($configDir);
    }

    /**
     * @return string
     */
    protected function projectDir()
    {
        return __DIR__.'/..';
    }
}
