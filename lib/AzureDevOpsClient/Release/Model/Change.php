<?php
/**
 * Change
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
 * Change Class Doc Comment
 *
 * @category Class
 * @description Represents a change associated with a build.
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Change implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Change';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'author' => '\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef',
        'changeType' => 'string',
        'displayUri' => 'string',
        'id' => 'string',
        'location' => 'string',
        'message' => 'string',
        'pushedBy' => '\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef',
        'timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'author' => null,
        'changeType' => null,
        'displayUri' => null,
        'id' => null,
        'location' => null,
        'message' => null,
        'pushedBy' => null,
        'timestamp' => 'date-time'
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
        'author' => 'author',
        'changeType' => 'changeType',
        'displayUri' => 'displayUri',
        'id' => 'id',
        'location' => 'location',
        'message' => 'message',
        'pushedBy' => 'pushedBy',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'changeType' => 'setChangeType',
        'displayUri' => 'setDisplayUri',
        'id' => 'setId',
        'location' => 'setLocation',
        'message' => 'setMessage',
        'pushedBy' => 'setPushedBy',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'changeType' => 'getChangeType',
        'displayUri' => 'getDisplayUri',
        'id' => 'getId',
        'location' => 'getLocation',
        'message' => 'getMessage',
        'pushedBy' => 'getPushedBy',
        'timestamp' => 'getTimestamp'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['displayUri'] = isset($data['displayUri']) ? $data['displayUri'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['pushedBy'] = isset($data['pushedBy']) ? $data['pushedBy'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
     * Gets author
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef $author The author of the change.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string $changeType The type of source. \"TfsVersionControl\", \"TfsGit\", etc.
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;

        return $this;
    }

    /**
     * Gets displayUri
     *
     * @return string
     */
    public function getDisplayUri()
    {
        return $this->container['displayUri'];
    }

    /**
     * Sets displayUri
     *
     * @param string $displayUri The location of a user-friendly representation of the resource.
     *
     * @return $this
     */
    public function setDisplayUri($displayUri)
    {
        $this->container['displayUri'] = $displayUri;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Something that identifies the change. For a commit, this would be the SHA1. For a TFVC changeset, this would be the changeset id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location The location of the full representation of the resource.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A description of the change. This might be a commit message or changeset description.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets pushedBy
     *
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef
     */
    public function getPushedBy()
    {
        return $this->container['pushedBy'];
    }

    /**
     * Sets pushedBy
     *
     * @param \FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef $pushedBy The person or process that pushed the change.
     *
     * @return $this
     */
    public function setPushedBy($pushedBy)
    {
        $this->container['pushedBy'] = $pushedBy;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp A timestamp for the change.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


