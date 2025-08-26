# Domain holds path

```
$rfp = new Rfp('1', 'Migration système', __DIR__ . '/uploads/rfp-req-1.pdf');

echo $rfp->getRequirementsPath();
```

+ Simple, direct
– Le domaine “connaît” l’infra (chemins/URLs), rendant les changements de stockage coûteux.