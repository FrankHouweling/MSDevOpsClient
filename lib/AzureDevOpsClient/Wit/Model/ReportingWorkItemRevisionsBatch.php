<?php
/**
 * ReportingWorkItemRevisionsBatch
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WorkItemTracking
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

namespace FrankHouweling\AzureDevOpsClient\Wit\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Wit\ObjectSerializer;

/**
 * ReportingWorkItemRevisionsBatch Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportingWorkItemRevisionsBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportingWorkItemRevisionsBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'continuationToken' => 'string',
        'isLastBatch' => 'bool',
        'nextLink' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'continuationToken' => null,
        'isLastBatch' => null,
        'nextLink' => null,
        'values' => 'T'
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
        'isLastBatch' => 'isLastBatch',
        'nextLink' => 'nextLink',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'continuationToken' => 'setContinuationToken',
        'isLastBatch' => 'setIsLastBatch',
        'nextLink' => 'setNextLink',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'continuationToken' => 'getContinuationToken',
        'isLastBatch' => 'getIsLastBatch',
        'nextLink' => 'getNextLink',
        'values' => 'getValues'
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
        $this->container['isLastBatch'] = isset($data['isLastBatch']) ? $data['isLastBatch'] : null;
        $this->container['nextLink'] = isset($data['nextLink']) ? $data['nextLink'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
     * @param string $continuationToken ContinuationToken acts as a waterMark. Used while querying large results.
     *
     * @return $this
     */
    public function setContinuationToken($continuationToken)
    {
        $this->container['continuationToken'] = $continuationToken;

        return $this;
    }

    /**
     * Gets isLastBatch
     *
     * @return bool
     */
    public function getIsLastBatch()
    {
        return $this->container['isLastBatch'];
    }

    /**
     * Sets isLastBatch
     *
     * @param bool $isLastBatch Returns 'true' if it's last batch, 'false' otherwise.
     *
     * @return $this
     */
    public function setIsLastBatch($isLastBatch)
    {
        $this->container['isLastBatch'] = $isLastBatch;

        return $this;
    }

    /**
     * Gets nextLink
     *
     * @return string
     */
    public function getNextLink()
    {
        return $this->container['nextLink'];
    }

    /**
     * Sets nextLink
     *
     * @param string $nextLink The next link for the work item.
     *
     * @return $this
     */
    public function setNextLink($nextLink)
    {
        $this->container['nextLink'] = $nextLink;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values Values such as rel, sourceId, TargetId, ChangedDate, isActive.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


