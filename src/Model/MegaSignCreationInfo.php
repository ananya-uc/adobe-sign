<?php
/**
 * MegaSignCreationInfo
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
 * MegaSignCreationInfo Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MegaSignCreationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MegaSignCreationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstReminderDelay' => 'int',
        'childAgreementsInfo' => '\Adobe\ESign\Model\ChildAgreementsInfo',
        'signatureType' => 'string',
        'externalId' => '\Adobe\ESign\Model\ExternalId',
        'locale' => 'string',
        'message' => 'string',
        'vaultingInfo' => '\Adobe\ESign\Model\VaultingInfo',
        'securityOption' => '\Adobe\ESign\Model\MegaSignSecurityOption',
        'postSignOption' => '\Adobe\ESign\Model\PostSignOption',
        'reminderFrequency' => 'string',
        'ccs' => '\Adobe\ESign\Model\MegaSignCcInfo[]',
        'createdDate' => '\DateTime',
        'expirationTime' => '\DateTime',
        'senderEmail' => 'string',
        'name' => 'string',
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
        'firstReminderDelay' => null,
        'childAgreementsInfo' => null,
        'signatureType' => null,
        'externalId' => null,
        'locale' => null,
        'message' => null,
        'vaultingInfo' => null,
        'securityOption' => null,
        'postSignOption' => null,
        'reminderFrequency' => null,
        'ccs' => null,
        'createdDate' => 'date',
        'expirationTime' => 'date',
        'senderEmail' => null,
        'name' => null,
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
        'firstReminderDelay' => 'firstReminderDelay',
        'childAgreementsInfo' => 'childAgreementsInfo',
        'signatureType' => 'signatureType',
        'externalId' => 'externalId',
        'locale' => 'locale',
        'message' => 'message',
        'vaultingInfo' => 'vaultingInfo',
        'securityOption' => 'securityOption',
        'postSignOption' => 'postSignOption',
        'reminderFrequency' => 'reminderFrequency',
        'ccs' => 'ccs',
        'createdDate' => 'createdDate',
        'expirationTime' => 'expirationTime',
        'senderEmail' => 'senderEmail',
        'name' => 'name',
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
        'firstReminderDelay' => 'setFirstReminderDelay',
        'childAgreementsInfo' => 'setChildAgreementsInfo',
        'signatureType' => 'setSignatureType',
        'externalId' => 'setExternalId',
        'locale' => 'setLocale',
        'message' => 'setMessage',
        'vaultingInfo' => 'setVaultingInfo',
        'securityOption' => 'setSecurityOption',
        'postSignOption' => 'setPostSignOption',
        'reminderFrequency' => 'setReminderFrequency',
        'ccs' => 'setCcs',
        'createdDate' => 'setCreatedDate',
        'expirationTime' => 'setExpirationTime',
        'senderEmail' => 'setSenderEmail',
        'name' => 'setName',
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
        'firstReminderDelay' => 'getFirstReminderDelay',
        'childAgreementsInfo' => 'getChildAgreementsInfo',
        'signatureType' => 'getSignatureType',
        'externalId' => 'getExternalId',
        'locale' => 'getLocale',
        'message' => 'getMessage',
        'vaultingInfo' => 'getVaultingInfo',
        'securityOption' => 'getSecurityOption',
        'postSignOption' => 'getPostSignOption',
        'reminderFrequency' => 'getReminderFrequency',
        'ccs' => 'getCcs',
        'createdDate' => 'getCreatedDate',
        'expirationTime' => 'getExpirationTime',
        'senderEmail' => 'getSenderEmail',
        'name' => 'getName',
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

    const SIGNATURE_TYPE_ESIGN = 'ESIGN';
    const SIGNATURE_TYPE_WRITTEN = 'WRITTEN';
    const REMINDER_FREQUENCY_DAILY_UNTIL_SIGNED = 'DAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKDAILY_UNTIL_SIGNED = 'WEEKDAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED = 'EVERY_OTHER_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED = 'EVERY_THIRD_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED = 'EVERY_FIFTH_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKLY_UNTIL_SIGNED = 'WEEKLY_UNTIL_SIGNED';
    const STATE_IN_PROCESS = 'IN_PROCESS';
    const STATUS_AUTHORING = 'AUTHORING';
    const STATUS_IN_PROCESS = 'IN_PROCESS';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_PREFILL = 'PREFILL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureTypeAllowableValues()
    {
        return [
            self::SIGNATURE_TYPE_ESIGN,
            self::SIGNATURE_TYPE_WRITTEN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReminderFrequencyAllowableValues()
    {
        return [
            self::REMINDER_FREQUENCY_DAILY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_WEEKDAILY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_WEEKLY_UNTIL_SIGNED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_IN_PROCESS,
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
            self::STATUS_AUTHORING,
            self::STATUS_IN_PROCESS,
            self::STATUS_CANCELLED,
            self::STATUS_COMPLETED,
            self::STATUS_EXPIRED,
            self::STATUS_PREFILL,
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
        $this->container['firstReminderDelay'] = isset($data['firstReminderDelay']) ? $data['firstReminderDelay'] : null;
        $this->container['childAgreementsInfo'] = isset($data['childAgreementsInfo']) ? $data['childAgreementsInfo'] : null;
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['vaultingInfo'] = isset($data['vaultingInfo']) ? $data['vaultingInfo'] : null;
        $this->container['securityOption'] = isset($data['securityOption']) ? $data['securityOption'] : null;
        $this->container['postSignOption'] = isset($data['postSignOption']) ? $data['postSignOption'] : null;
        $this->container['reminderFrequency'] = isset($data['reminderFrequency']) ? $data['reminderFrequency'] : null;
        $this->container['ccs'] = isset($data['ccs']) ? $data['ccs'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['senderEmail'] = isset($data['senderEmail']) ? $data['senderEmail'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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

        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!is_null($this->container['signatureType']) && !in_array($this->container['signatureType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signatureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReminderFrequencyAllowableValues();
        if (!is_null($this->container['reminderFrequency']) && !in_array($this->container['reminderFrequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reminderFrequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets firstReminderDelay
     *
     * @return int
     */
    public function getFirstReminderDelay()
    {
        return $this->container['firstReminderDelay'];
    }

    /**
     * Sets firstReminderDelay
     *
     * @param int $firstReminderDelay Integer which specifies the delay in hours before sending the first reminder.<br>This is an optional field. The minimum value allowed is 1 hour and the maximum value can’t be more than the difference of agreement creation and expiry time of the agreement in hours.<br>If this is not specified but the reminder frequency is specified, then the first reminder will be sent based on frequency.<br>i.e. if the reminder is created with frequency specified as daily, the firstReminderDelay will be 24 hours. Cannot be updated in a PUT
     *
     * @return $this
     */
    public function setFirstReminderDelay($firstReminderDelay)
    {
        $this->container['firstReminderDelay'] = $firstReminderDelay;

        return $this;
    }

    /**
     * Gets childAgreementsInfo
     *
     * @return \Adobe\ESign\Model\ChildAgreementsInfo
     */
    public function getChildAgreementsInfo()
    {
        return $this->container['childAgreementsInfo'];
    }

    /**
     * Sets childAgreementsInfo
     *
     * @param \Adobe\ESign\Model\ChildAgreementsInfo $childAgreementsInfo Info corresponding to each child agreement of the megaSign
     *
     * @return $this
     */
    public function setChildAgreementsInfo($childAgreementsInfo)
    {
        $this->container['childAgreementsInfo'] = $childAgreementsInfo;

        return $this;
    }

    /**
     * Gets signatureType
     *
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signatureType'];
    }

    /**
     * Sets signatureType
     *
     * @param string $signatureType Specifies the type of signature you would like to request - written or e-signature. The possible values are <br> ESIGN : Agreement needs to be signed electronically <br>, WRITTEN : Agreement will be signed using handwritten signature and signed document will be uploaded into the system
     *
     * @return $this
     */
    public function setSignatureType($signatureType)
    {
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!is_null($signatureType) && !in_array($signatureType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signatureType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signatureType'] = $signatureType;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return \Adobe\ESign\Model\ExternalId
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param \Adobe\ESign\Model\ExternalId $externalId An arbitrary value from your system, which can be specified at sending time and then later returned or queried
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

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
     * @param string $locale The locale associated with this agreement - specifies the language for the signing page and emails, for example en_US or fr_FR. If none specified, defaults to the language configured for the agreement sender
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message An optional message to the participants, describing what is being sent or why their signature is required
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * @return \Adobe\ESign\Model\MegaSignSecurityOption
     */
    public function getSecurityOption()
    {
        return $this->container['securityOption'];
    }

    /**
     * Sets securityOption
     *
     * @param \Adobe\ESign\Model\MegaSignSecurityOption $securityOption Optional security parameters for the megasign
     *
     * @return $this
     */
    public function setSecurityOption($securityOption)
    {
        $this->container['securityOption'] = $securityOption;

        return $this;
    }

    /**
     * Gets postSignOption
     *
     * @return \Adobe\ESign\Model\PostSignOption
     */
    public function getPostSignOption()
    {
        return $this->container['postSignOption'];
    }

    /**
     * Sets postSignOption
     *
     * @param \Adobe\ESign\Model\PostSignOption $postSignOption URL and associated properties for the success page the user will be taken to after completing the signing process
     *
     * @return $this
     */
    public function setPostSignOption($postSignOption)
    {
        $this->container['postSignOption'] = $postSignOption;

        return $this;
    }

    /**
     * Gets reminderFrequency
     *
     * @return string
     */
    public function getReminderFrequency()
    {
        return $this->container['reminderFrequency'];
    }

    /**
     * Sets reminderFrequency
     *
     * @param string $reminderFrequency Optional parameter that sets how often you want to send reminders to the participants. If it is not specified, the default frequency set for the account will be used
     *
     * @return $this
     */
    public function setReminderFrequency($reminderFrequency)
    {
        $allowedValues = $this->getReminderFrequencyAllowableValues();
        if (!is_null($reminderFrequency) && !in_array($reminderFrequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reminderFrequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reminderFrequency'] = $reminderFrequency;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return \Adobe\ESign\Model\MegaSignCcInfo[]
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param \Adobe\ESign\Model\MegaSignCcInfo[] $ccs A list of one or more CCs that will be copied in the megasign transaction. The CCs will each receive an email at the beginning of the transaction and also when the final document is signed. The email addresses will also receive a copy of the document, attached as a PDF file
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
     * @param \DateTime $createdDate Date when megasign was created. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets expirationTime
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
     * Sets expirationTime
     *
     * @param \DateTime $expirationTime Time after which Agreement expires and needs to be signed before it. Format should be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;

        return $this;
    }

    /**
     * Gets senderEmail
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->container['senderEmail'];
    }

    /**
     * Sets senderEmail
     *
     * @param string $senderEmail Email of agreement sender. Only provided in GET. Can not be provided in POST/PUT request. If provided in POST/PUT, it will be ignored
     *
     * @return $this
     */
    public function setSenderEmail($senderEmail)
    {
        $this->container['senderEmail'] = $senderEmail;

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
     * @param string $name The name of the agreement that will be used to identify it, in emails, website and other places
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \Adobe\ESign\Model\FileInfo[] $fileInfos A list of one or more files (or references to files) that will be sent out for signature. If more than one file is provided, they will be combined into one PDF before being sent out. Note: Only one of the four parameters in every FileInfo object must be specified
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
     * @param string $id The unique identifier of megasign
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
     * @param string $state State of the Megasign
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
     * @param string $status Status of the Megasign
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

