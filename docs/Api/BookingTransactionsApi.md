# Piksel\Kigo\BookingTransactionsApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBookingTransactions**](BookingTransactionsApi.md#getBookingTransactions) | **GET** /core/v0.8/bookings/{id}/transactions | Get Booking Transactions
[**postBookingAuthorizations**](BookingTransactionsApi.md#postBookingAuthorizations) | **POST** /core/v0.8/bookings/{id}/transactions/authorizations | Authorize CreditCard (and optionally capture amount) for a Booking, creating a Payment Transaction
[**postBookingRefund**](BookingTransactionsApi.md#postBookingRefund) | **POST** /core/v0.8/bookings/{id}/transactions/{tid}/refund | Refund CreditCard Payment Transaction
[**postBookingTransactions**](BookingTransactionsApi.md#postBookingTransactions) | **POST** /core/v0.8/bookings/{id}/transactions | Create Booking Transactions (Both Statement Details and Payments. Notice: Online Payment Transactions are *not* supported through this endpoint)



## getBookingTransactions

> \Piksel\Kigo\Model\ResourceListTransaction getBookingTransactions($id)

Get Booking Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID

try {
    $result = $apiInstance->getBookingTransactions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTransactionsApi->getBookingTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |

### Return type

[**\Piksel\Kigo\Model\ResourceListTransaction**](../Model/ResourceListTransaction.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postBookingAuthorizations

> \Piksel\Kigo\Model\ResourceCreditCardAuthorizationResponse postBookingAuthorizations($id, $authorization)

Authorize CreditCard (and optionally capture amount) for a Booking, creating a Payment Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$authorization = new \Piksel\Kigo\Model\CreditCardAuthorizationRequest(); // \Piksel\Kigo\Model\CreditCardAuthorizationRequest | Authorization data

try {
    $result = $apiInstance->postBookingAuthorizations($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTransactionsApi->postBookingAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **authorization** | [**\Piksel\Kigo\Model\CreditCardAuthorizationRequest**](../Model/CreditCardAuthorizationRequest.md)| Authorization data |

### Return type

[**\Piksel\Kigo\Model\ResourceCreditCardAuthorizationResponse**](../Model/ResourceCreditCardAuthorizationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postBookingRefund

> \Piksel\Kigo\Model\ResourceCreditCardRefundResponse postBookingRefund($id, $tid, $refund)

Refund CreditCard Payment Transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$tid = 56; // int | ID of the transaction to be refunded
$refund = new \Piksel\Kigo\Model\CreditCardRefundRequest(); // \Piksel\Kigo\Model\CreditCardRefundRequest | Refund data

try {
    $result = $apiInstance->postBookingRefund($id, $tid, $refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTransactionsApi->postBookingRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **tid** | **int**| ID of the transaction to be refunded |
 **refund** | [**\Piksel\Kigo\Model\CreditCardRefundRequest**](../Model/CreditCardRefundRequest.md)| Refund data |

### Return type

[**\Piksel\Kigo\Model\ResourceCreditCardRefundResponse**](../Model/ResourceCreditCardRefundResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postBookingTransactions

> \Piksel\Kigo\Model\ResourceListInt32 postBookingTransactions($id, $transactions)

Create Booking Transactions (Both Statement Details and Payments. Notice: Online Payment Transactions are *not* supported through this endpoint)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\BookingTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$transactions = array(new \Piksel\Kigo\Model\TransactionRequest()); // \Piksel\Kigo\Model\TransactionRequest[] | List of transactions to create

try {
    $result = $apiInstance->postBookingTransactions($id, $transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTransactionsApi->postBookingTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **transactions** | [**\Piksel\Kigo\Model\TransactionRequest[]**](../Model/TransactionRequest.md)| List of transactions to create | [optional]

### Return type

[**\Piksel\Kigo\Model\ResourceListInt32**](../Model/ResourceListInt32.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

