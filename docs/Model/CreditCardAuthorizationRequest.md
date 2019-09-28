# # CreditCardAuthorizationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** |  | 
**currency** | **string** | Must match the Statement&#39;s currency | 
**security_code** | **string** | Security code for the existing credit card (CVV/CVC) | [optional] 
**credit_card** | [**\Piksel\Kigo\Model\CreditCard**](CreditCard.md) |  | [optional] 
**do_capture** | **bool** | Whether it should capture(settle) the transaction | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


