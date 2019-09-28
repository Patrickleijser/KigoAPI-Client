# Piksel\Kigo\PropertyUnitsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUnit**](PropertyUnitsApi.md#deleteUnit) | **DELETE** /core/v0.8/properties/{id}/units/{uid} | Delete Property Unit
[**postUnit**](PropertyUnitsApi.md#postUnit) | **POST** /core/v0.8/properties/{id}/units | Create Property Unit, assigning it to a Property
[**putUnit**](PropertyUnitsApi.md#putUnit) | **PUT** /core/v0.8/properties/{id}/units/{uid} | Update Property Unit object (full object replacement, excluding sub-resources)



## deleteUnit

> deleteUnit($id, $uid)

Delete Property Unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$uid = 56; // int | Unit ID

try {
    $apiInstance->deleteUnit($id, $uid);
} catch (Exception $e) {
    echo 'Exception when calling PropertyUnitsApi->deleteUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **uid** | **int**| Unit ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postUnit

> \Piksel\Kigo\Model\ResourceProperty postUnit($id, $unit)

Create Property Unit, assigning it to a Property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$unit = new \Piksel\Kigo\Model\Unit(); // \Piksel\Kigo\Model\Unit | 

try {
    $result = $apiInstance->postUnit($id, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyUnitsApi->postUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **unit** | [**\Piksel\Kigo\Model\Unit**](../Model/Unit.md)|  |

### Return type

[**\Piksel\Kigo\Model\ResourceProperty**](../Model/ResourceProperty.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putUnit

> \Piksel\Kigo\Model\ResourceUnit putUnit($id, $uid, $unit)

Update Property Unit object (full object replacement, excluding sub-resources)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$uid = 56; // int | Unit ID
$unit = new \Piksel\Kigo\Model\Unit(); // \Piksel\Kigo\Model\Unit | Unit to be FULLY updated

try {
    $result = $apiInstance->putUnit($id, $uid, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyUnitsApi->putUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **uid** | **int**| Unit ID |
 **unit** | [**\Piksel\Kigo\Model\Unit**](../Model/Unit.md)| Unit to be FULLY updated |

### Return type

[**\Piksel\Kigo\Model\ResourceUnit**](../Model/ResourceUnit.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

