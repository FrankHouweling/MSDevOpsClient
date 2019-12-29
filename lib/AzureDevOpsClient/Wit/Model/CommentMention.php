<?php
/**
 * CommentMention
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
 * CommentMention Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentMention implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommentMention';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks',
        'url' => 'string',
        'artifactId' => 'string',
        'artifactType' => 'string',
        'commentId' => 'int',
        'targetId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'url' => null,
        'artifactId' => null,
        'artifactType' => null,
        'commentId' => 'int32',
        'targetId' => null
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
        'links' => '_links',
        'url' => 'url',
        'artifactId' => 'artifactId',
        'artifactType' => 'artifactType',
        'commentId' => 'commentId',
        'targetId' => 'targetId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'url' => 'setUrl',
        'artifactId' => 'setArtifactId',
        'artifactType' => 'setArtifactType',
        'commentId' => 'setCommentId',
        'targetId' => 'setTargetId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'url' => 'getUrl',
        'artifactId' => 'getArtifactId',
        'artifactType' => 'getArtifactType',
        'commentId' => 'getCommentId',
        'targetId' => 'getTargetId'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['commentId'] = isset($data['commentId']) ? $data['commentId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
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
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks $links Link references to related REST resources.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets artifactId
     *
     * @return string
     */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
     * Sets artifactId
     *
     * @param string $artifactId The artifact portion of the parsed text. (i.e. the work item's id)
     *
     * @return $this
     */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;

        return $this;
    }

    /**
     * Gets artifactType
     *
     * @return string
     */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
     * Sets artifactType
     *
     * @param string $artifactType The type the parser assigned to the mention. (i.e. person, work item, etc)
     *
     * @return $this
     */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;

        return $this;
    }

    /**
     * Gets commentId
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->container['commentId'];
    }

    /**
     * Sets commentId
     *
     * @param int $commentId The comment id of the mention.
     *
     * @return $this
     */
    public function setCommentId($commentId)
    {
        $this->container['commentId'] = $commentId;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string $targetId The resolved target of the mention. An example of this could be a user's tfid
     *
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

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


