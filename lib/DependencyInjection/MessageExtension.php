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
	use Exception;
	use Symfony\Component\Config\FileLocator;
	use Symfony\Component\DependencyInjection\ContainerBuilder;
	use Symfony\Component\DependencyInjection\Loader;
	use Symfony\Component\HttpKernel\DependencyInjection\Extension;

	/**
	 * Message Extension
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class MessageExtension extends Extension
	{
		public function load (array $configs, ContainerBuilder $container)
		{
			$loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

			$loader->load('messages.xml');

			$configuration = new Configuration();
			$config = $this->processConfiguration($configuration, $configs);

			$container->setParameter('messages.override', $config['override']);
		}

	}
}
