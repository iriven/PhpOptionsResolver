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
 * Thrown when trying to read an option outside of or write it inside of
 * {@link \Iriven\PhpOptionsResolver::resolve()}.
 *
 */
class AccessException extends \LogicException implements ExceptionInterface
{

}
