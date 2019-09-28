# Piksel\Kigo\ReferenceDataApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**amenitiesIndex**](ReferenceDataApi.md#amenitiesIndex) | **GET** /core/v0.8/propertyAmenities | Get all PropertyAmenities available to the Solution
[**categoriesIndex**](ReferenceDataApi.md#categoriesIndex) | **GET** /core/v0.8/propertyCategories | Get all PropertyCategories available to the Solution



## amenitiesIndex

> \Piksel\Kigo\Model\ResourceListListPropertyAmenity amenitiesIndex()

Get all PropertyAmenities available to the Solution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->amenitiesIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->amenitiesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\Model\ResourceListListPropertyAmenity**](../Model/ResourceListListPropertyAmenity.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## categoriesIndex

> \Piksel\Kigo\Model\ResourceListListPropertyCategory categoriesIndex()

Get all PropertyCategories available to the Solution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->categoriesIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->categoriesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\Model\ResourceListListPropertyCategory**](../Model/ResourceListListPropertyCategory.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

