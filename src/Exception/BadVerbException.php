<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Exception;

/**
 * Value of the verb argument is not a legal OAI-PMH verb, the verb argument is missing, or the verb argument is repeated.
 */
class BadVerbException extends OaiException
{
}
