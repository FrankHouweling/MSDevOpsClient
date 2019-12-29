<?php
/**
 * DeploymentPoolSummary
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
 * DeploymentPoolSummary Class Doc Comment
 *
 * @category Class
 * @description Deployment pool summary.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeploymentPoolSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeploymentPoolSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deploymentGroups' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupReference[]',
        'offlineAgentsCount' => 'int',
        'onlineAgentsCount' => 'int',
        'pool' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference',
        'resource' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentResourceReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deploymentGroups' => null,
        'offlineAgentsCount' => 'int32',
        'onlineAgentsCount' => 'int32',
        'pool' => null,
        'resource' => null
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
        'deploymentGroups' => 'deploymentGroups',
        'offlineAgentsCount' => 'offlineAgentsCount',
        'onlineAgentsCount' => 'onlineAgentsCount',
        'pool' => 'pool',
        'resource' => 'resource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deploymentGroups' => 'setDeploymentGroups',
        'offlineAgentsCount' => 'setOfflineAgentsCount',
        'onlineAgentsCount' => 'setOnlineAgentsCount',
        'pool' => 'setPool',
        'resource' => 'setResource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deploymentGroups' => 'getDeploymentGroups',
        'offlineAgentsCount' => 'getOfflineAgentsCount',
        'onlineAgentsCount' => 'getOnlineAgentsCount',
        'pool' => 'getPool',
        'resource' => 'getResource'
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
        $this->container['deploymentGroups'] = isset($data['deploymentGroups']) ? $data['deploymentGroups'] : null;
        $this->container['offlineAgentsCount'] = isset($data['offlineAgentsCount']) ? $data['offlineAgentsCount'] : null;
        $this->container['onlineAgentsCount'] = isset($data['onlineAgentsCount']) ? $data['onlineAgentsCount'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
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
     * Gets deploymentGroups
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupReference[]
     */
    public function getDeploymentGroups()
    {
        return $this->container['deploymentGroups'];
    }

    /**
     * Sets deploymentGroups
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupReference[] $deploymentGroups List of deployment groups referring to the deployment pool.
     *
     * @return $this
     */
    public function setDeploymentGroups($deploymentGroups)
    {
        $this->container['deploymentGroups'] = $deploymentGroups;

        return $this;
    }

    /**
     * Gets offlineAgentsCount
     *
     * @return int
     */
    public function getOfflineAgentsCount()
    {
        return $this->container['offlineAgentsCount'];
    }

    /**
     * Sets offlineAgentsCount
     *
     * @param int $offlineAgentsCount Number of deployment agents that are offline.
     *
     * @return $this
     */
    public function setOfflineAgentsCount($offlineAgentsCount)
    {
        $this->container['offlineAgentsCount'] = $offlineAgentsCount;

        return $this;
    }

    /**
     * Gets onlineAgentsCount
     *
     * @return int
     */
    public function getOnlineAgentsCount()
    {
        return $this->container['onlineAgentsCount'];
    }

    /**
     * Sets onlineAgentsCount
     *
     * @param int $onlineAgentsCount Number of deployment agents that are online.
     *
     * @return $this
     */
    public function setOnlineAgentsCount($onlineAgentsCount)
    {
        $this->container['onlineAgentsCount'] = $onlineAgentsCount;

        return $this;
    }

    /**
     * Gets pool
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference $pool Deployment pool.
     *
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentResourceReference
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\EnvironmentResourceReference $resource Virtual machine Resource referring in pool.
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

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


