# Piksel\Kigo\PropertiesApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProperty**](PropertiesApi.md#getProperty) | **GET** /core/v0.8/properties/{id} | Get Property
[**postProperty**](PropertiesApi.md#postProperty) | **POST** /core/v0.8/properties | Creates Property
[**propertiesIndex**](PropertiesApi.md#propertiesIndex) | **GET** /core/v0.8/properties | List all Properties
[**putProperty**](PropertiesApi.md#putProperty) | **PUT** /core/v0.8/properties/{id} | Update Property object (full object replacement, excluding sub-resources)



## getProperty

> \Piksel\Kigo\Model\ResourceProperty getProperty($id, $options)

Get Property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$options = array('options_example'); // string[] | (Optional) Possible values:               PrimaryImage - include primary Image of the Property               Media - include all media of the Property               Amenities - include Amenities of the Property               Visibility - include fields regarding the visibility of the Property               Rates - include raw nightly Rates of the Property               Reviews - include Reviews of the Property               Localized - include data in the locale specific to the apikey. Does a best effort to serve resources (fallback to other languages). DEPRECATED               Descriptions - include Descriptions in ALL locales               Units - include Units of the Property               CategoryType - include detailed Category of the Property               Solution - include Solution of the Property               Owners - include Owner of the Units of the Property               Availability - Deprecated

try {
    $result = $apiInstance->getProperty($id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->getProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **options** | [**string[]**](../Model/string.md)| (Optional) Possible values:               PrimaryImage - include primary Image of the Property               Media - include all media of the Property               Amenities - include Amenities of the Property               Visibility - include fields regarding the visibility of the Property               Rates - include raw nightly Rates of the Property               Reviews - include Reviews of the Property               Localized - include data in the locale specific to the apikey. Does a best effort to serve resources (fallback to other languages). DEPRECATED               Descriptions - include Descriptions in ALL locales               Units - include Units of the Property               CategoryType - include detailed Category of the Property               Solution - include Solution of the Property               Owners - include Owner of the Units of the Property               Availability - Deprecated | [optional]

### Return type

[**\Piksel\Kigo\Model\ResourceProperty**](../Model/ResourceProperty.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postProperty

> \Piksel\Kigo\Model\IdResourceInt32 postProperty($property, $options)

Creates Property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property = new \Piksel\Kigo\Model\Property(); // \Piksel\Kigo\Model\Property | 
$options = array('options_example'); // string[] | Property options

try {
    $result = $apiInstance->postProperty($property, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->postProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property** | [**\Piksel\Kigo\Model\Property**](../Model/Property.md)|  |
 **options** | [**string[]**](../Model/string.md)| Property options | [optional]

### Return type

[**\Piksel\Kigo\Model\IdResourceInt32**](../Model/IdResourceInt32.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## propertiesIndex

> \Piksel\Kigo\Model\ResourceListListPropertyListElement propertiesIndex($include_deleted)

List all Properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_deleted = false; // bool | Whether Properties marked as Deleted (status -1) should be included in the search results. Notice that those property cannot be fetched via GET

try {
    $result = $apiInstance->propertiesIndex($include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_deleted** | **bool**| Whether Properties marked as Deleted (status -1) should be included in the search results. Notice that those property cannot be fetched via GET | [optional] [default to false]

### Return type

[**\Piksel\Kigo\Model\ResourceListListPropertyListElement**](../Model/ResourceListListPropertyListElement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putProperty

> \Piksel\Kigo\Model\ResourceProperty putProperty($id, $property, $options)

Update Property object (full object replacement, excluding sub-resources)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$property = new \Piksel\Kigo\Model\Property(); // \Piksel\Kigo\Model\Property | Property to be FULLY updated
$options = array('options_example'); // string[] | Property options

try {
    $result = $apiInstance->putProperty($id, $property, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->putProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **property** | [**\Piksel\Kigo\Model\Property**](../Model/Property.md)| Property to be FULLY updated |
 **options** | [**string[]**](../Model/string.md)| Property options | [optional]

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

