<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Resource\Doctrine\Type;

use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\Type;

class TinyIntType extends Type
{
    public const TYPE_NAME = 'tinyint';

    /**
     * @param mixed|null $value
     *
     * @throws ConversionException
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?int
    {
        if (null === $value) {
            return null;
        }

        if ( ! \is_int($value)) {
            throw new ConversionException('Expected integer, got '.\gettype($value));
        }

        return $value;
    }

    /**
     * @param mixed|null $value
     */
    public function convertToPHPValue($value, AbstractPlatform $platform): ?int
    {
        if (null === $value) {
            return null;
        }

        return (int) $value;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param array            $column   the field declaration
     * @param AbstractPlatform $platform the currently used database platform
     *
     * @throws \Exception
     * @psalm-suppress InvalidScalarArgument
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        if ( ! $platform instanceof MySqlPlatform) {
            throw new \Exception('This type only support mysql');
        }

        $unsigned = $column['unsigned'] ? ' UNSIGNED' : '';

        if (true === $column['length']) {
            $sql = sprintf('tinyint(%d)', $column['length']);
        } else {
            $sql = 'tinyint';
        }

        return $sql.$unsigned;
    }

    public function __toString(): string
    {
        return 'tinyint';
    }

    /**
     * Gets the name of this type.
     */
    public function getName(): string
    {
        return self::TYPE_NAME;
    }

    public function getBindingType(): int
    {
        return ParameterType::INTEGER;
    }
}
