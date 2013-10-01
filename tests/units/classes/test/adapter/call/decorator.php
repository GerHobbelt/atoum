<?php

namespace mageekguy\atoum\tests\units\test\adapter\call;

require __DIR__ . '/../../../../runner.php';

use
	mageekguy\atoum,
	mageekguy\atoum\test\adapter\call,
	mageekguy\atoum\test\adapter\call\decorator as testedClass

;

class decorator extends atoum\test
{
	public function test__construct()
	{
		$this
			->if($decorator = new testedClass())
			->then
				->object($decorator->getArgumentsDecorator())->isEqualTo(new call\arguments\decorator())
		;
	}

	public function testSetArgumentsDecorator()
	{
		$this
			->if($decorator = new testedClass())
			->then
				->object($decorator->setArgumentsDecorator($argumentsDecorator = new call\arguments\decorator()))->isIdenticalTo($decorator)
				->object($decorator->getArgumentsDecorator())->isIdenticalTo($argumentsDecorator)
				->object($decorator->setArgumentsDecorator())->isIdenticalTo($decorator)
				->object($decorator->getArgumentsDecorator())
					->isNotIdenticalTo($argumentsDecorator)
					->isEqualTo(new call\arguments\decorator())
		;
	}
}
