<?php

namespace spec\App\Entity;

use App\Entity\Enclosure;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EnclosureSpec extends ObjectBehavior {
  function it_is_initializable() {
    $this->shouldHaveType(Enclosure::class);
  }

  function it_should_have_no_dinosaurs_by_default(){
  	$this->getDinosaurs()->shouldHaveCount(0);
  }
}
