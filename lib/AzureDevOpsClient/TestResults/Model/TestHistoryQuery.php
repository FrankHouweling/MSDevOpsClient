<?php
/**
 * TestHistoryQuery
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestResults
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

namespace FrankHouweling\AzureDevOpsClient\TestResults\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\TestResults\ObjectSerializer;

/**
 * TestHistoryQuery Class Doc Comment
 *
 * @category Class
 * @description Filter to get TestCase result history.
 * @package  FrankHouweling\AzureDevOpsClient\TestResults
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestHistoryQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestHistoryQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'automatedTestName' => 'string',
        'branch' => 'string',
        'buildDefinitionId' => 'int',
        'continuationToken' => 'string',
        'groupBy' => 'string',
        'maxCompleteDate' => '\DateTime',
        'releaseEnvDefinitionId' => 'int',
        'resultsForGroup' => '\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestResultHistoryForGroup[]',
        'testCaseId' => 'int',
        'trendDays' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'automatedTestName' => null,
        'branch' => null,
        'buildDefinitionId' => 'int32',
        'continuationToken' => null,
        'groupBy' => null,
        'maxCompleteDate' => 'date-time',
        'releaseEnvDefinitionId' => 'int32',
        'resultsForGroup' => null,
        'testCaseId' => 'int32',
        'trendDays' => 'int32'
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
        'automatedTestName' => 'automatedTestName',
        'branch' => 'branch',
        'buildDefinitionId' => 'buildDefinitionId',
        'continuationToken' => 'continuationToken',
        'groupBy' => 'groupBy',
        'maxCompleteDate' => 'maxCompleteDate',
        'releaseEnvDefinitionId' => 'releaseEnvDefinitionId',
        'resultsForGroup' => 'resultsForGroup',
        'testCaseId' => 'testCaseId',
        'trendDays' => 'trendDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'automatedTestName' => 'setAutomatedTestName',
        'branch' => 'setBranch',
        'buildDefinitionId' => 'setBuildDefinitionId',
        'continuationToken' => 'setContinuationToken',
        'groupBy' => 'setGroupBy',
        'maxCompleteDate' => 'setMaxCompleteDate',
        'releaseEnvDefinitionId' => 'setReleaseEnvDefinitionId',
        'resultsForGroup' => 'setResultsForGroup',
        'testCaseId' => 'setTestCaseId',
        'trendDays' => 'setTrendDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'automatedTestName' => 'getAutomatedTestName',
        'branch' => 'getBranch',
        'buildDefinitionId' => 'getBuildDefinitionId',
        'continuationToken' => 'getContinuationToken',
        'groupBy' => 'getGroupBy',
        'maxCompleteDate' => 'getMaxCompleteDate',
        'releaseEnvDefinitionId' => 'getReleaseEnvDefinitionId',
        'resultsForGroup' => 'getResultsForGroup',
        'testCaseId' => 'getTestCaseId',
        'trendDays' => 'getTrendDays'
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

    const GROUP_BY_BRANCH = 'branch';
    const GROUP_BY_ENVIRONMENT = 'environment';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupByAllowableValues()
    {
        return [
            self::GROUP_BY_BRANCH,
            self::GROUP_BY_ENVIRONMENT,
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
        $this->container['automatedTestName'] = isset($data['automatedTestName']) ? $data['automatedTestName'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['buildDefinitionId'] = isset($data['buildDefinitionId']) ? $data['buildDefinitionId'] : null;
        $this->container['continuationToken'] = isset($data['continuationToken']) ? $data['continuationToken'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['maxCompleteDate'] = isset($data['maxCompleteDate']) ? $data['maxCompleteDate'] : null;
        $this->container['releaseEnvDefinitionId'] = isset($data['releaseEnvDefinitionId']) ? $data['releaseEnvDefinitionId'] : null;
        $this->container['resultsForGroup'] = isset($data['resultsForGroup']) ? $data['resultsForGroup'] : null;
        $this->container['testCaseId'] = isset($data['testCaseId']) ? $data['testCaseId'] : null;
        $this->container['trendDays'] = isset($data['trendDays']) ? $data['trendDays'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGroupByAllowableValues();
        if (!is_null($this->container['groupBy']) && !in_array($this->container['groupBy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'groupBy', must be one of '%s'",
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
     * Gets automatedTestName
     *
     * @return string
     */
    public function getAutomatedTestName()
    {
        return $this->container['automatedTestName'];
    }

    /**
     * Sets automatedTestName
     *
     * @param string $automatedTestName Automated test name of the TestCase.
     *
     * @return $this
     */
    public function setAutomatedTestName($automatedTestName)
    {
        $this->container['automatedTestName'] = $automatedTestName;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch Results to be get for a particular branches.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets buildDefinitionId
     *
     * @return int
     */
    public function getBuildDefinitionId()
    {
        return $this->container['buildDefinitionId'];
    }

    /**
     * Sets buildDefinitionId
     *
     * @param int $buildDefinitionId Get the results history only for this BuildDefinitionId. This to get used in query GroupBy should be Branch. If this is provided, Branch will have no use.
     *
     * @return $this
     */
    public function setBuildDefinitionId($buildDefinitionId)
    {
        $this->container['buildDefinitionId'] = $buildDefinitionId;

        return $this;
    }

    /**
     * Gets continuationToken
     *
     * @return string
     */
    public function getContinuationToken()
    {
        return $this->container['continuationToken'];
    }

    /**
     * Sets continuationToken
     *
     * @param string $continuationToken It will be filled by server. If not null means there are some results still to be get, and we need to call this REST API with this ContinuousToken. It is not supposed to be created (or altered, if received from server in last batch) by user.
     *
     * @return $this
     */
    public function setContinuationToken($continuationToken)
    {
        $this->container['continuationToken'] = $continuationToken;

        return $this;
    }

    /**
     * Gets groupBy
     *
     * @return string
     */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
     * Sets groupBy
     *
     * @param string $groupBy Group the result on the basis of TestResultGroupBy. This can be Branch, Environment or null(if results are fetched by BuildDefinitionId)
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $allowedValues = $this->getGroupByAllowableValues();
        if (!is_null($groupBy) && !in_array($groupBy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'groupBy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['groupBy'] = $groupBy;

        return $this;
    }

    /**
     * Gets maxCompleteDate
     *
     * @return \DateTime
     */
    public function getMaxCompleteDate()
    {
        return $this->container['maxCompleteDate'];
    }

    /**
     * Sets maxCompleteDate
     *
     * @param \DateTime $maxCompleteDate History to get between time interval MaxCompleteDate and  (MaxCompleteDate - TrendDays). Default is current date time.
     *
     * @return $this
     */
    public function setMaxCompleteDate($maxCompleteDate)
    {
        $this->container['maxCompleteDate'] = $maxCompleteDate;

        return $this;
    }

    /**
     * Gets releaseEnvDefinitionId
     *
     * @return int
     */
    public function getReleaseEnvDefinitionId()
    {
        return $this->container['releaseEnvDefinitionId'];
    }

    /**
     * Sets releaseEnvDefinitionId
     *
     * @param int $releaseEnvDefinitionId Get the results history only for this ReleaseEnvDefinitionId. This to get used in query GroupBy should be Environment.
     *
     * @return $this
     */
    public function setReleaseEnvDefinitionId($releaseEnvDefinitionId)
    {
        $this->container['releaseEnvDefinitionId'] = $releaseEnvDefinitionId;

        return $this;
    }

    /**
     * Gets resultsForGroup
     *
     * @return \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestResultHistoryForGroup[]
     */
    public function getResultsForGroup()
    {
        return $this->container['resultsForGroup'];
    }

    /**
     * Sets resultsForGroup
     *
     * @param \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestResultHistoryForGroup[] $resultsForGroup List of TestResultHistoryForGroup which are grouped by GroupBy
     *
     * @return $this
     */
    public function setResultsForGroup($resultsForGroup)
    {
        $this->container['resultsForGroup'] = $resultsForGroup;

        return $this;
    }

    /**
     * Gets testCaseId
     *
     * @return int
     */
    public function getTestCaseId()
    {
        return $this->container['testCaseId'];
    }

    /**
     * Sets testCaseId
     *
     * @param int $testCaseId Get the results history only for this testCaseId. This to get used in query to filter the result along with automatedtestname
     *
     * @return $this
     */
    public function setTestCaseId($testCaseId)
    {
        $this->container['testCaseId'] = $testCaseId;

        return $this;
    }

    /**
     * Gets trendDays
     *
     * @return int
     */
    public function getTrendDays()
    {
        return $this->container['trendDays'];
    }

    /**
     * Sets trendDays
     *
     * @param int $trendDays Number of days for which history to collect. Maximum supported value is 7 days. Default is 7 days.
     *
     * @return $this
     */
    public function setTrendDays($trendDays)
    {
        $this->container['trendDays'] = $trendDays;

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


