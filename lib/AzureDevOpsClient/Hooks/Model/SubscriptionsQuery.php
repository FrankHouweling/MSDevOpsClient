<?php
/**
 * SubscriptionsQuery
 *
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ServiceHooks
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

namespace FrankHouweling\AzureDevOpsClient\Hooks\Model;

use \ArrayAccess;
use \FrankHouweling\AzureDevOpsClient\Hooks\ObjectSerializer;

/**
 * SubscriptionsQuery Class Doc Comment
 *
 * @category Class
 * @description Defines a query for service hook subscriptions.
 * @package  FrankHouweling\AzureDevOpsClient\Hooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionsQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionsQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumerActionId' => 'string',
        'consumerId' => 'string',
        'consumerInputFilters' => '\FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[]',
        'eventType' => 'string',
        'publisherId' => 'string',
        'publisherInputFilters' => '\FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[]',
        'results' => '\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[]',
        'subscriberId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumerActionId' => null,
        'consumerId' => null,
        'consumerInputFilters' => null,
        'eventType' => null,
        'publisherId' => null,
        'publisherInputFilters' => null,
        'results' => null,
        'subscriberId' => 'uuid'
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
        'consumerActionId' => 'consumerActionId',
        'consumerId' => 'consumerId',
        'consumerInputFilters' => 'consumerInputFilters',
        'eventType' => 'eventType',
        'publisherId' => 'publisherId',
        'publisherInputFilters' => 'publisherInputFilters',
        'results' => 'results',
        'subscriberId' => 'subscriberId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumerActionId' => 'setConsumerActionId',
        'consumerId' => 'setConsumerId',
        'consumerInputFilters' => 'setConsumerInputFilters',
        'eventType' => 'setEventType',
        'publisherId' => 'setPublisherId',
        'publisherInputFilters' => 'setPublisherInputFilters',
        'results' => 'setResults',
        'subscriberId' => 'setSubscriberId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumerActionId' => 'getConsumerActionId',
        'consumerId' => 'getConsumerId',
        'consumerInputFilters' => 'getConsumerInputFilters',
        'eventType' => 'getEventType',
        'publisherId' => 'getPublisherId',
        'publisherInputFilters' => 'getPublisherInputFilters',
        'results' => 'getResults',
        'subscriberId' => 'getSubscriberId'
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
        $this->container['consumerActionId'] = isset($data['consumerActionId']) ? $data['consumerActionId'] : null;
        $this->container['consumerId'] = isset($data['consumerId']) ? $data['consumerId'] : null;
        $this->container['consumerInputFilters'] = isset($data['consumerInputFilters']) ? $data['consumerInputFilters'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['publisherId'] = isset($data['publisherId']) ? $data['publisherId'] : null;
        $this->container['publisherInputFilters'] = isset($data['publisherInputFilters']) ? $data['publisherInputFilters'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
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
     * Gets consumerActionId
     *
     * @return string
     */
    public function getConsumerActionId()
    {
        return $this->container['consumerActionId'];
    }

    /**
     * Sets consumerActionId
     *
     * @param string $consumerActionId Optional consumer action id to restrict the results to (null for any)
     *
     * @return $this
     */
    public function setConsumerActionId($consumerActionId)
    {
        $this->container['consumerActionId'] = $consumerActionId;

        return $this;
    }

    /**
     * Gets consumerId
     *
     * @return string
     */
    public function getConsumerId()
    {
        return $this->container['consumerId'];
    }

    /**
     * Sets consumerId
     *
     * @param string $consumerId Optional consumer id to restrict the results to (null for any)
     *
     * @return $this
     */
    public function setConsumerId($consumerId)
    {
        $this->container['consumerId'] = $consumerId;

        return $this;
    }

    /**
     * Gets consumerInputFilters
     *
     * @return \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[]
     */
    public function getConsumerInputFilters()
    {
        return $this->container['consumerInputFilters'];
    }

    /**
     * Sets consumerInputFilters
     *
     * @param \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[] $consumerInputFilters Filter for subscription consumer inputs
     *
     * @return $this
     */
    public function setConsumerInputFilters($consumerInputFilters)
    {
        $this->container['consumerInputFilters'] = $consumerInputFilters;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string $eventType Optional event type id to restrict the results to (null for any)
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets publisherId
     *
     * @return string
     */
    public function getPublisherId()
    {
        return $this->container['publisherId'];
    }

    /**
     * Sets publisherId
     *
     * @param string $publisherId Optional publisher id to restrict the results to (null for any)
     *
     * @return $this
     */
    public function setPublisherId($publisherId)
    {
        $this->container['publisherId'] = $publisherId;

        return $this;
    }

    /**
     * Gets publisherInputFilters
     *
     * @return \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[]
     */
    public function getPublisherInputFilters()
    {
        return $this->container['publisherInputFilters'];
    }

    /**
     * Sets publisherInputFilters
     *
     * @param \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputFilter[] $publisherInputFilters Filter for subscription publisher inputs
     *
     * @return $this
     */
    public function setPublisherInputFilters($publisherInputFilters)
    {
        $this->container['publisherInputFilters'] = $publisherInputFilters;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[] $results Results from the query
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets subscriberId
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
     * Sets subscriberId
     *
     * @param string $subscriberId Optional subscriber filter.
     *
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;

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


