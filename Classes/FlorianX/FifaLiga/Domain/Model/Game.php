<?php
namespace FlorianX\FifaLiga\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FlorianX.FifaLiga".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\ValueObject
 */
class Game {

	/**
	 * @var \DateTime
	 */
	protected $halfTimeLength;

	/**
	 * @var boolean
	 */
	protected $overtime;

	/**
	 * @var boolean
	 */
	protected $penatlies;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team>
	 * @ORM\OneToMany(mappedBy="game")
	 */
	protected $teams;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal>
	 * @ORM\OneToMany(mappedBy="game")
	 */
	protected $goals;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\GameDay
	 * @ORM\ManyToOne(inversedBy="games")
	 */
	protected $gameDay;


	/**
	 * Constructs a new Price
	 *
	 * @param \DateTime $halfTimeLength
	 * @param boolean $overtime
	 * @param boolean $penatlies
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team> $teams
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal> $goals
	 * @param \FlorianX\FifaLiga\Domain\Model\GameDay $gameDay
	 */
	public function __construct($halfTimeLength, $overtime, $penatlies, $teams, $goals, $gameDay) {
		$this->halfTimeLength = $halfTimeLength;
		$this->overtime = $overtime;
		$this->penatlies = $penatlies;
		$this->teams = $teams;
		$this->goals = $goals;
		$this->gameDay = $gameDay;
	}
	
	/**
	 * @return \DateTime
	 */
	public function getHalfTimeLength() {
		return $this->halfTimeLength;
	}

	/**
	 * @return boolean
	 */
	public function getOvertime() {
		return $this->overtime;
	}

	/**
	 * @return boolean
	 */
	public function getPenatlies() {
		return $this->penatlies;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team>
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal>
	 */
	public function getGoals() {
		return $this->goals;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\GameDay
	 */
	public function getGameDay() {
		return $this->gameDay;
	}
}