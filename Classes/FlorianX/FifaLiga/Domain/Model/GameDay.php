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
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Game>
	 * @ORM\OneToMany(mappedBy="gameDay")
	 */
	protected $games;

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
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Game>
	 */
	public function getGames() {
		return $this->games;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Game> $games
	 * @return void
	 */
	public function setGames(\Doctrine\Common\Collections\Collection $games) {
		$this->games = $games;
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