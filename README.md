# Mundipagg One PHP Library

## Composer

    $ composer require mundipagg/mundipagg-one-php

## Manual installation

```php
require __DIR__ . '/mundipagg-one-php/init.php';
```


## Simulator rules by amount

### Authorization

* `<= $ 1.050,00 -> Authorized`
* `>= $ 1.050,01 && < $ 1.051,71 -> Timeout`
* `>= $ 1.500,00 -> Not Authorized`
 
### Capture

* `<= $ 1.050,00 -> Captured`
* `>= $ 1.050,01 -> Not Captured`
 
### Cancellation

* `<= $ 1.050,00 -> Cancelled`
* `>= $ 1.050,01 -> Not Cancelled`
 
### Refund
* `<= $ 1.050,00 -> Refunded`
* `>= $ 1.050,01 -> Not Refunded`

## Documentation

  http://docs.mundipagg.com
  
## More Information
Access the SDK Wiki [HERE](https://github.com/mundipagg/mundipagg-one-php/wiki).

## Work with us!

Gostou da nossa SDK? Estamos sempre em busca de gente boa pra codar!

Manda email (vagas@mundipagg.com) ou dá uma olhada nas [vagas](https://github.com/mundipagg/vagas) e vem conhecer a gente! :smile:

Dev queremos você!

Did you like our SDK? We're always looking for good coders!

Send us an email (vagas@mundipagg.com) or take a look at our [jobs](https://github.com/mundipagg/vagas) page and come meet us! :smile:

![We want you](https://raw.githubusercontent.com/mundipagg/vagas/master/we_want_you.jpg)
