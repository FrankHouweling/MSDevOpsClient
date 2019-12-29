<?php
/**
 * XamlBuildDefinition
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
 * XamlBuildDefinition Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\Build
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XamlBuildDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XamlBuildDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdDate' => '\DateTime',
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'project' => '\FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference',
        'queueStatus' => 'string',
        'revision' => 'int',
        'type' => 'string',
        'uri' => 'string',
        'url' => 'string',
        'links' => '\FrankHouweling\AzureDevOpsClient\Build\Model\ReferenceLinks',
        'batchSize' => 'int',
        'buildArgs' => 'string',
        'continuousIntegrationQuietPeriod' => 'int',
        'controller' => '\FrankHouweling\AzureDevOpsClient\Build\Model\BuildController',
        'createdOn' => '\DateTime',
        'defaultDropLocation' => 'string',
        'description' => 'string',
        'lastBuild' => '\FrankHouweling\AzureDevOpsClient\Build\Model\XamlBuildReference',
        'repository' => '\FrankHouweling\AzureDevOpsClient\Build\Model\BuildRepository',
        'supportedReasons' => 'string',
        'triggerType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdDate' => 'date-time',
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'project' => null,
        'queueStatus' => null,
        'revision' => 'int32',
        'type' => null,
        'uri' => null,
        'url' => null,
        'links' => null,
        'batchSize' => 'int32',
        'buildArgs' => null,
        'continuousIntegrationQuietPeriod' => 'int32',
        'controller' => null,
        'createdOn' => 'date-time',
        'defaultDropLocation' => null,
        'description' => null,
        'lastBuild' => null,
        'repository' => null,
        'supportedReasons' => null,
        'triggerType' => null
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
        'createdDate' => 'createdDate',
        'id' => 'id',
        'name' => 'name',
        'path' => 'path',
        'project' => 'project',
        'queueStatus' => 'queueStatus',
        'revision' => 'revision',
        'type' => 'type',
        'uri' => 'uri',
        'url' => 'url',
        'links' => '_links',
        'batchSize' => 'batchSize',
        'buildArgs' => 'buildArgs',
        'continuousIntegrationQuietPeriod' => 'continuousIntegrationQuietPeriod',
        'controller' => 'controller',
        'createdOn' => 'createdOn',
        'defaultDropLocation' => 'defaultDropLocation',
        'description' => 'description',
        'lastBuild' => 'lastBuild',
        'repository' => 'repository',
        'supportedReasons' => 'supportedReasons',
        'triggerType' => 'triggerType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdDate' => 'setCreatedDate',
        'id' => 'setId',
        'name' => 'setName',
        'path' => 'setPath',
        'project' => 'setProject',
        'queueStatus' => 'setQueueStatus',
        'revision' => 'setRevision',
        'type' => 'setType',
        'uri' => 'setUri',
        'url' => 'setUrl',
        'links' => 'setLinks',
        'batchSize' => 'setBatchSize',
        'buildArgs' => 'setBuildArgs',
        'continuousIntegrationQuietPeriod' => 'setContinuousIntegrationQuietPeriod',
        'controller' => 'setController',
        'createdOn' => 'setCreatedOn',
        'defaultDropLocation' => 'setDefaultDropLocation',
        'description' => 'setDescription',
        'lastBuild' => 'setLastBuild',
        'repository' => 'setRepository',
        'supportedReasons' => 'setSupportedReasons',
        'triggerType' => 'setTriggerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdDate' => 'getCreatedDate',
        'id' => 'getId',
        'name' => 'getName',
        'path' => 'getPath',
        'project' => 'getProject',
        'queueStatus' => 'getQueueStatus',
        'revision' => 'getRevision',
        'type' => 'getType',
        'uri' => 'getUri',
        'url' => 'getUrl',
        'links' => 'getLinks',
        'batchSize' => 'getBatchSize',
        'buildArgs' => 'getBuildArgs',
        'continuousIntegrationQuietPeriod' => 'getContinuousIntegrationQuietPeriod',
        'controller' => 'getController',
        'createdOn' => 'getCreatedOn',
        'defaultDropLocation' => 'getDefaultDropLocation',
        'description' => 'getDescription',
        'lastBuild' => 'getLastBuild',
        'repository' => 'getRepository',
        'supportedReasons' => 'getSupportedReasons',
        'triggerType' => 'getTriggerType'
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

    const QUEUE_STATUS_ENABLED = 'enabled';
    const QUEUE_STATUS_PAUSED = 'paused';
    const QUEUE_STATUS_DISABLED = 'disabled';
    const TYPE_XAML = 'xaml';
    const TYPE_BUILD = 'build';
    const SUPPORTED_REASONS_NONE = 'none';
    const SUPPORTED_REASONS_MANUAL = 'manual';
    const SUPPORTED_REASONS_INDIVIDUAL_CI = 'individualCI';
    const SUPPORTED_REASONS_BATCHED_CI = 'batchedCI';
    const SUPPORTED_REASONS_SCHEDULE = 'schedule';
    const SUPPORTED_REASONS_SCHEDULE_FORCED = 'scheduleForced';
    const SUPPORTED_REASONS_USER_CREATED = 'userCreated';
    const SUPPORTED_REASONS_VALIDATE_SHELVESET = 'validateShelveset';
    const SUPPORTED_REASONS_CHECK_IN_SHELVESET = 'checkInShelveset';
    const SUPPORTED_REASONS_PULL_REQUEST = 'pullRequest';
    const SUPPORTED_REASONS_BUILD_COMPLETION = 'buildCompletion';
    const SUPPORTED_REASONS_RESOURCE_TRIGGER = 'resourceTrigger';
    const SUPPORTED_REASONS_TRIGGERED = 'triggered';
    const SUPPORTED_REASONS_ALL = 'all';
    const TRIGGER_TYPE_NONE = 'none';
    const TRIGGER_TYPE_CONTINUOUS_INTEGRATION = 'continuousIntegration';
    const TRIGGER_TYPE_BATCHED_CONTINUOUS_INTEGRATION = 'batchedContinuousIntegration';
    const TRIGGER_TYPE_SCHEDULE = 'schedule';
    const TRIGGER_TYPE_GATED_CHECK_IN = 'gatedCheckIn';
    const TRIGGER_TYPE_BATCHED_GATED_CHECK_IN = 'batchedGatedCheckIn';
    const TRIGGER_TYPE_PULL_REQUEST = 'pullRequest';
    const TRIGGER_TYPE_BUILD_COMPLETION = 'buildCompletion';
    const TRIGGER_TYPE_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQueueStatusAllowableValues()
    {
        return [
            self::QUEUE_STATUS_ENABLED,
            self::QUEUE_STATUS_PAUSED,
            self::QUEUE_STATUS_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_XAML,
            self::TYPE_BUILD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSupportedReasonsAllowableValues()
    {
        return [
            self::SUPPORTED_REASONS_NONE,
            self::SUPPORTED_REASONS_MANUAL,
            self::SUPPORTED_REASONS_INDIVIDUAL_CI,
            self::SUPPORTED_REASONS_BATCHED_CI,
            self::SUPPORTED_REASONS_SCHEDULE,
            self::SUPPORTED_REASONS_SCHEDULE_FORCED,
            self::SUPPORTED_REASONS_USER_CREATED,
            self::SUPPORTED_REASONS_VALIDATE_SHELVESET,
            self::SUPPORTED_REASONS_CHECK_IN_SHELVESET,
            self::SUPPORTED_REASONS_PULL_REQUEST,
            self::SUPPORTED_REASONS_BUILD_COMPLETION,
            self::SUPPORTED_REASONS_RESOURCE_TRIGGER,
            self::SUPPORTED_REASONS_TRIGGERED,
            self::SUPPORTED_REASONS_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_NONE,
            self::TRIGGER_TYPE_CONTINUOUS_INTEGRATION,
            self::TRIGGER_TYPE_BATCHED_CONTINUOUS_INTEGRATION,
            self::TRIGGER_TYPE_SCHEDULE,
            self::TRIGGER_TYPE_GATED_CHECK_IN,
            self::TRIGGER_TYPE_BATCHED_GATED_CHECK_IN,
            self::TRIGGER_TYPE_PULL_REQUEST,
            self::TRIGGER_TYPE_BUILD_COMPLETION,
            self::TRIGGER_TYPE_ALL,
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
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['queueStatus'] = isset($data['queueStatus']) ? $data['queueStatus'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['batchSize'] = isset($data['batchSize']) ? $data['batchSize'] : null;
        $this->container['buildArgs'] = isset($data['buildArgs']) ? $data['buildArgs'] : null;
        $this->container['continuousIntegrationQuietPeriod'] = isset($data['continuousIntegrationQuietPeriod']) ? $data['continuousIntegrationQuietPeriod'] : null;
        $this->container['controller'] = isset($data['controller']) ? $data['controller'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['defaultDropLocation'] = isset($data['defaultDropLocation']) ? $data['defaultDropLocation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastBuild'] = isset($data['lastBuild']) ? $data['lastBuild'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['supportedReasons'] = isset($data['supportedReasons']) ? $data['supportedReasons'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getQueueStatusAllowableValues();
        if (!is_null($this->container['queueStatus']) && !in_array($this->container['queueStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'queueStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSupportedReasonsAllowableValues();
        if (!is_null($this->container['supportedReasons']) && !in_array($this->container['supportedReasons'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'supportedReasons', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTriggerTypeAllowableValues();
        if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
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
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate The date this version of the definition was created.
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param int $id The ID of the referenced definition.
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
     * @param string $name The name of the referenced definition.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $path The folder path of the definition.
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
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference $project A reference to the project.
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets queueStatus
     *
     * @return string
     */
    public function getQueueStatus()
    {
        return $this->container['queueStatus'];
    }

    /**
     * Sets queueStatus
     *
     * @param string $queueStatus A value that indicates whether builds can be queued against this definition.
     *
     * @return $this
     */
    public function setQueueStatus($queueStatus)
    {
        $allowedValues = $this->getQueueStatusAllowableValues();
        if (!is_null($queueStatus) && !in_array($queueStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'queueStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['queueStatus'] = $queueStatus;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision The definition revision number.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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
     * @param string $type The type of the definition.
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
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri The definition's URI.
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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
     * @param string $url The REST URL of the definition.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\ReferenceLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\ReferenceLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets batchSize
     *
     * @return int
     */
    public function getBatchSize()
    {
        return $this->container['batchSize'];
    }

    /**
     * Sets batchSize
     *
     * @param int $batchSize Batch size of the definition
     *
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->container['batchSize'] = $batchSize;

        return $this;
    }

    /**
     * Gets buildArgs
     *
     * @return string
     */
    public function getBuildArgs()
    {
        return $this->container['buildArgs'];
    }

    /**
     * Sets buildArgs
     *
     * @param string $buildArgs buildArgs
     *
     * @return $this
     */
    public function setBuildArgs($buildArgs)
    {
        $this->container['buildArgs'] = $buildArgs;

        return $this;
    }

    /**
     * Gets continuousIntegrationQuietPeriod
     *
     * @return int
     */
    public function getContinuousIntegrationQuietPeriod()
    {
        return $this->container['continuousIntegrationQuietPeriod'];
    }

    /**
     * Sets continuousIntegrationQuietPeriod
     *
     * @param int $continuousIntegrationQuietPeriod The continuous integration quiet period
     *
     * @return $this
     */
    public function setContinuousIntegrationQuietPeriod($continuousIntegrationQuietPeriod)
    {
        $this->container['continuousIntegrationQuietPeriod'] = $continuousIntegrationQuietPeriod;

        return $this;
    }

    /**
     * Gets controller
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\BuildController
     */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
     * Sets controller
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\BuildController $controller The build controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->container['controller'] = $controller;

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
     * @param \DateTime $createdOn The date this definition was created
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets defaultDropLocation
     *
     * @return string
     */
    public function getDefaultDropLocation()
    {
        return $this->container['defaultDropLocation'];
    }

    /**
     * Sets defaultDropLocation
     *
     * @param string $defaultDropLocation Default drop location for builds from this definition
     *
     * @return $this
     */
    public function setDefaultDropLocation($defaultDropLocation)
    {
        $this->container['defaultDropLocation'] = $defaultDropLocation;

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
     * @param string $description Description of the definition
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets lastBuild
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\XamlBuildReference
     */
    public function getLastBuild()
    {
        return $this->container['lastBuild'];
    }

    /**
     * Sets lastBuild
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\XamlBuildReference $lastBuild The last build on this definition
     *
     * @return $this
     */
    public function setLastBuild($lastBuild)
    {
        $this->container['lastBuild'] = $lastBuild;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return \FrankHouweling\AzureDevOpsClient\Build\Model\BuildRepository
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param \FrankHouweling\AzureDevOpsClient\Build\Model\BuildRepository $repository The repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

        return $this;
    }

    /**
     * Gets supportedReasons
     *
     * @return string
     */
    public function getSupportedReasons()
    {
        return $this->container['supportedReasons'];
    }

    /**
     * Sets supportedReasons
     *
     * @param string $supportedReasons The reasons supported by the template
     *
     * @return $this
     */
    public function setSupportedReasons($supportedReasons)
    {
        $allowedValues = $this->getSupportedReasonsAllowableValues();
        if (!is_null($supportedReasons) && !in_array($supportedReasons, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'supportedReasons', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['supportedReasons'] = $supportedReasons;

        return $this;
    }

    /**
     * Gets triggerType
     *
     * @return string
     */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
     * Sets triggerType
     *
     * @param string $triggerType How builds are triggered from this definition
     *
     * @return $this
     */
    public function setTriggerType($triggerType)
    {
        $allowedValues = $this->getTriggerTypeAllowableValues();
        if (!is_null($triggerType) && !in_array($triggerType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'triggerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['triggerType'] = $triggerType;

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


