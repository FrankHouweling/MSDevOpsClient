<?php
/**
 * ChangeList
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
 * ChangeList Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChangeList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChangeList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allChangesIncluded' => 'bool',
        'changeCounts' => 'map[string,int]',
        'changes' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\Change[]',
        'comment' => 'string',
        'commentTruncated' => 'bool',
        'creationDate' => '\DateTime',
        'notes' => '\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CheckinNote[]',
        'owner' => 'string',
        'ownerDisplayName' => 'string',
        'ownerId' => 'string',
        'sortDate' => '\DateTime',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allChangesIncluded' => null,
        'changeCounts' => 'int32',
        'changes' => null,
        'comment' => null,
        'commentTruncated' => null,
        'creationDate' => 'date-time',
        'notes' => null,
        'owner' => null,
        'ownerDisplayName' => null,
        'ownerId' => 'uuid',
        'sortDate' => 'date-time',
        'version' => null
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
        'allChangesIncluded' => 'allChangesIncluded',
        'changeCounts' => 'changeCounts',
        'changes' => 'changes',
        'comment' => 'comment',
        'commentTruncated' => 'commentTruncated',
        'creationDate' => 'creationDate',
        'notes' => 'notes',
        'owner' => 'owner',
        'ownerDisplayName' => 'ownerDisplayName',
        'ownerId' => 'ownerId',
        'sortDate' => 'sortDate',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allChangesIncluded' => 'setAllChangesIncluded',
        'changeCounts' => 'setChangeCounts',
        'changes' => 'setChanges',
        'comment' => 'setComment',
        'commentTruncated' => 'setCommentTruncated',
        'creationDate' => 'setCreationDate',
        'notes' => 'setNotes',
        'owner' => 'setOwner',
        'ownerDisplayName' => 'setOwnerDisplayName',
        'ownerId' => 'setOwnerId',
        'sortDate' => 'setSortDate',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allChangesIncluded' => 'getAllChangesIncluded',
        'changeCounts' => 'getChangeCounts',
        'changes' => 'getChanges',
        'comment' => 'getComment',
        'commentTruncated' => 'getCommentTruncated',
        'creationDate' => 'getCreationDate',
        'notes' => 'getNotes',
        'owner' => 'getOwner',
        'ownerDisplayName' => 'getOwnerDisplayName',
        'ownerId' => 'getOwnerId',
        'sortDate' => 'getSortDate',
        'version' => 'getVersion'
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
        $this->container['allChangesIncluded'] = isset($data['allChangesIncluded']) ? $data['allChangesIncluded'] : null;
        $this->container['changeCounts'] = isset($data['changeCounts']) ? $data['changeCounts'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['commentTruncated'] = isset($data['commentTruncated']) ? $data['commentTruncated'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerDisplayName'] = isset($data['ownerDisplayName']) ? $data['ownerDisplayName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['sortDate'] = isset($data['sortDate']) ? $data['sortDate'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * Gets allChangesIncluded
     *
     * @return bool
     */
    public function getAllChangesIncluded()
    {
        return $this->container['allChangesIncluded'];
    }

    /**
     * Sets allChangesIncluded
     *
     * @param bool $allChangesIncluded allChangesIncluded
     *
     * @return $this
     */
    public function setAllChangesIncluded($allChangesIncluded)
    {
        $this->container['allChangesIncluded'] = $allChangesIncluded;

        return $this;
    }

    /**
     * Gets changeCounts
     *
     * @return map[string,int]
     */
    public function getChangeCounts()
    {
        return $this->container['changeCounts'];
    }

    /**
     * Sets changeCounts
     *
     * @param map[string,int] $changeCounts changeCounts
     *
     * @return $this
     */
    public function setChangeCounts($changeCounts)
    {
        $this->container['changeCounts'] = $changeCounts;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\Change[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\Change[] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets commentTruncated
     *
     * @return bool
     */
    public function getCommentTruncated()
    {
        return $this->container['commentTruncated'];
    }

    /**
     * Sets commentTruncated
     *
     * @param bool $commentTruncated commentTruncated
     *
     * @return $this
     */
    public function setCommentTruncated($commentTruncated)
    {
        $this->container['commentTruncated'] = $commentTruncated;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CheckinNote[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CheckinNote[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets ownerDisplayName
     *
     * @return string
     */
    public function getOwnerDisplayName()
    {
        return $this->container['ownerDisplayName'];
    }

    /**
     * Sets ownerDisplayName
     *
     * @param string $ownerDisplayName ownerDisplayName
     *
     * @return $this
     */
    public function setOwnerDisplayName($ownerDisplayName)
    {
        $this->container['ownerDisplayName'] = $ownerDisplayName;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string $ownerId ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets sortDate
     *
     * @return \DateTime
     */
    public function getSortDate()
    {
        return $this->container['sortDate'];
    }

    /**
     * Sets sortDate
     *
     * @param \DateTime $sortDate sortDate
     *
     * @return $this
     */
    public function setSortDate($sortDate)
    {
        $this->container['sortDate'] = $sortDate;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

