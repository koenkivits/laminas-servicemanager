<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\ServiceManager\Factory;

use Interop\Container\ContainerInterface;

/**
 * Interface for a factory
 *
 * A factory is an callable object that is able to create an object. It is
 * given the instance of the service locator, the requested name of the class
 * you want to create, and any additional options that could be used to
 * configure the instance state.
 */
interface FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null);
}
