# A very simple & lightweight session manager for PHP. 

I find array accessing in HTML ugly. This package was created through the pain of handling sessions in WordPress templates.

## Usage

```php
session_start();

require_once "vendor/autoload.php";

session_has('username'); // false

session_set('username', 'joe');

session_has('username'); // true

session_get('username'); // 'joe'
```

Alternatively, you can directly access the static class methods:

## Coming soon
- Flash session messages