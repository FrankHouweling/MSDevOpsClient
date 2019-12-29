<?php
/**
 * DataSourceBindingBase
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
 * DataSourceBindingBase Class Doc Comment
 *
 * @category Class
 * @description Represents binding of data source for the service endpoint request.
 * @package  FrankHouweling\AzureDevOpsClient\DistributedTask
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourceBindingBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSourceBindingBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'callbackContextTemplate' => 'string',
        'callbackRequiredTemplate' => 'string',
        'dataSourceName' => 'string',
        'endpointId' => 'string',
        'endpointUrl' => 'string',
        'headers' => '\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]',
        'initialContextTemplate' => 'string',
        'parameters' => 'map[string,string]',
        'requestContent' => 'string',
        'requestVerb' => 'string',
        'resultSelector' => 'string',
        'resultTemplate' => 'string',
        'target' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'callbackContextTemplate' => null,
        'callbackRequiredTemplate' => null,
        'dataSourceName' => null,
        'endpointId' => null,
        'endpointUrl' => null,
        'headers' => null,
        'initialContextTemplate' => null,
        'parameters' => null,
        'requestContent' => null,
        'requestVerb' => null,
        'resultSelector' => null,
        'resultTemplate' => null,
        'target' => null
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
        'callbackContextTemplate' => 'callbackContextTemplate',
        'callbackRequiredTemplate' => 'callbackRequiredTemplate',
        'dataSourceName' => 'dataSourceName',
        'endpointId' => 'endpointId',
        'endpointUrl' => 'endpointUrl',
        'headers' => 'headers',
        'initialContextTemplate' => 'initialContextTemplate',
        'parameters' => 'parameters',
        'requestContent' => 'requestContent',
        'requestVerb' => 'requestVerb',
        'resultSelector' => 'resultSelector',
        'resultTemplate' => 'resultTemplate',
        'target' => 'target'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callbackContextTemplate' => 'setCallbackContextTemplate',
        'callbackRequiredTemplate' => 'setCallbackRequiredTemplate',
        'dataSourceName' => 'setDataSourceName',
        'endpointId' => 'setEndpointId',
        'endpointUrl' => 'setEndpointUrl',
        'headers' => 'setHeaders',
        'initialContextTemplate' => 'setInitialContextTemplate',
        'parameters' => 'setParameters',
        'requestContent' => 'setRequestContent',
        'requestVerb' => 'setRequestVerb',
        'resultSelector' => 'setResultSelector',
        'resultTemplate' => 'setResultTemplate',
        'target' => 'setTarget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callbackContextTemplate' => 'getCallbackContextTemplate',
        'callbackRequiredTemplate' => 'getCallbackRequiredTemplate',
        'dataSourceName' => 'getDataSourceName',
        'endpointId' => 'getEndpointId',
        'endpointUrl' => 'getEndpointUrl',
        'headers' => 'getHeaders',
        'initialContextTemplate' => 'getInitialContextTemplate',
        'parameters' => 'getParameters',
        'requestContent' => 'getRequestContent',
        'requestVerb' => 'getRequestVerb',
        'resultSelector' => 'getResultSelector',
        'resultTemplate' => 'getResultTemplate',
        'target' => 'getTarget'
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
        $this->container['callbackContextTemplate'] = isset($data['callbackContextTemplate']) ? $data['callbackContextTemplate'] : null;
        $this->container['callbackRequiredTemplate'] = isset($data['callbackRequiredTemplate']) ? $data['callbackRequiredTemplate'] : null;
        $this->container['dataSourceName'] = isset($data['dataSourceName']) ? $data['dataSourceName'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['endpointUrl'] = isset($data['endpointUrl']) ? $data['endpointUrl'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['initialContextTemplate'] = isset($data['initialContextTemplate']) ? $data['initialContextTemplate'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['requestContent'] = isset($data['requestContent']) ? $data['requestContent'] : null;
        $this->container['requestVerb'] = isset($data['requestVerb']) ? $data['requestVerb'] : null;
        $this->container['resultSelector'] = isset($data['resultSelector']) ? $data['resultSelector'] : null;
        $this->container['resultTemplate'] = isset($data['resultTemplate']) ? $data['resultTemplate'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
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
     * Gets callbackContextTemplate
     *
     * @return string
     */
    public function getCallbackContextTemplate()
    {
        return $this->container['callbackContextTemplate'];
    }

    /**
     * Sets callbackContextTemplate
     *
     * @param string $callbackContextTemplate Pagination format supported by this data source(ContinuationToken/SkipTop).
     *
     * @return $this
     */
    public function setCallbackContextTemplate($callbackContextTemplate)
    {
        $this->container['callbackContextTemplate'] = $callbackContextTemplate;

        return $this;
    }

    /**
     * Gets callbackRequiredTemplate
     *
     * @return string
     */
    public function getCallbackRequiredTemplate()
    {
        return $this->container['callbackRequiredTemplate'];
    }

    /**
     * Sets callbackRequiredTemplate
     *
     * @param string $callbackRequiredTemplate Subsequent calls needed?
     *
     * @return $this
     */
    public function setCallbackRequiredTemplate($callbackRequiredTemplate)
    {
        $this->container['callbackRequiredTemplate'] = $callbackRequiredTemplate;

        return $this;
    }

    /**
     * Gets dataSourceName
     *
     * @return string
     */
    public function getDataSourceName()
    {
        return $this->container['dataSourceName'];
    }

    /**
     * Sets dataSourceName
     *
     * @param string $dataSourceName Gets or sets the name of the data source.
     *
     * @return $this
     */
    public function setDataSourceName($dataSourceName)
    {
        $this->container['dataSourceName'] = $dataSourceName;

        return $this;
    }

    /**
     * Gets endpointId
     *
     * @return string
     */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
     * Sets endpointId
     *
     * @param string $endpointId Gets or sets the endpoint Id.
     *
     * @return $this
     */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;

        return $this;
    }

    /**
     * Gets endpointUrl
     *
     * @return string
     */
    public function getEndpointUrl()
    {
        return $this->container['endpointUrl'];
    }

    /**
     * Sets endpointUrl
     *
     * @param string $endpointUrl Gets or sets the url of the service endpoint.
     *
     * @return $this
     */
    public function setEndpointUrl($endpointUrl)
    {
        $this->container['endpointUrl'] = $endpointUrl;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\AuthorizationHeader[] $headers Gets or sets the authorization headers.
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets initialContextTemplate
     *
     * @return string
     */
    public function getInitialContextTemplate()
    {
        return $this->container['initialContextTemplate'];
    }

    /**
     * Sets initialContextTemplate
     *
     * @param string $initialContextTemplate Defines the initial value of the query params
     *
     * @return $this
     */
    public function setInitialContextTemplate($initialContextTemplate)
    {
        $this->container['initialContextTemplate'] = $initialContextTemplate;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return map[string,string]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param map[string,string] $parameters Gets or sets the parameters for the data source.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets requestContent
     *
     * @return string
     */
    public function getRequestContent()
    {
        return $this->container['requestContent'];
    }

    /**
     * Sets requestContent
     *
     * @param string $requestContent Gets or sets http request body
     *
     * @return $this
     */
    public function setRequestContent($requestContent)
    {
        $this->container['requestContent'] = $requestContent;

        return $this;
    }

    /**
     * Gets requestVerb
     *
     * @return string
     */
    public function getRequestVerb()
    {
        return $this->container['requestVerb'];
    }

    /**
     * Sets requestVerb
     *
     * @param string $requestVerb Gets or sets http request verb
     *
     * @return $this
     */
    public function setRequestVerb($requestVerb)
    {
        $this->container['requestVerb'] = $requestVerb;

        return $this;
    }

    /**
     * Gets resultSelector
     *
     * @return string
     */
    public function getResultSelector()
    {
        return $this->container['resultSelector'];
    }

    /**
     * Sets resultSelector
     *
     * @param string $resultSelector Gets or sets the result selector.
     *
     * @return $this
     */
    public function setResultSelector($resultSelector)
    {
        $this->container['resultSelector'] = $resultSelector;

        return $this;
    }

    /**
     * Gets resultTemplate
     *
     * @return string
     */
    public function getResultTemplate()
    {
        return $this->container['resultTemplate'];
    }

    /**
     * Sets resultTemplate
     *
     * @param string $resultTemplate Gets or sets the result template.
     *
     * @return $this
     */
    public function setResultTemplate($resultTemplate)
    {
        $this->container['resultTemplate'] = $resultTemplate;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target Gets or sets the target of the data source.
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

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


