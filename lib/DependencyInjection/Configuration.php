<?php

/*
 * This file is part of the ZealByte Message Bundle.
 *
 * (c) ZealByte <info@zealbyte.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ZealByte\Bundle\MessageBundle\DependencyInjection
{
	use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
	use Symfony\Component\Config\Definition\Builder\TreeBuilder;
	use Symfony\Component\Config\Definition\ConfigurationInterface;

	/**
	 * Message Configuration
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class Configuration implements ConfigurationInterface
	{
		public function getConfigTreeBuilder ()
		{
			$treeBuilder = new TreeBuilder();
			$rootNode = $treeBuilder->root('message');

			$rootNode
				->children()
					->scalarNode('override')->defaultValue('all')->end()
				->end();

			return $treeBuilder;
		}

	}
}

