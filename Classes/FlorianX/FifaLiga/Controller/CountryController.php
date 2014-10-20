<?php
namespace FlorianX\FifaLiga\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FlorianX.FifaLiga".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use FlorianX\FifaLiga\Domain\Model\Country;

class CountryController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \FlorianX\FifaLiga\Domain\Repository\CountryRepository
	 */
	protected $countryRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('countries', $this->countryRepository->findAll());
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $country
	 * @return void
	 */
	public function showAction(Country $country) {
		$this->view->assign('country', $country);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $newCountry
	 * @return void
	 */
	public function createAction(Country $newCountry) {
		$this->countryRepository->add($newCountry);
		$this->addFlashMessage('Created a new country.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $country
	 * @return void
	 */
	public function editAction(Country $country) {
		$this->view->assign('country', $country);
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $country
	 * @return void
	 */
	public function updateAction(Country $country) {
		$this->countryRepository->update($country);
		$this->addFlashMessage('Updated the country.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Country $country
	 * @return void
	 */
	public function deleteAction(Country $country) {
		$this->countryRepository->remove($country);
		$this->addFlashMessage('Deleted a country.');
		$this->redirect('index');
	}

}