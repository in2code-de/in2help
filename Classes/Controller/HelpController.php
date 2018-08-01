<?php
declare(strict_types=1);
namespace In2code\In2help\Controller;

use In2code\In2help\Domain\Service\UrlService;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class HelpController
 */
class HelpController extends ActionController
{

    /**
     * @return void
     */
    public function indexAction()
    {
        /** @var UrlService $urlService */
        $urlService = $this->objectManager->get(UrlService::class);
        $this->view->assign('url', $urlService->getUrl());
    }
}
