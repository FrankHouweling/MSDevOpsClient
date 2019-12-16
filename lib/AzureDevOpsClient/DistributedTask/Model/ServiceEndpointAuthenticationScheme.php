<?php
/**
 * ServiceEndpointAuthenticationScheme
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TaskAgent
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

namespace FrankHouweling\AzureDevOpsClient\DistributedTask\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\DistributedTask\ObjectSerializer;

/**
 * ServiceEndpointAuthenticationScheme Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceEndpointAuthenticationScheme implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceEndpointAuthenticationScheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorizationHeaders' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]',
        'clientCertificates' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\ClientCertificate[]',
        'displayName' => 'string',
        'inputDescriptors' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\InputDescriptor[]',
        'scheme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorizationHeaders' => null,
        'clientCertificates' => null,
        'displayName' => null,
        'inputDescriptors' => null,
        'scheme' => null
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
        'authorizationHeaders' => 'authorizationHeaders',
        'clientCertificates' => 'clientCertificates',
        'displayName' => 'displayName',
        'inputDescriptors' => 'inputDescriptors',
        'scheme' => 'scheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorizationHeaders' => 'setAuthorizationHeaders',
        'clientCertificates' => 'setClientCertificates',
        'displayName' => 'setDisplayName',
        'inputDescriptors' => 'setInputDescriptors',
        'scheme' => 'setScheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorizationHeaders' => 'getAuthorizationHeaders',
        'clientCertificates' => 'getClientCertificates',
        'displayName' => 'getDisplayName',
        'inputDescriptors' => 'getInputDescriptors',
        'scheme' => 'getScheme'
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
        $this->container['authorizationHeaders'] = isset($data['authorizationHeaders']) ? $data['authorizationHeaders'] : null;
        $this->container['clientCertificates'] = isset($data['clientCertificates']) ? $data['clientCertificates'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['inputDescriptors'] = isset($data['inputDescriptors']) ? $data['inputDescriptors'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
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
     * Gets authorizationHeaders
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]
     */
    public function getAuthorizationHeaders()
    {
        return $this->container['authorizationHeaders'];
    }

    /**
     * Sets authorizationHeaders
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[] $authorizationHeaders Gets or sets the authorization headers of service endpoint authentication scheme.
     *
     * @return $this
     */
    public function setAuthorizationHeaders($authorizationHeaders)
    {
        $this->container['authorizationHeaders'] = $authorizationHeaders;

        return $this;
    }

    /**
     * Gets clientCertificates
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\ClientCertificate[]
     */
    public function getClientCertificates()
    {
        return $this->container['clientCertificates'];
    }

    /**
     * Sets clientCertificates
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\ClientCertificate[] $clientCertificates Gets or sets the certificates of service endpoint authentication scheme.
     *
     * @return $this
     */
    public function setClientCertificates($clientCertificates)
    {
        $this->container['clientCertificates'] = $clientCertificates;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName Gets or sets the display name for the service endpoint authentication scheme.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets inputDescriptors
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\InputDescriptor[]
     */
    public function getInputDescriptors()
    {
        return $this->container['inputDescriptors'];
    }

    /**
     * Sets inputDescriptors
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\InputDescriptor[] $inputDescriptors Gets or sets the input descriptors for the service endpoint authentication scheme.
     *
     * @return $this
     */
    public function setInputDescriptors($inputDescriptors)
    {
        $this->container['inputDescriptors'] = $inputDescriptors;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string $scheme Gets or sets the scheme for service endpoint authentication.
     *
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

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

