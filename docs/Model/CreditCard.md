# # CreditCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**cardholder_name** | **string** |  | 
**number** | **string** |  | [optional] 
**avs_address** | **string** |  | [optional] 
**avs_city** | **string** |  | [optional] 
**avs_state** | **string** | For USA states, use ISO 3166-2:US | [optional] 
**avs_zip** | **string** |  | [optional] 
**avs_country** | **string** | ISO 3166-1 alpha-2. | 
**expiration_date** | **string** |  | 
**type** | **string** | Auto-calculated from the Number | [optional] 
**is_tokenized** | **bool** | Read-only field, whether the ccard was tokenized or not | [optional] 
**notes** | **string** |  | [optional] 
**added_on** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


