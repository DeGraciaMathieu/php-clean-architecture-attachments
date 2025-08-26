# Domain holds ID

```php
$rfp = new Rfp('1', 'rfp-req-1.pdf');

$resolver = new LocalPathResolver(__DIR__ . '/uploads');

echo $resolver->resolve($rfp->getRequirementsDocumentId());
```
