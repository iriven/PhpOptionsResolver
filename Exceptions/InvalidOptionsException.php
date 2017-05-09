<?php

/**
 * Created by PhpStorm.
 * User: sjhc1170
 * Date: 20/06/2016
 * Time: 09:41
 */

namespace Iriven\Exceptions;
/**
 * Thrown when the value of an option does not match its validation rules.
 *
 * You should make sure a valid value is passed to the option.
 *
 */
class InvalidOptionsException extends InvalidArgumentException
{
}
