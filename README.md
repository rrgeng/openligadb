# OpenLigaDB

This library provides a simple wrapper to the OpenLigaDB SOAP service.

Website: https://www.openligadb.de/

## Installation
```
composer require rrgeng/openligadb
```

## Quickstart
```php
require_once '../vendor/autoload.php';

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://www.openligadb.de/Webservices/Sportsdata.asmx?WSDL',
    AbstractSoapClientBase::WSDL_CLASSMAP => \RrGeng\OpenligaDB\ClassMap::get(),
);

$get = new \RrGeng\OpenligaDB\ServiceType\Get($options);

if ($get->GetAvailLeagues(new \RrGeng\OpenligaDB\StructType\GetAvailLeagues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
```

## API Overview
A full documentation and samples can be found [here](https://github.com/OpenLigaDB/OpenLigaDB-Samples).

## Acknowledgement
https://github.com/WsdlToPhp/PackageGenerator

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
