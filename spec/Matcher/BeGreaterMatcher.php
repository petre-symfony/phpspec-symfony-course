<?php
namespace spec\Matcher;

use PhpSpec\Exception\Example\FailureException;
use PhpSpec\Matcher\BasicMatcher;

final class BeGreaterMatcher extends BasicMatcher {
	public function supports(string $name, $subject, array $arguments): bool {
		var_dump($name, $subject, $arguments);
	}

	protected function matches($subject, array $arguments): bool {
		// TODO: Implement matches() method.
	}

	protected function getFailureException(string $name, $subject, array $arguments): FailureException {
		// TODO: Implement getFailureException() method.
	}



	protected function getNegativeFailureException(string $name, $subject, array $arguments): FailureException {
		// TODO: Implement getNegativeFailureException() method.
	}

}