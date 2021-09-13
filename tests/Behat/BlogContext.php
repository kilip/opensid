<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Behat;

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tests\OpenSID\Testing\Concerns\InteractsWithBlog;

class BlogContext implements Context
{
    use InteractsWithBlog;

    private RestContext $restContext;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
    }

    /**
     * @BeforeScenario
     */
    public function gatherContexts(BeforeScenarioScope $scope)
    {
        $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    }

    /**
     * @Given saya mengirim permintaan api ke artikel :judul
     */
    public function apiArtikel(string $judul): void
    {
        $artikel     = $this->sayaMemilikiArtikelBerjudul($judul);
        $restContext = $this->restContext;
        $restContext->iSendARequestTo('GET', 'api_artikels_get_item', [
            'id' => $artikel->getId(),
        ]);
    }

    /**
     * @Given saya mengirim permintaan api ke daftar artikel
     */
    public function apiListArtikel(): void
    {
        $restContext = $this->restContext;
        $restContext->iSendARequestTo('GET', 'api_artikels_get_collection');
    }
}
