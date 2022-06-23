<?php
declare(strict_types=1);
namespace In2code\In2help\Domain\Service;

use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use UnexpectedValueException;

/**
 * Class UrlService
 */
class UrlService
{
    /**
     * @return string
     * @throws ExtensionConfigurationExtensionNotConfiguredException
     * @throws ExtensionConfigurationPathDoesNotExistException
     * @throws SiteNotFoundException
     */
    public function getUrl(): string
    {
        $this->testConfiguration();
        $pageIdentifier = (int)$this->getConfiguration()['helpPid'];
        $siteFinder = GeneralUtility::makeInstance(SiteFinder::class);
        $site = $siteFinder->getSiteByPageId($pageIdentifier);
        $uri = $site->getRouter()->generateUri($pageIdentifier);
        return $uri->__toString();
    }

    /**
     * @return array
     * @throws ExtensionConfigurationExtensionNotConfiguredException
     * @throws ExtensionConfigurationPathDoesNotExistException
     */
    protected function getConfiguration(): array
    {
        return (array)GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('in2help');
    }

    /**
     * @return void
     * @throws ExtensionConfigurationExtensionNotConfiguredException
     * @throws ExtensionConfigurationPathDoesNotExistException
     */
    protected function testConfiguration()
    {
        if ((int)($this->getConfiguration()['helpPid'] ?? 0) === 0) {
            throw new UnexpectedValueException(
                'No help PID given. Check configuration in Extension Manager',
                1533111793
            );
        }
    }
}
