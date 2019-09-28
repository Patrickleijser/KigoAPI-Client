# Piksel\Kigo\BlockOutsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBlockOut**](BlockOutsApi.md#deleteBlockOut) | **DELETE** /core/v0.8/blockouts/{id} | Cancel BlockOut type of reservation
[**getBlockOut**](BlockOutsApi.md#getBlockOut) | **GET** /core/v0.8/blockouts/{id} | Get BlockOut type of reservation
[**postBlockOut**](BlockOutsApi.md#postBlockOut) | **POST** /core/v0.8/blockouts | Create BlockOut type of reservation
[**putBlockOut**](BlockOutsApi.md#putBlockOut) | **PUT** /core/v0.8/blockouts/{id} | Update BlockOut type of reservation (full object replacement, excluding sub-resources)



## deleteBlockOut

> deleteBlockOut($id)

Cancel BlockOut type of reservation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BlockOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | BlockOut ID

try {
    $apiInstance->deleteBlockOut($id);
} catch (Exception $e) {
    echo 'Exception when calling BlockOutsApi->deleteBlockOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| BlockOut ID |

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


## getBlockOut

> \Piksel\Kigo\Model\ResourceBlockOut getBlockOut($id)

Get BlockOut type of reservation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BlockOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | BlockOut ID

try {
    $result = $apiInstance->getBlockOut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockOutsApi->getBlockOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| BlockOut ID |

### Return type

[**\Piksel\Kigo\Model\ResourceBlockOut**](../Model/ResourceBlockOut.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postBlockOut

> \Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes postBlockOut($block_out)

Create BlockOut type of reservation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BlockOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$block_out = new \Piksel\Kigo\Model\BlockOut(); // \Piksel\Kigo\Model\BlockOut | 

try {
    $result = $apiInstance->postBlockOut($block_out);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockOutsApi->postBlockOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_out** | [**\Piksel\Kigo\Model\BlockOut**](../Model/BlockOut.md)|  |

### Return type

[**\Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes**](../Model/ResourceBookingMutationResponseErrorCodes.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putBlockOut

> \Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes putBlockOut($id, $block_out)

Update BlockOut type of reservation (full object replacement, excluding sub-resources)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BlockOutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | BlockOut ID
$block_out = new \Piksel\Kigo\Model\BlockOut(); // \Piksel\Kigo\Model\BlockOut | BlockOut to be FULLY updated

try {
    $result = $apiInstance->putBlockOut($id, $block_out);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockOutsApi->putBlockOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| BlockOut ID |
 **block_out** | [**\Piksel\Kigo\Model\BlockOut**](../Model/BlockOut.md)| BlockOut to be FULLY updated |

### Return type

[**\Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes**](../Model/ResourceBookingMutationResponseErrorCodes.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

