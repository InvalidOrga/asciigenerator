# ASCII Generator

## Installing
```shell
composer require austriannoah/asciigenerator
```

or just adding this into your ``composer.json`` file:
```json
{
  "require": {
    "austriannoah/asciigenerator": "dev-main"
  }
}
```

## Usage
```php

use Ascii;

class YourClass {

    public function helloworld(): void {
        $ascii = new Ascii();
        $texto = $ascii->createAsciiText("Hello, World!");
        echo $texto;
    }

}

```

## Support

you can contact me over Discord: `eynoah`
