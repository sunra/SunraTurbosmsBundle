<?php

namespace Sunra\TurbosmsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
//use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
//use Symfony\Component\DependencyInjection\Loader;
//use Symfony\Component\Yaml\Yaml;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SunraTurbosmsExtension extends Extension
{
	
	public function load(array $configs, ContainerBuilder $container)
    {
        // ... where all of the heavy logic is done
		$config = array();
        foreach ($configs as $subConfig) {
            $config = array_merge($config, $subConfig);
        }
		
		$configuration = new Configuration();		
		
		$config = $this->processConfiguration($configuration, $configs);
		
			
		$container
		    ->register('sunra_turbosms', 'Turbosms\Soap\Client')
		        ->addArgument($config['soap_client']['login'])
				->addArgument($config['soap_client']['password'])
				->addArgument($config['soap_client']['sender'])
				->addArgument($config['charset'])
				
		;        
		
    }
	
	
}
