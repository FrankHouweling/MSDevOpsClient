<?php
/**
 * TestSuiteCloneRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Test
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

namespace AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Test\ObjectSerializer;

/**
 * TestSuiteCloneRequest Class Doc Comment
 *
 * @category Class
 * @description Test suite clone request
 * @package  AzureDevOpsClient\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestSuiteCloneRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestSuiteCloneRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cloneOptions' => '\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CloneOptions',
        'destinationSuiteId' => 'int',
        'destinationSuiteProjectName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cloneOptions' => null,
        'destinationSuiteId' => 'int32',
        'destinationSuiteProjectName' => null
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
        'cloneOptions' => 'cloneOptions',
        'destinationSuiteId' => 'destinationSuiteId',
        'destinationSuiteProjectName' => 'destinationSuiteProjectName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloneOptions' => 'setCloneOptions',
        'destinationSuiteId' => 'setDestinationSuiteId',
        'destinationSuiteProjectName' => 'setDestinationSuiteProjectName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloneOptions' => 'getCloneOptions',
        'destinationSuiteId' => 'getDestinationSuiteId',
        'destinationSuiteProjectName' => 'getDestinationSuiteProjectName'
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
        $this->container['cloneOptions'] = isset($data['cloneOptions']) ? $data['cloneOptions'] : null;
        $this->container['destinationSuiteId'] = isset($data['destinationSuiteId']) ? $data['destinationSuiteId'] : null;
        $this->container['destinationSuiteProjectName'] = isset($data['destinationSuiteProjectName']) ? $data['destinationSuiteProjectName'] : null;
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
     * Gets cloneOptions
     *
     * @return \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CloneOptions
     */
    public function getCloneOptions()
    {
        return $this->container['cloneOptions'];
    }

    /**
     * Sets cloneOptions
     *
     * @param \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\CloneOptions $cloneOptions Clone options for cloning the test suite.
     *
     * @return $this
     */
    public function setCloneOptions($cloneOptions)
    {
        $this->container['cloneOptions'] = $cloneOptions;

        return $this;
    }

    /**
     * Gets destinationSuiteId
     *
     * @return int
     */
    public function getDestinationSuiteId()
    {
        return $this->container['destinationSuiteId'];
    }

    /**
     * Sets destinationSuiteId
     *
     * @param int $destinationSuiteId Suite id under which, we have to clone the suite.
     *
     * @return $this
     */
    public function setDestinationSuiteId($destinationSuiteId)
    {
        $this->container['destinationSuiteId'] = $destinationSuiteId;

        return $this;
    }

    /**
     * Gets destinationSuiteProjectName
     *
     * @return string
     */
    public function getDestinationSuiteProjectName()
    {
        return $this->container['destinationSuiteProjectName'];
    }

    /**
     * Sets destinationSuiteProjectName
     *
     * @param string $destinationSuiteProjectName Destination suite project name.
     *
     * @return $this
     */
    public function setDestinationSuiteProjectName($destinationSuiteProjectName)
    {
        $this->container['destinationSuiteProjectName'] = $destinationSuiteProjectName;

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

