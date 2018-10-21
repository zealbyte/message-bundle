<?php

/*
 * This file is part of the ZealByte Message Bundle.
 *
 * (c) ZealByte <info@zealbyte.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ZealByte\Bundle\MessageBundle
{
	use Symfony\Component\HttpKernel\Bundle\Bundle;
	use Symfony\Component\DependencyInjection\ContainerBuilder;
	use Symfony\Component\DependencyInjection\Compiler\PassConfig;
	use ZealByte\Bundle\MessageBundle\DependencyInjection\CompilerPass\MessagesPass;

	/**
	 * Message Bundle.
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class MessageBundle extends Bundle
	{
		/**
		 * Boots the Bundle.
		 */
		public function boot ()
		{
		}

		/**
		 * Shutdowns the Bundle.
		 */
		public function shutdown ()
		{
		}

		/**
		 * Builds the bundle.
		 *
		 * It is only ever called once when the cache is empty.
		 *
		 * This method can be overridden to register compilation passes,
		 * other extensions, ...
		 */
		public function build (ContainerBuilder $container)
		{
			parent::build($container);
			$container->addCompilerPass(new MessagesPass());
		}

	}
}
