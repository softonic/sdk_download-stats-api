<?php
/**
 * ProgramPlatformLocale
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Download Stats API docs
 *
 * To access the API: 1. Register a client with the proper permissions (`download_stats_api.*`) in the [Softonic OAuth Admin](https://oauth-admin.softonic.com) 1. Retrieve a token for that client with the proper scopes from the [Softonic OAuth API](https://oauth-v2.softonic.com). 1. Copy the token in the input field at the top of the page
 *
 * OpenAPI spec version: 1.67.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DownloadStatsApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\DownloadStatsApiSdk\ObjectSerializer;

/**
 * ProgramPlatformLocale Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatformLocale implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatformLocale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_platform' => 'string',
        'id_locale' => 'string',
        'downloads' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_platform' => null,
        'id_locale' => null,
        'downloads' => null
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
        'id_program' => 'id_program',
        'id_platform' => 'id_platform',
        'id_locale' => 'id_locale',
        'downloads' => 'downloads'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_platform' => 'setIdPlatform',
        'id_locale' => 'setIdLocale',
        'downloads' => 'setDownloads'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_platform' => 'getIdPlatform',
        'id_locale' => 'getIdLocale',
        'downloads' => 'getDownloads'
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

    const ID_LOCALE_EN = 'en';
    const ID_LOCALE_ES = 'es';
    const ID_LOCALE_PT = 'pt';
    const ID_LOCALE_FR = 'fr';
    const ID_LOCALE_IT = 'it';
    const ID_LOCALE_DE = 'de';
    const ID_LOCALE_NL = 'nl';
    const ID_LOCALE_PL = 'pl';
    const ID_LOCALE_JA = 'ja';
    const ID_LOCALE_BR = 'br';
    const ID_LOCALE_JP = 'jp';
    const ID_LOCALE_AR = 'ar';
    const ID_LOCALE_RU = 'ru';
    const ID_LOCALE_TH = 'th';
    const ID_LOCALE_TR = 'tr';
    const ID_LOCALE_ID = 'id';
    const ID_LOCALE_SV = 'sv';
    const ID_LOCALE_KO = 'ko';
    const ID_LOCALE_VI = 'vi';
    const ID_LOCALE_HU = 'hu';
    const ID_LOCALE_RO = 'ro';
    const ID_LOCALE_DA = 'da';
    const ID_LOCALE_FI = 'fi';
    const ID_LOCALE_NO = 'no';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdLocaleAllowableValues()
    {
        return [
            self::ID_LOCALE_EN,
            self::ID_LOCALE_ES,
            self::ID_LOCALE_PT,
            self::ID_LOCALE_FR,
            self::ID_LOCALE_IT,
            self::ID_LOCALE_DE,
            self::ID_LOCALE_NL,
            self::ID_LOCALE_PL,
            self::ID_LOCALE_JA,
            self::ID_LOCALE_BR,
            self::ID_LOCALE_JP,
            self::ID_LOCALE_AR,
            self::ID_LOCALE_RU,
            self::ID_LOCALE_TH,
            self::ID_LOCALE_TR,
            self::ID_LOCALE_ID,
            self::ID_LOCALE_SV,
            self::ID_LOCALE_KO,
            self::ID_LOCALE_VI,
            self::ID_LOCALE_HU,
            self::ID_LOCALE_RO,
            self::ID_LOCALE_DA,
            self::ID_LOCALE_FI,
            self::ID_LOCALE_NO,
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
        $this->container['id_program'] = isset($data['id_program']) ? $data['id_program'] : null;
        $this->container['id_platform'] = isset($data['id_platform']) ? $data['id_platform'] : null;
        $this->container['id_locale'] = isset($data['id_locale']) ? $data['id_locale'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if ($this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if ($this->container['id_locale'] === null) {
            $invalidProperties[] = "'id_locale' can't be null";
        }
        $allowedValues = $this->getIdLocaleAllowableValues();
        if (!in_array($this->container['id_locale'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'id_locale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['downloads'] === null) {
            $invalidProperties[] = "'downloads' can't be null";
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

        if ($this->container['id_program'] === null) {
            return false;
        }
        if ($this->container['id_platform'] === null) {
            return false;
        }
        if ($this->container['id_locale'] === null) {
            return false;
        }
        $allowedValues = $this->getIdLocaleAllowableValues();
        if (!in_array($this->container['id_locale'], $allowedValues)) {
            return false;
        }
        if ($this->container['downloads'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_program
     *
     * @return string
     */
    public function getIdProgram()
    {
        return $this->container['id_program'];
    }

    /**
     * Sets id_program
     *
     * @param string $id_program Program identifier
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_platform
     *
     * @return string
     */
    public function getIdPlatform()
    {
        return $this->container['id_platform'];
    }

    /**
     * Sets id_platform
     *
     * @param string $id_platform Platform identifier
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets id_locale
     *
     * @return string
     */
    public function getIdLocale()
    {
        return $this->container['id_locale'];
    }

    /**
     * Sets id_locale
     *
     * @param string $id_locale Locale identifier
     *
     * @return $this
     */
    public function setIdLocale($id_locale)
    {
        $allowedValues = $this->getIdLocaleAllowableValues();
        if (!in_array($id_locale, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_locale', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id_locale'] = $id_locale;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return int
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param int $downloads Number of downloads
     *
     * @return $this
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

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

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }
}

