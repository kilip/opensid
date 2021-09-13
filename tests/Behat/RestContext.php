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
use Behat\Gherkin\Node\PyStringNode;
use Behatch\Context\RestContext as BehatchRestContext;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouterInterface;

class RestContext implements Context
{
    private RouterInterface $router;
    private BehatchRestContext $restContext;

    public function __construct(
        RouterInterface $router
    ) {
        $this->router = $router;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->router = $container->get('router');
    }

    /**
     * @BeforeScenario
     */
    public function gatherContexts(BeforeScenarioScope $scope)
    {
        $this->restContext = $scope->getEnvironment()->getContext(BehatchRestContext::class);
    }

    public function iSendARequestTo(string $method, string $routeName, array $params = [])
    {
        $url = $this->router->generate($routeName, $params);
        $this->restContext->iSendARequestTo($method, $url);
    }

    /**
     * @Given saya mengirim permintaan :method ke route :name dengan isi:
     */
    public function iSendARequestToWithBody(string $method, string $name, PyStringNode $body)
    {
        $url = $this->router->generate($name, []);

        return $this->restContext->iSendARequestToWithBody($method, $url, $body); // TODO: Change the autogenerated stub
    }
}
