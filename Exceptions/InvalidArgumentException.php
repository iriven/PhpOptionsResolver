<?php
/**
 * Created by PhpStorm.
 * User: sjhc1170
 * Date: 20/06/2016
 * Time: 09:41
 */

namespace Iriven\Exceptions;
use Iriven\Interfaces\ExceptionInterface;
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
}
