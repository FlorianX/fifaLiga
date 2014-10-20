<?php
namespace FlorianX\FifaLiga\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FlorianX.FifaLiga".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Club {

	/**
	 * @var string
	 * @Flow\Validate(type="Text")
     * @Flow\Validate(type="StringLength", options={ "minimum"=1, "maximum"=100 })
     * @ORM\Column(length=100)
	 */
	protected $name;

	/**
	 * @ORM\ManyToOne(inversedBy="clubs", cascade={"persist","merge", "detach", "refresh"})
	 * @var \FlorianX\FifaLiga\Domain\Model\League
	 */
	protected $league;


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\League $league
	 */
	public function getLeague() {
		return $this->league;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $league
	 * @return void
	 */
	public function setLeague($league) {
		$this->league = $league;
	}


}