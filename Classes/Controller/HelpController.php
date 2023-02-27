<?php
declare(strict_types=1);
namespace In2code\In2help\Controller;

use In2code\In2help\Domain\Service\UrlService;
use Psr\Http\Message\ResponseInterface;
use Throwable;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class HelpController
 */
class HelpController extends ActionController
{
    /**
     * @return void
     */
    public function indexAction(): ResponseInterface
    {
        $urlService = GeneralUtility::makeInstance(UrlService::class);
        try {
            $url = $urlService->getUrl();
            $this->view->assign('url', $url);
        } catch (Throwable $exception) {
            $this->view->assign('error', ['message' => $exception->getMessage(), 'code' => $exception->getCode()]);
        }
        return $this->htmlResponse();
    }
}
