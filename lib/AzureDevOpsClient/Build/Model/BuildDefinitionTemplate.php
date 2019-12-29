<?php
/**
 * BuildDefinitionTemplate
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Build
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

namespace FrankHouweling\AzureDevOpsClient\Build\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Build\ObjectSerializer;

/**
 * BuildDefinitionTemplate Class Doc Comment
 *
 * @category Class
 * @description Represents a template from which new build definitions can be created.
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildDefinitionTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildDefinitionTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'canDelete' => 'bool',
        'category' => 'string',
        'defaultHostedQueue' => 'string',
        'description' => 'string',
        'icons' => 'map[string,string]',
        'iconTaskId' => 'string',
        'id' => 'string',
        'name' => 'string',
        'template' => '\FrankHouweling\AzureDevOpsClient\Build\Model\BuildDefinition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'canDelete' => null,
        'category' => null,
        'defaultHostedQueue' => null,
        'description' => null,
        'icons' => null,
        'iconTaskId' => 'uuid',
        'id' => null,
        'name' => null,
        'template' => null
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
        'canDelete' => 'canDelete',
        'category' => 'category',
        'defaultHostedQueue' => 'defaultHostedQueue',
        'description' => 'description',
        'icons' => 'icons',
        'iconTaskId' => 'iconTaskId',
        'id' => 'id',
        'name' => 'name',
        'template' => 'template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canDelete' => 'setCanDelete',
        'category' => 'setCategory',
        'defaultHostedQueue' => 'setDefaultHostedQueue',
        'description' => 'setDescription',
        'icons' => 'setIcons',
        'iconTaskId' => 'setIconTaskId',
        'id' => 'setId',
        'name' => 'setName',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canDelete' => 'getCanDelete',
        'category' => 'getCategory',
        'defaultHostedQueue' => 'getDefaultHostedQueue',
        'description' => 'getDescription',
        'icons' => 'getIcons',
        'iconTaskId' => 'getIconTaskId',
        'id' => 'getId',
        'name' => 'getName',
        'template' => 'getTemplate'
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
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['defaultHostedQueue'] = isset($data['defaultHostedQueue']) ? $data['defaultHostedQueue'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['icons'] = isset($data['icons']) ? $data['icons'] : null;
        $this->container['iconTaskId'] = isset($data['iconTaskId']) ? $data['iconTaskId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
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
     * Gets canDelete
     *
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
     * Sets canDelete
     *
     * @param bool $canDelete Indicates whether the template can be deleted.
     *
     * @return $this
     */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category The template category.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets defaultHostedQueue
     *
     * @return string
     */
    public function getDefaultHostedQueue()
    {
        return $this->container['defaultHostedQueue'];
    }

    /**
     * Sets defaultHostedQueue
     *
     * @param string $defaultHostedQueue An optional hosted agent queue for the template to use by default.
     *
     * @return $this
     */
    public function setDefaultHostedQueue($defaultHostedQueue)
    {
        $this->container['defaultHostedQueue'] = $defaultHostedQueue;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the template.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icons
     *
     * @return map[string,string]
     */
    public function getIcons()
    {
        return $this->container['icons'];
    }

    /**
     * Sets icons
     *
     * @param map[string,string] $icons icons
     *
     * @return $this
     */
    public function setIcons($icons)
    {
        $this->container['icons'] = $icons;

        return $this;
    }

    /**
     * Gets iconTaskId
     *
     * @return string
     */
    public function getIconTaskId()
    {
        return $this->container['iconTaskId'];
    }

    /**
     * Sets iconTaskId
     *
     * @param string $iconTaskId The ID of the task whose icon is used when showing this template in the UI.
     *
     * @return $this
     */
    public function setIconTaskId($iconTaskId)
    {
        $this->container['iconTaskId'] = $iconTaskId;

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
     * @param string $id The ID of the template.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The name of the template.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\BuildDefinition
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\BuildDefinition $template The actual template.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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


