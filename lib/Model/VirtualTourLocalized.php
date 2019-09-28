<?php
/**
 * VirtualTourLocalized
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
 * VirtualTourLocalized Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Patrick Leijser
 * @link     http://patrickleijser.nl
 */
class VirtualTourLocalized implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VirtualTourLocalized';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'caption' => 'string',
        'captions' => '\Piksel\Kigo\Model\MediaCaption[]',
        'id' => 'int',
        'private_caption' => 'string',
        'order' => 'int',
        'url_raw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'caption' => null,
        'captions' => null,
        'id' => 'int32',
        'private_caption' => null,
        'order' => 'int32',
        'url_raw' => null
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
        'caption' => 'caption',
        'captions' => 'captions',
        'id' => 'id',
        'private_caption' => 'privateCaption',
        'order' => 'order',
        'url_raw' => 'urlRaw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caption' => 'setCaption',
        'captions' => 'setCaptions',
        'id' => 'setId',
        'private_caption' => 'setPrivateCaption',
        'order' => 'setOrder',
        'url_raw' => 'setUrlRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caption' => 'getCaption',
        'captions' => 'getCaptions',
        'id' => 'getId',
        'private_caption' => 'getPrivateCaption',
        'order' => 'getOrder',
        'url_raw' => 'getUrlRaw'
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
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['captions'] = isset($data['captions']) ? $data['captions'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['private_caption'] = isset($data['private_caption']) ? $data['private_caption'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['url_raw'] = isset($data['url_raw']) ? $data['url_raw'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption caption
     *
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets captions
     *
     * @return \Piksel\Kigo\Model\MediaCaption[]|null
     */
    public function getCaptions()
    {
        return $this->container['captions'];
    }

    /**
     * Sets captions
     *
     * @param \Piksel\Kigo\Model\MediaCaption[]|null $captions captions
     *
     * @return $this
     */
    public function setCaptions($captions)
    {
        $this->container['captions'] = $captions;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets private_caption
     *
     * @return string|null
     */
    public function getPrivateCaption()
    {
        return $this->container['private_caption'];
    }

    /**
     * Sets private_caption
     *
     * @param string|null $private_caption private_caption
     *
     * @return $this
     */
    public function setPrivateCaption($private_caption)
    {
        $this->container['private_caption'] = $private_caption;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Zero-based ordering
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets url_raw
     *
     * @return string|null
     */
    public function getUrlRaw()
    {
        return $this->container['url_raw'];
    }

    /**
     * Sets url_raw
     *
     * @param string|null $url_raw Only this value has to be set during POST, the other url fields are auto-generated. This field cannot be modified via PUT
     *
     * @return $this
     */
    public function setUrlRaw($url_raw)
    {
        $this->container['url_raw'] = $url_raw;

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


