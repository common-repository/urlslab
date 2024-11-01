<?php
/**
 * QuerySimilarityTaskRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowHunt
 *
 * FlowHunt API
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
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
 * QuerySimilarityTaskRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuerySimilarityTaskRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QuerySimilarityTaskRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'post_back_url' => 'string',
        'document_type' => '\OpenAPI\Client\Model\VectorDocumentType',
        'pointer_type' => '\OpenAPI\Client\Model\PointerType',
        'schema_type' => 'string',
        'limit' => 'int',
        'score_trheshold' => 'float',
        'with_vectors' => 'bool',
        'pointer_position_from' => 'int',
        'pointer_position_to' => 'int',
        'vector_id_from' => 'int',
        'vector_id_to' => 'int',
        'filter_url' => 'string',
        'filter_domains' => 'string[]',
        'query' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'post_back_url' => null,
        'document_type' => null,
        'pointer_type' => null,
        'schema_type' => null,
        'limit' => null,
        'score_trheshold' => null,
        'with_vectors' => null,
        'pointer_position_from' => null,
        'pointer_position_to' => null,
        'vector_id_from' => null,
        'vector_id_to' => null,
        'filter_url' => null,
        'filter_domains' => null,
        'query' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'post_back_url' => true,
        'document_type' => true,
        'pointer_type' => true,
        'schema_type' => true,
        'limit' => true,
        'score_trheshold' => true,
        'with_vectors' => true,
        'pointer_position_from' => true,
        'pointer_position_to' => true,
        'vector_id_from' => true,
        'vector_id_to' => true,
        'filter_url' => true,
        'filter_domains' => true,
        'query' => false
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
        'post_back_url' => 'post_back_url',
        'document_type' => 'document_type',
        'pointer_type' => 'pointer_type',
        'schema_type' => 'schema_type',
        'limit' => 'limit',
        'score_trheshold' => 'score_trheshold',
        'with_vectors' => 'with_vectors',
        'pointer_position_from' => 'pointer_position_from',
        'pointer_position_to' => 'pointer_position_to',
        'vector_id_from' => 'vector_id_from',
        'vector_id_to' => 'vector_id_to',
        'filter_url' => 'filter_url',
        'filter_domains' => 'filter_domains',
        'query' => 'query'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_back_url' => 'setPostBackUrl',
        'document_type' => 'setDocumentType',
        'pointer_type' => 'setPointerType',
        'schema_type' => 'setSchemaType',
        'limit' => 'setLimit',
        'score_trheshold' => 'setScoreTrheshold',
        'with_vectors' => 'setWithVectors',
        'pointer_position_from' => 'setPointerPositionFrom',
        'pointer_position_to' => 'setPointerPositionTo',
        'vector_id_from' => 'setVectorIdFrom',
        'vector_id_to' => 'setVectorIdTo',
        'filter_url' => 'setFilterUrl',
        'filter_domains' => 'setFilterDomains',
        'query' => 'setQuery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_back_url' => 'getPostBackUrl',
        'document_type' => 'getDocumentType',
        'pointer_type' => 'getPointerType',
        'schema_type' => 'getSchemaType',
        'limit' => 'getLimit',
        'score_trheshold' => 'getScoreTrheshold',
        'with_vectors' => 'getWithVectors',
        'pointer_position_from' => 'getPointerPositionFrom',
        'pointer_position_to' => 'getPointerPositionTo',
        'vector_id_from' => 'getVectorIdFrom',
        'vector_id_to' => 'getVectorIdTo',
        'filter_url' => 'getFilterUrl',
        'filter_domains' => 'getFilterDomains',
        'query' => 'getQuery'
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
        $this->setIfExists('post_back_url', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('pointer_type', $data ?? [], null);
        $this->setIfExists('schema_type', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('score_trheshold', $data ?? [], null);
        $this->setIfExists('with_vectors', $data ?? [], null);
        $this->setIfExists('pointer_position_from', $data ?? [], null);
        $this->setIfExists('pointer_position_to', $data ?? [], null);
        $this->setIfExists('vector_id_from', $data ?? [], null);
        $this->setIfExists('vector_id_to', $data ?? [], null);
        $this->setIfExists('filter_url', $data ?? [], null);
        $this->setIfExists('filter_domains', $data ?? [], null);
        $this->setIfExists('query', $data ?? [], null);
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
     * Gets post_back_url
     *
     * @return string|null
     */
    public function getPostBackUrl()
    {
        return $this->container['post_back_url'];
    }

    /**
     * Sets post_back_url
     *
     * @param string|null $post_back_url post_back_url
     *
     * @return self
     */
    public function setPostBackUrl($post_back_url)
    {
        if (is_null($post_back_url)) {
            array_push($this->openAPINullablesSetToNull, 'post_back_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('post_back_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['post_back_url'] = $post_back_url;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \OpenAPI\Client\Model\VectorDocumentType|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\Client\Model\VectorDocumentType|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            array_push($this->openAPINullablesSetToNull, 'document_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets pointer_type
     *
     * @return \OpenAPI\Client\Model\PointerType|null
     */
    public function getPointerType()
    {
        return $this->container['pointer_type'];
    }

    /**
     * Sets pointer_type
     *
     * @param \OpenAPI\Client\Model\PointerType|null $pointer_type pointer_type
     *
     * @return self
     */
    public function setPointerType($pointer_type)
    {
        if (is_null($pointer_type)) {
            array_push($this->openAPINullablesSetToNull, 'pointer_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pointer_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pointer_type'] = $pointer_type;

        return $this;
    }

    /**
     * Gets schema_type
     *
     * @return string|null
     */
    public function getSchemaType()
    {
        return $this->container['schema_type'];
    }

    /**
     * Sets schema_type
     *
     * @param string|null $schema_type schema_type
     *
     * @return self
     */
    public function setSchemaType($schema_type)
    {
        if (is_null($schema_type)) {
            array_push($this->openAPINullablesSetToNull, 'schema_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schema_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['schema_type'] = $schema_type;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            array_push($this->openAPINullablesSetToNull, 'limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets score_trheshold
     *
     * @return float|null
     */
    public function getScoreTrheshold()
    {
        return $this->container['score_trheshold'];
    }

    /**
     * Sets score_trheshold
     *
     * @param float|null $score_trheshold score_trheshold
     *
     * @return self
     */
    public function setScoreTrheshold($score_trheshold)
    {
        if (is_null($score_trheshold)) {
            array_push($this->openAPINullablesSetToNull, 'score_trheshold');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score_trheshold', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['score_trheshold'] = $score_trheshold;

        return $this;
    }

    /**
     * Gets with_vectors
     *
     * @return bool|null
     */
    public function getWithVectors()
    {
        return $this->container['with_vectors'];
    }

    /**
     * Sets with_vectors
     *
     * @param bool|null $with_vectors with_vectors
     *
     * @return self
     */
    public function setWithVectors($with_vectors)
    {
        if (is_null($with_vectors)) {
            array_push($this->openAPINullablesSetToNull, 'with_vectors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('with_vectors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['with_vectors'] = $with_vectors;

        return $this;
    }

    /**
     * Gets pointer_position_from
     *
     * @return int|null
     */
    public function getPointerPositionFrom()
    {
        return $this->container['pointer_position_from'];
    }

    /**
     * Sets pointer_position_from
     *
     * @param int|null $pointer_position_from pointer_position_from
     *
     * @return self
     */
    public function setPointerPositionFrom($pointer_position_from)
    {
        if (is_null($pointer_position_from)) {
            array_push($this->openAPINullablesSetToNull, 'pointer_position_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pointer_position_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pointer_position_from'] = $pointer_position_from;

        return $this;
    }

    /**
     * Gets pointer_position_to
     *
     * @return int|null
     */
    public function getPointerPositionTo()
    {
        return $this->container['pointer_position_to'];
    }

    /**
     * Sets pointer_position_to
     *
     * @param int|null $pointer_position_to pointer_position_to
     *
     * @return self
     */
    public function setPointerPositionTo($pointer_position_to)
    {
        if (is_null($pointer_position_to)) {
            array_push($this->openAPINullablesSetToNull, 'pointer_position_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pointer_position_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pointer_position_to'] = $pointer_position_to;

        return $this;
    }

    /**
     * Gets vector_id_from
     *
     * @return int|null
     */
    public function getVectorIdFrom()
    {
        return $this->container['vector_id_from'];
    }

    /**
     * Sets vector_id_from
     *
     * @param int|null $vector_id_from vector_id_from
     *
     * @return self
     */
    public function setVectorIdFrom($vector_id_from)
    {
        if (is_null($vector_id_from)) {
            array_push($this->openAPINullablesSetToNull, 'vector_id_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vector_id_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vector_id_from'] = $vector_id_from;

        return $this;
    }

    /**
     * Gets vector_id_to
     *
     * @return int|null
     */
    public function getVectorIdTo()
    {
        return $this->container['vector_id_to'];
    }

    /**
     * Sets vector_id_to
     *
     * @param int|null $vector_id_to vector_id_to
     *
     * @return self
     */
    public function setVectorIdTo($vector_id_to)
    {
        if (is_null($vector_id_to)) {
            array_push($this->openAPINullablesSetToNull, 'vector_id_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vector_id_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vector_id_to'] = $vector_id_to;

        return $this;
    }

    /**
     * Gets filter_url
     *
     * @return string|null
     */
    public function getFilterUrl()
    {
        return $this->container['filter_url'];
    }

    /**
     * Sets filter_url
     *
     * @param string|null $filter_url filter_url
     *
     * @return self
     */
    public function setFilterUrl($filter_url)
    {
        if (is_null($filter_url)) {
            array_push($this->openAPINullablesSetToNull, 'filter_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filter_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['filter_url'] = $filter_url;

        return $this;
    }

    /**
     * Gets filter_domains
     *
     * @return string[]|null
     */
    public function getFilterDomains()
    {
        return $this->container['filter_domains'];
    }

    /**
     * Sets filter_domains
     *
     * @param string[]|null $filter_domains filter_domains
     *
     * @return self
     */
    public function setFilterDomains($filter_domains)
    {
        if (is_null($filter_domains)) {
            array_push($this->openAPINullablesSetToNull, 'filter_domains');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filter_domains', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['filter_domains'] = $filter_domains;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        $this->container['query'] = $query;

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


