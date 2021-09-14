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
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behatch\Context\JsonContext;
use Behatch\Context\RestContext;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\Model\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Security;
use Tests\OpenSID\Testing\Concerns\InteractsWithContainer;
use Tests\OpenSID\Testing\Concerns\InteractsWithUser;
use function PHPUnit\Framework\assertNotNull;

class UserContext implements Context
{
    use InteractsWithContainer;
    use InteractsWithUser;
    private Security $security;
    private JsonContext $jsonContext;
    private MinkContext $minkContext;
    private RestContext $restContext;

    public function __construct(
        Security $security,
        ContainerInterface $container
    ) {
        $this->setContainer($container);
        $this->security = $security;
    }

    /**
     * @BeforeScenario
     */
    public function beforeScenario(BeforeScenarioScope $scope)
    {
        $this->jsonContext = $scope->getEnvironment()->getContext(JsonContext::class);
        $this->minkContext = $scope->getEnvironment()->getContext(MinkContext::class);
        $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    }

    /**
     * @Given Saya tidak memiliki user :username
     */
    public function iDonTHaveUserWith(string $username)
    {
        $this->iDonTHaveUser($username);
    }

    /**
     * @Given Saya memiliki user dengan:
     */
    public function iHaveUserWith(TableNode $node): void
    {
        $this->iHaveUser('test');
    }

    /**
     * @Given saya login sebagai admin
     */
    public function iAmLoggedInAsAdmin(): void
    {
        $user = $this->iHaveUser('admin', 'admin@example.com', UserInterface::ROLE_ADMIN);
        $this->doLogin($user);
    }

    /**
     * @Given saya login sebagai user
     * @Given saya login sebagai user :username
     */
    public function loginSebagaiUser(string $username = 'test'): void
    {
        $user = $this->iHaveUser($username);
        $this->doLogin($user);
    }

    /**
     * @Then nilai cookie :name harusnya tidak nihil
     */
    public function nilaiCookieHarusnyaTidakNihil(string $name)
    {
        $mink = $this->minkContext;
        assertNotNull($mink->getSession()->getCookie($name));
    }

    /**
     * @Given saya keluar dari aplikasi
     */
    public function danSayaKeluarDariAplikasi()
    {
        //$this->restContext->iAddHeaderEqualTo('Authorization', '');
        $this->minkContext->getSession()->setCookie('token', null);
    }

    private function doLogin(UserInterface $user)
    {
        $body = [
            'username' => $user->getUsername(),
            'password' => 'test',
        ];
        $body = json_encode($body);

        $body     = new PyStringNode([$body], 1);
        $this->restContext->iAddHeaderEqualTo('Accept', 'application/json');
        $this->restContext->iAddHeaderEqualTo('Content-Type', 'application/json');
        $this->restContext->iSendARequestTo('POST', '/login-check', $body);
        //$json     = json_decode($content, true);
        //$token    = $json['token'];
        $token = $this->minkContext->getSession()->getCookie('token');

        $this->restContext->iAddHeaderEqualTo('Authorization', 'Bearer '.$token);
    }
}
