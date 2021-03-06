<?php
/**
 * WidgetInfo
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
 * WidgetInfo Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WidgetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WidgetInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additionalParticipantSetsInfo' => '\Adobe\ESign\Model\WidgetAdditionalParticipationSetInfo[]',
        'creatorEmail' => 'string',
        'locale' => 'string',
        'vaultingInfo' => '\Adobe\ESign\Model\VaultingInfo',
        'securityOption' => '\Adobe\ESign\Model\SecurityOption',
        'widgetParticipantSetInfo' => '\Adobe\ESign\Model\WidgetParticipantSetInfo',
        'ccs' => '\Adobe\ESign\Model\WidgetCcInfo[]',
        'createdDate' => '\DateTime',
        'name' => 'string',
        'completionInfo' => '\Adobe\ESign\Model\WidgetRedirectionInfo',
        'authFailureInfo' => '\Adobe\ESign\Model\WidgetRedirectionInfo',
        'fileInfos' => '\Adobe\ESign\Model\FileInfo[]',
        'id' => 'string',
        'state' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additionalParticipantSetsInfo' => null,
        'creatorEmail' => null,
        'locale' => null,
        'vaultingInfo' => null,
        'securityOption' => null,
        'widgetParticipantSetInfo' => null,
        'ccs' => null,
        'createdDate' => 'date',
        'name' => null,
        'completionInfo' => null,
        'authFailureInfo' => null,
        'fileInfos' => null,
        'id' => null,
        'state' => null,
        'status' => null
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
        'additionalParticipantSetsInfo' => 'additionalParticipantSetsInfo',
        'creatorEmail' => 'creatorEmail',
        'locale' => 'locale',
        'vaultingInfo' => 'vaultingInfo',
        'securityOption' => 'securityOption',
        'widgetParticipantSetInfo' => 'widgetParticipantSetInfo',
        'ccs' => 'ccs',
        'createdDate' => 'createdDate',
        'name' => 'name',
        'completionInfo' => 'completionInfo',
        'authFailureInfo' => 'authFailureInfo',
        'fileInfos' => 'fileInfos',
        'id' => 'id',
        'state' => 'state',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalParticipantSetsInfo' => 'setAdditionalParticipantSetsInfo',
        'creatorEmail' => 'setCreatorEmail',
        'locale' => 'setLocale',
        'vaultingInfo' => 'setVaultingInfo',
        'securityOption' => 'setSecurityOption',
        'widgetParticipantSetInfo' => 'setWidgetParticipantSetInfo',
        'ccs' => 'setCcs',
        'createdDate' => 'setCreatedDate',
        'name' => 'setName',
        'completionInfo' => 'setCompletionInfo',
        'authFailureInfo' => 'setAuthFailureInfo',
        'fileInfos' => 'setFileInfos',
        'id' => 'setId',
        'state' => 'setState',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalParticipantSetsInfo' => 'getAdditionalParticipantSetsInfo',
        'creatorEmail' => 'getCreatorEmail',
        'locale' => 'getLocale',
        'vaultingInfo' => 'getVaultingInfo',
        'securityOption' => 'getSecurityOption',
        'widgetParticipantSetInfo' => 'getWidgetParticipantSetInfo',
        'ccs' => 'getCcs',
        'createdDate' => 'getCreatedDate',
        'name' => 'getName',
        'completionInfo' => 'getCompletionInfo',
        'authFailureInfo' => 'getAuthFailureInfo',
        'fileInfos' => 'getFileInfos',
        'id' => 'getId',
        'state' => 'getState',
        'status' => 'getStatus'
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

    const STATE_DRAFT = 'DRAFT';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_AUTHORING = 'AUTHORING';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_AUTHORING = 'AUTHORING';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOCUMENTS_NOT_YET_PROCESSED = 'DOCUMENTS_NOT_YET_PROCESSED';
    const STATUS_DISABLED = 'DISABLED';
    const STATUS_DISCARDED = 'DISCARDED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_ACTIVE,
            self::STATE_AUTHORING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_AUTHORING,
            self::STATUS_ACTIVE,
            self::STATUS_DOCUMENTS_NOT_YET_PROCESSED,
            self::STATUS_DISABLED,
            self::STATUS_DISCARDED,
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
        $this->container['additionalParticipantSetsInfo'] = isset($data['additionalParticipantSetsInfo']) ? $data['additionalParticipantSetsInfo'] : null;
        $this->container['creatorEmail'] = isset($data['creatorEmail']) ? $data['creatorEmail'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['vaultingInfo'] = isset($data['vaultingInfo']) ? $data['vaultingInfo'] : null;
        $this->container['securityOption'] = isset($data['securityOption']) ? $data['securityOption'] : null;
        $this->container['widgetParticipantSetInfo'] = isset($data['widgetParticipantSetInfo']) ? $data['widgetParticipantSetInfo'] : null;
        $this->container['ccs'] = isset($data['ccs']) ? $data['ccs'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['completionInfo'] = isset($data['completionInfo']) ? $data['completionInfo'] : null;
        $this->container['authFailureInfo'] = isset($data['authFailureInfo']) ? $data['authFailureInfo'] : null;
        $this->container['fileInfos'] = isset($data['fileInfos']) ? $data['fileInfos'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets additionalParticipantSetsInfo
     *
     * @return \Adobe\ESign\Model\WidgetAdditionalParticipationSetInfo[]
     */
    public function getAdditionalParticipantSetsInfo()
    {
        return $this->container['additionalParticipantSetsInfo'];
    }

    /**
     * Sets additionalParticipantSetsInfo
     *
     * @param \Adobe\ESign\Model\WidgetAdditionalParticipationSetInfo[] $additionalParticipantSetsInfo List of all the participants in the widget except widget signer
     *
     * @return $this
     */
    public function setAdditionalParticipantSetsInfo($additionalParticipantSetsInfo)
    {
        $this->container['additionalParticipantSetsInfo'] = $additionalParticipantSetsInfo;

        return $this;
    }

    /**
     * Gets creatorEmail
     *
     * @return string
     */
    public function getCreatorEmail()
    {
        return $this->container['creatorEmail'];
    }

    /**
     * Sets creatorEmail
     *
     * @param string $creatorEmail Email of widget creator. Only returned in GET response. Cannot be provided in POST/PUT request. If provided in POST, it will simply be ignored
     *
     * @return $this
     */
    public function setCreatorEmail($creatorEmail)
    {
        $this->container['creatorEmail'] = $creatorEmail;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale associated with this widget - specifies the language for the signing page and emails, for example en_US or fr_FR. If none specified, defaults to the language configured for the widget creator
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets vaultingInfo
     *
     * @return \Adobe\ESign\Model\VaultingInfo
     */
    public function getVaultingInfo()
    {
        return $this->container['vaultingInfo'];
    }

    /**
     * Sets vaultingInfo
     *
     * @param \Adobe\ESign\Model\VaultingInfo $vaultingInfo Vaulting properties that allows Adobe Sign to securely store documents with a vault provider
     *
     * @return $this
     */
    public function setVaultingInfo($vaultingInfo)
    {
        $this->container['vaultingInfo'] = $vaultingInfo;

        return $this;
    }

    /**
     * Gets securityOption
     *
     * @return \Adobe\ESign\Model\SecurityOption
     */
    public function getSecurityOption()
    {
        return $this->container['securityOption'];
    }

    /**
     * Sets securityOption
     *
     * @param \Adobe\ESign\Model\SecurityOption $securityOption Secondary security parameters for the widget
     *
     * @return $this
     */
    public function setSecurityOption($securityOption)
    {
        $this->container['securityOption'] = $securityOption;

        return $this;
    }

    /**
     * Gets widgetParticipantSetInfo
     *
     * @return \Adobe\ESign\Model\WidgetParticipantSetInfo
     */
    public function getWidgetParticipantSetInfo()
    {
        return $this->container['widgetParticipantSetInfo'];
    }

    /**
     * Sets widgetParticipantSetInfo
     *
     * @param \Adobe\ESign\Model\WidgetParticipantSetInfo $widgetParticipantSetInfo Represents widget participant for whom email should not be provided
     *
     * @return $this
     */
    public function setWidgetParticipantSetInfo($widgetParticipantSetInfo)
    {
        $this->container['widgetParticipantSetInfo'] = $widgetParticipantSetInfo;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return \Adobe\ESign\Model\WidgetCcInfo[]
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param \Adobe\ESign\Model\WidgetCcInfo[] $ccs A list of one or more email addresses that you want to copy on this transaction. The email addresses will each receive an email when the final agreement created through widget is signed. The email addresses will also receive a copy of the document, attached as a PDF file
     *
     * @return $this
     */
    public function setCcs($ccs)
    {
        $this->container['ccs'] = $ccs;

        return $this;
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
     * @param \DateTime $createdDate Date when widget was created. If provided in POST, it will simply be ignored. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param string $name The name of the widget that will be used to identify it, in emails, website and other places
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets completionInfo
     *
     * @return \Adobe\ESign\Model\WidgetRedirectionInfo
     */
    public function getCompletionInfo()
    {
        return $this->container['completionInfo'];
    }

    /**
     * Sets completionInfo
     *
     * @param \Adobe\ESign\Model\WidgetRedirectionInfo $completionInfo URL and associated properties for the success page the widget signer will be taken to after performing desired action on the widget
     *
     * @return $this
     */
    public function setCompletionInfo($completionInfo)
    {
        $this->container['completionInfo'] = $completionInfo;

        return $this;
    }

    /**
     * Gets authFailureInfo
     *
     * @return \Adobe\ESign\Model\WidgetRedirectionInfo
     */
    public function getAuthFailureInfo()
    {
        return $this->container['authFailureInfo'];
    }

    /**
     * Sets authFailureInfo
     *
     * @param \Adobe\ESign\Model\WidgetRedirectionInfo $authFailureInfo URL and associated properties for the error page the widget signer will be taken after failing to authenticate
     *
     * @return $this
     */
    public function setAuthFailureInfo($authFailureInfo)
    {
        $this->container['authFailureInfo'] = $authFailureInfo;

        return $this;
    }

    /**
     * Gets fileInfos
     *
     * @return \Adobe\ESign\Model\FileInfo[]
     */
    public function getFileInfos()
    {
        return $this->container['fileInfos'];
    }

    /**
     * Sets fileInfos
     *
     * @param \Adobe\ESign\Model\FileInfo[] $fileInfos A list of one or more files (or references to files) that will be used to create the widget. If more than one file is provided, they will be combined before the widget is created. Library documents are not permitted. Note: Only one of the four parameters in every FileInfo object must be specified
     *
     * @return $this
     */
    public function setFileInfos($fileInfos)
    {
        $this->container['fileInfos'] = $fileInfos;

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
     * @param string $id A resource identifier that can be used to uniquely identify the widget in other apis. If provided in POST, it will simply be ignored
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state in which the widget should land. For example in order to create a widget in DRAFT state, field should be DRAFT. The state field will never get returned in GET /widgets/{ID} and will be ignored if provided in PUT /widgets/{ID} call. The eventual status of the widget can be obtained from GET /widgets/ID
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the Widget. If provided in POST, it will simply be ignored
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


