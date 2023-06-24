<?php declare(strict_types = 1);

namespace Tests\Cases\E2E;

use App\Bootstrap;
use Contributte\Phpunit\AbstractTestCase;
use Contributte\Utils\FileSystem;
use Nette\Application\Application as WebApplication;
use Nette\DI\Container;
use Tests\Toolkit\Tests;

final class EntrypointTest extends AbstractTestCase
{

	public function setUp(): void
	{
		parent::setUp();

		if (!file_exists(Tests::CONFIG_DIR . '/local.neon')) {
			FileSystem::copy(
				Tests::CONFIG_DIR . '/local.neon.example',
				Tests::CONFIG_DIR . '/local.neon'
			);
		}
	}

	/**
	 * @runInSeparateProcess
	 */
	public function testWeb(): void
	{
		$container = Bootstrap::boot()->createContainer();
		$container->getByType(WebApplication::class);

		$this->assertInstanceOf(Container::class, $container);
	}

}
