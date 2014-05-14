# Exo

Save your time writing documentation.

## Steps

### Create examples.php in your project folder

```php
<?php

$foo = new Foo(new Bar);
$baz = $foo->getBaz(47, 54);
$baz->doSomething();
```

### Build a document

Run `vendor/bin/exo build examples.php -o examples.md`
and get a nice looking Markdown document.

