<?php
/**
 * FormFieldConditionPredicate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.4
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Adobe\ESign\Model;

use \ArrayAccess;
use \Adobe\ESign\ObjectSerializer;

/**
 * FormFieldConditionPredicate Class Doc Comment
 *
 * @category Class
 * @description A predicate used to determine whether the condtion succeeds
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormFieldConditionPredicate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormFieldConditionPredicate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fieldName' => 'string',
        'value' => 'string',
        'operator' => 'string',
        'fieldLocationIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fieldName' => null,
        'value' => null,
        'operator' => null,
        'fieldLocationIndex' => null
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
        'fieldName' => 'fieldName',
        'value' => 'value',
        'operator' => 'operator',
        'fieldLocationIndex' => 'fieldLocationIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldName' => 'setFieldName',
        'value' => 'setValue',
        'operator' => 'setOperator',
        'fieldLocationIndex' => 'setFieldLocationIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldName' => 'getFieldName',
        'value' => 'getValue',
        'operator' => 'getOperator',
        'fieldLocationIndex' => 'getFieldLocationIndex'
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

    const OPERATOR_EQUALS = 'EQUALS';
    const OPERATOR_NOT_EQUALS = 'NOT_EQUALS';
    const OPERATOR_LESS_THAN = 'LESS_THAN';
    const OPERATOR_LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
    const OPERATOR_GREATER_THAN = 'GREATER_THAN';
    const OPERATOR_GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
    const OPERATOR_IN = 'IN';
    const OPERATOR_NOT_IN = 'NOT_IN';
    const OPERATOR_CONTAINS = 'CONTAINS';
    const OPERATOR_NOT_CONTAINS = 'NOT_CONTAINS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQUALS,
            self::OPERATOR_NOT_EQUALS,
            self::OPERATOR_LESS_THAN,
            self::OPERATOR_LESS_THAN_EQUALS,
            self::OPERATOR_GREATER_THAN,
            self::OPERATOR_GREATER_THAN_EQUALS,
            self::OPERATOR_IN,
            self::OPERATOR_NOT_IN,
            self::OPERATOR_CONTAINS,
            self::OPERATOR_NOT_CONTAINS,
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['fieldLocationIndex'] = isset($data['fieldLocationIndex']) ? $data['fieldLocationIndex'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
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
     * Gets fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
     * Sets fieldName
     *
     * @param string $fieldName Name of the field whose value is the basis of predicate
     *
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Value to compare against the value of the predicate's form field, using the specified operator
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator Operator to be applied on the value of the predicate field.
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($operator) && !in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets fieldLocationIndex
     *
     * @return int
     */
    public function getFieldLocationIndex()
    {
        return $this->container['fieldLocationIndex'];
    }

    /**
     * Sets fieldLocationIndex
     *
     * @param int $fieldLocationIndex Index of the location of the form field used in the predicate
     *
     * @return $this
     */
    public function setFieldLocationIndex($fieldLocationIndex)
    {
        $this->container['fieldLocationIndex'] = $fieldLocationIndex;

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

