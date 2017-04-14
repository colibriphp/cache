<?php

namespace Colibri\Cache\Pool;

use Colibri\Cache\Adapter\AdapterInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Interface PoolInterface
 * @package Colibri\Cache\Pool
 */
interface PoolInterface extends CacheItemPoolInterface
{
  
  /**
   * @param $key
   * @return mixed|null|string
   */
  public function getValue($key);
  
  /**
   * @param $key
   * @return bool
   */
  public function deleteDeferred($key);
  
  /**
   * @param $key
   * @return bool
   */
  public function hasDeferred($key);
  
  /**
   * @return AdapterInterface
   */
  public function getAdapter();
  
}