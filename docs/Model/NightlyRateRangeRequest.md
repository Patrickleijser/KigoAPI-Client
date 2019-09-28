# # NightlyRateRangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | First night (ISO 8601 Date format) | 
**through** | [**\DateTime**](\DateTime.md) | Optionally, defines a range (inclusive, ISO 8601 Date format) | [optional] 
**price** | **double** | The new price decimal(18, 2) | 
**days** | **int[]** | An array of days of week to which the new price should apply (within the range). E.g., [0,1,6] // Mondays (0), Tuesdays (1) and Sundays (6).  It follows ISO standards, therefore Monday is the first day of the week, and it is zero-indexed (Monday &#x3D; 0). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


