# Softonic\DownloadStatsApiSdk\ProgramsApi

All URIs are relative to *https://download-stats-v1.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProgramPlatform**](ProgramsApi.md#getProgramPlatform) | **GET** /programs/{id_program}/platforms/{id_platform} | Get the list of the downloads stats for a given program platform
[**getProgramPlatformLocale**](ProgramsApi.md#getProgramPlatformLocale) | **GET** /programs/{id_program}/platforms/{id_platform}/locales/{id_locale} | Get the list of the downloads stats for a given program platform locale


# **getProgramPlatform**
> \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform getProgramPlatform($id_program, $id_platform, $days_ago)

Get the list of the downloads stats for a given program platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_program = "id_program_example"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$days_ago = 8.14; // float | Take into account downloads from last given days

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
 **days_ago** | **float**| Take into account downloads from last given days | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform**](../Model/ProgramPlatform.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramPlatformLocale**
> \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLocale getProgramPlatformLocale($id_program, $id_platform, $id_locale, $days_ago)

Get the list of the downloads stats for a given program platform locale

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_program = "id_program_example"; // string | Program identifier
$id_platform = "id_platform_example"; // string | Platform identifier
$id_locale = "id_locale_example"; // string | Locale identifier
$days_ago = 8.14; // float | Take into account downloads from last given days

try {
    $result = $apiInstance->getProgramPlatformLocale($id_program, $id_platform, $id_locale, $days_ago);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramPlatformLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program identifier |
 **id_platform** | **string**| Platform identifier |
 **id_locale** | **string**| Locale identifier |
 **days_ago** | **float**| Take into account downloads from last given days | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLocale**](../Model/ProgramPlatformLocale.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

