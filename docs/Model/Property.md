# # Property

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**category_id** | **int** |  | 
**category_type** | **string** |  | [optional] 
**external_id** | **string** |  | [optional] 
**last_modified_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**solution_id** | **int** |  | [optional] 
**private_name** | **string** |  | 
**floor** | **int** |  | [optional] 
**stories** | **int** |  | [optional] 
**min_stay** | **int** |  | 
**year_built** | **int** |  | [optional] 
**garage_spaces** | **int** |  | [optional] 
**parking_spaces** | **int** |  | [optional] 
**unit_size_sq_ft** | **int** |  | [optional] 
**lot_size_sq_ft** | **int** |  | [optional] 
**internal_notes** | **string** |  | [optional] 
**status** | **string** |  | 
**bedroom_count** | **int** | When updating, send a Bedrooms arrays that will auto-set the BedroomCount value | [optional] 
**bedrooms** | [**\Piksel\Kigo\Model\PropertyBedroom[]**](PropertyBedroom.md) |  | 
**bathrooms** | **double** |  | [optional] 
**sleeps** | **int** |  | 
**address** | [**\Piksel\Kigo\Model\Address**](Address.md) |  | 
**units** | [**\Piksel\Kigo\Model\Unit[]**](Unit.md) |  | [optional] 
**media** | [**\Piksel\Kigo\Model\PropertyMedia**](PropertyMedia.md) |  | [optional] 
**primary_image** | [**\Piksel\Kigo\Model\Image**](Image.md) |  | [optional] 
**descriptions** | [**\Piksel\Kigo\Model\PropertyDescriptions[]**](PropertyDescriptions.md) | Shows descriptions in ALL available Locales. Included with option Descriptions | [optional] 
**amenity_ids** | **int[]** | List of Amenity IDs selected for this Property. Works with GET/POST/PUT requests. This field is always required (e.g., if an empty array is given, all amenities will be deleted from the property). | 
**amenities** | [**\Piksel\Kigo\Model\PropertyAmenity[]**](PropertyAmenity.md) | Included with option Amenities | [optional] 
**availability** | [**\Piksel\Kigo\Model\Availability**](Availability.md) |  | [optional] 
**rates** | [**\Piksel\Kigo\Model\PropertyRate[]**](PropertyRate.md) | Included with option Rates | [optional] 
**visibility** | [**\Piksel\Kigo\Model\PropertyVisibility**](PropertyVisibility.md) |  | [optional] 
**reviews** | [**\Piksel\Kigo\Model\PropertyReview[]**](PropertyReview.md) | Included with option Reviews | [optional] 
**solution** | [**\Piksel\Kigo\Model\Solution**](Solution.md) |  | [optional] 
**localized** | [**\Piksel\Kigo\Model\PropertyLocalizedData**](PropertyLocalizedData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


