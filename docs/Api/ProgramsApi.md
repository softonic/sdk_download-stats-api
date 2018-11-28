# Softonic\DownloadStatsApiSdk\ProgramsApi

All URIs are relative to *https://download-stats-v1.eu-west.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findProgram**](ProgramsApi.md#findProgram) | **GET** /programs | Get the list of the downloads stats ordered by downloads


# **findProgram**
> \Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2 findProgram($days_ago, $min_downloads, $max_downloads, $page, $per_page)

Get the list of the downloads stats ordered by downloads

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$days_ago = 8.14; // float | Take into account downloads from last given days
$min_downloads = 8.14; // float | Take into account programs with at least the given downloads
$max_downloads = 8.14; // float | Take into account programs with not more than the given downloads
$page = 1; // int | Page
$per_page = 10; // int | Number of results per page

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
 **days_ago** | **float**| Take into account downloads from last given days | [optional]
 **min_downloads** | **float**| Take into account programs with at least the given downloads | [optional]
 **max_downloads** | **float**| Take into account programs with not more than the given downloads | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **per_page** | **int**| Number of results per page | [optional] [default to 10]

### Return type

[**\Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2**](../Model/ItemsPaginationModel2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

