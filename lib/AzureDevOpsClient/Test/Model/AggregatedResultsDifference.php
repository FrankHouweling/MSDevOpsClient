<?php
/**
 * AggregatedResultsDifference
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Test
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

namespace FrankHouweling\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Test\ObjectSerializer;

/**
 * AggregatedResultsDifference Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AggregatedResultsDifference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregatedResultsDifference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'increaseInDuration' => 'string',
        'increaseInFailures' => 'int',
        'increaseInNonImpactedTests' => 'int',
        'increaseInOtherTests' => 'int',
        'increaseInPassedTests' => 'int',
        'increaseInTotalTests' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'increaseInDuration' => 'TimeSpan',
        'increaseInFailures' => 'int32',
        'increaseInNonImpactedTests' => 'int32',
        'increaseInOtherTests' => 'int32',
        'increaseInPassedTests' => 'int32',
        'increaseInTotalTests' => 'int32'
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
        'increaseInDuration' => 'increaseInDuration',
        'increaseInFailures' => 'increaseInFailures',
        'increaseInNonImpactedTests' => 'increaseInNonImpactedTests',
        'increaseInOtherTests' => 'increaseInOtherTests',
        'increaseInPassedTests' => 'increaseInPassedTests',
        'increaseInTotalTests' => 'increaseInTotalTests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'increaseInDuration' => 'setIncreaseInDuration',
        'increaseInFailures' => 'setIncreaseInFailures',
        'increaseInNonImpactedTests' => 'setIncreaseInNonImpactedTests',
        'increaseInOtherTests' => 'setIncreaseInOtherTests',
        'increaseInPassedTests' => 'setIncreaseInPassedTests',
        'increaseInTotalTests' => 'setIncreaseInTotalTests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'increaseInDuration' => 'getIncreaseInDuration',
        'increaseInFailures' => 'getIncreaseInFailures',
        'increaseInNonImpactedTests' => 'getIncreaseInNonImpactedTests',
        'increaseInOtherTests' => 'getIncreaseInOtherTests',
        'increaseInPassedTests' => 'getIncreaseInPassedTests',
        'increaseInTotalTests' => 'getIncreaseInTotalTests'
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
        $this->container['increaseInDuration'] = isset($data['increaseInDuration']) ? $data['increaseInDuration'] : null;
        $this->container['increaseInFailures'] = isset($data['increaseInFailures']) ? $data['increaseInFailures'] : null;
        $this->container['increaseInNonImpactedTests'] = isset($data['increaseInNonImpactedTests']) ? $data['increaseInNonImpactedTests'] : null;
        $this->container['increaseInOtherTests'] = isset($data['increaseInOtherTests']) ? $data['increaseInOtherTests'] : null;
        $this->container['increaseInPassedTests'] = isset($data['increaseInPassedTests']) ? $data['increaseInPassedTests'] : null;
        $this->container['increaseInTotalTests'] = isset($data['increaseInTotalTests']) ? $data['increaseInTotalTests'] : null;
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
     * Gets increaseInDuration
     *
     * @return string
     */
    public function getIncreaseInDuration()
    {
        return $this->container['increaseInDuration'];
    }

    /**
     * Sets increaseInDuration
     *
     * @param string $increaseInDuration increaseInDuration
     *
     * @return $this
     */
    public function setIncreaseInDuration($increaseInDuration)
    {
        $this->container['increaseInDuration'] = $increaseInDuration;

        return $this;
    }

    /**
     * Gets increaseInFailures
     *
     * @return int
     */
    public function getIncreaseInFailures()
    {
        return $this->container['increaseInFailures'];
    }

    /**
     * Sets increaseInFailures
     *
     * @param int $increaseInFailures increaseInFailures
     *
     * @return $this
     */
    public function setIncreaseInFailures($increaseInFailures)
    {
        $this->container['increaseInFailures'] = $increaseInFailures;

        return $this;
    }

    /**
     * Gets increaseInNonImpactedTests
     *
     * @return int
     */
    public function getIncreaseInNonImpactedTests()
    {
        return $this->container['increaseInNonImpactedTests'];
    }

    /**
     * Sets increaseInNonImpactedTests
     *
     * @param int $increaseInNonImpactedTests increaseInNonImpactedTests
     *
     * @return $this
     */
    public function setIncreaseInNonImpactedTests($increaseInNonImpactedTests)
    {
        $this->container['increaseInNonImpactedTests'] = $increaseInNonImpactedTests;

        return $this;
    }

    /**
     * Gets increaseInOtherTests
     *
     * @return int
     */
    public function getIncreaseInOtherTests()
    {
        return $this->container['increaseInOtherTests'];
    }

    /**
     * Sets increaseInOtherTests
     *
     * @param int $increaseInOtherTests increaseInOtherTests
     *
     * @return $this
     */
    public function setIncreaseInOtherTests($increaseInOtherTests)
    {
        $this->container['increaseInOtherTests'] = $increaseInOtherTests;

        return $this;
    }

    /**
     * Gets increaseInPassedTests
     *
     * @return int
     */
    public function getIncreaseInPassedTests()
    {
        return $this->container['increaseInPassedTests'];
    }

    /**
     * Sets increaseInPassedTests
     *
     * @param int $increaseInPassedTests increaseInPassedTests
     *
     * @return $this
     */
    public function setIncreaseInPassedTests($increaseInPassedTests)
    {
        $this->container['increaseInPassedTests'] = $increaseInPassedTests;

        return $this;
    }

    /**
     * Gets increaseInTotalTests
     *
     * @return int
     */
    public function getIncreaseInTotalTests()
    {
        return $this->container['increaseInTotalTests'];
    }

    /**
     * Sets increaseInTotalTests
     *
     * @param int $increaseInTotalTests increaseInTotalTests
     *
     * @return $this
     */
    public function setIncreaseInTotalTests($increaseInTotalTests)
    {
        $this->container['increaseInTotalTests'] = $increaseInTotalTests;

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


