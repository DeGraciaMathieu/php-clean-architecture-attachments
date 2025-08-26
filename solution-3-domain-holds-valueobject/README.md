# Domain holds Value Object 

```php
$requirements = new FileReference('rfp-req-1.pdf', 'requirements', 'application/pdf');

$rfp = new Rfp('1', $requirements);

$resolver = new LocalPathResolver();

echo $resolver->resolve($rfp->requirements());
````