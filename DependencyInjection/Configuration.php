<?php

namespace Dandomain\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('dandomain_api');

        $rootNode
            ->children()
                ->scalarNode('host')->end()
                ->scalarNode('api_key')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
