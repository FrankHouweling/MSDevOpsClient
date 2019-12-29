<?php
/**
 * WikiPagesBatchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wiki
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FrankHouweling\AzureDevOpsClient\Wiki\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Wiki\ObjectSerializer;

/**
 * WikiPagesBatchRequest Class Doc Comment
 *
 * @category Class
 * @description Contract encapsulating parameters for the pages batch.
 * @package  FrankHouweling\AzureDevOpsClient\Wiki
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WikiPagesBatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WikiPagesBatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'continuationToken' => 'string',
        'pageViewsForDays' => 'int',
        'top' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'continuationToken' => null,
        'pageViewsForDays' => 'int32',
        'top' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'continuationToken' => 'continuationToken',
        'pageViewsForDays' => 'pageViewsForDays',
        'top' => 'top'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'continuationToken' => 'setContinuationToken',
        'pageViewsForDays' => 'setPageViewsForDays',
        'top' => 'setTop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'continuationToken' => 'getContinuationToken',
        'pageViewsForDays' => 'getPageViewsForDays',
        'top' => 'getTop'
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
        return self::$swaggerModelName;
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
        $this->container['continuationToken'] = isset($data['continuationToken']) ? $data['continuationToken'] : null;
        $this->container['pageViewsForDays'] = isset($data['pageViewsForDays']) ? $data['pageViewsForDays'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
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
     * Gets continuationToken
     *
     * @return string
     */
    public function getContinuationToken()
    {
        return $this->container['continuationToken'];
    }

    /**
     * Sets continuationToken
     *
     * @param string $continuationToken A string token that can be used for retrieving next page of Wiki Page Data if available. Otherwise null.
     *
     * @return $this
     */
    public function setContinuationToken($continuationToken)
    {
        $this->container['continuationToken'] = $continuationToken;

        return $this;
    }

    /**
     * Gets pageViewsForDays
     *
     * @return int
     */
    public function getPageViewsForDays()
    {
        return $this->container['pageViewsForDays'];
    }

    /**
     * Sets pageViewsForDays
     *
     * @param int $pageViewsForDays last N days from the current day for which page views is to be returned. It's inclusive of current day.
     *
     * @return $this
     */
    public function setPageViewsForDays($pageViewsForDays)
    {
        $this->container['pageViewsForDays'] = $pageViewsForDays;

        return $this;
    }

    /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param int $top Total count of pages on a wiki.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


