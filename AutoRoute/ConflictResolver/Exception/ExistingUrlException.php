<?php

namespace Symfony\Cmf\Bundle\RoutingAutoBundle\AutoRoute\ConflictResolver\Exception;

/**
 * Exception thrown when there is an existing URL and
 * the "ThrowException" conflict resolver is used.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class ExistingUrlException extends \Exception
{
}
