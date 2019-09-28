# Piksel\Kigo\PropertyDescriptionsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDescriptions**](PropertyDescriptionsApi.md#deleteDescriptions) | **DELETE** /core/v0.8/properties/{id}/descriptions/{locale} | Remove Property Descriptions from a given Locale supported by the Solution
[**getAllPropertyDescriptions**](PropertyDescriptionsApi.md#getAllPropertyDescriptions) | **GET** /core/v0.8/properties/{id}/descriptions | Get all available Property Descriptions (in all available locales)
[**getDescription**](PropertyDescriptionsApi.md#getDescription) | **GET** /core/v0.8/properties/{id}/descriptions/{locale} | Get Property Descriptions in a given Locale supported by the Solution
[**postDescriptions**](PropertyDescriptionsApi.md#postDescriptions) | **POST** /core/v0.8/properties/{id}/descriptions/{locale} | Create (or Update) Property Descriptions in a given Locale supported by the Solution



## deleteDescriptions

> deleteDescriptions($id, $locale)

Remove Property Descriptions from a given Locale supported by the Solution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$locale = 'locale_example'; // string | 

try {
    $apiInstance->deleteDescriptions($id, $locale);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->deleteDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **locale** | **string**|  |

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


## getAllPropertyDescriptions

> \Piksel\Kigo\Model\ResourceListDictionaryStringPropertyDescriptions getAllPropertyDescriptions($id)

Get all available Property Descriptions (in all available locales)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID

try {
    $result = $apiInstance->getAllPropertyDescriptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->getAllPropertyDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |

### Return type

[**\Piksel\Kigo\Model\ResourceListDictionaryStringPropertyDescriptions**](../Model/ResourceListDictionaryStringPropertyDescriptions.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDescription

> \Piksel\Kigo\Model\ResourcePropertyDescriptions getDescription($id, $locale)

Get Property Descriptions in a given Locale supported by the Solution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$locale = 'locale_example'; // string | Locale (language code)

try {
    $result = $apiInstance->getDescription($id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->getDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **locale** | **string**| Locale (language code) |

### Return type

[**\Piksel\Kigo\Model\ResourcePropertyDescriptions**](../Model/ResourcePropertyDescriptions.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postDescriptions

> postDescriptions($id, $locale, $descriptions)

Create (or Update) Property Descriptions in a given Locale supported by the Solution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$locale = 'locale_example'; // string | 
$descriptions = new \Piksel\Kigo\Model\PropertyDescriptions(); // \Piksel\Kigo\Model\PropertyDescriptions | 

try {
    $apiInstance->postDescriptions($id, $locale, $descriptions);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->postDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **locale** | **string**|  |
 **descriptions** | [**\Piksel\Kigo\Model\PropertyDescriptions**](../Model/PropertyDescriptions.md)|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

