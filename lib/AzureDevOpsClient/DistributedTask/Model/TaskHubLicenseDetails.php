<?php
/**
 * TaskHubLicenseDetails
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
 * TaskHubLicenseDetails Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskHubLicenseDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskHubLicenseDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enterpriseUsersCount' => 'int',
        'failedToReachAllProviders' => 'bool',
        'freeHostedLicenseCount' => 'int',
        'freeLicenseCount' => 'int',
        'hasLicenseCountEverUpdated' => 'bool',
        'hostedAgentMinutesFreeCount' => 'int',
        'hostedAgentMinutesUsedCount' => 'int',
        'hostedLicensesArePremium' => 'bool',
        'marketplacePurchasedHostedLicenses' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\MarketplacePurchasedLicense[]',
        'msdnUsersCount' => 'int',
        'purchasedHostedLicenseCount' => 'int',
        'purchasedLicenseCount' => 'int',
        'totalHostedLicenseCount' => 'int',
        'totalLicenseCount' => 'int',
        'totalPrivateLicenseCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enterpriseUsersCount' => 'int32',
        'failedToReachAllProviders' => null,
        'freeHostedLicenseCount' => 'int32',
        'freeLicenseCount' => 'int32',
        'hasLicenseCountEverUpdated' => null,
        'hostedAgentMinutesFreeCount' => 'int32',
        'hostedAgentMinutesUsedCount' => 'int32',
        'hostedLicensesArePremium' => null,
        'marketplacePurchasedHostedLicenses' => null,
        'msdnUsersCount' => 'int32',
        'purchasedHostedLicenseCount' => 'int32',
        'purchasedLicenseCount' => 'int32',
        'totalHostedLicenseCount' => 'int32',
        'totalLicenseCount' => 'int32',
        'totalPrivateLicenseCount' => 'int32'
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
        'enterpriseUsersCount' => 'enterpriseUsersCount',
        'failedToReachAllProviders' => 'failedToReachAllProviders',
        'freeHostedLicenseCount' => 'freeHostedLicenseCount',
        'freeLicenseCount' => 'freeLicenseCount',
        'hasLicenseCountEverUpdated' => 'hasLicenseCountEverUpdated',
        'hostedAgentMinutesFreeCount' => 'hostedAgentMinutesFreeCount',
        'hostedAgentMinutesUsedCount' => 'hostedAgentMinutesUsedCount',
        'hostedLicensesArePremium' => 'hostedLicensesArePremium',
        'marketplacePurchasedHostedLicenses' => 'marketplacePurchasedHostedLicenses',
        'msdnUsersCount' => 'msdnUsersCount',
        'purchasedHostedLicenseCount' => 'purchasedHostedLicenseCount',
        'purchasedLicenseCount' => 'purchasedLicenseCount',
        'totalHostedLicenseCount' => 'totalHostedLicenseCount',
        'totalLicenseCount' => 'totalLicenseCount',
        'totalPrivateLicenseCount' => 'totalPrivateLicenseCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterpriseUsersCount' => 'setEnterpriseUsersCount',
        'failedToReachAllProviders' => 'setFailedToReachAllProviders',
        'freeHostedLicenseCount' => 'setFreeHostedLicenseCount',
        'freeLicenseCount' => 'setFreeLicenseCount',
        'hasLicenseCountEverUpdated' => 'setHasLicenseCountEverUpdated',
        'hostedAgentMinutesFreeCount' => 'setHostedAgentMinutesFreeCount',
        'hostedAgentMinutesUsedCount' => 'setHostedAgentMinutesUsedCount',
        'hostedLicensesArePremium' => 'setHostedLicensesArePremium',
        'marketplacePurchasedHostedLicenses' => 'setMarketplacePurchasedHostedLicenses',
        'msdnUsersCount' => 'setMsdnUsersCount',
        'purchasedHostedLicenseCount' => 'setPurchasedHostedLicenseCount',
        'purchasedLicenseCount' => 'setPurchasedLicenseCount',
        'totalHostedLicenseCount' => 'setTotalHostedLicenseCount',
        'totalLicenseCount' => 'setTotalLicenseCount',
        'totalPrivateLicenseCount' => 'setTotalPrivateLicenseCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterpriseUsersCount' => 'getEnterpriseUsersCount',
        'failedToReachAllProviders' => 'getFailedToReachAllProviders',
        'freeHostedLicenseCount' => 'getFreeHostedLicenseCount',
        'freeLicenseCount' => 'getFreeLicenseCount',
        'hasLicenseCountEverUpdated' => 'getHasLicenseCountEverUpdated',
        'hostedAgentMinutesFreeCount' => 'getHostedAgentMinutesFreeCount',
        'hostedAgentMinutesUsedCount' => 'getHostedAgentMinutesUsedCount',
        'hostedLicensesArePremium' => 'getHostedLicensesArePremium',
        'marketplacePurchasedHostedLicenses' => 'getMarketplacePurchasedHostedLicenses',
        'msdnUsersCount' => 'getMsdnUsersCount',
        'purchasedHostedLicenseCount' => 'getPurchasedHostedLicenseCount',
        'purchasedLicenseCount' => 'getPurchasedLicenseCount',
        'totalHostedLicenseCount' => 'getTotalHostedLicenseCount',
        'totalLicenseCount' => 'getTotalLicenseCount',
        'totalPrivateLicenseCount' => 'getTotalPrivateLicenseCount'
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
        $this->container['enterpriseUsersCount'] = isset($data['enterpriseUsersCount']) ? $data['enterpriseUsersCount'] : null;
        $this->container['failedToReachAllProviders'] = isset($data['failedToReachAllProviders']) ? $data['failedToReachAllProviders'] : null;
        $this->container['freeHostedLicenseCount'] = isset($data['freeHostedLicenseCount']) ? $data['freeHostedLicenseCount'] : null;
        $this->container['freeLicenseCount'] = isset($data['freeLicenseCount']) ? $data['freeLicenseCount'] : null;
        $this->container['hasLicenseCountEverUpdated'] = isset($data['hasLicenseCountEverUpdated']) ? $data['hasLicenseCountEverUpdated'] : null;
        $this->container['hostedAgentMinutesFreeCount'] = isset($data['hostedAgentMinutesFreeCount']) ? $data['hostedAgentMinutesFreeCount'] : null;
        $this->container['hostedAgentMinutesUsedCount'] = isset($data['hostedAgentMinutesUsedCount']) ? $data['hostedAgentMinutesUsedCount'] : null;
        $this->container['hostedLicensesArePremium'] = isset($data['hostedLicensesArePremium']) ? $data['hostedLicensesArePremium'] : null;
        $this->container['marketplacePurchasedHostedLicenses'] = isset($data['marketplacePurchasedHostedLicenses']) ? $data['marketplacePurchasedHostedLicenses'] : null;
        $this->container['msdnUsersCount'] = isset($data['msdnUsersCount']) ? $data['msdnUsersCount'] : null;
        $this->container['purchasedHostedLicenseCount'] = isset($data['purchasedHostedLicenseCount']) ? $data['purchasedHostedLicenseCount'] : null;
        $this->container['purchasedLicenseCount'] = isset($data['purchasedLicenseCount']) ? $data['purchasedLicenseCount'] : null;
        $this->container['totalHostedLicenseCount'] = isset($data['totalHostedLicenseCount']) ? $data['totalHostedLicenseCount'] : null;
        $this->container['totalLicenseCount'] = isset($data['totalLicenseCount']) ? $data['totalLicenseCount'] : null;
        $this->container['totalPrivateLicenseCount'] = isset($data['totalPrivateLicenseCount']) ? $data['totalPrivateLicenseCount'] : null;
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
     * Gets enterpriseUsersCount
     *
     * @return int
     */
    public function getEnterpriseUsersCount()
    {
        return $this->container['enterpriseUsersCount'];
    }

    /**
     * Sets enterpriseUsersCount
     *
     * @param int $enterpriseUsersCount enterpriseUsersCount
     *
     * @return $this
     */
    public function setEnterpriseUsersCount($enterpriseUsersCount)
    {
        $this->container['enterpriseUsersCount'] = $enterpriseUsersCount;

        return $this;
    }

    /**
     * Gets failedToReachAllProviders
     *
     * @return bool
     */
    public function getFailedToReachAllProviders()
    {
        return $this->container['failedToReachAllProviders'];
    }

    /**
     * Sets failedToReachAllProviders
     *
     * @param bool $failedToReachAllProviders failedToReachAllProviders
     *
     * @return $this
     */
    public function setFailedToReachAllProviders($failedToReachAllProviders)
    {
        $this->container['failedToReachAllProviders'] = $failedToReachAllProviders;

        return $this;
    }

    /**
     * Gets freeHostedLicenseCount
     *
     * @return int
     */
    public function getFreeHostedLicenseCount()
    {
        return $this->container['freeHostedLicenseCount'];
    }

    /**
     * Sets freeHostedLicenseCount
     *
     * @param int $freeHostedLicenseCount freeHostedLicenseCount
     *
     * @return $this
     */
    public function setFreeHostedLicenseCount($freeHostedLicenseCount)
    {
        $this->container['freeHostedLicenseCount'] = $freeHostedLicenseCount;

        return $this;
    }

    /**
     * Gets freeLicenseCount
     *
     * @return int
     */
    public function getFreeLicenseCount()
    {
        return $this->container['freeLicenseCount'];
    }

    /**
     * Sets freeLicenseCount
     *
     * @param int $freeLicenseCount freeLicenseCount
     *
     * @return $this
     */
    public function setFreeLicenseCount($freeLicenseCount)
    {
        $this->container['freeLicenseCount'] = $freeLicenseCount;

        return $this;
    }

    /**
     * Gets hasLicenseCountEverUpdated
     *
     * @return bool
     */
    public function getHasLicenseCountEverUpdated()
    {
        return $this->container['hasLicenseCountEverUpdated'];
    }

    /**
     * Sets hasLicenseCountEverUpdated
     *
     * @param bool $hasLicenseCountEverUpdated hasLicenseCountEverUpdated
     *
     * @return $this
     */
    public function setHasLicenseCountEverUpdated($hasLicenseCountEverUpdated)
    {
        $this->container['hasLicenseCountEverUpdated'] = $hasLicenseCountEverUpdated;

        return $this;
    }

    /**
     * Gets hostedAgentMinutesFreeCount
     *
     * @return int
     */
    public function getHostedAgentMinutesFreeCount()
    {
        return $this->container['hostedAgentMinutesFreeCount'];
    }

    /**
     * Sets hostedAgentMinutesFreeCount
     *
     * @param int $hostedAgentMinutesFreeCount hostedAgentMinutesFreeCount
     *
     * @return $this
     */
    public function setHostedAgentMinutesFreeCount($hostedAgentMinutesFreeCount)
    {
        $this->container['hostedAgentMinutesFreeCount'] = $hostedAgentMinutesFreeCount;

        return $this;
    }

    /**
     * Gets hostedAgentMinutesUsedCount
     *
     * @return int
     */
    public function getHostedAgentMinutesUsedCount()
    {
        return $this->container['hostedAgentMinutesUsedCount'];
    }

    /**
     * Sets hostedAgentMinutesUsedCount
     *
     * @param int $hostedAgentMinutesUsedCount hostedAgentMinutesUsedCount
     *
     * @return $this
     */
    public function setHostedAgentMinutesUsedCount($hostedAgentMinutesUsedCount)
    {
        $this->container['hostedAgentMinutesUsedCount'] = $hostedAgentMinutesUsedCount;

        return $this;
    }

    /**
     * Gets hostedLicensesArePremium
     *
     * @return bool
     */
    public function getHostedLicensesArePremium()
    {
        return $this->container['hostedLicensesArePremium'];
    }

    /**
     * Sets hostedLicensesArePremium
     *
     * @param bool $hostedLicensesArePremium hostedLicensesArePremium
     *
     * @return $this
     */
    public function setHostedLicensesArePremium($hostedLicensesArePremium)
    {
        $this->container['hostedLicensesArePremium'] = $hostedLicensesArePremium;

        return $this;
    }

    /**
     * Gets marketplacePurchasedHostedLicenses
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\MarketplacePurchasedLicense[]
     */
    public function getMarketplacePurchasedHostedLicenses()
    {
        return $this->container['marketplacePurchasedHostedLicenses'];
    }

    /**
     * Sets marketplacePurchasedHostedLicenses
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\MarketplacePurchasedLicense[] $marketplacePurchasedHostedLicenses marketplacePurchasedHostedLicenses
     *
     * @return $this
     */
    public function setMarketplacePurchasedHostedLicenses($marketplacePurchasedHostedLicenses)
    {
        $this->container['marketplacePurchasedHostedLicenses'] = $marketplacePurchasedHostedLicenses;

        return $this;
    }

    /**
     * Gets msdnUsersCount
     *
     * @return int
     */
    public function getMsdnUsersCount()
    {
        return $this->container['msdnUsersCount'];
    }

    /**
     * Sets msdnUsersCount
     *
     * @param int $msdnUsersCount msdnUsersCount
     *
     * @return $this
     */
    public function setMsdnUsersCount($msdnUsersCount)
    {
        $this->container['msdnUsersCount'] = $msdnUsersCount;

        return $this;
    }

    /**
     * Gets purchasedHostedLicenseCount
     *
     * @return int
     */
    public function getPurchasedHostedLicenseCount()
    {
        return $this->container['purchasedHostedLicenseCount'];
    }

    /**
     * Sets purchasedHostedLicenseCount
     *
     * @param int $purchasedHostedLicenseCount Microsoft-hosted licenses purchased from VSTS directly.
     *
     * @return $this
     */
    public function setPurchasedHostedLicenseCount($purchasedHostedLicenseCount)
    {
        $this->container['purchasedHostedLicenseCount'] = $purchasedHostedLicenseCount;

        return $this;
    }

    /**
     * Gets purchasedLicenseCount
     *
     * @return int
     */
    public function getPurchasedLicenseCount()
    {
        return $this->container['purchasedLicenseCount'];
    }

    /**
     * Sets purchasedLicenseCount
     *
     * @param int $purchasedLicenseCount Self-hosted licenses purchased from VSTS directly.
     *
     * @return $this
     */
    public function setPurchasedLicenseCount($purchasedLicenseCount)
    {
        $this->container['purchasedLicenseCount'] = $purchasedLicenseCount;

        return $this;
    }

    /**
     * Gets totalHostedLicenseCount
     *
     * @return int
     */
    public function getTotalHostedLicenseCount()
    {
        return $this->container['totalHostedLicenseCount'];
    }

    /**
     * Sets totalHostedLicenseCount
     *
     * @param int $totalHostedLicenseCount totalHostedLicenseCount
     *
     * @return $this
     */
    public function setTotalHostedLicenseCount($totalHostedLicenseCount)
    {
        $this->container['totalHostedLicenseCount'] = $totalHostedLicenseCount;

        return $this;
    }

    /**
     * Gets totalLicenseCount
     *
     * @return int
     */
    public function getTotalLicenseCount()
    {
        return $this->container['totalLicenseCount'];
    }

    /**
     * Sets totalLicenseCount
     *
     * @param int $totalLicenseCount totalLicenseCount
     *
     * @return $this
     */
    public function setTotalLicenseCount($totalLicenseCount)
    {
        $this->container['totalLicenseCount'] = $totalLicenseCount;

        return $this;
    }

    /**
     * Gets totalPrivateLicenseCount
     *
     * @return int
     */
    public function getTotalPrivateLicenseCount()
    {
        return $this->container['totalPrivateLicenseCount'];
    }

    /**
     * Sets totalPrivateLicenseCount
     *
     * @param int $totalPrivateLicenseCount totalPrivateLicenseCount
     *
     * @return $this
     */
    public function setTotalPrivateLicenseCount($totalPrivateLicenseCount)
    {
        $this->container['totalPrivateLicenseCount'] = $totalPrivateLicenseCount;

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


