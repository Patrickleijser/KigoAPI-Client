<?php
/**
 * CreditCardRefundResponse
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
 * CreditCardRefundResponse Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Patrick Leijser
 * @link     http://patrickleijser.nl
 */
class CreditCardRefundResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditCardRefundResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'successful' => 'bool',
        'payment_gateway_error' => 'object',
        'transaction_id' => 'int',
        'auth_code' => 'string',
        'referred_auth_code' => 'string',
        'amount' => 'double',
        'error_code' => 'string',
        'error_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'successful' => null,
        'payment_gateway_error' => null,
        'transaction_id' => 'int32',
        'auth_code' => null,
        'referred_auth_code' => null,
        'amount' => 'double',
        'error_code' => null,
        'error_message' => null
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
        'successful' => 'successful',
        'payment_gateway_error' => 'paymentGatewayError',
        'transaction_id' => 'transactionID',
        'auth_code' => 'authCode',
        'referred_auth_code' => 'referredAuthCode',
        'amount' => 'amount',
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'successful' => 'setSuccessful',
        'payment_gateway_error' => 'setPaymentGatewayError',
        'transaction_id' => 'setTransactionId',
        'auth_code' => 'setAuthCode',
        'referred_auth_code' => 'setReferredAuthCode',
        'amount' => 'setAmount',
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'successful' => 'getSuccessful',
        'payment_gateway_error' => 'getPaymentGatewayError',
        'transaction_id' => 'getTransactionId',
        'auth_code' => 'getAuthCode',
        'referred_auth_code' => 'getReferredAuthCode',
        'amount' => 'getAmount',
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage'
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

    const ERROR_CODE_FORBIDDEN_TO_UPDATE_PROPERTY_ID = 'ForbiddenToUpdatePropertyID';
    const ERROR_CODE_PROPERTY_DOES_NOT_EXIST = 'PropertyDoesNotExist';
    const ERROR_CODE_UNIT_DOES_NOT_EXIST = 'UnitDoesNotExist';
    const ERROR_CODE_NO_UNIT_AVAILABLE_FOR_THE_PROPERTY = 'NoUnitAvailableForTheProperty';
    const ERROR_CODE_UNSPECIFIED_UNIT_FOR_IMPORT = 'UnspecifiedUnitForImport';
    const ERROR_CODE_RENTER_DOES_NOT_EXIST = 'RenterDoesNotExist';
    const ERROR_CODE_BOOKING_SOURCE_DOES_NOT_EXIST = 'BookingSourceDoesNotExist';
    const ERROR_CODE_AGENT_DOES_NOT_EXIST = 'AgentDoesNotExist';
    const ERROR_CODE_CONFLICTING_BOOKING = 'ConflictingBooking';
    const ERROR_CODE_BOOKING_DUPLICATED_EXTERNAL_ID = 'BookingDuplicatedExternalID';
    const ERROR_CODE_BOOKING_BELONGS_TO_ANOTHER_SOLUTION = 'BookingBelongsToAnotherSolution';
    const ERROR_CODE_PAYMENT_NO_STATEMENT = 'PaymentNoStatement';
    const ERROR_CODE_PAYMENT_NO_STATEMENT_LINES = 'PaymentNoStatementLines';
    const ERROR_CODE_PAYMENT_CURRENCY_DIFFERENT_THAN_SOLUTION = 'PaymentCurrencyDifferentThanSolution';
    const ERROR_CODE_PAYMENT_STATEMENT_AMOUNT0 = 'PaymentStatementAmount0';
    const ERROR_CODE_PAYMENT_CURRENCY_DIFFERENT_THAN_STATEMENT = 'PaymentCurrencyDifferentThanStatement';
    const ERROR_CODE_PAYMENT_NO_CREDIT_CARD_PROCESSOR = 'PaymentNoCreditCardProcessor';
    const ERROR_CODE_PAYMENT_PROCESSOR_ERROR = 'PaymentProcessorError';
    const ERROR_CODE_PAYMENT_NO_CREDIT_CARD_AVAILABLE = 'PaymentNoCreditCardAvailable';
    const ERROR_CODE_PAYMENT_PROCESSOR_ONLY_SUPPORTS_DO_CAPTURE = 'PaymentProcessorOnlySupportsDoCapture';
    const ERROR_CODE_REFUND_TRANSACTION_NOT_FOUND = 'RefundTransactionNotFound';
    const ERROR_CODE_REFUND_ON_NON_SUCCESSFUL_TRANSACTION = 'RefundOnNonSuccessfulTransaction';
    const ERROR_CODE_BLOCKOUT_PROPERTY_CANNOT_BE_MODIFIED = 'BlockoutPropertyCannotBeModified';
    const ERROR_CODE_BLOCKOUT_UNIT_CANNOT_BE_MODIFIED = 'BlockoutUnitCannotBeModified';
    const ERROR_CODE_NOT_A_BLOCKOUT = 'NotABlockout';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorCodeAllowableValues()
    {
        return [
            self::ERROR_CODE_FORBIDDEN_TO_UPDATE_PROPERTY_ID,
            self::ERROR_CODE_PROPERTY_DOES_NOT_EXIST,
            self::ERROR_CODE_UNIT_DOES_NOT_EXIST,
            self::ERROR_CODE_NO_UNIT_AVAILABLE_FOR_THE_PROPERTY,
            self::ERROR_CODE_UNSPECIFIED_UNIT_FOR_IMPORT,
            self::ERROR_CODE_RENTER_DOES_NOT_EXIST,
            self::ERROR_CODE_BOOKING_SOURCE_DOES_NOT_EXIST,
            self::ERROR_CODE_AGENT_DOES_NOT_EXIST,
            self::ERROR_CODE_CONFLICTING_BOOKING,
            self::ERROR_CODE_BOOKING_DUPLICATED_EXTERNAL_ID,
            self::ERROR_CODE_BOOKING_BELONGS_TO_ANOTHER_SOLUTION,
            self::ERROR_CODE_PAYMENT_NO_STATEMENT,
            self::ERROR_CODE_PAYMENT_NO_STATEMENT_LINES,
            self::ERROR_CODE_PAYMENT_CURRENCY_DIFFERENT_THAN_SOLUTION,
            self::ERROR_CODE_PAYMENT_STATEMENT_AMOUNT0,
            self::ERROR_CODE_PAYMENT_CURRENCY_DIFFERENT_THAN_STATEMENT,
            self::ERROR_CODE_PAYMENT_NO_CREDIT_CARD_PROCESSOR,
            self::ERROR_CODE_PAYMENT_PROCESSOR_ERROR,
            self::ERROR_CODE_PAYMENT_NO_CREDIT_CARD_AVAILABLE,
            self::ERROR_CODE_PAYMENT_PROCESSOR_ONLY_SUPPORTS_DO_CAPTURE,
            self::ERROR_CODE_REFUND_TRANSACTION_NOT_FOUND,
            self::ERROR_CODE_REFUND_ON_NON_SUCCESSFUL_TRANSACTION,
            self::ERROR_CODE_BLOCKOUT_PROPERTY_CANNOT_BE_MODIFIED,
            self::ERROR_CODE_BLOCKOUT_UNIT_CANNOT_BE_MODIFIED,
            self::ERROR_CODE_NOT_A_BLOCKOUT,
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
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['payment_gateway_error'] = isset($data['payment_gateway_error']) ? $data['payment_gateway_error'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['referred_auth_code'] = isset($data['referred_auth_code']) ? $data['referred_auth_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!is_null($this->container['error_code']) && !in_array($this->container['error_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_code', must be one of '%s'",
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
     * Gets successful
     *
     * @return bool|null
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     *
     * @param bool|null $successful successful
     *
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets payment_gateway_error
     *
     * @return object|null
     */
    public function getPaymentGatewayError()
    {
        return $this->container['payment_gateway_error'];
    }

    /**
     * Sets payment_gateway_error
     *
     * @param object|null $payment_gateway_error payment_gateway_error
     *
     * @return $this
     */
    public function setPaymentGatewayError($payment_gateway_error)
    {
        $this->container['payment_gateway_error'] = $payment_gateway_error;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return int|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param int|null $transaction_id transaction_id
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * Gets referred_auth_code
     *
     * @return string|null
     */
    public function getReferredAuthCode()
    {
        return $this->container['referred_auth_code'];
    }

    /**
     * Sets referred_auth_code
     *
     * @param string|null $referred_auth_code referred_auth_code
     *
     * @return $this
     */
    public function setReferredAuthCode($referred_auth_code)
    {
        $this->container['referred_auth_code'] = $referred_auth_code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string|null $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!is_null($error_code) && !in_array($error_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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


