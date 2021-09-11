<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\PhpIntegerMappingType;
use DoctrineMigrations\Initial\Application;
use DoctrineMigrations\Initial\Blog;
use DoctrineMigrations\Initial\Migrator;
use OpenSID\Resource\Doctrine\Migrations\AbstractMigration;
use Psr\Log\LoggerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911010716 extends AbstractMigration
{
    /**
     * @var array<array-key,class-string>
     */
    private array $migratorsClass = [
        Application::class,
        Blog::class
    ];

    /**
     * @var Migrator[]
     */
    private array $migrators;

    public function __construct(Connection $connection, LoggerInterface $logger)
    {
        parent::__construct($connection, $logger);

        foreach($this->migratorsClass as $class){
            $migrator = new $class($this);
            assert($migrator instanceof Migrator);
            $this->migrators[] = $migrator;
        }
    }

    public function getDescription(): string
    {
        return 'Initial Migration';
    }

    public function up(Schema $schema): void
    {
        $this->doRun('up', $schema);
    }

    public function down(Schema $schema): void
    {
        $this->doRun('down', $schema);
    }

    private function doRun(string $method, Schema $schema): void
    {
        /** @var AbstractMigration $migrator */
        foreach($this->migrators as $migrator){
            foreach($migrator->getMethods() as $methodName){
                $name = $methodName.ucfirst($method);
                call_user_func_array([$migrator, $name], [$schema]);
            }
        }
    }


}
