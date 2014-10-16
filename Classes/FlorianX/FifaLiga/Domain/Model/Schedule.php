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
class Schedule {

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\GameDay>
	 * @ORM\OneToMany(mappedBy="schedule")
	 */
	protected $gameDays;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Event
	 * @ORM\OneToOne
	 */
	protected $event;


	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\GameDay>
	 */
	public function getGameDays() {
		return $this->gameDays;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\GameDay> $gameDays
	 * @return void
	 */
	public function setGameDays(\Doctrine\Common\Collections\Collection $gameDays) {
		$this->gameDays = $gameDays;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Event $event
	 * @return void
	 */
	public function setEvent(\FlorianX\FifaLiga\Domain\Model\Event $event) {
		$this->event = $event;
	}

}