<?php

namespace Subugoe\OaiModel\Request;

use Subugoe\OaiModel\Exception\BadArgumentException;
use Subugoe\OaiModel\Exception\BadResumptionTokenException;
use Subugoe\OaiModel\Exception\CannotDisseminateFormatException;
use Subugoe\OaiModel\Exception\IdDoesNotExistException;
use Subugoe\OaiModel\Exception\NoMetadataFormatsException;
use Subugoe\OaiModel\Exception\NoRecordsMatchException;
use Subugoe\OaiModel\Exception\NoSetHierarchyException;
use Subugoe\OaiModel\Exception\OaiException;
use Subugoe\OaiModel\Model\Identify\Identify;
use Subugoe\OaiModel\Model\ListIdentifier;
use Subugoe\OaiModel\Model\ListRecord;
use Subugoe\OaiModel\Model\MetadataFormats;
use Subugoe\OaiModel\Model\Oai;
use Subugoe\OaiModel\Model\Sets;

/**
 * @see https://www.openarchives.org/OAI/openarchivesprotocol.html
 */
interface RequestInterface
{
    public function deleteExpiredResumptionTokens(): void;

    public function error(OaiException $exception): Oai;

    /**
     * @throws BadArgumentException
     * @throws CannotDisseminateFormatException
     * @throws IdDoesNotExistException
     */
    public function getRecord(string $identifier, string $metadataPrefix);

    /**
     * @throws BadArgumentException
     */
    public function identify(): Identify;

    /**
     * @throws BadArgumentException
     * @throws BadResumptionTokenException
     * @throws CannotDisseminateFormatException
     * @throws NoRecordsMatchException
     * @throws NoSetHierarchyException
     */
    public function listIdentifiers(string $metadataPrefix, ?\DateTimeInterface $from = null, ?\DateTimeInterface $until = null, ?string $set = null): ListIdentifier;

    /**
     * @throws BadArgumentException
     * @throws IdDoesNotExistException
     * @throws NoMetadataFormatsException
     */
    public function listMetadataFormats(?string $identifier): MetadataFormats;

    /**
     * @throws BadArgumentException
     * @throws BadResumptionTokenException
     * @throws CannotDisseminateFormatException
     * @throws NoRecordsMatchException
     * @throws NoSetHierarchyException
     */
    public function listRecords(string $metadataPrefix, ?\DateTimeInterface $from = null, ?\DateTimeInterface $until = null, ?string $set = null): ListRecord;

    /**
     * @throws BadArgumentException
     * @throws BadResumptionTokenException
     * @throws NoSetHierarchyException
     */
    public function listSets(): Sets;
}
