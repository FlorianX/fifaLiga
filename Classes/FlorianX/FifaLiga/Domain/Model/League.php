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
class League {

	/**
	 * @var string
	 * @Flow\Validate(type="Text")
     * @Flow\Validate(type="StringLength", options={ "minimum"=1, "maximum"=100 })
     * @ORM\Column(length=100)
	 */
	protected $name;

	/**
	 * @ORM\OneToMany(mappedBy="league")
	 * @var \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Club>
	 */
	protected $clubs;

	/**
	 * @ORM\ManyToOne(inversedBy="leagues", cascade={"persist","merge", "detach", "refresh"})
	 * @var \FlorianX\FifaLiga\Domain\Model\Country
	 */
	protected $country;

	
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
	 * @return \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Club>
	 */
	public function getClubs() {
		return $this->clubs;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection<\FlorianX\FifaLiga\Domain\Model\Club> $clubs
	 * @return void
	 */
	public function setClubs(\Doctrine\Common\Collections\Collection $clubs) {
		$this->clubs = $clubs;
	}
	/**
	 * @return \FlorianX\FifaLiga\Domain\Model\Country $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}


}