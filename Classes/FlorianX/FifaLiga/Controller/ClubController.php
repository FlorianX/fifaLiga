<?php
namespace FlorianX\FifaLiga\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "FlorianX.FifaLiga".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use FlorianX\FifaLiga\Domain\Model\Club;

class ClubController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \FlorianX\FifaLiga\Domain\Repository\ClubRepository
	 */
	protected $clubRepository;

	/**
	 * @Flow\Inject
	 * @var \FlorianX\FifaLiga\Domain\Repository\LeagueRepository
	 */
	protected $leagueRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('clubs', $this->clubRepository->findAll());
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $club
	 * @return void
	 */
	public function showAction(Club $club) {
		$this->view->assign('club', $club);
	}

	/**
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('leagues', $this->leagueRepository->findAll());
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $newClub
	 * @return void
	 */
	public function createAction(Club $newClub) {
		$this->clubRepository->add($newClub);
		$this->addFlashMessage('Created a new club.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $club
	 * @return void
	 */
	public function editAction(Club $club) {
		$this->view->assign('leagues', $this->leagueRepository->findAll());
		$this->view->assign('club', $club);
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $club
	 * @return void
	 */
	public function updateAction(Club $club) {
		$this->clubRepository->update($club);
		$this->addFlashMessage('Updated the club.');
		$this->redirect('index');
	}

	/**
	 * @param \FlorianX\FifaLiga\Domain\Model\Club $club
	 * @return void
	 */
	public function deleteAction(Club $club) {
		$this->clubRepository->remove($club);
		$this->addFlashMessage('Deleted a club.');
		$this->redirect('index');
	}

}