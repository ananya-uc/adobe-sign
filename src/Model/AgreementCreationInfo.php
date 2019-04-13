<?php
/**
 * AgreementCreationInfo
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
 * AgreementCreationInfo Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementCreationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgreementCreationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locale' => 'string',
        'vaultingInfo' => '\Adobe\ESign\Model\VaultingInfo',
        'securityOption' => '\Adobe\ESign\Model\SecurityOption',
        'postSignOption' => '\Adobe\ESign\Model\PostSignOption',
        'ccs' => '\Adobe\ESign\Model\AgreementCcInfo[]',
        'documentVisibilityEnabled' => 'bool',
        'senderEmail' => 'string',
        'id' => 'string',
        'state' => 'string',
        'mergeFieldInfo' => '\Adobe\ESign\Model\MergefieldInfo[]',
        'firstReminderDelay' => 'int',
        'emailOption' => '\Adobe\ESign\Model\EmailOption',
        'signatureType' => 'string',
        'externalId' => '\Adobe\ESign\Model\ExternalId',
        'message' => 'string',
        'deviceInfo' => '\Adobe\ESign\Model\OfflineDeviceInfo',
        'reminderFrequency' => 'string',
        'createdDate' => '\DateTime',
        'participantSetsInfo' => '\Adobe\ESign\Model\ParticipantSetInfo[]',
        'expirationTime' => '\DateTime',
        'formFieldLayerTemplates' => '\Adobe\ESign\Model\FileInfo[]',
        'name' => 'string',
        'fileInfos' => '\Adobe\ESign\Model\FileInfo[]',
        'workflowId' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locale' => null,
        'vaultingInfo' => null,
        'securityOption' => null,
        'postSignOption' => null,
        'ccs' => null,
        'documentVisibilityEnabled' => null,
        'senderEmail' => null,
        'id' => null,
        'state' => null,
        'mergeFieldInfo' => null,
        'firstReminderDelay' => null,
        'emailOption' => null,
        'signatureType' => null,
        'externalId' => null,
        'message' => null,
        'deviceInfo' => null,
        'reminderFrequency' => null,
        'createdDate' => 'date',
        'participantSetsInfo' => null,
        'expirationTime' => 'date',
        'formFieldLayerTemplates' => null,
        'name' => null,
        'fileInfos' => null,
        'workflowId' => null,
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
        'locale' => 'locale',
        'vaultingInfo' => 'vaultingInfo',
        'securityOption' => 'securityOption',
        'postSignOption' => 'postSignOption',
        'ccs' => 'ccs',
        'documentVisibilityEnabled' => 'documentVisibilityEnabled',
        'senderEmail' => 'senderEmail',
        'id' => 'id',
        'state' => 'state',
        'mergeFieldInfo' => 'mergeFieldInfo',
        'firstReminderDelay' => 'firstReminderDelay',
        'emailOption' => 'emailOption',
        'signatureType' => 'signatureType',
        'externalId' => 'externalId',
        'message' => 'message',
        'deviceInfo' => 'deviceInfo',
        'reminderFrequency' => 'reminderFrequency',
        'createdDate' => 'createdDate',
        'participantSetsInfo' => 'participantSetsInfo',
        'expirationTime' => 'expirationTime',
        'formFieldLayerTemplates' => 'formFieldLayerTemplates',
        'name' => 'name',
        'fileInfos' => 'fileInfos',
        'workflowId' => 'workflowId',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locale' => 'setLocale',
        'vaultingInfo' => 'setVaultingInfo',
        'securityOption' => 'setSecurityOption',
        'postSignOption' => 'setPostSignOption',
        'ccs' => 'setCcs',
        'documentVisibilityEnabled' => 'setDocumentVisibilityEnabled',
        'senderEmail' => 'setSenderEmail',
        'id' => 'setId',
        'state' => 'setState',
        'mergeFieldInfo' => 'setMergeFieldInfo',
        'firstReminderDelay' => 'setFirstReminderDelay',
        'emailOption' => 'setEmailOption',
        'signatureType' => 'setSignatureType',
        'externalId' => 'setExternalId',
        'message' => 'setMessage',
        'deviceInfo' => 'setDeviceInfo',
        'reminderFrequency' => 'setReminderFrequency',
        'createdDate' => 'setCreatedDate',
        'participantSetsInfo' => 'setParticipantSetsInfo',
        'expirationTime' => 'setExpirationTime',
        'formFieldLayerTemplates' => 'setFormFieldLayerTemplates',
        'name' => 'setName',
        'fileInfos' => 'setFileInfos',
        'workflowId' => 'setWorkflowId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locale' => 'getLocale',
        'vaultingInfo' => 'getVaultingInfo',
        'securityOption' => 'getSecurityOption',
        'postSignOption' => 'getPostSignOption',
        'ccs' => 'getCcs',
        'documentVisibilityEnabled' => 'getDocumentVisibilityEnabled',
        'senderEmail' => 'getSenderEmail',
        'id' => 'getId',
        'state' => 'getState',
        'mergeFieldInfo' => 'getMergeFieldInfo',
        'firstReminderDelay' => 'getFirstReminderDelay',
        'emailOption' => 'getEmailOption',
        'signatureType' => 'getSignatureType',
        'externalId' => 'getExternalId',
        'message' => 'getMessage',
        'deviceInfo' => 'getDeviceInfo',
        'reminderFrequency' => 'getReminderFrequency',
        'createdDate' => 'getCreatedDate',
        'participantSetsInfo' => 'getParticipantSetsInfo',
        'expirationTime' => 'getExpirationTime',
        'formFieldLayerTemplates' => 'getFormFieldLayerTemplates',
        'name' => 'getName',
        'fileInfos' => 'getFileInfos',
        'workflowId' => 'getWorkflowId',
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

    const STATE_AUTHORING = 'AUTHORING';
    const STATE_DRAFT = 'DRAFT';
    const STATE_IN_PROCESS = 'IN_PROCESS';
    const SIGNATURE_TYPE_ESIGN = 'ESIGN';
    const SIGNATURE_TYPE_WRITTEN = 'WRITTEN';
    const REMINDER_FREQUENCY_DAILY_UNTIL_SIGNED = 'DAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKDAILY_UNTIL_SIGNED = 'WEEKDAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED = 'EVERY_OTHER_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED = 'EVERY_THIRD_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED = 'EVERY_FIFTH_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKLY_UNTIL_SIGNED = 'WEEKLY_UNTIL_SIGNED';
    const STATUS_OUT_FOR_SIGNATURE = 'OUT_FOR_SIGNATURE';
    const STATUS_OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    const STATUS_OUT_FOR_ACCEPTANCE = 'OUT_FOR_ACCEPTANCE';
    const STATUS_OUT_FOR_FORM_FILLING = 'OUT_FOR_FORM_FILLING';
    const STATUS_OUT_FOR_APPROVAL = 'OUT_FOR_APPROVAL';
    const STATUS_AUTHORING = 'AUTHORING';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_SIGNED = 'SIGNED';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_FORM_FILLED = 'FORM_FILLED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_ARCHIVED = 'ARCHIVED';
    const STATUS_PREFILL = 'PREFILL';
    const STATUS_WIDGET_WAITING_FOR_VERIFICATION = 'WIDGET_WAITING_FOR_VERIFICATION';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_DOCUMENTS_NOT_YET_PROCESSED = 'DOCUMENTS_NOT_YET_PROCESSED';
    const STATUS_WAITING_FOR_FAXIN = 'WAITING_FOR_FAXIN';
    const STATUS_WAITING_FOR_VERIFICATION = 'WAITING_FOR_VERIFICATION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AUTHORING,
            self::STATE_DRAFT,
            self::STATE_IN_PROCESS,
        ];
    }
    
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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUT_FOR_SIGNATURE,
            self::STATUS_OUT_FOR_DELIVERY,
            self::STATUS_OUT_FOR_ACCEPTANCE,
            self::STATUS_OUT_FOR_FORM_FILLING,
            self::STATUS_OUT_FOR_APPROVAL,
            self::STATUS_AUTHORING,
            self::STATUS_CANCELLED,
            self::STATUS_SIGNED,
            self::STATUS_APPROVED,
            self::STATUS_DELIVERED,
            self::STATUS_ACCEPTED,
            self::STATUS_FORM_FILLED,
            self::STATUS_EXPIRED,
            self::STATUS_ARCHIVED,
            self::STATUS_PREFILL,
            self::STATUS_WIDGET_WAITING_FOR_VERIFICATION,
            self::STATUS_DRAFT,
            self::STATUS_DOCUMENTS_NOT_YET_PROCESSED,
            self::STATUS_WAITING_FOR_FAXIN,
            self::STATUS_WAITING_FOR_VERIFICATION,
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
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['vaultingInfo'] = isset($data['vaultingInfo']) ? $data['vaultingInfo'] : null;
        $this->container['securityOption'] = isset($data['securityOption']) ? $data['securityOption'] : null;
        $this->container['postSignOption'] = isset($data['postSignOption']) ? $data['postSignOption'] : null;
        $this->container['ccs'] = isset($data['ccs']) ? $data['ccs'] : null;
        $this->container['documentVisibilityEnabled'] = isset($data['documentVisibilityEnabled']) ? $data['documentVisibilityEnabled'] : null;
        $this->container['senderEmail'] = isset($data['senderEmail']) ? $data['senderEmail'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['mergeFieldInfo'] = isset($data['mergeFieldInfo']) ? $data['mergeFieldInfo'] : null;
        $this->container['firstReminderDelay'] = isset($data['firstReminderDelay']) ? $data['firstReminderDelay'] : null;
        $this->container['emailOption'] = isset($data['emailOption']) ? $data['emailOption'] : null;
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['deviceInfo'] = isset($data['deviceInfo']) ? $data['deviceInfo'] : null;
        $this->container['reminderFrequency'] = isset($data['reminderFrequency']) ? $data['reminderFrequency'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['participantSetsInfo'] = isset($data['participantSetsInfo']) ? $data['participantSetsInfo'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['formFieldLayerTemplates'] = isset($data['formFieldLayerTemplates']) ? $data['formFieldLayerTemplates'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fileInfos'] = isset($data['fileInfos']) ? $data['fileInfos'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
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
     * @param \Adobe\ESign\Model\SecurityOption $securityOption Optional secondary security parameters for the agreement. Should not be provided in offline agreement creation.
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
     * @param \Adobe\ESign\Model\PostSignOption $postSignOption URL and associated properties for the success page the user will be taken to after completing the signing process. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setPostSignOption($postSignOption)
    {
        $this->container['postSignOption'] = $postSignOption;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return \Adobe\ESign\Model\AgreementCcInfo[]
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param \Adobe\ESign\Model\AgreementCcInfo[] $ccs A list of one or more CCs that will be copied in the agreement transaction. The CCs will each receive an email at the beginning of the transaction and also when the final document is signed. The email addresses will also receive a copy of the document, attached as a PDF file. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setCcs($ccs)
    {
        $this->container['ccs'] = $ccs;

        return $this;
    }

    /**
     * Gets documentVisibilityEnabled
     *
     * @return bool
     */
    public function getDocumentVisibilityEnabled()
    {
        return $this->container['documentVisibilityEnabled'];
    }

    /**
     * Sets documentVisibilityEnabled
     *
     * @param bool $documentVisibilityEnabled If set to true, enable limited document visibility. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setDocumentVisibilityEnabled($documentVisibilityEnabled)
    {
        $this->container['documentVisibilityEnabled'] = $documentVisibilityEnabled;

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
     * @param string $id The unique identifier of the agreement.If provided in POST, it will simply be ignored
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
     * @param string $state The state in which the agreement should land. The state field can only be provided in POST calls, will never get returned in GET /agreements/{ID} and will be ignored if provided in PUT /agreements/{ID} call. The eventual status of the agreement can be obtained from GET /agreements/ID
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
     * Gets mergeFieldInfo
     *
     * @return \Adobe\ESign\Model\MergefieldInfo[]
     */
    public function getMergeFieldInfo()
    {
        return $this->container['mergeFieldInfo'];
    }

    /**
     * Sets mergeFieldInfo
     *
     * @param \Adobe\ESign\Model\MergefieldInfo[] $mergeFieldInfo Optional default values for fields to merge into the document. The values will be presented to the signers for editable fields; for read-only fields the provided values will not be editable during the signing process. Merging data into fields is currently not supported when used with libraryDocumentId or libraryDocumentName. Only file and url are currently supported
     *
     * @return $this
     */
    public function setMergeFieldInfo($mergeFieldInfo)
    {
        $this->container['mergeFieldInfo'] = $mergeFieldInfo;

        return $this;
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
     * @param int $firstReminderDelay Integer which specifies the delay in hours before sending the first reminder.<br>This is an optional field. The minimum value allowed is 1 hour and the maximum value can’t be more than the difference of agreement creation and expiry time of the agreement in hours.<br>If this is not specified but the reminder frequency is specified, then the first reminder will be sent based on frequency.<br>i.e. if the reminder is created with frequency specified as daily, the firstReminderDelay will be 24 hours. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setFirstReminderDelay($firstReminderDelay)
    {
        $this->container['firstReminderDelay'] = $firstReminderDelay;

        return $this;
    }

    /**
     * Gets emailOption
     *
     * @return \Adobe\ESign\Model\EmailOption
     */
    public function getEmailOption()
    {
        return $this->container['emailOption'];
    }

    /**
     * Sets emailOption
     *
     * @param \Adobe\ESign\Model\EmailOption $emailOption Email configurations for the agreement. Should not be provided in offline agreement creation or when updating a non draft agreement.
     *
     * @return $this
     */
    public function setEmailOption($emailOption)
    {
        $this->container['emailOption'] = $emailOption;

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
     * @param \Adobe\ESign\Model\ExternalId $externalId An arbitrary value from your system, which can be specified at sending time and then later returned or queried. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

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
     * Gets deviceInfo
     *
     * @return \Adobe\ESign\Model\OfflineDeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->container['deviceInfo'];
    }

    /**
     * Sets deviceInfo
     *
     * @param \Adobe\ESign\Model\OfflineDeviceInfo $deviceInfo Device info of the offline device. It should only be provided in case of offline agreement creation.
     *
     * @return $this
     */
    public function setDeviceInfo($deviceInfo)
    {
        $this->container['deviceInfo'] = $deviceInfo;

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
     * @param string $reminderFrequency Optional parameter that sets how often you want to send reminders to the participants. If it is not specified, the default frequency set for the account will be used. Should not be provided in offline agreement creation. If provided in PUT as a different value than the current one, an error will be thrown.
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
     * @param \DateTime $createdDate Date when agreement was created. This is a server generated attributed and can not be provided in POST/PUT calls. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets participantSetsInfo
     *
     * @return \Adobe\ESign\Model\ParticipantSetInfo[]
     */
    public function getParticipantSetsInfo()
    {
        return $this->container['participantSetsInfo'];
    }

    /**
     * Sets participantSetsInfo
     *
     * @param \Adobe\ESign\Model\ParticipantSetInfo[] $participantSetsInfo A list of one or more participant set. A participant set may have one or more participant. If any member of the participant set takes the action that has been assigned to the set(Sign/Approve/Acknowledge etc ), the action is considered as the action taken by whole participation set. For regular (non-MegaSign) documents, there is no limit on the number of electronic signatures in a single document. Written signatures are limited to four per document
     *
     * @return $this
     */
    public function setParticipantSetsInfo($participantSetsInfo)
    {
        $this->container['participantSetsInfo'] = $participantSetsInfo;

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
     * Gets formFieldLayerTemplates
     *
     * @return \Adobe\ESign\Model\FileInfo[]
     */
    public function getFormFieldLayerTemplates()
    {
        return $this->container['formFieldLayerTemplates'];
    }

    /**
     * Sets formFieldLayerTemplates
     *
     * @param \Adobe\ESign\Model\FileInfo[] $formFieldLayerTemplates Specifies the form field layer template or source of form fields to apply on the files in this transaction. If specified, the FileInfo for this parameter must refer to a form field layer template via libraryDocumentId or libraryDocumentName, or if specified via transientDocumentId or documentURL, it must be of a supported file type. Note: Only one of the four parameters in every FileInfo object must be specified
     *
     * @return $this
     */
    public function setFormFieldLayerTemplates($formFieldLayerTemplates)
    {
        $this->container['formFieldLayerTemplates'] = $formFieldLayerTemplates;

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
     * Gets workflowId
     *
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
     * Sets workflowId
     *
     * @param string $workflowId The identifier of custom workflow which defines the routing path of an agreement. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;

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
     * @param string $status This is a server generated attribute which provides the detailed status of an agreement.
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

