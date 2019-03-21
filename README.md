# Icons of TV stations

Take a look at `icons` folder for all of them

## Standalone usage

```php
use Ispa\Icons\Icons;

$baseuri = 'https://raw.githack.com/ispalliance/icons/master/icons';
$icons = new Icons();

$url = $baseuri . '/128/' . $icons->getFilename('ČT 1 HD');
```

## Usage with latte

```yaml
services:
    ispa.icons.filter: Ispa\Icons\Bridges\Latte\IconUrlFilter()
    
    latte.latteFactory:
        setup:
            - addFilter(icon, @Ispa\Icons\Bridges\Latte\IconUrlFilter)
```

```latte
{var icon = 'ČT 1 HD'}
<img src="{$icon|icon:128}" alt="{$icon}">

<img src="https://raw.githack.com/ispalliance/icons/master/icons/128/ct1-hd.png" alt="ČT 1 HD">
```
