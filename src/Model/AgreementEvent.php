<?php
/**
 * AgreementEvent
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
 * AgreementEvent Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgreementEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'initiatingUserName' => 'string',
        'description' => 'string',
        'actingUserName' => 'string',
        'actingUserIpAddress' => 'string',
        'participantEmail' => 'string',
        'type' => 'string',
        'participantRole' => 'string',
        'vaultEventId' => 'string',
        'participantId' => 'string',
        'versionId' => 'string',
        'actingUserEmail' => 'string',
        'devicePhoneNumber' => 'string',
        'initiatingUserEmail' => 'string',
        'digitalSignatureInfo' => '\Adobe\ESign\Model\DigitalSignatureInfo',
        'vaultProviderName' => 'string',
        'comment' => 'string',
        'synchronizationId' => 'string',
        'deviceLocation' => '\Adobe\ESign\Model\DeviceLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date',
        'initiatingUserName' => null,
        'description' => null,
        'actingUserName' => null,
        'actingUserIpAddress' => null,
        'participantEmail' => null,
        'type' => null,
        'participantRole' => null,
        'vaultEventId' => null,
        'participantId' => null,
        'versionId' => null,
        'actingUserEmail' => null,
        'devicePhoneNumber' => null,
        'initiatingUserEmail' => null,
        'digitalSignatureInfo' => null,
        'vaultProviderName' => null,
        'comment' => null,
        'synchronizationId' => null,
        'deviceLocation' => null
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
        'date' => 'date',
        'initiatingUserName' => 'initiatingUserName',
        'description' => 'description',
        'actingUserName' => 'actingUserName',
        'actingUserIpAddress' => 'actingUserIpAddress',
        'participantEmail' => 'participantEmail',
        'type' => 'type',
        'participantRole' => 'participantRole',
        'vaultEventId' => 'vaultEventId',
        'participantId' => 'participantId',
        'versionId' => 'versionId',
        'actingUserEmail' => 'actingUserEmail',
        'devicePhoneNumber' => 'devicePhoneNumber',
        'initiatingUserEmail' => 'initiatingUserEmail',
        'digitalSignatureInfo' => 'digitalSignatureInfo',
        'vaultProviderName' => 'vaultProviderName',
        'comment' => 'comment',
        'synchronizationId' => 'synchronizationId',
        'deviceLocation' => 'deviceLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'initiatingUserName' => 'setInitiatingUserName',
        'description' => 'setDescription',
        'actingUserName' => 'setActingUserName',
        'actingUserIpAddress' => 'setActingUserIpAddress',
        'participantEmail' => 'setParticipantEmail',
        'type' => 'setType',
        'participantRole' => 'setParticipantRole',
        'vaultEventId' => 'setVaultEventId',
        'participantId' => 'setParticipantId',
        'versionId' => 'setVersionId',
        'actingUserEmail' => 'setActingUserEmail',
        'devicePhoneNumber' => 'setDevicePhoneNumber',
        'initiatingUserEmail' => 'setInitiatingUserEmail',
        'digitalSignatureInfo' => 'setDigitalSignatureInfo',
        'vaultProviderName' => 'setVaultProviderName',
        'comment' => 'setComment',
        'synchronizationId' => 'setSynchronizationId',
        'deviceLocation' => 'setDeviceLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'initiatingUserName' => 'getInitiatingUserName',
        'description' => 'getDescription',
        'actingUserName' => 'getActingUserName',
        'actingUserIpAddress' => 'getActingUserIpAddress',
        'participantEmail' => 'getParticipantEmail',
        'type' => 'getType',
        'participantRole' => 'getParticipantRole',
        'vaultEventId' => 'getVaultEventId',
        'participantId' => 'getParticipantId',
        'versionId' => 'getVersionId',
        'actingUserEmail' => 'getActingUserEmail',
        'devicePhoneNumber' => 'getDevicePhoneNumber',
        'initiatingUserEmail' => 'getInitiatingUserEmail',
        'digitalSignatureInfo' => 'getDigitalSignatureInfo',
        'vaultProviderName' => 'getVaultProviderName',
        'comment' => 'getComment',
        'synchronizationId' => 'getSynchronizationId',
        'deviceLocation' => 'getDeviceLocation'
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

    const TYPE_ACCESS_CODE_GENERATED = 'ACCESS_CODE_GENERATED';
    const TYPE_ACCESS_CODE_CONSUMED = 'ACCESS_CODE_CONSUMED';
    const TYPE_AUTO_CANCELLED_CONVERSION_PROBLEM = 'AUTO_CANCELLED_CONVERSION_PROBLEM';
    const TYPE_ACTION_AUTO_DELEGATED = 'ACTION_AUTO_DELEGATED';
    const TYPE_ACTION_COMPLETED = 'ACTION_COMPLETED';
    const TYPE_ACTION_COMPLETED_HOSTED = 'ACTION_COMPLETED_HOSTED';
    const TYPE_ACTION_COMPLETED_OFFLINE = 'ACTION_COMPLETED_OFFLINE';
    const TYPE_ACTION_COMPLETED_OFFLINE_HOSTED = 'ACTION_COMPLETED_OFFLINE_HOSTED';
    const TYPE_ACTION_COMPLETED_WIDGET_VERIFIED = 'ACTION_COMPLETED_WIDGET_VERIFIED';
    const TYPE_ACTION_COMPLETED_WIDGET_VERIFIED_API_TOKEN = 'ACTION_COMPLETED_WIDGET_VERIFIED_API_TOKEN';
    const TYPE_ACTION_COMPLETED_WIDGET_VERIFICATION_WAIVED = 'ACTION_COMPLETED_WIDGET_VERIFICATION_WAIVED';
    const TYPE_ACTION_DELEGATED = 'ACTION_DELEGATED';
    const TYPE_ACTION_REPLACED_SIGNER = 'ACTION_REPLACED_SIGNER';
    const TYPE_ACTION_REQUESTED = 'ACTION_REQUESTED';
    const TYPE_CREATED = 'CREATED';
    const TYPE_CREATED_FROM_WIDGET = 'CREATED_FROM_WIDGET';
    const TYPE_CREATED_OFFLINE = 'CREATED_OFFLINE';
    const TYPE_CREATED_VIA_UPLOAD = 'CREATED_VIA_UPLOAD';
    const TYPE_CREATED_VIA_ACROBAT = 'CREATED_VIA_ACROBAT';
    const TYPE_CREATED_VIA_READER = 'CREATED_VIA_READER';
    const TYPE_ACTIVATED = 'ACTIVATED';
    const TYPE_DIGITAL_SIGN_UIDAI_SIGNER_CONSENT = 'DIGITAL_SIGN_UIDAI_SIGNER_CONSENT';
    const TYPE_DIGSIGNED = 'DIGSIGNED';
    const TYPE_DEACTIVATED = 'DEACTIVATED';
    const TYPE_DOCUMENTS_DELETED = 'DOCUMENTS_DELETED';
    const TYPE_DOWNLOADED = 'DOWNLOADED';
    const TYPE_EMAIL_BOUNCED = 'EMAIL_BOUNCED';
    const TYPE_EMAIL_VIEWED = 'EMAIL_VIEWED';
    const TYPE_EXPIRED = 'EXPIRED';
    const TYPE_EXPIRED_AUTOMATICALLY = 'EXPIRED_AUTOMATICALLY';
    const TYPE_FAXED_BY_SENDER = 'FAXED_BY_SENDER';
    const TYPE_FAXIN_RECEIVED = 'FAXIN_RECEIVED';
    const TYPE_KBA_AUTHENTICATED = 'KBA_AUTHENTICATED';
    const TYPE_MODIFIED = 'MODIFIED';
    const TYPE_OFFLINE_SYNC = 'OFFLINE_SYNC';
    const TYPE_OTHER = 'OTHER';
    const TYPE_PAID = 'PAID';
    const TYPE_PRESIGNED = 'PRESIGNED';
    const TYPE_RECALLED = 'RECALLED';
    const TYPE_RECALLED_MAX_SIGNING_KBA_ATTEMPTS = 'RECALLED_MAX_SIGNING_KBA_ATTEMPTS';
    const TYPE_RECALLED_MAX_SIGNING_PASSWORD_ATTEMPTS = 'RECALLED_MAX_SIGNING_PASSWORD_ATTEMPTS';
    const TYPE_RECALLED_MAX_SIGNING_PHONE_ATTEMPTS = 'RECALLED_MAX_SIGNING_PHONE_ATTEMPTS';
    const TYPE_REJECTED = 'REJECTED';
    const TYPE_SENDER_CREATED_NEW_REVISION = 'SENDER_CREATED_NEW_REVISION';
    const TYPE_SHARED = 'SHARED';
    const TYPE_SIGNED = 'SIGNED';
    const TYPE_SIGNING_URL_REQUESTED = 'SIGNING_URL_REQUESTED';
    const TYPE_UPLOADED_BY_SENDER = 'UPLOADED_BY_SENDER';
    const TYPE_USER_ACK_AGREEMENT_MODIFIED = 'USER_ACK_AGREEMENT_MODIFIED';
    const TYPE_VAULTED = 'VAULTED';
    const TYPE_WEB_IDENTITY_AUTHENTICATED = 'WEB_IDENTITY_AUTHENTICATED';
    const TYPE_WEB_IDENTITY_SPECIFIED = 'WEB_IDENTITY_SPECIFIED';
    const TYPE_WRITTEN_DOWNLOAD = 'WRITTEN_DOWNLOAD';
    const TYPE_WRITTEN_SIGNED = 'WRITTEN_SIGNED';
    const PARTICIPANT_ROLE_SIGNER = 'SIGNER';
    const PARTICIPANT_ROLE_DELEGATE_TO_SIGNER = 'DELEGATE_TO_SIGNER';
    const PARTICIPANT_ROLE_APPROVER = 'APPROVER';
    const PARTICIPANT_ROLE_DELEGATE_TO_APPROVER = 'DELEGATE_TO_APPROVER';
    const PARTICIPANT_ROLE_ACCEPTOR = 'ACCEPTOR';
    const PARTICIPANT_ROLE_DELEGATE_TO_ACCEPTOR = 'DELEGATE_TO_ACCEPTOR';
    const PARTICIPANT_ROLE_FORM_FILLER = 'FORM_FILLER';
    const PARTICIPANT_ROLE_DELEGATE_TO_FORM_FILLER = 'DELEGATE_TO_FORM_FILLER';
    const PARTICIPANT_ROLE_CERTIFIED_RECIPIENT = 'CERTIFIED_RECIPIENT';
    const PARTICIPANT_ROLE_DELEGATE_TO_CERTIFIED_RECIPIENT = 'DELEGATE_TO_CERTIFIED_RECIPIENT';
    const PARTICIPANT_ROLE_SHARE = 'SHARE';
    const PARTICIPANT_ROLE_SENDER = 'SENDER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACCESS_CODE_GENERATED,
            self::TYPE_ACCESS_CODE_CONSUMED,
            self::TYPE_AUTO_CANCELLED_CONVERSION_PROBLEM,
            self::TYPE_ACTION_AUTO_DELEGATED,
            self::TYPE_ACTION_COMPLETED,
            self::TYPE_ACTION_COMPLETED_HOSTED,
            self::TYPE_ACTION_COMPLETED_OFFLINE,
            self::TYPE_ACTION_COMPLETED_OFFLINE_HOSTED,
            self::TYPE_ACTION_COMPLETED_WIDGET_VERIFIED,
            self::TYPE_ACTION_COMPLETED_WIDGET_VERIFIED_API_TOKEN,
            self::TYPE_ACTION_COMPLETED_WIDGET_VERIFICATION_WAIVED,
            self::TYPE_ACTION_DELEGATED,
            self::TYPE_ACTION_REPLACED_SIGNER,
            self::TYPE_ACTION_REQUESTED,
            self::TYPE_CREATED,
            self::TYPE_CREATED_FROM_WIDGET,
            self::TYPE_CREATED_OFFLINE,
            self::TYPE_CREATED_VIA_UPLOAD,
            self::TYPE_CREATED_VIA_ACROBAT,
            self::TYPE_CREATED_VIA_READER,
            self::TYPE_ACTIVATED,
            self::TYPE_DIGITAL_SIGN_UIDAI_SIGNER_CONSENT,
            self::TYPE_DIGSIGNED,
            self::TYPE_DEACTIVATED,
            self::TYPE_DOCUMENTS_DELETED,
            self::TYPE_DOWNLOADED,
            self::TYPE_EMAIL_BOUNCED,
            self::TYPE_EMAIL_VIEWED,
            self::TYPE_EXPIRED,
            self::TYPE_EXPIRED_AUTOMATICALLY,
            self::TYPE_FAXED_BY_SENDER,
            self::TYPE_FAXIN_RECEIVED,
            self::TYPE_KBA_AUTHENTICATED,
            self::TYPE_MODIFIED,
            self::TYPE_OFFLINE_SYNC,
            self::TYPE_OTHER,
            self::TYPE_PAID,
            self::TYPE_PRESIGNED,
            self::TYPE_RECALLED,
            self::TYPE_RECALLED_MAX_SIGNING_KBA_ATTEMPTS,
            self::TYPE_RECALLED_MAX_SIGNING_PASSWORD_ATTEMPTS,
            self::TYPE_RECALLED_MAX_SIGNING_PHONE_ATTEMPTS,
            self::TYPE_REJECTED,
            self::TYPE_SENDER_CREATED_NEW_REVISION,
            self::TYPE_SHARED,
            self::TYPE_SIGNED,
            self::TYPE_SIGNING_URL_REQUESTED,
            self::TYPE_UPLOADED_BY_SENDER,
            self::TYPE_USER_ACK_AGREEMENT_MODIFIED,
            self::TYPE_VAULTED,
            self::TYPE_WEB_IDENTITY_AUTHENTICATED,
            self::TYPE_WEB_IDENTITY_SPECIFIED,
            self::TYPE_WRITTEN_DOWNLOAD,
            self::TYPE_WRITTEN_SIGNED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParticipantRoleAllowableValues()
    {
        return [
            self::PARTICIPANT_ROLE_SIGNER,
            self::PARTICIPANT_ROLE_DELEGATE_TO_SIGNER,
            self::PARTICIPANT_ROLE_APPROVER,
            self::PARTICIPANT_ROLE_DELEGATE_TO_APPROVER,
            self::PARTICIPANT_ROLE_ACCEPTOR,
            self::PARTICIPANT_ROLE_DELEGATE_TO_ACCEPTOR,
            self::PARTICIPANT_ROLE_FORM_FILLER,
            self::PARTICIPANT_ROLE_DELEGATE_TO_FORM_FILLER,
            self::PARTICIPANT_ROLE_CERTIFIED_RECIPIENT,
            self::PARTICIPANT_ROLE_DELEGATE_TO_CERTIFIED_RECIPIENT,
            self::PARTICIPANT_ROLE_SHARE,
            self::PARTICIPANT_ROLE_SENDER,
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['initiatingUserName'] = isset($data['initiatingUserName']) ? $data['initiatingUserName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['actingUserName'] = isset($data['actingUserName']) ? $data['actingUserName'] : null;
        $this->container['actingUserIpAddress'] = isset($data['actingUserIpAddress']) ? $data['actingUserIpAddress'] : null;
        $this->container['participantEmail'] = isset($data['participantEmail']) ? $data['participantEmail'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['participantRole'] = isset($data['participantRole']) ? $data['participantRole'] : null;
        $this->container['vaultEventId'] = isset($data['vaultEventId']) ? $data['vaultEventId'] : null;
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['actingUserEmail'] = isset($data['actingUserEmail']) ? $data['actingUserEmail'] : null;
        $this->container['devicePhoneNumber'] = isset($data['devicePhoneNumber']) ? $data['devicePhoneNumber'] : null;
        $this->container['initiatingUserEmail'] = isset($data['initiatingUserEmail']) ? $data['initiatingUserEmail'] : null;
        $this->container['digitalSignatureInfo'] = isset($data['digitalSignatureInfo']) ? $data['digitalSignatureInfo'] : null;
        $this->container['vaultProviderName'] = isset($data['vaultProviderName']) ? $data['vaultProviderName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['synchronizationId'] = isset($data['synchronizationId']) ? $data['synchronizationId'] : null;
        $this->container['deviceLocation'] = isset($data['deviceLocation']) ? $data['deviceLocation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getParticipantRoleAllowableValues();
        if (!is_null($this->container['participantRole']) && !in_array($this->container['participantRole'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'participantRole', must be one of '%s'",
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date of the audit event. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets initiatingUserName
     *
     * @return string
     */
    public function getInitiatingUserName()
    {
        return $this->container['initiatingUserName'];
    }

    /**
     * Sets initiatingUserName
     *
     * @param string $initiatingUserName Full name of the user that initiated the event on behalf of the acting user when the account is shared. Will be empty if there is no account sharing in effect
     *
     * @return $this
     */
    public function setInitiatingUserName($initiatingUserName)
    {
        $this->container['initiatingUserName'] = $initiatingUserName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the audit event
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets actingUserName
     *
     * @return string
     */
    public function getActingUserName()
    {
        return $this->container['actingUserName'];
    }

    /**
     * Sets actingUserName
     *
     * @param string $actingUserName The name of the acting user
     *
     * @return $this
     */
    public function setActingUserName($actingUserName)
    {
        $this->container['actingUserName'] = $actingUserName;

        return $this;
    }

    /**
     * Gets actingUserIpAddress
     *
     * @return string
     */
    public function getActingUserIpAddress()
    {
        return $this->container['actingUserIpAddress'];
    }

    /**
     * Sets actingUserIpAddress
     *
     * @param string $actingUserIpAddress The IP address of the user that created the event
     *
     * @return $this
     */
    public function setActingUserIpAddress($actingUserIpAddress)
    {
        $this->container['actingUserIpAddress'] = $actingUserIpAddress;

        return $this;
    }

    /**
     * Gets participantEmail
     *
     * @return string
     */
    public function getParticipantEmail()
    {
        return $this->container['participantEmail'];
    }

    /**
     * Sets participantEmail
     *
     * @param string $participantEmail Email address of the user that is the participant for the event. This may be different than the acting user for certain event types. For example, for a DELEGATION event, this is the user who was delegated to
     *
     * @return $this
     */
    public function setParticipantEmail($participantEmail)
    {
        $this->container['participantEmail'] = $participantEmail;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of agreement event
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets participantRole
     *
     * @return string
     */
    public function getParticipantRole()
    {
        return $this->container['participantRole'];
    }

    /**
     * Sets participantRole
     *
     * @param string $participantRole Role assumed by all participants in the participant set the participant belongs to (signer, approver etc.).
     *
     * @return $this
     */
    public function setParticipantRole($participantRole)
    {
        $allowedValues = $this->getParticipantRoleAllowableValues();
        if (!is_null($participantRole) && !in_array($participantRole, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'participantRole', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['participantRole'] = $participantRole;

        return $this;
    }

    /**
     * Gets vaultEventId
     *
     * @return string
     */
    public function getVaultEventId()
    {
        return $this->container['vaultEventId'];
    }

    /**
     * Sets vaultEventId
     *
     * @param string $vaultEventId The identifier assigned by the vault provider for the vault event (if vaulted, otherwise null)
     *
     * @return $this
     */
    public function setVaultEventId($vaultEventId)
    {
        $this->container['vaultEventId'] = $vaultEventId;

        return $this;
    }

    /**
     * Gets participantId
     *
     * @return string
     */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
     * Sets participantId
     *
     * @param string $participantId The unique identifier of the participant for the event. This may be different than the acting user for certain event types. For example, for a DELEGATION event, this is the user who was delegated to
     *
     * @return $this
     */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;

        return $this;
    }

    /**
     * Gets versionId
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId
     *
     * @param string $versionId An ID which uniquely identifies the version of the document associated with this audit event
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets actingUserEmail
     *
     * @return string
     */
    public function getActingUserEmail()
    {
        return $this->container['actingUserEmail'];
    }

    /**
     * Sets actingUserEmail
     *
     * @param string $actingUserEmail Email address of the user that created the event
     *
     * @return $this
     */
    public function setActingUserEmail($actingUserEmail)
    {
        $this->container['actingUserEmail'] = $actingUserEmail;

        return $this;
    }

    /**
     * Gets devicePhoneNumber
     *
     * @return string
     */
    public function getDevicePhoneNumber()
    {
        return $this->container['devicePhoneNumber'];
    }

    /**
     * Sets devicePhoneNumber
     *
     * @param string $devicePhoneNumber Phone number from the device used when the participation is completed on a mobile phone
     *
     * @return $this
     */
    public function setDevicePhoneNumber($devicePhoneNumber)
    {
        $this->container['devicePhoneNumber'] = $devicePhoneNumber;

        return $this;
    }

    /**
     * Gets initiatingUserEmail
     *
     * @return string
     */
    public function getInitiatingUserEmail()
    {
        return $this->container['initiatingUserEmail'];
    }

    /**
     * Sets initiatingUserEmail
     *
     * @param string $initiatingUserEmail Email address of the user that initiated the event on behalf of the acting user when the account is shared. Will be empty if there is no account sharing in effect
     *
     * @return $this
     */
    public function setInitiatingUserEmail($initiatingUserEmail)
    {
        $this->container['initiatingUserEmail'] = $initiatingUserEmail;

        return $this;
    }

    /**
     * Gets digitalSignatureInfo
     *
     * @return \Adobe\ESign\Model\DigitalSignatureInfo
     */
    public function getDigitalSignatureInfo()
    {
        return $this->container['digitalSignatureInfo'];
    }

    /**
     * Sets digitalSignatureInfo
     *
     * @param \Adobe\ESign\Model\DigitalSignatureInfo $digitalSignatureInfo This is present for ESIGNED events when the participation is signed digitally
     *
     * @return $this
     */
    public function setDigitalSignatureInfo($digitalSignatureInfo)
    {
        $this->container['digitalSignatureInfo'] = $digitalSignatureInfo;

        return $this;
    }

    /**
     * Gets vaultProviderName
     *
     * @return string
     */
    public function getVaultProviderName()
    {
        return $this->container['vaultProviderName'];
    }

    /**
     * Sets vaultProviderName
     *
     * @param string $vaultProviderName Name of the vault provider for the vault event (if vaulted, otherwise null)
     *
     * @return $this
     */
    public function setVaultProviderName($vaultProviderName)
    {
        $this->container['vaultProviderName'] = $vaultProviderName;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The event comment. For RECALLED or REJECTED, the reason given by the user that initiates the event. For DELEGATE or SHARE, the message from the acting user to the participant
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets synchronizationId
     *
     * @return string
     */
    public function getSynchronizationId()
    {
        return $this->container['synchronizationId'];
    }

    /**
     * Sets synchronizationId
     *
     * @param string $synchronizationId A unique identifier linking offline events to synchronization events (specified for offline signing events and synchronization events, else null)
     *
     * @return $this
     */
    public function setSynchronizationId($synchronizationId)
    {
        $this->container['synchronizationId'] = $synchronizationId;

        return $this;
    }

    /**
     * Gets deviceLocation
     *
     * @return \Adobe\ESign\Model\DeviceLocation
     */
    public function getDeviceLocation()
    {
        return $this->container['deviceLocation'];
    }

    /**
     * Sets deviceLocation
     *
     * @param \Adobe\ESign\Model\DeviceLocation $deviceLocation Location of the device that generated the event (This value may be null due to limited privileges)
     *
     * @return $this
     */
    public function setDeviceLocation($deviceLocation)
    {
        $this->container['deviceLocation'] = $deviceLocation;

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

