# Softonic\DownloadStatsApiSdk\GlobalDownloadStatsApi

All URIs are relative to *https://download-stats-v1.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGlobalDownloadStats**](GlobalDownloadStatsApi.md#getGlobalDownloadStats) | **GET** /global-download-stats/{id_program} | Get the list of the downloads statistics for a given app summarized


# **getGlobalDownloadStats**
> \Softonic\DownloadStatsApiSdk\Client\Model\GlobalDownloadStats getGlobalDownloadStats($id_program, $days_ago, $id_locale)

Get the list of the downloads statistics for a given app summarized

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\GlobalDownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_program = "id_program_example"; // string | Program identifier
$days_ago = 8.14; // float | Take into account downloads from last given days
$id_locale = "id_locale_example"; // string | Locale identifier

try {
    $result = $apiInstance->getGlobalDownloadStats($id_program, $days_ago, $id_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalDownloadStatsApi->getGlobalDownloadStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_program** | **string**| Program identifier |
 **days_ago** | **float**| Take into account downloads from last given days | [optional]
 **id_locale** | **string**| Locale identifier | [optional]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\GlobalDownloadStats**](../Model/GlobalDownloadStats.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

