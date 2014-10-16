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
class Event {

	/**
	 * @var string
	 * @Flow\Validate(type="Text")
     * @Flow\Validate(type="StringLength", options={ "minimum"=1, "maximum"=100 })
     * @ORM\Column(length=100)
	 */
	protected $name;

	/**
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Player>
	 * @ORM\ManyToMany
	 */
	protected $player;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Team>
	 * @ORM\OneToMany(mappedBy="event")
	 */
	protected $teams;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Schedule
	 * @ORM\OneToOne
	 */
	protected $schedule;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\GameMode
	 * @ORM\ManyToOne(inversedBy="events")
	 */
	protected $gameMode;


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

	/**
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Player>
	 */
	public function getPlayer() {
		return $this->player;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Player> $player
	 * @return void
	 */
	public function setPlayer(\Doctrine\Common\Collections\Collection $player) {
		$this->player = $player;
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
	 * @return \FlorianX\FifaLiga\Domain\Model\GameMode
	 */
	public function getGameMode() {
		return $this->gameMode;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\GameMode $gameMode
	 * @return void
	 */
	public function setGameMode(\FlorianX\FifaLiga\Domain\Model\GameMode $gameMode) {
		$this->gameMode = $gameMode;
	}

}