# Storage service abstraction
 
```php
$rfp = new Rfp('1', 'rfp-req-1.pdf');

$pathResolver = new LocalPathResolver();

$service = new RfpService($pathResolver);

$service->uploadRequirements($rfp, '');

echo $service->requirementsReference($rfp);
```