# OfferType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_type** | [**\Popsicle\Amazon\Model\ProductPricing\OfferCustomerType**](OfferCustomerType.md) |  | [optional] 
**buying_price** | [**\Popsicle\Amazon\Model\ProductPricing\PriceType**](PriceType.md) |  | 
**regular_price** | [**\Popsicle\Amazon\Model\ProductPricing\MoneyType**](MoneyType.md) |  | 
**business_price** | [**\Popsicle\Amazon\Model\ProductPricing\MoneyType**](MoneyType.md) |  | [optional] 
**quantity_discount_prices** | [**\Popsicle\Amazon\Model\ProductPricing\QuantityDiscountPriceType[]**](QuantityDiscountPriceType.md) |  | [optional] 
**fulfillment_channel** | **string** | The fulfillment channel for the offer listing. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller. | 
**item_condition** | **string** | The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club. | 
**item_sub_condition** | **string** | The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. | 
**seller_sku** | **string** | The seller stock keeping unit (SKU) of the item. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

