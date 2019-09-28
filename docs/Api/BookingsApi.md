# Piksel\Kigo\BookingsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingsIndex**](BookingsApi.md#bookingsIndex) | **GET** /core/v0.8/bookings | List Bookings. At least modifiedAfter and/or checkoutAfter are required.
[**deleteBooking**](BookingsApi.md#deleteBooking) | **DELETE** /core/v0.8/bookings/{id} | Cancel Booking
[**getBooking**](BookingsApi.md#getBooking) | **GET** /core/v0.8/bookings/{id} | Get Booking
[**postBooking**](BookingsApi.md#postBooking) | **POST** /core/v0.8/bookings | Create Booking. It does not auto-charge credit cards, does not auto-compute price. Accepts an array of transactions (statement details and offline payments)
[**putBookingDeprecated**](BookingsApi.md#putBookingDeprecated) | **PUT** /core/v0.8/bookings/{id} | Update Booking object (full object replacement, excluding sub-resources)



## bookingsIndex

> \Piksel\Kigo\Model\ResourceListListBookingListElement bookingsIndex($modified_after, $modified_before, $checkout_after, $checkin_before, $include_deleted)

List Bookings. At least modifiedAfter and/or checkoutAfter are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | UTC
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | UTC
$checkout_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date-only comparison, inclusive date
$checkin_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date-only comparison, inclusive date
$include_deleted = false; // bool | Whether Bookings marked as Deleted (status -1) should be included in the search results. Notice that those bookings cannot be fetched via GET

try {
    $result = $apiInstance->bookingsIndex($modified_after, $modified_before, $checkout_after, $checkin_before, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->bookingsIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modified_after** | **\DateTime**| UTC | [optional]
 **modified_before** | **\DateTime**| UTC | [optional]
 **checkout_after** | **\DateTime**| Date-only comparison, inclusive date | [optional]
 **checkin_before** | **\DateTime**| Date-only comparison, inclusive date | [optional]
 **include_deleted** | **bool**| Whether Bookings marked as Deleted (status -1) should be included in the search results. Notice that those bookings cannot be fetched via GET | [optional] [default to false]

### Return type

[**\Piksel\Kigo\Model\ResourceListListBookingListElement**](../Model/ResourceListListBookingListElement.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteBooking

> deleteBooking($id)

Cancel Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID

try {
    $apiInstance->deleteBooking($id);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->deleteBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |

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


## getBooking

> \Piksel\Kigo\Model\ResourceBooking getBooking($id, $options)

Get Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$options = array('options_example'); // string[] | (Optional) Possible values:               Renter - include Renter(Person) object               Agent - include Agent(Person) object               Statement - include Statement object               Property - include Property object               BookingSource - include BookingSource object               CreditCard - include CreditCard object (the card on record and also to all payment transaction, if Statement is included)

try {
    $result = $apiInstance->getBooking($id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **options** | [**string[]**](../Model/string.md)| (Optional) Possible values:               Renter - include Renter(Person) object               Agent - include Agent(Person) object               Statement - include Statement object               Property - include Property object               BookingSource - include BookingSource object               CreditCard - include CreditCard object (the card on record and also to all payment transaction, if Statement is included) | [optional]

### Return type

[**\Piksel\Kigo\Model\ResourceBooking**](../Model/ResourceBooking.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postBooking

> \Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes postBooking($booking_request)

Create Booking. It does not auto-charge credit cards, does not auto-compute price. Accepts an array of transactions (statement details and offline payments)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_request = new \Piksel\Kigo\Model\BookingRequest(); // \Piksel\Kigo\Model\BookingRequest | 

try {
    $result = $apiInstance->postBooking($booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->postBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_request** | [**\Piksel\Kigo\Model\BookingRequest**](../Model/BookingRequest.md)|  |

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


## putBookingDeprecated

> \Piksel\Kigo\Model\ResourceBookingMutationResponseErrorCodes putBookingDeprecated($id, $booking, $revision)

Update Booking object (full object replacement, excluding sub-resources)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$booking = new \Piksel\Kigo\Model\BookingRequest(); // \Piksel\Kigo\Model\BookingRequest | Booking object to be FULLY updated
$revision = 1; // int | Optional. revision 2 corrects the api response model (aligned with other endpoints)

try {
    $result = $apiInstance->putBookingDeprecated($id, $booking, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->putBookingDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **booking** | [**\Piksel\Kigo\Model\BookingRequest**](../Model/BookingRequest.md)| Booking object to be FULLY updated |
 **revision** | **int**| Optional. revision 2 corrects the api response model (aligned with other endpoints) | [optional] [default to 1]

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

