<?php
/**
 * DeploymentAuthorizationInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace FrankHouweling\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Release\ObjectSerializer;

/**
 * DeploymentAuthorizationInfo Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeploymentAuthorizationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeploymentAuthorizationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorizationHeaderFor' => 'string',
        'resources' => 'string[]',
        'tenantId' => 'string',
        'vstsAccessTokenKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorizationHeaderFor' => null,
        'resources' => null,
        'tenantId' => null,
        'vstsAccessTokenKey' => null
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
        'authorizationHeaderFor' => 'authorizationHeaderFor',
        'resources' => 'resources',
        'tenantId' => 'tenantId',
        'vstsAccessTokenKey' => 'vstsAccessTokenKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorizationHeaderFor' => 'setAuthorizationHeaderFor',
        'resources' => 'setResources',
        'tenantId' => 'setTenantId',
        'vstsAccessTokenKey' => 'setVstsAccessTokenKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorizationHeaderFor' => 'getAuthorizationHeaderFor',
        'resources' => 'getResources',
        'tenantId' => 'getTenantId',
        'vstsAccessTokenKey' => 'getVstsAccessTokenKey'
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

    const AUTHORIZATION_HEADER_FOR_REVALIDATE_APPROVER_IDENTITY = 'revalidateApproverIdentity';
    const AUTHORIZATION_HEADER_FOR_ON_BEHALF_OF = 'onBehalfOf';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorizationHeaderForAllowableValues()
    {
        return [
            self::AUTHORIZATION_HEADER_FOR_REVALIDATE_APPROVER_IDENTITY,
            self::AUTHORIZATION_HEADER_FOR_ON_BEHALF_OF,
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
        $this->container['authorizationHeaderFor'] = isset($data['authorizationHeaderFor']) ? $data['authorizationHeaderFor'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['vstsAccessTokenKey'] = isset($data['vstsAccessTokenKey']) ? $data['vstsAccessTokenKey'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthorizationHeaderForAllowableValues();
        if (!is_null($this->container['authorizationHeaderFor']) && !in_array($this->container['authorizationHeaderFor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authorizationHeaderFor', must be one of '%s'",
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
     * Gets authorizationHeaderFor
     *
     * @return string
     */
    public function getAuthorizationHeaderFor()
    {
        return $this->container['authorizationHeaderFor'];
    }

    /**
     * Sets authorizationHeaderFor
     *
     * @param string $authorizationHeaderFor Authorization header type, typically either RevalidateApproverIdentity or OnBehalfOf.
     *
     * @return $this
     */
    public function setAuthorizationHeaderFor($authorizationHeaderFor)
    {
        $allowedValues = $this->getAuthorizationHeaderForAllowableValues();
        if (!is_null($authorizationHeaderFor) && !in_array($authorizationHeaderFor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authorizationHeaderFor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authorizationHeaderFor'] = $authorizationHeaderFor;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[] $resources List of resources.
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets tenantId
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     *
     * @param string $tenantId ID of the tenant.
     *
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

        return $this;
    }

    /**
     * Gets vstsAccessTokenKey
     *
     * @return string
     */
    public function getVstsAccessTokenKey()
    {
        return $this->container['vstsAccessTokenKey'];
    }

    /**
     * Sets vstsAccessTokenKey
     *
     * @param string $vstsAccessTokenKey Access token key.
     *
     * @return $this
     */
    public function setVstsAccessTokenKey($vstsAccessTokenKey)
    {
        $this->container['vstsAccessTokenKey'] = $vstsAccessTokenKey;

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


