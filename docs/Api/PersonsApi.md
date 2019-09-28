# Piksel\Kigo\PersonsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPerson**](PersonsApi.md#getPerson) | **GET** /core/v0.8/persons/{id} | Get Person
[**postPerson**](PersonsApi.md#postPerson) | **POST** /core/v0.8/persons | Create Person (Renter)
[**putPerson**](PersonsApi.md#putPerson) | **PUT** /core/v0.8/persons/{id} | Update Person object (full object replacement, excluding sub-resources)



## getPerson

> \Piksel\Kigo\Model\ResourcePerson getPerson($id, $options)

Get Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Person ID
$options = array('options_example'); // string[] | (Optional) Possible values: LeadSource - include LeadSource object

try {
    $result = $apiInstance->getPerson($id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Person ID |
 **options** | [**string[]**](../Model/string.md)| (Optional) Possible values: LeadSource - include LeadSource object | [optional]

### Return type

[**\Piksel\Kigo\Model\ResourcePerson**](../Model/ResourcePerson.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postPerson

> \Piksel\Kigo\Model\IdResourceInt32 postPerson($person, $options)

Create Person (Renter)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person = new \Piksel\Kigo\Model\Person(); // \Piksel\Kigo\Model\Person | 
$options = array('options_example'); // string[] | (Optional) Possible values: AutocreateLeadSource

try {
    $result = $apiInstance->postPerson($person, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->postPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person** | [**\Piksel\Kigo\Model\Person**](../Model/Person.md)|  |
 **options** | [**string[]**](../Model/string.md)| (Optional) Possible values: AutocreateLeadSource | [optional]

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


## putPerson

> putPerson($id, $person, $options)

Update Person object (full object replacement, excluding sub-resources)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Person ID
$person = new \Piksel\Kigo\Model\Person(); // \Piksel\Kigo\Model\Person | Renter (Person) to be FULLY updated
$options = array('options_example'); // string[] | (Optional) Possible values: AutocreateLeadSource

try {
    $apiInstance->putPerson($id, $person, $options);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->putPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Person ID |
 **person** | [**\Piksel\Kigo\Model\Person**](../Model/Person.md)| Renter (Person) to be FULLY updated |
 **options** | [**string[]**](../Model/string.md)| (Optional) Possible values: AutocreateLeadSource | [optional]

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

