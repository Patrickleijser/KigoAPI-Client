<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Patrick Leijser
 * @link     http://patrickleijser.nl
 */

/**
 * Kigo Core API
 *
 * https://www.kigoapis.com/core/v0.8/swagger/
 *
 * The version of the Kigo Core API: v0.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Piksel\Kigo\Model;

use \ArrayAccess;
use \Piksel\Kigo\ObjectSerializer;

/**
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Patrick Leijser
 * @link     http://patrickleijser.nl
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'transaction_date' => '\DateTime',
        'last_modified_date' => '\DateTime',
        'class' => 'string',
        'type' => 'string',
        'fee_type' => 'string',
        'status' => 'string',
        'amount' => 'double',
        'currency' => 'string',
        'quantity' => 'double',
        'description' => 'string',
        'memo' => 'string',
        'reference' => 'string',
        'auth_code' => 'string',
        'partner_data' => '\Piksel\Kigo\Model\TransactionPartnerData',
        'alt_id' => 'string',
        'credit_card' => '\Piksel\Kigo\Model\CreditCard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'transaction_date' => 'date-time',
        'last_modified_date' => 'date-time',
        'class' => null,
        'type' => null,
        'fee_type' => null,
        'status' => null,
        'amount' => 'double',
        'currency' => null,
        'quantity' => 'double',
        'description' => null,
        'memo' => null,
        'reference' => null,
        'auth_code' => null,
        'partner_data' => null,
        'alt_id' => null,
        'credit_card' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'transaction_date' => 'transactionDate',
        'last_modified_date' => 'lastModifiedDate',
        'class' => 'class',
        'type' => 'type',
        'fee_type' => 'feeType',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'quantity' => 'quantity',
        'description' => 'description',
        'memo' => 'memo',
        'reference' => 'reference',
        'auth_code' => 'authCode',
        'partner_data' => 'partnerData',
        'alt_id' => 'altID',
        'credit_card' => 'creditCard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transaction_date' => 'setTransactionDate',
        'last_modified_date' => 'setLastModifiedDate',
        'class' => 'setClass',
        'type' => 'setType',
        'fee_type' => 'setFeeType',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'quantity' => 'setQuantity',
        'description' => 'setDescription',
        'memo' => 'setMemo',
        'reference' => 'setReference',
        'auth_code' => 'setAuthCode',
        'partner_data' => 'setPartnerData',
        'alt_id' => 'setAltId',
        'credit_card' => 'setCreditCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transaction_date' => 'getTransactionDate',
        'last_modified_date' => 'getLastModifiedDate',
        'class' => 'getClass',
        'type' => 'getType',
        'fee_type' => 'getFeeType',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'quantity' => 'getQuantity',
        'description' => 'getDescription',
        'memo' => 'getMemo',
        'reference' => 'getReference',
        'auth_code' => 'getAuthCode',
        'partner_data' => 'getPartnerData',
        'alt_id' => 'getAltId',
        'credit_card' => 'getCreditCard'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CURRENCY_UNKNOWN = 'Unknown';
    const CURRENCY_USD = 'USD';
    const CURRENCY_AUD = 'AUD';
    const CURRENCY_BRL = 'BRL';
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_DKK = 'DKK';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_HKD = 'HKD';
    const CURRENCY_INR = 'INR';
    const CURRENCY_JPY = 'JPY';
    const CURRENCY_MYR = 'MYR';
    const CURRENCY_MXN = 'MXN';
    const CURRENCY_NZD = 'NZD';
    const CURRENCY_NOK = 'NOK';
    const CURRENCY_SGD = 'SGD';
    const CURRENCY_ZAR = 'ZAR';
    const CURRENCY_KRW = 'KRW';
    const CURRENCY_LKR = 'LKR';
    const CURRENCY_SEK = 'SEK';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_TWD = 'TWD';
    const CURRENCY_THB = 'THB';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_EGP = 'EGP';
    const CURRENCY_XPF = 'XPF';
    const CURRENCY_AED = 'AED';
    const CURRENCY_ANG = 'ANG';
    const CURRENCY_ARS = 'ARS';
    const CURRENCY_BGN = 'BGN';
    const CURRENCY_BHD = 'BHD';
    const CURRENCY_BOB = 'BOB';
    const CURRENCY_BTN = 'BTN';
    const CURRENCY_BZD = 'BZD';
    const CURRENCY_CLP = 'CLP';
    const CURRENCY_COP = 'COP';
    const CURRENCY_CRC = 'CRC';
    const CURRENCY_CZK = 'CZK';
    const CURRENCY_GNF = 'GNF';
    const CURRENCY_GTQ = 'GTQ';
    const CURRENCY_GYD = 'GYD';
    const CURRENCY_HNL = 'HNL';
    const CURRENCY_HRK = 'HRK';
    const CURRENCY_HUF = 'HUF';
    const CURRENCY_IDR = 'IDR';
    const CURRENCY_ILS = 'ILS';
    const CURRENCY_ISK = 'ISK';
    const CURRENCY_JOD = 'JOD';
    const CURRENCY_KHR = 'KHR';
    const CURRENCY_KWD = 'KWD';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_LAK = 'LAK';
    const CURRENCY_LBP = 'LBP';
    const CURRENCY_MAD = 'MAD';
    const CURRENCY_MOP = 'MOP';
    const CURRENCY_NIO = 'NIO';
    const CURRENCY_OMR = 'OMR';
    const CURRENCY_PAB = 'PAB';
    const CURRENCY_PEN = 'PEN';
    const CURRENCY_PHP = 'PHP';
    const CURRENCY_PKR = 'PKR';
    const CURRENCY_PLN = 'PLN';
    const CURRENCY_PYG = 'PYG';
    const CURRENCY_QAR = 'QAR';
    const CURRENCY_RON = 'RON';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_SAR = 'SAR';
    const CURRENCY_SRD = 'SRD';
    const CURRENCY_TND = 'TND';
    const CURRENCY__TRY = 'TRY';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_UYU = 'UYU';
    const CURRENCY_VEF = 'VEF';
    const CURRENCY_VND = 'VND';
    const CURRENCY_AZN = 'AZN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_UNKNOWN,
            self::CURRENCY_USD,
            self::CURRENCY_AUD,
            self::CURRENCY_BRL,
            self::CURRENCY_CAD,
            self::CURRENCY_CNY,
            self::CURRENCY_DKK,
            self::CURRENCY_EUR,
            self::CURRENCY_HKD,
            self::CURRENCY_INR,
            self::CURRENCY_JPY,
            self::CURRENCY_MYR,
            self::CURRENCY_MXN,
            self::CURRENCY_NZD,
            self::CURRENCY_NOK,
            self::CURRENCY_SGD,
            self::CURRENCY_ZAR,
            self::CURRENCY_KRW,
            self::CURRENCY_LKR,
            self::CURRENCY_SEK,
            self::CURRENCY_CHF,
            self::CURRENCY_TWD,
            self::CURRENCY_THB,
            self::CURRENCY_GBP,
            self::CURRENCY_EGP,
            self::CURRENCY_XPF,
            self::CURRENCY_AED,
            self::CURRENCY_ANG,
            self::CURRENCY_ARS,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BOB,
            self::CURRENCY_BTN,
            self::CURRENCY_BZD,
            self::CURRENCY_CLP,
            self::CURRENCY_COP,
            self::CURRENCY_CRC,
            self::CURRENCY_CZK,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HNL,
            self::CURRENCY_HRK,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_ISK,
            self::CURRENCY_JOD,
            self::CURRENCY_KHR,
            self::CURRENCY_KWD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_MAD,
            self::CURRENCY_MOP,
            self::CURRENCY_NIO,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RUB,
            self::CURRENCY_SAR,
            self::CURRENCY_SRD,
            self::CURRENCY_TND,
            self::CURRENCY__TRY,
            self::CURRENCY_UAH,
            self::CURRENCY_UYU,
            self::CURRENCY_VEF,
            self::CURRENCY_VND,
            self::CURRENCY_AZN,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['partner_data'] = isset($data['partner_data']) ? $data['partner_data'] : null;
        $this->container['alt_id'] = isset($data['alt_id']) ? $data['alt_id'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime|null $transaction_date transaction_date
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime|null $last_modified_date last_modified_date
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type fee_type
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets partner_data
     *
     * @return \Piksel\Kigo\Model\TransactionPartnerData|null
     */
    public function getPartnerData()
    {
        return $this->container['partner_data'];
    }

    /**
     * Sets partner_data
     *
     * @param \Piksel\Kigo\Model\TransactionPartnerData|null $partner_data partner_data
     *
     * @return $this
     */
    public function setPartnerData($partner_data)
    {
        $this->container['partner_data'] = $partner_data;

        return $this;
    }

    /**
     * Gets alt_id
     *
     * @return string|null
     */
    public function getAltId()
    {
        return $this->container['alt_id'];
    }

    /**
     * Sets alt_id
     *
     * @param string|null $alt_id alt_id
     *
     * @return $this
     */
    public function setAltId($alt_id)
    {
        $this->container['alt_id'] = $alt_id;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \Piksel\Kigo\Model\CreditCard|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \Piksel\Kigo\Model\CreditCard|null $credit_card credit_card
     *
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


