<?php
/**
 * WikiResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Search
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Search
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

namespace FrankHouweling\AzureDevOpsClient\Search\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Search\ObjectSerializer;

/**
 * WikiResult Class Doc Comment
 *
 * @category Class
 * @description Defines the wiki result that matched a wiki search request.
 * @package  FrankHouweling\AzureDevOpsClient\Search
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WikiResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WikiResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collection' => '\FrankHouweling\AzureDevOpsClient\Search\Model\Collection',
        'contentId' => 'string',
        'fileName' => 'string',
        'hits' => '\FrankHouweling\AzureDevOpsClient\Search\Model\WikiHit[]',
        'path' => 'string',
        'project' => '\FrankHouweling\AzureDevOpsClient\Search\Model\ProjectReference',
        'wiki' => '\FrankHouweling\AzureDevOpsClient\Search\Model\Wiki'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collection' => null,
        'contentId' => null,
        'fileName' => null,
        'hits' => null,
        'path' => null,
        'project' => null,
        'wiki' => null
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
        'collection' => 'collection',
        'contentId' => 'contentId',
        'fileName' => 'fileName',
        'hits' => 'hits',
        'path' => 'path',
        'project' => 'project',
        'wiki' => 'wiki'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collection' => 'setCollection',
        'contentId' => 'setContentId',
        'fileName' => 'setFileName',
        'hits' => 'setHits',
        'path' => 'setPath',
        'project' => 'setProject',
        'wiki' => 'setWiki'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collection' => 'getCollection',
        'contentId' => 'getContentId',
        'fileName' => 'getFileName',
        'hits' => 'getHits',
        'path' => 'getPath',
        'project' => 'getProject',
        'wiki' => 'getWiki'
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
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['contentId'] = isset($data['contentId']) ? $data['contentId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['hits'] = isset($data['hits']) ? $data['hits'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['wiki'] = isset($data['wiki']) ? $data['wiki'] : null;
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
     * Gets collection
     *
     * @return \FrankHouweling\AzureDevOpsClient\Search\Model\Collection
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param \FrankHouweling\AzureDevOpsClient\Search\Model\Collection $collection Collection of the result file.
     *
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets contentId
     *
     * @return string
     */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
     * Sets contentId
     *
     * @param string $contentId ContentId of the result file.
     *
     * @return $this
     */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName Name of the result file.
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets hits
     *
     * @return \FrankHouweling\AzureDevOpsClient\Search\Model\WikiHit[]
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * Sets hits
     *
     * @param \FrankHouweling\AzureDevOpsClient\Search\Model\WikiHit[] $hits Highlighted snippets of fields that match the search request. The list is sorted by relevance of the snippets.
     *
     * @return $this
     */
    public function setHits($hits)
    {
        $this->container['hits'] = $hits;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path Path at which result file is present.
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \FrankHouweling\AzureDevOpsClient\Search\Model\ProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\Search\Model\ProjectReference $project Project details of the wiki document.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets wiki
     *
     * @return \FrankHouweling\AzureDevOpsClient\Search\Model\Wiki
     */
    public function getWiki()
    {
        return $this->container['wiki'];
    }

    /**
     * Sets wiki
     *
     * @param \FrankHouweling\AzureDevOpsClient\Search\Model\Wiki $wiki Wiki information for the result.
     *
     * @return $this
     */
    public function setWiki($wiki)
    {
        $this->container['wiki'] = $wiki;

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


