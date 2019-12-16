<?php
/**
 * SupportedIde
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
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

namespace AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Git\ObjectSerializer;

/**
 * SupportedIde Class Doc Comment
 *
 * @category Class
 * @description Represents a Supported IDE entity.
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupportedIde implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupportedIde';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'downloadUrl' => 'string',
        'ideType' => 'string',
        'name' => 'string',
        'protocolHandlerUrl' => 'string',
        'supportedPlatforms' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'downloadUrl' => null,
        'ideType' => null,
        'name' => null,
        'protocolHandlerUrl' => null,
        'supportedPlatforms' => null
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
        'downloadUrl' => 'downloadUrl',
        'ideType' => 'ideType',
        'name' => 'name',
        'protocolHandlerUrl' => 'protocolHandlerUrl',
        'supportedPlatforms' => 'supportedPlatforms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downloadUrl' => 'setDownloadUrl',
        'ideType' => 'setIdeType',
        'name' => 'setName',
        'protocolHandlerUrl' => 'setProtocolHandlerUrl',
        'supportedPlatforms' => 'setSupportedPlatforms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downloadUrl' => 'getDownloadUrl',
        'ideType' => 'getIdeType',
        'name' => 'getName',
        'protocolHandlerUrl' => 'getProtocolHandlerUrl',
        'supportedPlatforms' => 'getSupportedPlatforms'
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

    const IDE_TYPE_UNKNOWN = 'unknown';
    const IDE_TYPE_ANDROID_STUDIO = 'androidStudio';
    const IDE_TYPE_APP_CODE = 'appCode';
    const IDE_TYPE_C_LION = 'cLion';
    const IDE_TYPE_DATA_GRIP = 'dataGrip';
    const IDE_TYPE_ECLIPSE = 'eclipse';
    const IDE_TYPE_INTELLI_J = 'intelliJ';
    const IDE_TYPE_MPS = 'mps';
    const IDE_TYPE_PHP_STORM = 'phpStorm';
    const IDE_TYPE_PY_CHARM = 'pyCharm';
    const IDE_TYPE_RUBY_MINE = 'rubyMine';
    const IDE_TYPE_TOWER = 'tower';
    const IDE_TYPE_VISUAL_STUDIO = 'visualStudio';
    const IDE_TYPE_VS_CODE = 'vsCode';
    const IDE_TYPE_WEB_STORM = 'webStorm';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdeTypeAllowableValues()
    {
        return [
            self::IDE_TYPE_UNKNOWN,
            self::IDE_TYPE_ANDROID_STUDIO,
            self::IDE_TYPE_APP_CODE,
            self::IDE_TYPE_C_LION,
            self::IDE_TYPE_DATA_GRIP,
            self::IDE_TYPE_ECLIPSE,
            self::IDE_TYPE_INTELLI_J,
            self::IDE_TYPE_MPS,
            self::IDE_TYPE_PHP_STORM,
            self::IDE_TYPE_PY_CHARM,
            self::IDE_TYPE_RUBY_MINE,
            self::IDE_TYPE_TOWER,
            self::IDE_TYPE_VISUAL_STUDIO,
            self::IDE_TYPE_VS_CODE,
            self::IDE_TYPE_WEB_STORM,
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
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['ideType'] = isset($data['ideType']) ? $data['ideType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocolHandlerUrl'] = isset($data['protocolHandlerUrl']) ? $data['protocolHandlerUrl'] : null;
        $this->container['supportedPlatforms'] = isset($data['supportedPlatforms']) ? $data['supportedPlatforms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIdeTypeAllowableValues();
        if (!is_null($this->container['ideType']) && !in_array($this->container['ideType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ideType', must be one of '%s'",
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
     * Gets downloadUrl
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
     * Sets downloadUrl
     *
     * @param string $downloadUrl The download URL for the IDE.
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * Gets ideType
     *
     * @return string
     */
    public function getIdeType()
    {
        return $this->container['ideType'];
    }

    /**
     * Sets ideType
     *
     * @param string $ideType The type of the IDE.
     *
     * @return $this
     */
    public function setIdeType($ideType)
    {
        $allowedValues = $this->getIdeTypeAllowableValues();
        if (!is_null($ideType) && !in_array($ideType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ideType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ideType'] = $ideType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the IDE.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets protocolHandlerUrl
     *
     * @return string
     */
    public function getProtocolHandlerUrl()
    {
        return $this->container['protocolHandlerUrl'];
    }

    /**
     * Sets protocolHandlerUrl
     *
     * @param string $protocolHandlerUrl The URL to open the protocol handler for the IDE.
     *
     * @return $this
     */
    public function setProtocolHandlerUrl($protocolHandlerUrl)
    {
        $this->container['protocolHandlerUrl'] = $protocolHandlerUrl;

        return $this;
    }

    /**
     * Gets supportedPlatforms
     *
     * @return string[]
     */
    public function getSupportedPlatforms()
    {
        return $this->container['supportedPlatforms'];
    }

    /**
     * Sets supportedPlatforms
     *
     * @param string[] $supportedPlatforms A list of SupportedPlatforms.
     *
     * @return $this
     */
    public function setSupportedPlatforms($supportedPlatforms)
    {
        $this->container['supportedPlatforms'] = $supportedPlatforms;

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

