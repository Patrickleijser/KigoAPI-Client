<?php
/**
 * PropertyMedia
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
 * PropertyMedia Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Patrick Leijser
 * @link     http://patrickleijser.nl
 */
class PropertyMedia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyMedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'images' => '\Piksel\Kigo\Model\Image[]',
        'videos' => '\Piksel\Kigo\Model\Video[]',
        'virtual_tours' => '\Piksel\Kigo\Model\VirtualTour[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'images' => null,
        'videos' => null,
        'virtual_tours' => null
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
        'images' => 'images',
        'videos' => 'videos',
        'virtual_tours' => 'virtualTours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'images' => 'setImages',
        'videos' => 'setVideos',
        'virtual_tours' => 'setVirtualTours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'images' => 'getImages',
        'videos' => 'getVideos',
        'virtual_tours' => 'getVirtualTours'
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
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['videos'] = isset($data['videos']) ? $data['videos'] : null;
        $this->container['virtual_tours'] = isset($data['virtual_tours']) ? $data['virtual_tours'] : null;
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
     * Gets images
     *
     * @return \Piksel\Kigo\Model\Image[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Piksel\Kigo\Model\Image[]|null $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return \Piksel\Kigo\Model\Video[]|null
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param \Piksel\Kigo\Model\Video[]|null $videos videos
     *
     * @return $this
     */
    public function setVideos($videos)
    {
        $this->container['videos'] = $videos;

        return $this;
    }

    /**
     * Gets virtual_tours
     *
     * @return \Piksel\Kigo\Model\VirtualTour[]|null
     */
    public function getVirtualTours()
    {
        return $this->container['virtual_tours'];
    }

    /**
     * Sets virtual_tours
     *
     * @param \Piksel\Kigo\Model\VirtualTour[]|null $virtual_tours virtual_tours
     *
     * @return $this
     */
    public function setVirtualTours($virtual_tours)
    {
        $this->container['virtual_tours'] = $virtual_tours;

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


