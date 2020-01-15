# DownloadStatsApiSdk
To see the project documentation go to https://download-stats-api-v2.docs.softonic.io/

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.2.0
- Package version: 2.2.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/softonic/download_stats_api_sdk.git"
    }
  ],
  "require": {
    "softonic/download_stats_api_sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DownloadStatsApiSdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Download stats identifier

try {
    $result = $apiInstance->getDownloadStat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->getDownloadStat: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | Language
$app_id = "app_id_example"; // string | App id
$country = "country_example"; // string | Country
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Take into account downloads from that date. ISO 8601 format
$page = 56; // int | Page
$per_page = 56; // int | Number of results per page

try {
    $result = $apiInstance->getDownloadStats($accept_language, $app_id, $country, $date, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->getDownloadStats: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | Language
$body = new \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStatsInput(); // \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStatsInput | 

try {
    $apiInstance->postDownloadStats($accept_language, $body);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->postDownloadStats: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | Language
$id = 56; // int | Download stats identifier
$body = new \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStatsInput(); // \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStatsInput | 

try {
    $apiInstance->putDownloadStats($accept_language, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->putDownloadStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DownloadStatsApi* | [**getDownloadStat**](docs/Api/DownloadStatsApi.md#getdownloadstat) | **GET** /download-stats/{id} | Retrieves the given downloads statistics
*DownloadStatsApi* | [**getDownloadStats**](docs/Api/DownloadStatsApi.md#getdownloadstats) | **GET** /download-stats | Get the list of the downloads statistics for a given app
*DownloadStatsApi* | [**postDownloadStats**](docs/Api/DownloadStatsApi.md#postdownloadstats) | **POST** /download-stats | Creates the downloads statistics for a given app
*DownloadStatsApi* | [**putDownloadStats**](docs/Api/DownloadStatsApi.md#putdownloadstats) | **PUT** /download-stats/{id} | Replaces the given downloads statistics
*ProgramsApi* | [**findProgram**](docs/Api/ProgramsApi.md#findprogram) | **GET** /programs | Get the list of the downloads stats ordered by downloads
*ProgramsApi* | [**getProgramPlatform**](docs/Api/ProgramsApi.md#getprogramplatform) | **GET** /programs/{id_program}/platforms/{id_platform} | Get the list of the downloads stats for a given program platform
*ProgramsApi* | [**getProgramPlatformLanguage**](docs/Api/ProgramsApi.md#getprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Get the list of the downloads stats for a given program platform language

## Documentation For Models

 - [DownloadStats](docs/Model/DownloadStats.md)
 - [DownloadStatsInput](docs/Model/DownloadStatsInput.md)
 - [ItemsPaginationModel](docs/Model/ItemsPaginationModel.md)
 - [ItemsPaginationModel2](docs/Model/ItemsPaginationModel2.md)
 - [Program](docs/Model/Program.md)
 - [ProgramPlatform](docs/Model/ProgramPlatform.md)
 - [ProgramPlatformLanguage](docs/Model/ProgramPlatformLanguage.md)
 - [TotalItemsPagePerPageTotalPagesNextModel](docs/Model/TotalItemsPagePerPageTotalPagesNextModel.md)

## Documentation For Authorization


## softonic

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author



