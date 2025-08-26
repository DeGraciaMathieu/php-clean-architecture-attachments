# Storage service abstraction
 
```php
$requirements = new LocalFileReference('rfp-req-1.pdf', 'application/pdf');

$rfp = new Rfp('1', $requirements);

$fileService = new LocalFileService();

echo $fileService->resolve($rfp->getRequirementDocument());
```