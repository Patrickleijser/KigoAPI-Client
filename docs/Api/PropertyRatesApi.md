# Piksel\Kigo\PropertyRatesApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRates**](PropertyRatesApi.md#getRates) | **GET** /core/v0.8/properties/{id}/rates | Get Property Rates (within a range of dates)
[**postRates**](PropertyRatesApi.md#postRates) | **POST** /core/v0.8/properties/{id}/rates | Update Property Rates



## getRates

> \Piksel\Kigo\Model\PropertyRates getRates($id, $start_date, $end_date)

Get Property Rates (within a range of dates)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Required, Date-only
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Required, Inclusive, Date-only

try {
    $result = $apiInstance->getRates($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyRatesApi->getRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **start_date** | **\DateTime**| Required, Date-only | [optional]
 **end_date** | **\DateTime**| Required, Inclusive, Date-only | [optional]

### Return type

[**\Piksel\Kigo\Model\PropertyRates**](../Model/PropertyRates.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postRates

> postRates($id, $rates)

Update Property Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$rates = array(new \Piksel\Kigo\Model\NightlyRateRangeRequest()); // \Piksel\Kigo\Model\NightlyRateRangeRequest[] | Array of ranges of rates to be updated

try {
    $apiInstance->postRates($id, $rates);
} catch (Exception $e) {
    echo 'Exception when calling PropertyRatesApi->postRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **rates** | [**\Piksel\Kigo\Model\NightlyRateRangeRequest[]**](../Model/NightlyRateRangeRequest.md)| Array of ranges of rates to be updated |

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

