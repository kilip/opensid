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
     * @param $value
     *
     * @throws ConversionException
     *
     * @return int
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
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
     * @return int
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (null === $value) {
            return $value;
        }

        return (int) $value;
    }

    /**
     * Gets the SQL declaration snippet for a field of this type.
     *
     * @param array                                     $fieldDeclaration the field declaration
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform         the currently used database platform
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        if ( ! $platform instanceof MySqlPlatform) {
            throw new \Exception('This type only support mysql');
        }

        $unsigned = $fieldDeclaration['unsigned'] ? ' UNSIGNED' : '';

        if (true === $fieldDeclaration['length']) {
            $sql = sprintf('tinyint(%d)', $fieldDeclaration['length']);
        } else {
            $sql = 'tinyint';
        }

        return $sql.$unsigned;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'tinyint';
    }

    /**
     * Gets the name of this type.
     *
     * @return string
     */
    public function getName()
    {
        return self::TYPE_NAME;
    }

    public function getBindingType(): int
    {
        return ParameterType::INTEGER;
    }
}
