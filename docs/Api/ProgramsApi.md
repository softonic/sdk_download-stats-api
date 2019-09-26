# Softonic\DownloadStatsApiSdk\ProgramsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProgram**](ProgramsApi.md#findprogram) | **GET** /programs | Get the list of the downloads stats ordered by downloads
[**getProgramPlatform**](ProgramsApi.md#getprogramplatform) | **GET** /programs/{id_program}/platforms/{id_platform} | Get the list of the downloads stats for a given program platform
[**getProgramPlatformLanguage**](ProgramsApi.md#getprogramplatformlanguage) | **GET** /programs/{id_program}/platforms/{id_platform}/languages/{id_language} | Get the list of the downloads stats for a given program platform language

# **findProgram**
> \Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2 findProgram($days_ago, $min_downloads, $max_downloads, $page, $per_page)

Get the list of the downloads stats ordered by downloads

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$days_ago = 56; // int | Take into account downloads from last given days
$min_downloads = 56; // int | Take into account programs with at least the given downloads
$max_downloads = 56; // int | Take into account programs with not more than the given downloads
$page = 56; // int | Page
$per_page = 56; // int | Number of results per page

try {
    $result = $apiInstance->findProgram($days_ago, $min_downloads, $max_downloads, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->findProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **days_ago** | **int**| Take into account downloads from last given days | [optional]
 **min_downloads** | **int**| Take into account programs with at least the given downloads | [optional]
 **max_downloads** | **int**| Take into account programs with not more than the given downloads | [optional]
 **page** | **int**| Page | [optional]
 **per_page** | **int**| Number of results per page | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2**](../Model/ItemsPaginationModel2.md)

### Authorization

[softonic](../../README.md#softonic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramPlatform**
> \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform getProgramPlatform($id_program, $id_platform, $days_ago)

Get the list of the downloads stats for a given program platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$days_ago = new \Softonic\DownloadStatsApiSdk\Client\Model\BigDecimal(); // BigDecimal | Take into account downloads from last given days

try {
    $result = $apiInstance->getProgramPlatform($id_program, $id_platform, $days_ago);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramPlatform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **days_ago** | **BigDecimal**| Take into account downloads from last given days | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform**](../Model/ProgramPlatform.md)

### Authorization

[softonic](../../README.md#softonic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramPlatformLanguage**
> \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage getProgramPlatformLanguage($id_program, $id_platform, $id_language, $days_ago)

Get the list of the downloads stats for a given program platform language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: softonic
$config = Softonic\DownloadStatsApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadStatsApiSdk\Client\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_program = "id_program_example"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_language = "id_language_example"; // string | Language identifier
$days_ago = new \Softonic\DownloadStatsApiSdk\Client\Model\BigDecimal(); // BigDecimal | Take into account downloads from last given days

try {
    $result = $apiInstance->getProgramPlatformLanguage($id_program, $id_platform, $id_language, $days_ago);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramPlatformLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_language** | **string**| Language identifier |
 **days_ago** | **BigDecimal**| Take into account downloads from last given days | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage**](../Model/ProgramPlatformLanguage.md)

### Authorization

[softonic](../../README.md#softonic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

