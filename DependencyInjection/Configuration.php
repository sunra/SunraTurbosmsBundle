<?php

namespace Sunra\TurbosmsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sunra_turbosms');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        $rootNode
		    ->children()
               ->scalarNode('charset')
			       ->DefaultValue('utf-8')
			       ->end()
			   ->arrayNode('soap_client')
			       ->children()
				       ->scalarNode('login')
					       ->IsRequired()
					       ->end()
					   ->scalarNode('password')
					       ->IsRequired()
					       ->end()
					   ->scalarNode('sender')
					       ->IsRequired()
					       ->end()
				   ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
