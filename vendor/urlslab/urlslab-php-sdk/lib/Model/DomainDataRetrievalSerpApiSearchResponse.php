<?php
/**
 * DomainDataRetrievalSerpApiSearchResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * URLSLAB API
 *
 * optimize your website with SEO
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DomainDataRetrievalSerpApiSearchResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainDataRetrievalSerpApiSearchResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domain.dataRetrieval.SerpApiSearchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serp_query' => 'string',
        'knowledge_graph' => 'object',
        'organic_results' => '\OpenAPI\Client\Model\DomainDataRetrievalSerpApiURL[]',
        'faqs' => 'object',
        'related_searches' => 'object',
        'serp_query_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'serp_query' => null,
        'knowledge_graph' => null,
        'organic_results' => null,
        'faqs' => null,
        'related_searches' => null,
        'serp_query_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'serp_query' => false,
		'knowledge_graph' => true,
		'organic_results' => false,
		'faqs' => true,
		'related_searches' => true,
		'serp_query_status' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'serp_query' => 'serpQuery',
        'knowledge_graph' => 'knowledgeGraph',
        'organic_results' => 'organicResults',
        'faqs' => 'faqs',
        'related_searches' => 'relatedSearches',
        'serp_query_status' => 'serpQueryStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serp_query' => 'setSerpQuery',
        'knowledge_graph' => 'setKnowledgeGraph',
        'organic_results' => 'setOrganicResults',
        'faqs' => 'setFaqs',
        'related_searches' => 'setRelatedSearches',
        'serp_query_status' => 'setSerpQueryStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serp_query' => 'getSerpQuery',
        'knowledge_graph' => 'getKnowledgeGraph',
        'organic_results' => 'getOrganicResults',
        'faqs' => 'getFaqs',
        'related_searches' => 'getRelatedSearches',
        'serp_query_status' => 'getSerpQueryStatus'
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
        return self::$openAPIModelName;
    }

    public const SERP_QUERY_STATUS_ERROR = 'ERROR';
    public const SERP_QUERY_STATUS_PENDING = 'PENDING';
    public const SERP_QUERY_STATUS_REDIRECTED = 'REDIRECTED';
    public const SERP_QUERY_STATUS_BLOCKED = 'BLOCKED';
    public const SERP_QUERY_STATUS_UPDATING = 'UPDATING';
    public const SERP_QUERY_STATUS_AVAILABLE = 'AVAILABLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSerpQueryStatusAllowableValues()
    {
        return [
            self::SERP_QUERY_STATUS_ERROR,
            self::SERP_QUERY_STATUS_PENDING,
            self::SERP_QUERY_STATUS_REDIRECTED,
            self::SERP_QUERY_STATUS_BLOCKED,
            self::SERP_QUERY_STATUS_UPDATING,
            self::SERP_QUERY_STATUS_AVAILABLE,
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
        $this->setIfExists('serp_query', $data ?? [], null);
        $this->setIfExists('knowledge_graph', $data ?? [], null);
        $this->setIfExists('organic_results', $data ?? [], null);
        $this->setIfExists('faqs', $data ?? [], null);
        $this->setIfExists('related_searches', $data ?? [], null);
        $this->setIfExists('serp_query_status', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serp_query'] === null) {
            $invalidProperties[] = "'serp_query' can't be null";
        }
        if ($this->container['organic_results'] === null) {
            $invalidProperties[] = "'organic_results' can't be null";
        }
        $allowedValues = $this->getSerpQueryStatusAllowableValues();
        if (!is_null($this->container['serp_query_status']) && !in_array($this->container['serp_query_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serp_query_status', must be one of '%s'",
                $this->container['serp_query_status'],
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
     * Gets serp_query
     *
     * @return string
     */
    public function getSerpQuery()
    {
        return $this->container['serp_query'];
    }

    /**
     * Sets serp_query
     *
     * @param string $serp_query serp_query
     *
     * @return self
     */
    public function setSerpQuery($serp_query)
    {
        if (is_null($serp_query)) {
            throw new \InvalidArgumentException('non-nullable serp_query cannot be null');
        }
        $this->container['serp_query'] = $serp_query;

        return $this;
    }

    /**
     * Gets knowledge_graph
     *
     * @return object|null
     */
    public function getKnowledgeGraph()
    {
        return $this->container['knowledge_graph'];
    }

    /**
     * Sets knowledge_graph
     *
     * @param object|null $knowledge_graph knowledge_graph
     *
     * @return self
     */
    public function setKnowledgeGraph($knowledge_graph)
    {
        if (is_null($knowledge_graph)) {
            array_push($this->openAPINullablesSetToNull, 'knowledge_graph');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('knowledge_graph', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['knowledge_graph'] = $knowledge_graph;

        return $this;
    }

    /**
     * Gets organic_results
     *
     * @return \OpenAPI\Client\Model\DomainDataRetrievalSerpApiURL[]
     */
    public function getOrganicResults()
    {
        return $this->container['organic_results'];
    }

    /**
     * Sets organic_results
     *
     * @param \OpenAPI\Client\Model\DomainDataRetrievalSerpApiURL[] $organic_results organic_results
     *
     * @return self
     */
    public function setOrganicResults($organic_results)
    {
        if (is_null($organic_results)) {
            throw new \InvalidArgumentException('non-nullable organic_results cannot be null');
        }
        $this->container['organic_results'] = $organic_results;

        return $this;
    }

    /**
     * Gets faqs
     *
     * @return object|null
     */
    public function getFaqs()
    {
        return $this->container['faqs'];
    }

    /**
     * Sets faqs
     *
     * @param object|null $faqs faqs
     *
     * @return self
     */
    public function setFaqs($faqs)
    {
        if (is_null($faqs)) {
            array_push($this->openAPINullablesSetToNull, 'faqs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('faqs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['faqs'] = $faqs;

        return $this;
    }

    /**
     * Gets related_searches
     *
     * @return object|null
     */
    public function getRelatedSearches()
    {
        return $this->container['related_searches'];
    }

    /**
     * Sets related_searches
     *
     * @param object|null $related_searches related_searches
     *
     * @return self
     */
    public function setRelatedSearches($related_searches)
    {
        if (is_null($related_searches)) {
            array_push($this->openAPINullablesSetToNull, 'related_searches');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_searches', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_searches'] = $related_searches;

        return $this;
    }

    /**
     * Gets serp_query_status
     *
     * @return string|null
     */
    public function getSerpQueryStatus()
    {
        return $this->container['serp_query_status'];
    }

    /**
     * Sets serp_query_status
     *
     * @param string|null $serp_query_status serp_query_status
     *
     * @return self
     */
    public function setSerpQueryStatus($serp_query_status)
    {
        if (is_null($serp_query_status)) {
            array_push($this->openAPINullablesSetToNull, 'serp_query_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serp_query_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSerpQueryStatusAllowableValues();
        if (!is_null($serp_query_status) && !in_array($serp_query_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serp_query_status', must be one of '%s'",
                    $serp_query_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serp_query_status'] = $serp_query_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


