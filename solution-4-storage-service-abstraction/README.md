# Storage service abstraction
 
```php
$requirements = new LocalFileReference('rfp-req-1.pdf', 'requirements', 'application/pdf');

$rfp = new Rfp('1', $requirements);

$resolver = new LocalPathResolver();

echo $resolver->resolve($rfp->getRequirementDocument());
```