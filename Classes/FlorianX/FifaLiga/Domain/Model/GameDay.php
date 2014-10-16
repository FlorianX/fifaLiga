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
class GameDay {

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Match>
	 * @ORM\OneToMany(mappedBy="gameDay")
	 */
	protected $matches;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Schedule
	 * @ORM\ManyToOne(inversedBy="gameDays")
	 */
	protected $schedule;

	/**
	 * @var \DateTime
	 */
	protected $date;


	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Match>
	 */
	public function getMatches() {
		return $this->matches;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Match> $matches
	 * @return void
	 */
	public function setMatches(\Doctrine\Common\Collections\Collection $matches) {
		$this->matches = $matches;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Schedule
	 */
	public function getSchedule() {
		return $this->schedule;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Schedule $schedule
	 * @return void
	 */
	public function setSchedule(\FlorianX\FifaLiga\Domain\Model\Schedule $schedule) {
		$this->schedule = $schedule;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

}