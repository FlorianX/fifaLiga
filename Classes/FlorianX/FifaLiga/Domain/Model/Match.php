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
class Match {

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
	 * @ORM\OneToMany(mappedBy="match")
	 */
	protected $teams;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal>
	 * @ORM\OneToMany(mappedBy="match")
	 */
	protected $goals;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\GameDay
	 * @ORM\ManyToOne(inversedBy="matches")
	 */
	protected $gameDay;


	/**
	 * @return \DateTime
	 */
	public function getHalfTimeLength() {
		return $this->halfTimeLength;
	}

	/**
	 * @param \DateTime $halfTimeLength
	 * @return void
	 */
	public function setHalfTimeLength($halfTimeLength) {
		$this->halfTimeLength = $halfTimeLength;
	}

	/**
	 * @return boolean
	 */
	public function getOvertime() {
		return $this->overtime;
	}

	/**
	 * @param boolean $overtime
	 * @return void
	 */
	public function setOvertime($overtime) {
		$this->overtime = $overtime;
	}

	/**
	 * @return boolean
	 */
	public function getPenatlies() {
		return $this->penatlies;
	}

	/**
	 * @param boolean $penatlies
	 * @return void
	 */
	public function setPenatlies($penatlies) {
		$this->penatlies = $penatlies;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team>
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team> $teams
	 * @return void
	 */
	public function setTeams(\Doctrine\Common\Collections\Collection $teams) {
		$this->teams = $teams;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal>
	 */
	public function getGoals() {
		return $this->goals;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal> $goals
	 * @return void
	 */
	public function setGoals(\Doctrine\Common\Collections\Collection $goals) {
		$this->goals = $goals;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\GameDay
	 */
	public function getGameDay() {
		return $this->gameDay;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\GameDay $gameDay
	 * @return void
	 */
	public function setGameDay(\FlorianX\FifaLiga\Domain\Model\GameDay $gameDay) {
		$this->gameDay = $gameDay;
	}

}