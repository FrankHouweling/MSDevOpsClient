<?php
/**
 * ReleaseApprovalPendingEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  AzureDevOpsClient\Release
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

namespace AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model;

use \ArrayAccess;
use \AzureDevOpsClient\Release\ObjectSerializer;

/**
 * ReleaseApprovalPendingEvent Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseApprovalPendingEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseApprovalPendingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approval' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval',
        'approvalOptions' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ApprovalOptions',
        'completedApprovals' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]',
        'definitionName' => 'string',
        'deployment' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment',
        'environmentId' => 'int',
        'environmentName' => 'string',
        'environments' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment[]',
        'isMultipleRankApproval' => 'bool',
        'pendingApprovals' => '\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]',
        'releaseCreator' => 'string',
        'releaseName' => 'string',
        'title' => 'string',
        'webAccessUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approval' => null,
        'approvalOptions' => null,
        'completedApprovals' => null,
        'definitionName' => null,
        'deployment' => null,
        'environmentId' => 'int32',
        'environmentName' => null,
        'environments' => null,
        'isMultipleRankApproval' => null,
        'pendingApprovals' => null,
        'releaseCreator' => null,
        'releaseName' => null,
        'title' => null,
        'webAccessUri' => null
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
        'approval' => 'approval',
        'approvalOptions' => 'approvalOptions',
        'completedApprovals' => 'completedApprovals',
        'definitionName' => 'definitionName',
        'deployment' => 'deployment',
        'environmentId' => 'environmentId',
        'environmentName' => 'environmentName',
        'environments' => 'environments',
        'isMultipleRankApproval' => 'isMultipleRankApproval',
        'pendingApprovals' => 'pendingApprovals',
        'releaseCreator' => 'releaseCreator',
        'releaseName' => 'releaseName',
        'title' => 'title',
        'webAccessUri' => 'webAccessUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approval' => 'setApproval',
        'approvalOptions' => 'setApprovalOptions',
        'completedApprovals' => 'setCompletedApprovals',
        'definitionName' => 'setDefinitionName',
        'deployment' => 'setDeployment',
        'environmentId' => 'setEnvironmentId',
        'environmentName' => 'setEnvironmentName',
        'environments' => 'setEnvironments',
        'isMultipleRankApproval' => 'setIsMultipleRankApproval',
        'pendingApprovals' => 'setPendingApprovals',
        'releaseCreator' => 'setReleaseCreator',
        'releaseName' => 'setReleaseName',
        'title' => 'setTitle',
        'webAccessUri' => 'setWebAccessUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approval' => 'getApproval',
        'approvalOptions' => 'getApprovalOptions',
        'completedApprovals' => 'getCompletedApprovals',
        'definitionName' => 'getDefinitionName',
        'deployment' => 'getDeployment',
        'environmentId' => 'getEnvironmentId',
        'environmentName' => 'getEnvironmentName',
        'environments' => 'getEnvironments',
        'isMultipleRankApproval' => 'getIsMultipleRankApproval',
        'pendingApprovals' => 'getPendingApprovals',
        'releaseCreator' => 'getReleaseCreator',
        'releaseName' => 'getReleaseName',
        'title' => 'getTitle',
        'webAccessUri' => 'getWebAccessUri'
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
        $this->container['approval'] = isset($data['approval']) ? $data['approval'] : null;
        $this->container['approvalOptions'] = isset($data['approvalOptions']) ? $data['approvalOptions'] : null;
        $this->container['completedApprovals'] = isset($data['completedApprovals']) ? $data['completedApprovals'] : null;
        $this->container['definitionName'] = isset($data['definitionName']) ? $data['definitionName'] : null;
        $this->container['deployment'] = isset($data['deployment']) ? $data['deployment'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['environmentName'] = isset($data['environmentName']) ? $data['environmentName'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['isMultipleRankApproval'] = isset($data['isMultipleRankApproval']) ? $data['isMultipleRankApproval'] : null;
        $this->container['pendingApprovals'] = isset($data['pendingApprovals']) ? $data['pendingApprovals'] : null;
        $this->container['releaseCreator'] = isset($data['releaseCreator']) ? $data['releaseCreator'] : null;
        $this->container['releaseName'] = isset($data['releaseName']) ? $data['releaseName'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['webAccessUri'] = isset($data['webAccessUri']) ? $data['webAccessUri'] : null;
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
     * Gets approval
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval
     */
    public function getApproval()
    {
        return $this->container['approval'];
    }

    /**
     * Sets approval
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval $approval approval
     *
     * @return $this
     */
    public function setApproval($approval)
    {
        $this->container['approval'] = $approval;

        return $this;
    }

    /**
     * Gets approvalOptions
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ApprovalOptions
     */
    public function getApprovalOptions()
    {
        return $this->container['approvalOptions'];
    }

    /**
     * Sets approvalOptions
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ApprovalOptions $approvalOptions approvalOptions
     *
     * @return $this
     */
    public function setApprovalOptions($approvalOptions)
    {
        $this->container['approvalOptions'] = $approvalOptions;

        return $this;
    }

    /**
     * Gets completedApprovals
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]
     */
    public function getCompletedApprovals()
    {
        return $this->container['completedApprovals'];
    }

    /**
     * Sets completedApprovals
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[] $completedApprovals completedApprovals
     *
     * @return $this
     */
    public function setCompletedApprovals($completedApprovals)
    {
        $this->container['completedApprovals'] = $completedApprovals;

        return $this;
    }

    /**
     * Gets definitionName
     *
     * @return string
     */
    public function getDefinitionName()
    {
        return $this->container['definitionName'];
    }

    /**
     * Sets definitionName
     *
     * @param string $definitionName definitionName
     *
     * @return $this
     */
    public function setDefinitionName($definitionName)
    {
        $this->container['definitionName'] = $definitionName;

        return $this;
    }

    /**
     * Gets deployment
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment
     */
    public function getDeployment()
    {
        return $this->container['deployment'];
    }

    /**
     * Sets deployment
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment $deployment deployment
     *
     * @return $this
     */
    public function setDeployment($deployment)
    {
        $this->container['deployment'] = $deployment;

        return $this;
    }

    /**
     * Gets environmentId
     *
     * @return int
     */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
     * Sets environmentId
     *
     * @param int $environmentId environmentId
     *
     * @return $this
     */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;

        return $this;
    }

    /**
     * Gets environmentName
     *
     * @return string
     */
    public function getEnvironmentName()
    {
        return $this->container['environmentName'];
    }

    /**
     * Sets environmentName
     *
     * @param string $environmentName environmentName
     *
     * @return $this
     */
    public function setEnvironmentName($environmentName)
    {
        $this->container['environmentName'] = $environmentName;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment[]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment[] $environments environments
     *
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
    }

    /**
     * Gets isMultipleRankApproval
     *
     * @return bool
     */
    public function getIsMultipleRankApproval()
    {
        return $this->container['isMultipleRankApproval'];
    }

    /**
     * Sets isMultipleRankApproval
     *
     * @param bool $isMultipleRankApproval isMultipleRankApproval
     *
     * @return $this
     */
    public function setIsMultipleRankApproval($isMultipleRankApproval)
    {
        $this->container['isMultipleRankApproval'] = $isMultipleRankApproval;

        return $this;
    }

    /**
     * Gets pendingApprovals
     *
     * @return \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]
     */
    public function getPendingApprovals()
    {
        return $this->container['pendingApprovals'];
    }

    /**
     * Sets pendingApprovals
     *
     * @param \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[] $pendingApprovals pendingApprovals
     *
     * @return $this
     */
    public function setPendingApprovals($pendingApprovals)
    {
        $this->container['pendingApprovals'] = $pendingApprovals;

        return $this;
    }

    /**
     * Gets releaseCreator
     *
     * @return string
     */
    public function getReleaseCreator()
    {
        return $this->container['releaseCreator'];
    }

    /**
     * Sets releaseCreator
     *
     * @param string $releaseCreator releaseCreator
     *
     * @return $this
     */
    public function setReleaseCreator($releaseCreator)
    {
        $this->container['releaseCreator'] = $releaseCreator;

        return $this;
    }

    /**
     * Gets releaseName
     *
     * @return string
     */
    public function getReleaseName()
    {
        return $this->container['releaseName'];
    }

    /**
     * Sets releaseName
     *
     * @param string $releaseName releaseName
     *
     * @return $this
     */
    public function setReleaseName($releaseName)
    {
        $this->container['releaseName'] = $releaseName;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets webAccessUri
     *
     * @return string
     */
    public function getWebAccessUri()
    {
        return $this->container['webAccessUri'];
    }

    /**
     * Sets webAccessUri
     *
     * @param string $webAccessUri webAccessUri
     *
     * @return $this
     */
    public function setWebAccessUri($webAccessUri)
    {
        $this->container['webAccessUri'] = $webAccessUri;

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

