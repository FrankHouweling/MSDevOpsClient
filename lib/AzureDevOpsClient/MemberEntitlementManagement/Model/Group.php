<?php
/**
 * Group
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MemberEntitlementManagement
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

namespace AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model;

use \ArrayAccess;
use \AzureDevOpsClient\MemberEntitlementManagement\ObjectSerializer;

/**
 * Group Class Doc Comment
 *
 * @category Class
 * @description Project Group (e.g. Contributor, Reader etc.)
 * @package  AzureDevOpsClient\MemberEntitlementManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Group implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayName' => 'string',
        'groupType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayName' => null,
        'groupType' => null
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
        'displayName' => 'displayName',
        'groupType' => 'groupType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayName' => 'setDisplayName',
        'groupType' => 'setGroupType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayName' => 'getDisplayName',
        'groupType' => 'getGroupType'
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

    const GROUP_TYPE_PROJECT_STAKEHOLDER = 'projectStakeholder';
    const GROUP_TYPE_PROJECT_READER = 'projectReader';
    const GROUP_TYPE_PROJECT_CONTRIBUTOR = 'projectContributor';
    const GROUP_TYPE_PROJECT_ADMINISTRATOR = 'projectAdministrator';
    const GROUP_TYPE_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE_PROJECT_STAKEHOLDER,
            self::GROUP_TYPE_PROJECT_READER,
            self::GROUP_TYPE_PROJECT_CONTRIBUTOR,
            self::GROUP_TYPE_PROJECT_ADMINISTRATOR,
            self::GROUP_TYPE_CUSTOM,
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($this->container['groupType']) && !in_array($this->container['groupType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'groupType', must be one of '%s'",
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
     * @param string $displayName Display Name of the Group
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets groupType
     *
     * @return string
     */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
     * Sets groupType
     *
     * @param string $groupType Group Type
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($groupType) && !in_array($groupType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'groupType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['groupType'] = $groupType;

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

