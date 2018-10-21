<?php

/*
 * This file is part of the ZealByte Message Bundle.
 *
 * (c) ZealByte <info@zealbyte.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ZealByte\Bundle\MessageBundle\DependencyInjection\CompilerPass
{
	use Symfony\Component\DependencyInjection\ContainerBuilder;
	use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

	/**
	 * Compiler Pass
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class MessagesPass implements CompilerPassInterface
	{
		public function process(ContainerBuilder $container)
		{
			if (!$container->hasDefinition('ZealByte\Message\Provider\MessageProvider'))
				return;

			$definition = $container->getDefinition('ZealByte\Message\Provider\MessageProvider');
		}

	}
}
