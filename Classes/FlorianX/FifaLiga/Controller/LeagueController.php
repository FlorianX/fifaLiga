<?php
namespace FlorianX\FifaLiga\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FlorianX.FifaLiga".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use FlorianX\FifaLiga\Domain\Model\League;

class LeagueController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \FlorianX\FifaLiga\Domain\Repository\LeagueRepository
	 */
	protected $leagueRepository;

	/**
	 * @Flow\Inject
	 * @var \FlorianX\FifaLiga\Domain\Repository\CountryRepository
	 */
	protected $countryRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('leagues', $this->leagueRepository->findAll());
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $league
	 * @return void
	 */
	public function showAction(League $league) {
		$this->view->assign('league', $league);
	}

	/**
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('countries', $this->countryRepository->findAll());
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $newLeague
	 * @return void
	 */
	public function createAction(League $newLeague) {
		$this->leagueRepository->add($newLeague);
		$this->addFlashMessage('Created a new league.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $league
	 * @return void
	 */
	public function editAction(League $league) {
		$this->view->assign('countries', $this->countryRepository->findAll());
		$this->view->assign('league', $league);
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $league
	 * @return void
	 */
	public function updateAction(League $league) {
		$this->leagueRepository->update($league);
		$this->addFlashMessage('Updated the league.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\League $league
	 * @return void
	 */
	public function deleteAction(League $league) {
		$this->leagueRepository->remove($league);
		$this->addFlashMessage('Deleted a league.');
		$this->redirect('index');
	}

}