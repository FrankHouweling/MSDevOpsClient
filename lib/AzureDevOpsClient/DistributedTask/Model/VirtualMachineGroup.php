<?php
/**
 * VirtualMachineGroup
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
 * VirtualMachineGroup Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualMachineGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VirtualMachineGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdBy' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'createdOn' => '\DateTime',
        'environmentReference' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentReference',
        'id' => 'int',
        'lastModifiedBy' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef',
        'lastModifiedOn' => '\DateTime',
        'name' => 'string',
        'tags' => 'string[]',
        'type' => 'string',
        'poolId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdBy' => null,
        'createdOn' => 'date-time',
        'environmentReference' => null,
        'id' => 'int32',
        'lastModifiedBy' => null,
        'lastModifiedOn' => 'date-time',
        'name' => null,
        'tags' => null,
        'type' => null,
        'poolId' => 'int32'
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
        'createdBy' => 'createdBy',
        'createdOn' => 'createdOn',
        'environmentReference' => 'environmentReference',
        'id' => 'id',
        'lastModifiedBy' => 'lastModifiedBy',
        'lastModifiedOn' => 'lastModifiedOn',
        'name' => 'name',
        'tags' => 'tags',
        'type' => 'type',
        'poolId' => 'poolId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdBy' => 'setCreatedBy',
        'createdOn' => 'setCreatedOn',
        'environmentReference' => 'setEnvironmentReference',
        'id' => 'setId',
        'lastModifiedBy' => 'setLastModifiedBy',
        'lastModifiedOn' => 'setLastModifiedOn',
        'name' => 'setName',
        'tags' => 'setTags',
        'type' => 'setType',
        'poolId' => 'setPoolId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdBy' => 'getCreatedBy',
        'createdOn' => 'getCreatedOn',
        'environmentReference' => 'getEnvironmentReference',
        'id' => 'getId',
        'lastModifiedBy' => 'getLastModifiedBy',
        'lastModifiedOn' => 'getLastModifiedOn',
        'name' => 'getName',
        'tags' => 'getTags',
        'type' => 'getType',
        'poolId' => 'getPoolId'
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

    const TYPE_UNDEFINED = 'undefined';
    const TYPE_GENERIC = 'generic';
    const TYPE_VIRTUAL_MACHINE = 'virtualMachine';
    const TYPE_KUBERNETES = 'kubernetes';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNDEFINED,
            self::TYPE_GENERIC,
            self::TYPE_VIRTUAL_MACHINE,
            self::TYPE_KUBERNETES,
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['environmentReference'] = isset($data['environmentReference']) ? $data['environmentReference'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastModifiedBy'] = isset($data['lastModifiedBy']) ? $data['lastModifiedBy'] : null;
        $this->container['lastModifiedOn'] = isset($data['lastModifiedOn']) ? $data['lastModifiedOn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets createdBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     *
     * @param \DateTime $createdOn createdOn
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets environmentReference
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentReference
     */
    public function getEnvironmentReference()
    {
        return $this->container['environmentReference'];
    }

    /**
     * Sets environmentReference
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentReference $environmentReference environmentReference
     *
     * @return $this
     */
    public function setEnvironmentReference($environmentReference)
    {
        $this->container['environmentReference'] = $environmentReference;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lastModifiedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef
     */
    public function getLastModifiedBy()
    {
        return $this->container['lastModifiedBy'];
    }

    /**
     * Sets lastModifiedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef $lastModifiedBy lastModifiedBy
     *
     * @return $this
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->container['lastModifiedBy'] = $lastModifiedBy;

        return $this;
    }

    /**
     * Gets lastModifiedOn
     *
     * @return \DateTime
     */
    public function getLastModifiedOn()
    {
        return $this->container['lastModifiedOn'];
    }

    /**
     * Sets lastModifiedOn
     *
     * @param \DateTime $lastModifiedOn lastModifiedOn
     *
     * @return $this
     */
    public function setLastModifiedOn($lastModifiedOn)
    {
        $this->container['lastModifiedOn'] = $lastModifiedOn;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags Tags of the Environment Resource.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Environment resource type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets poolId
     *
     * @return int
     */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
     * Sets poolId
     *
     * @param int $poolId poolId
     *
     * @return $this
     */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;

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


