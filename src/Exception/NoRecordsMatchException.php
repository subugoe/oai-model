<?php

declare(strict_types=1);

namespace Subugoe\OaiModel\Exception;

/**
 * The combination of the values of the from, until, set and metadataPrefix arguments results in an empty list.
 */
class NoRecordsMatchException extends OaiException
{
}
