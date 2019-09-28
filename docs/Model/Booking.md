# # Booking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**external_id** | **string** |  | [optional] 
**added_on** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_modified_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**property_id** | **int** |  | 
**property** | [**\Piksel\Kigo\Model\Property**](Property.md) |  | [optional] 
**unit_id** | **int** |  | [optional] 
**solution_id** | **int** |  | [optional] 
**check_in_date** | [**\DateTime**](\DateTime.md) |  | 
**check_in_time_minutes_from_midnight** | **int** | Property&#39;s local timezone. Defaults to property&#39;s default check in time. | [optional] 
**check_out_date** | [**\DateTime**](\DateTime.md) |  | 
**check_out_time_minutes_from_midnight** | **int** | Property&#39;s local timezone. Defaults to property&#39;s default check out time. | [optional] 
**status** | **string** | Allowed values are: Unknown, MarkedForDeletion, PendingConfirmation, Confirmed, CheckedIn, CheckedOut, Cancelled, Held | 
**type** | **string** | Allowed values are: Unknown, OnlineBooking, HouseBooking, OutsideAgencyBooking, OwnerBooking, BlockOut, ExternalPMSBooking | 
**renter_id** | **int** |  | 
**renter** | [**\Piksel\Kigo\Model\Person**](Person.md) |  | [optional] 
**agent_id** | **int** |  | [optional] 
**agent** | [**\Piksel\Kigo\Model\Person**](Person.md) |  | [optional] 
**private_notes** | **string** |  | [optional] 
**public_notes** | **string** |  | [optional] 
**language** | **string** |  | [optional] 
**statement** | [**\Piksel\Kigo\Model\Statement**](Statement.md) |  | [optional] 
**num_adults** | **int** |  | 
**num_children** | **int** |  | 
**booking_source_id** | **int** |  | 
**booking_source** | [**\Piksel\Kigo\Model\LeadSource**](LeadSource.md) |  | [optional] 
**booking_source_editable** | **bool** | Prevents from updating the booking source with the booking endpoint | [optional] 
**booking_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**credit_card** | [**\Piksel\Kigo\Model\CreditCard**](CreditCard.md) |  | [optional] 
**held_until** | [**\DateTime**](\DateTime.md) |  | [optional] 
**distribution_partner_id** | **string** |  | [optional] 
**distribution_partner** | **string** |  | [optional] 
**distribution_partner_username** | **string** |  | [optional] 
**is_imported** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


