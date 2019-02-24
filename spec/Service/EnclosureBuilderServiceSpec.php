<?php

namespace spec\App\Service;

use App\Service\EnclosureBuilderService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EnclosureBuilderServiceSpec extends ObjectBehavior {
  function it_is_initializable() {
    $this->shouldHaveType(EnclosureBuilderService::class);
  }
}
