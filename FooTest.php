<?php
declare(strict_types = 1);

use PHPStan\File\FileHelper;
use PHPStan\Testing\PHPStanTestCase;

class FooTest extends PHPStanTestCase
{

	public function testFoo(): void
	{
		$helper = new FileHelper(__DIR__);
		$this->assertSame('/foo/bar', $helper->absolutizePath('/foo/bar'));
	}

}