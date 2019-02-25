<?php

namespace spec\App\Service;

use App\Entity\Dinosaur;
use App\Factory\DinosaurFactory;
use App\Service\EnclosureBuilderService;
use PhpSpec\ObjectBehavior;
use App\Entity\Enclosure;

class EnclosureBuilderServiceSpec extends ObjectBehavior {
  function it_is_initializable() {
    $this->shouldHaveType(EnclosureBuilderService::class);
  }

	function it_builds_enclosure_with_dinosaurs(DinosaurFactory $dinosaurFactory){
  	$this->beConstructedWith($dinosaurFactory);
  	$dino1 = new Dinosaur('Stegosaurus', false);
  	$dino1->setLength(6);

  	$dinosaurFactory->growVelociraptor(5)->willReturn($dino1);

		$enclosure = $this->buildEnclosure(1, 2);

		$enclosure->shouldBeAnInstanceOf(Enclosure::class);
		$enclosure->isSecurityActive()->shouldReturn(true);
	}
}
