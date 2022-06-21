# OAI Model for OAI-PMH serialization

This library defines OAI-PMH models for an HTTP-interface to retrieve OAI data.

In a Symfony application, the models kann be filled programmatically like that for the `Identify`-verb:

```php
// assume we injected some service at $this->oaiService
$identify = new Identify();
$identification = new Identification();
$description = new Description();
$oaiIdentifier = new OaiIdentifier();
$oaiIdentifierTags = $oaiConfiguration['oai_identifier'];

$oaiIdentifier
    ->setNamespace($oaiIdentifierTags['xmlns'])
    ->setXsi($oaiIdentifierTags['xmlns:xsi'])
    ->setSchemaLocation($oaiIdentifierTags['xsi:schemaLocation'])
    ->setScheme($oaiIdentifierTags['scheme'])
    ->setDelimiter($oaiIdentifierTags['delimiter'])
    ->setRepositoryIdentifier($oaiIdentifierTags['repositoryIdentifier'])
    ->setSampleIdentifier($oaiIdentifierTags['sampleIdentifier']);

$description->setOaiIdentifier($oaiIdentifier);
$identificationTags = $oaiConfiguration['identification_tags'];
$oaiRequest = (new \Subugoe\OaiModel\Model\Oai\Request())
    ->setUrl($url)
    ->setVerb('Identify');
$identify
    ->setDate(new DateTimeImmutable())
    ->setRequest($oaiRequest);
$identification
    ->setAdminEmail($identificationTags['admin_email'])
    ->setBaseUrl($identificationTags['base_url'])
    ->setDeletedRecord($identificationTags['deleted_record'])
    ->setGranularity($identificationTags['granularity'])
    ->setProtocolVersion($identificationTags['protocol_version'])
    ->setRepositoryName($identificationTags['repository_name'])
    ->setEarliestDatestamp(new DateTimeImmutable('1998-03-01T00:00:00Z'))
    ->setDescription($description);

$identify->setIdentify($identification);
$xml = $this->serializer->serialize($identify, 'xml');
```
