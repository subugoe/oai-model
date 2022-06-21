# OAI Model for OAI-PMH serialization

This library defines OAI-PMH models for an HTTP-interface to retrieve OAI data.

In a Symfony application, the models kann be filled programmatically like that

```php
// assume we injected some service at $this->oaiService
$identify = $this->oaiService->getIdentify($url, $oaiConfiguration);
$xml = $this->serializer->serialize($identify, 'xml');
```
