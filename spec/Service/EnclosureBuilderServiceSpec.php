<?php

namespace spec\App\Service;

use App\Entity\Dinosaur;
use App\Factory\DinosaurFactory;
use App\Service\EnclosureBuilderService;
use PhpSpec\ObjectBehavior;
use App\Entity\Enclosure;
use Prophecy\Argument;

class EnclosureBuilderServiceSpec extends ObjectBehavior {
  function it_is_initializable() {
    $this->shouldHaveType(EnclosureBuilderService::class);
  }

	function it_builds_enclosure_with_dinosaurs(DinosaurFactory $dinosaurFactory){
  	$this->beConstructedWith($dinosaurFactory);
  	$dino1 = new Dinosaur('Stegosaurus', false);
  	$dino1->setLength(6);

  	$dino2 = new Dinosaur('Baby stegosaurus', false);
  	$dino2->setLength(2);


		$dinosaurFactory->growVelociraptor(5)->willReturn(
			$dino2
		);

  	$dinosaurFactory->growVelociraptor(Argument::type('integer'))->willReturn(
      $dino1
	  );



		$enclosure = $this->buildEnclosure(1, 2);

		$enclosure->shouldBeAnInstanceOf(Enclosure::class);
		$enclosure->isSecurityActive()->shouldReturn(true);

		$enclosure->getDinosaurs()[0]->shouldBe($dino2);
		$enclosure->getDinosaurs()[1]->shouldBe($dino1);
	}
}
