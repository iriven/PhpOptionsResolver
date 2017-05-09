<?php

/**
 * Created by PhpStorm.
 * User: sjhc1170
 * Date: 20/06/2016
 * Time: 09:41
 */

namespace Iriven\Exceptions;
use Iriven\Interfaces\ExceptionInterface;

/**
 * Thrown when trying to read an option that has no value set.
 *
 * When accessing optional options from within a lazy option or normalizer you should first
 * check whether the optional option is set. You can do this with `isset($options['optional'])`.
 * In contrast to the {@link UndefinedOptionsException}, this is a runtime exception that can
 * occur when evaluating lazy options.
 *
 * @author Tobias Schultze <http://tobion.de>
 */
class NoSuchOptionException extends \OutOfBoundsException implements ExceptionInterface
{
}
