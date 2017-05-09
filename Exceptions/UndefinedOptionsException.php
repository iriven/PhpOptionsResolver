<?php

/**
 * Created by PhpStorm.
 * User: sjhc1170
 * Date: 20/06/2016
 * Time: 09:41
 */

namespace Iriven\Exceptions;
/**
 * Exception thrown when an undefined option is passed.
 *
 * You should remove the options in question from your code or define them
 * beforehand.
 *
 */
class UndefinedOptionsException extends InvalidArgumentException
{
}
