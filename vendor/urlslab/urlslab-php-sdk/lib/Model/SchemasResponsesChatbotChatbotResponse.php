<?php
/**
 * SchemasResponsesChatbotChatbotResponse
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
 * SchemasResponsesChatbotChatbotResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SchemasResponsesChatbotChatbotResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'schemas.responses.chatbot.ChatbotResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'system_prompt' => 'string',
        'chat_model_class' => 'string',
        'chat_model_name' => 'string',
        'id' => 'string',
        'chatbot_user_id' => 'string',
        'chatbot_welcome_message' => 'string',
        'connected_domains' => 'string[]',
        'suggested_user_messages' => 'string[]',
        'url_suffix' => 'string',
        'has_search' => 'bool',
        'theme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'system_prompt' => null,
        'chat_model_class' => null,
        'chat_model_name' => null,
        'id' => null,
        'chatbot_user_id' => null,
        'chatbot_welcome_message' => null,
        'connected_domains' => null,
        'suggested_user_messages' => null,
        'url_suffix' => null,
        'has_search' => null,
        'theme' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
		'system_prompt' => false,
		'chat_model_class' => false,
		'chat_model_name' => false,
		'id' => false,
		'chatbot_user_id' => false,
		'chatbot_welcome_message' => false,
		'connected_domains' => false,
		'suggested_user_messages' => false,
		'url_suffix' => true,
		'has_search' => false,
		'theme' => false
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
        'title' => 'title',
        'system_prompt' => 'systemPrompt',
        'chat_model_class' => 'chatModelClass',
        'chat_model_name' => 'chatModelName',
        'id' => 'id',
        'chatbot_user_id' => 'chatbotUserId',
        'chatbot_welcome_message' => 'chatbotWelcomeMessage',
        'connected_domains' => 'connectedDomains',
        'suggested_user_messages' => 'suggestedUserMessages',
        'url_suffix' => 'urlSuffix',
        'has_search' => 'hasSearch',
        'theme' => 'theme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'system_prompt' => 'setSystemPrompt',
        'chat_model_class' => 'setChatModelClass',
        'chat_model_name' => 'setChatModelName',
        'id' => 'setId',
        'chatbot_user_id' => 'setChatbotUserId',
        'chatbot_welcome_message' => 'setChatbotWelcomeMessage',
        'connected_domains' => 'setConnectedDomains',
        'suggested_user_messages' => 'setSuggestedUserMessages',
        'url_suffix' => 'setUrlSuffix',
        'has_search' => 'setHasSearch',
        'theme' => 'setTheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'system_prompt' => 'getSystemPrompt',
        'chat_model_class' => 'getChatModelClass',
        'chat_model_name' => 'getChatModelName',
        'id' => 'getId',
        'chatbot_user_id' => 'getChatbotUserId',
        'chatbot_welcome_message' => 'getChatbotWelcomeMessage',
        'connected_domains' => 'getConnectedDomains',
        'suggested_user_messages' => 'getSuggestedUserMessages',
        'url_suffix' => 'getUrlSuffix',
        'has_search' => 'getHasSearch',
        'theme' => 'getTheme'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('system_prompt', $data ?? [], null);
        $this->setIfExists('chat_model_class', $data ?? [], null);
        $this->setIfExists('chat_model_name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('chatbot_user_id', $data ?? [], null);
        $this->setIfExists('chatbot_welcome_message', $data ?? [], null);
        $this->setIfExists('connected_domains', $data ?? [], null);
        $this->setIfExists('suggested_user_messages', $data ?? [], null);
        $this->setIfExists('url_suffix', $data ?? [], null);
        $this->setIfExists('has_search', $data ?? [], null);
        $this->setIfExists('theme', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['system_prompt'] === null) {
            $invalidProperties[] = "'system_prompt' can't be null";
        }
        if ($this->container['chat_model_class'] === null) {
            $invalidProperties[] = "'chat_model_class' can't be null";
        }
        if ($this->container['chat_model_name'] === null) {
            $invalidProperties[] = "'chat_model_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['chatbot_user_id'] === null) {
            $invalidProperties[] = "'chatbot_user_id' can't be null";
        }
        if ($this->container['chatbot_welcome_message'] === null) {
            $invalidProperties[] = "'chatbot_welcome_message' can't be null";
        }
        if ($this->container['connected_domains'] === null) {
            $invalidProperties[] = "'connected_domains' can't be null";
        }
        if ($this->container['suggested_user_messages'] === null) {
            $invalidProperties[] = "'suggested_user_messages' can't be null";
        }
        if ($this->container['has_search'] === null) {
            $invalidProperties[] = "'has_search' can't be null";
        }
        if ($this->container['theme'] === null) {
            $invalidProperties[] = "'theme' can't be null";
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
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets system_prompt
     *
     * @return string
     */
    public function getSystemPrompt()
    {
        return $this->container['system_prompt'];
    }

    /**
     * Sets system_prompt
     *
     * @param string $system_prompt system_prompt
     *
     * @return self
     */
    public function setSystemPrompt($system_prompt)
    {
        if (is_null($system_prompt)) {
            throw new \InvalidArgumentException('non-nullable system_prompt cannot be null');
        }
        $this->container['system_prompt'] = $system_prompt;

        return $this;
    }

    /**
     * Gets chat_model_class
     *
     * @return string
     */
    public function getChatModelClass()
    {
        return $this->container['chat_model_class'];
    }

    /**
     * Sets chat_model_class
     *
     * @param string $chat_model_class chat_model_class
     *
     * @return self
     */
    public function setChatModelClass($chat_model_class)
    {
        if (is_null($chat_model_class)) {
            throw new \InvalidArgumentException('non-nullable chat_model_class cannot be null');
        }
        $this->container['chat_model_class'] = $chat_model_class;

        return $this;
    }

    /**
     * Gets chat_model_name
     *
     * @return string
     */
    public function getChatModelName()
    {
        return $this->container['chat_model_name'];
    }

    /**
     * Sets chat_model_name
     *
     * @param string $chat_model_name chat_model_name
     *
     * @return self
     */
    public function setChatModelName($chat_model_name)
    {
        if (is_null($chat_model_name)) {
            throw new \InvalidArgumentException('non-nullable chat_model_name cannot be null');
        }
        $this->container['chat_model_name'] = $chat_model_name;

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
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets chatbot_user_id
     *
     * @return string
     */
    public function getChatbotUserId()
    {
        return $this->container['chatbot_user_id'];
    }

    /**
     * Sets chatbot_user_id
     *
     * @param string $chatbot_user_id chatbot_user_id
     *
     * @return self
     */
    public function setChatbotUserId($chatbot_user_id)
    {
        if (is_null($chatbot_user_id)) {
            throw new \InvalidArgumentException('non-nullable chatbot_user_id cannot be null');
        }
        $this->container['chatbot_user_id'] = $chatbot_user_id;

        return $this;
    }

    /**
     * Gets chatbot_welcome_message
     *
     * @return string
     */
    public function getChatbotWelcomeMessage()
    {
        return $this->container['chatbot_welcome_message'];
    }

    /**
     * Sets chatbot_welcome_message
     *
     * @param string $chatbot_welcome_message chatbot_welcome_message
     *
     * @return self
     */
    public function setChatbotWelcomeMessage($chatbot_welcome_message)
    {
        if (is_null($chatbot_welcome_message)) {
            throw new \InvalidArgumentException('non-nullable chatbot_welcome_message cannot be null');
        }
        $this->container['chatbot_welcome_message'] = $chatbot_welcome_message;

        return $this;
    }

    /**
     * Gets connected_domains
     *
     * @return string[]
     */
    public function getConnectedDomains()
    {
        return $this->container['connected_domains'];
    }

    /**
     * Sets connected_domains
     *
     * @param string[] $connected_domains connected_domains
     *
     * @return self
     */
    public function setConnectedDomains($connected_domains)
    {
        if (is_null($connected_domains)) {
            throw new \InvalidArgumentException('non-nullable connected_domains cannot be null');
        }
        $this->container['connected_domains'] = $connected_domains;

        return $this;
    }

    /**
     * Gets suggested_user_messages
     *
     * @return string[]
     */
    public function getSuggestedUserMessages()
    {
        return $this->container['suggested_user_messages'];
    }

    /**
     * Sets suggested_user_messages
     *
     * @param string[] $suggested_user_messages suggested_user_messages
     *
     * @return self
     */
    public function setSuggestedUserMessages($suggested_user_messages)
    {
        if (is_null($suggested_user_messages)) {
            throw new \InvalidArgumentException('non-nullable suggested_user_messages cannot be null');
        }
        $this->container['suggested_user_messages'] = $suggested_user_messages;

        return $this;
    }

    /**
     * Gets url_suffix
     *
     * @return string|null
     */
    public function getUrlSuffix()
    {
        return $this->container['url_suffix'];
    }

    /**
     * Sets url_suffix
     *
     * @param string|null $url_suffix url_suffix
     *
     * @return self
     */
    public function setUrlSuffix($url_suffix)
    {
        if (is_null($url_suffix)) {
            array_push($this->openAPINullablesSetToNull, 'url_suffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_suffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_suffix'] = $url_suffix;

        return $this;
    }

    /**
     * Gets has_search
     *
     * @return bool
     */
    public function getHasSearch()
    {
        return $this->container['has_search'];
    }

    /**
     * Sets has_search
     *
     * @param bool $has_search has_search
     *
     * @return self
     */
    public function setHasSearch($has_search)
    {
        if (is_null($has_search)) {
            throw new \InvalidArgumentException('non-nullable has_search cannot be null');
        }
        $this->container['has_search'] = $has_search;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        if (is_null($theme)) {
            throw new \InvalidArgumentException('non-nullable theme cannot be null');
        }
        $this->container['theme'] = $theme;

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


