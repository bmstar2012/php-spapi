<?php
/**
 * SmallAndLightEligibilityStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Small And Light
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\FbaSmallAndLight;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * SmallAndLightEligibilityStatus Class Doc Comment
 *
 * @category Class
 * @description The Small and Light eligibility status of the item.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmallAndLightEligibilityStatus
{
    /**
     * Possible values of this enum
     */
    const ELIGIBLE = 'ELIGIBLE';
const NOT_ELIGIBLE = 'NOT_ELIGIBLE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELIGIBLE,
self::NOT_ELIGIBLE,        ];
    }
}
