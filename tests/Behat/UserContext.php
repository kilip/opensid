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
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behatch\Context\JsonContext;
use Doctrine\Persistence\ManagerRegistry;
use OpenSID\Application\Model\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Security;
use Tests\OpenSID\Testing\Concerns\InteractsWithContainer;
use Tests\OpenSID\Testing\Concerns\InteractsWithUser;

class UserContext implements Context
{
    use InteractsWithContainer;
    use InteractsWithUser;
    private Security $security;
    private JsonContext $jsonContext;
    private MinkContext $minkContext;

    public function __construct(
        ManagerRegistry $registry,
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
    }

    /**
     * @Given I don't have user with username :username
     */
    public function iDonTHaveUserWith(string $username)
    {
        $this->iDonTHaveUser($username);
    }

    /**
     * @Given I have user with:
     */
    public function iHaveUserWith(TableNode $node): void
    {
        $this->iHaveUser('test');
    }
}
