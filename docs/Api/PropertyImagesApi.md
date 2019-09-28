# Piksel\Kigo\PropertyImagesApi

All URIs are relative to *http://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteImage**](PropertyImagesApi.md#deleteImage) | **DELETE** /core/v0.8/properties/{id}/images/{iid} | Delete Property Image
[**postImage**](PropertyImagesApi.md#postImage) | **POST** /core/v0.8/properties/{id}/images | Create Property Image
[**putImage**](PropertyImagesApi.md#putImage) | **PUT** /core/v0.8/properties/{id}/images/{iid} | Update Property Image (image urls can&#39;t be modified)



## deleteImage

> deleteImage($id, $iid)

Delete Property Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$iid = 56; // int | Image ID

try {
    $apiInstance->deleteImage($id, $iid);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **iid** | **int**| Image ID |

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


## postImage

> \Piksel\Kigo\Model\IdResourceInt32 postImage($id, $image)

Create Property Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$image = new \Piksel\Kigo\Model\Image(); // \Piksel\Kigo\Model\Image | 

try {
    $result = $apiInstance->postImage($id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->postImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **image** | [**\Piksel\Kigo\Model\Image**](../Model/Image.md)|  |

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


## putImage

> putImage($id, $iid, $image)

Update Property Image (image urls can't be modified)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKey('X-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ApiKey', 'Bearer');


$apiInstance = new Piksel\Kigo\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Property ID
$iid = 56; // int | Image ID
$image = new \Piksel\Kigo\Model\Image(); // \Piksel\Kigo\Model\Image | Object to be replace (notice: image urls can't be modified)

try {
    $apiInstance->putImage($id, $iid, $image);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->putImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Property ID |
 **iid** | **int**| Image ID |
 **image** | [**\Piksel\Kigo\Model\Image**](../Model/Image.md)| Object to be replace (notice: image urls can&#39;t be modified) |

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

