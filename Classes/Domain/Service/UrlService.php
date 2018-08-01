<?php
declare(strict_types=1);
namespace In2code\In2help\Domain\Service;

/**
 * Class UrlService
 */
class UrlService
{

    /**
     * {confarr.designPatternPid}
     * @return string
     */
    public function getUrl(): string
    {
        $this->testConfiguration();
        if ($this->getConfiguration()['domain'] !== '') {
            return $this->getUrlWithDomain();
        }
        return $this->getUrlWithoutDomain();
    }

    /**
     * @return string
     */
    protected function getUrlWithoutDomain(): string
    {
        return '..' . $this->getUrlPostfix();
    }

    /**
     * @return string
     */
    protected function getUrlWithDomain(): string
    {
        return $this->getConfiguration()['domain'] . $this->getUrlPostfix();
    }

    /**
     * @return string
     */
    protected function getUrlPostfix(): string
    {
        return '/index.php?id=' . $this->getConfiguration()['designPatternPid'];
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    protected function getConfiguration(): array
    {
        return (array)unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['in2help']);
    }

    /**
     * @return void
     */
    protected function testConfiguration()
    {
        if ((int)$this->getConfiguration()['designPatternPid'] === 0) {
            throw new \UnexpectedValueException(
                'No design pattern PID given. Check configuration in Extension Manager',
                1533111793
            );
        }
    }
}
