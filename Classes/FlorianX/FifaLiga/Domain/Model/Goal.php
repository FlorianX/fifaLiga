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
class Goal {

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Player
	 * @ORM\ManyToOne(inversedBy="goals")
	 */
	protected $player;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Team
	 * @ORM\ManyToOne(inversedBy="goals")
	 */
	protected $team;

	/**
	 * @var \FlorianX\FifaLiga\Domain\Model\Game
	 * @ORM\ManyToOne(inversedBy="goals")
	 */
	protected $game;

	/**
	 * @var \DateTime
	 */
	protected $minute;

	
	/**
	 * Constructs a new Price
	 *
	 * @param \FlorianX\FifaLiga\Domain\Model\Player $player
	 * @param \FlorianX\FifaLiga\Domain\Model\Team $team
	 * @param \FlorianX\FifaLiga\Domain\Model\Game $game
	 * @param \DateTime $minute
	 * @param float $value
	 */
	public function __construct($player, $team, $game, $minute) {
		$this->player = $player;
		$this->team = $team;
		$this->game = $game;
		$this->minute = $minute;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Player
	 */
	public function getPlayer() {
		return $this->player;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Team
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * @return \DateTime
	 */
	public function getMinute() {
		return $this->minute;
	}

}