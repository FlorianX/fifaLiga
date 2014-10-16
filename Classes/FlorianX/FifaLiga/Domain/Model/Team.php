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
class Team {

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Player>
	 * @ORM\ManyToMany
	 */
	protected $player;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Match
	 * @ORM\Column(name="t_match")
	 * @ORM\ManyToOne(inversedBy="teams")
	 */
	protected $match;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Goal>
	 * @ORM\OneToMany(mappedBy="team")
	 */
	protected $goals;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Club
	 * @ORM\OneToOne
	 */
	protected $club;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Event
	 * @ORM\Column(name="t_event")
	 * @ORM\ManyToOne(inversedBy="teams")
	 */
	protected $event;

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
	 * @return \FlorianX\FifaLiga\Domain\Model\Match
	 */
	public function getMatch() {
		return $this->match;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Match $match
	 * @return void
	 */
	public function setMatch(\FlorianX\FifaLiga\Domain\Model\Match $match) {
		$this->match = $match;
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
	 * @return \FlorianX\FifaLiga\Domain\Model\Club
	 */
	public function getClub() {
		return $this->club;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $club
	 * @return void
	 */
	public function setClub(\FlorianX\FifaLiga\Domain\Model\Club $club) {
		$this->club = $club;
	}
	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Event $event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Event $event
	 */
	public function setEvent($event) {
		$this->event = $event;
	}


}