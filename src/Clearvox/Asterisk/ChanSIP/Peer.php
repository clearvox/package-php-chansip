<?php
namespace Clearvox\Asterisk\ChanSIP;

class Peer
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $ipaddr;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var int
     */
    protected $regSeconds;

    /**
     * @var string
     */
    protected $defaultUser;

    /**
     * @var string
     */
    protected $fullContact;

    /**
     * @var string
     */
    protected $regServer;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var int
     */
    protected $lastMs;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $type;

    const TYPE_FRIEND = 'friend';
    const TYPE_USER   = 'user';
    const TYPE_PEER   = 'peer';

    /**
     * @var string
     */
    protected $context;

    /**
     * @var string
     */
    protected $permit;

    /**
     * @var string
     */
    protected $deny;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $md5Secret;

    /**
     * @var string
     */
    protected $remoteSecret;

    /**
     * @var string
     */
    protected $transport;

    const TRANSPORT_UDP = 'udp';
    const TRANSPORT_TCP = 'tcp';
    const TRANSPORT_TLS = 'tls';
    const TRANSPORT_WS  = 'ws';
    const TRANSPORT_WSS = 'wss';
    const TRANSPORT_UDP_TCP = 'udp,tcp';
    const TRANSPORT_TCP_UDP = 'tcp,udp';

    /**
     * @var string
     */
    protected $dtmfMode;

    const DTMF_MODE_RFC2833 = 'rfc2833';
    const DTMF_MODE_INFO    = 'info';
    const DTMF_MODE_SHORT_INFO = 'shortinfo';
    const DTMF_MODE_INBAND = 'inband';
    const DTMF_MODE_AUTO = 'auto';

    /**
     * @var string
     */
    protected $directMedia;

    const DIRECT_MEDIA_YES = 'yes';
    const DIRECT_MEDIA_NO  = 'no';
    const DIRECT_MEDIA_NONAT = 'nonat';
    const DIRECT_MEDIA_UPDATE = 'update';

    /**
     * @var string
     */
    protected $nat;



    /**
     * @var string
     */
    protected $callGroup;

    /**
     * @var string
     */
    protected $pickupGroup;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $disallow;

    /**
     * @var string
     */
    protected $allow;

    /**
     * @var string
     */
    protected $insecure;

    /**
     * @var string
     */
    protected $trustRpid;

    const TRUST_RPID_YES = 'yes';
    const TRUST_RPID_NO  = 'no';

    /**
     * @var string
     */
    protected $progressInband;

    const PROGRESS_INBAND_YES = 'yes';
    const PROGRESS_INBAND_NO  = 'no';
    const PROGRESS_INBAND_NEVER = 'never';

    /**
     * @var string
     */
    protected $promiscredir;

    const PROMISCREDIR_YES = 'yes';
    const PROMISCREDIR_NO  = 'no';

    /**
     * @var string
     */
    protected $useClientCode;

    const USE_CLIENT_CODE_YES = 'yes';
    const USE_CLIENT_CODE_NO  = 'no';

    /**
     * @var string
     */
    protected $accountCode;

    /**
     * @var string
     */
    protected $setVar;

    /**
     * @var string
     */
    protected $callerID;

    /**
     * @var string
     */
    protected $amaFlags;

    /**
     * @var string
     */
    protected $callCounter;

    const CALL_COUNTER_YES = 'yes';
    const CALL_COUNTER_NO = 'no';

    /**
     * @var int
     */
    protected $busyLevel;

    /**
     * @var string
     */
    protected $allowOverlap;

    const ALLOW_OVERLAP_YES = 'yes';
    const ALLOW_OVERLAP_NO  = 'no';

    /**
     * @var string
     */
    protected $allowSubscribe;

    const ALLOW_SUBSCRIBE_YES = 'yes';
    const ALLOW_SUBSCRIBE_NO  = 'no';

    /**
     * @var string
     */
    protected $videoSupport;

    const VIDEO_SUPPORT_YES = 'yes';
    const VIDEO_SUPPORT_NO  = 'no';

    /**
     * @var int
     */
    protected $maxCallBitRate;

    /**
     * @var string
     */
    protected $rfc2833Compensate;

    const RFC2833_COMPENSATE_YES = 'yes';
    const RFC2833_COMPENSATE_NO  = 'no';

    /**
     * @var string
     */
    protected $mailbox;

    /**
     * @var string
     */
    protected $sessionTimers;

    const SESSION_TIMERS_ACCEPT = 'accept';
    const SESSION_TIMERS_REFUSE = 'refuse';
    const SESSION_TIMERS_ORIGINATE = 'originate';

    /**
     * @var int
     */
    protected $sessionExpires;

    /**
     * @var int
     */
    protected $sessionMinse;

    /**
     * @var string
     */
    protected $sessionRefresher;

    const SESSION_REFRESHER_UAC = 'uac';
    const SESSION_REFRESHER_UAS = 'uas';

    /**
     * @var string
     */
    protected $t38ptUserTpSource;

    /**
     * @var string
     */
    protected $regExten;

    /**
     * @var string
     */
    protected $fromDomain;

    /**
     * @var string
     */
    protected $fromUser;

    /**
     * @var string
     */
    protected $qualify;

    /**
     * @var string
     */
    protected $defaultIp;

    /**
     * @var int
     */
    protected $rtpTimeout;

    /**
     * @var int
     */
    protected $rtpHoldTimeout;

    /**
     * @var string
     */
    protected $sendRpid;

    const SEND_RPID_YES = 'yes';
    const SEND_RPID_NO = 'no';
    const SEND_RPID_RPID = 'rpid';
    const SEND_RPID_PAI = 'pai';

    /**
     * @var string
     */
    protected $outboundProxy;

    /**
     * @var string
     */
    protected $callbackExtension;

    /**
     * @var int
     */
    protected $timerT1;

    /**
     * @var int
     */
    protected $timerB;

    /**
     * @var int
     */
    protected $qualifyFreq;

    /**
     * @var string
     */
    protected $constantsSrc;

    const CONSTANTS_SRC_YES = 'yes';
    const CONSTANTS_SRC_NO  = 'no';

    /**
     * @var string
     */
    protected $contactPermit;

    /**
     * @var string
     */
    protected $contactDeny;

    /**
     * @var string
     */
    protected $useReqPhone;

    const USE_REQ_PHONE_YES = 'yes';
    const USE_REQ_PHONE_NO  = 'no';

    /**
     * @var string
     */
    protected $textSupport;

    const TEXT_SUPPORT_YES = 'yes';
    const TEXT_SUPPORT_NO  = 'no';

    /**
     * @var string
     */
    protected $faxDetect;

    const FAX_DETECT_YES = 'yes';
    const FAX_DETECT_NO  = 'no';

    /**
     * @var string
     */
    protected $buggyMwi;

    const BUGGY_MWI_YES = 'yes';
    const BUGGY_MWI_NO  = 'no';

    /**
     * @var string
     */
    protected $auth;

    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string
     */
    protected $trunkName;

    /**
     * @var string
     */
    protected $cidNumber;

    /**
     * @var string
     */
    protected $callingPres;

    const CALLING_PRES_ALLOWED_NOT_SCREENED = 'allowed_not_screened';
    const CALLING_PRES_ALLOWED_PASSED_SCREEN = 'allowed_passed_screen';
    const CALLING_PRES_ALLOWED_FAILED_SCREEN = 'allowed_failed_screen';
    const CALLING_PRES_ALLOWED = 'allowed';
    const CALLING_PRES_PROHIB_NOT_SCREENED = 'prohib_not_screened';
    const CALLING_PRES_PROHIB_PASSED_SCREEN = 'prohib_passed_screen';
    const CALLING_PRES_PROHIB_FAILED_SCREEN = 'prohib_failed_screen';
    const CALLINg_PRES_PROHIB = 'prohib';

    /**
     * @var string
     */
    protected $mohInterpret;

    /**
     * @var string
     */
    protected $mohSuggest;

    /**
     * @var string
     */
    protected $parkingLot;

    /**
     * @var string
     */
    protected $hasVoicemail;

    const HAS_VOICEMAIL_YES = 'yes';
    const HAS_VOICEMAIL_NO  = 'no';

    /**
     * @var string
     */
    protected $subscribeMwi;

    const SUBSCRIBE_MWI_YES = 'yes';
    const SUBSCRIBE_MWI_NO  = 'no';

    /**
     * @var string
     */
    protected $subscribeContext;

    /**
     * @var string
     */
    protected $vmExten;

    /**
     * @var string
     */
    protected $autoframing;

    const AUTOFRAMING_YES = 'yes';
    const AUTOFRAMING_NO  = 'no';

    /**
     * @var int
     */
    protected $rtpKeepAlive;

    /**
     * @var int
     */
    protected $callLimit;

    /**
     * @var string
     */
    protected $g726NonStandard;

    const G726_NON_STANDARD_YES = 'yes';
    const G726_NON_STANDARD_NO  = 'no';

    /**
     * @var string
     */
    protected $ignoresDpVersion;

    const IGNORES_DP_VERSION_YES = 'yes';
    const IGNORES_DP_VERSION_NO  = 'no';

    /**
     * @var string
     */
    protected $allowTransfer;

    const ALLOW_TRANSFER_YES = 'yes';
    const ALLOW_TRANSFER_NO  = 'no';

    /**
     * @var string
     */
    protected $dynamic;

    const DYNAMIC_YES = 'yes';
    const DYNAMIC_NO  = 'no';

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $supportPath;

    const SUPPORT_PATH_YES = 'yes';
    const SUPPORT_PATH_NO  = 'no';

    protected $avpf;

    const AVPF_YES = 'yes';
    const AVPF_NO  = 'no';

    protected $forceAvp;

    const FORCE_AVP_YES = 'yes';
    const FORCE_AVP_NO  = 'no';

    protected $encryption;

    const ENCRYPTION_YES = 'yes';
    const ENCRYPTION_NO  = 'no';

    protected $iceSupport;

    const ICE_SUPPORT_YES = 'yes';
    const ICE_SUPPORT_NO  = 'no';

    protected $dtlsEnable;

    const DTLS_ENABLE_YES = 'yes';
    const DTLS_ENABLE_NO  = 'no';

    protected $dtlsVerify;

    const DTLS_VERIFY_YES = 'yes';
    const DTLS_VERIFY_NO  = 'no';
    const DTLS_VERIFY_FINGERPRINT = 'fingerprint';
    const DTLS_VERIFY_CERTIFICATE = 'certificate';

    protected $dtlsRekey;

    protected $dtlsCertFile;

    protected $dtlsPrivateKey;

    protected $dtlsCipher;

    protected $dtlsCaFile;

    protected $dtlsCaPath;

    protected $dtlsSetup;

    const DTLS_SETUP_ACTIVE = 'active';
    const DTLS_SETUP_PASSIVE = 'passive';
    const DTLS_SETUP_ACTPASS = 'actpass';

    protected $dtlsFingerprint;

    const DTLS_FINGERPRINT_SHA1 = 'sha-1';
    const DTLS_FINGERPRINT_SHA256 = 'sha-256';

    /**
     * @param string $accountCode
     * @return Peer
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * @param string $allow
     * @return Peer
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * @param string $allowOverlap
     * @return Peer
     */
    public function setAllowOverlap($allowOverlap)
    {
        $this->allowOverlap = $allowOverlap;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowOverlap()
    {
        return $this->allowOverlap;
    }

    /**
     * @param string $allowSubscribe
     * @return Peer
     */
    public function setAllowSubscribe($allowSubscribe)
    {
        $this->allowSubscribe = $allowSubscribe;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSubscribe()
    {
        return $this->allowSubscribe;
    }

    /**
     * @param string $allowTransfer
     * @return Peer
     */
    public function setAllowTransfer($allowTransfer)
    {
        $this->allowTransfer = $allowTransfer;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowTransfer()
    {
        return $this->allowTransfer;
    }

    /**
     * @param string $amaFlags
     * @return Peer
     */
    public function setAmaFlags($amaFlags)
    {
        $this->amaFlags = $amaFlags;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmaFlags()
    {
        return $this->amaFlags;
    }

    /**
     * @param string $auth
     * @return Peer
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param string $autoframing
     * @return Peer
     */
    public function setAutoframing($autoframing)
    {
        $this->autoframing = $autoframing;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoframing()
    {
        return $this->autoframing;
    }

    /**
     * @param string $buggyMwi
     * @return Peer
     */
    public function setBuggyMwi($buggyMwi)
    {
        $this->buggyMwi = $buggyMwi;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuggyMwi()
    {
        return $this->buggyMwi;
    }

    /**
     * @param int $busyLevel
     * @return Peer
     */
    public function setBusyLevel($busyLevel)
    {
        $this->busyLevel = $busyLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getBusyLevel()
    {
        return $this->busyLevel;
    }

    /**
     * @param string $callCounter
     * @return Peer
     */
    public function setCallCounter($callCounter)
    {
        $this->callCounter = $callCounter;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallCounter()
    {
        return $this->callCounter;
    }

    /**
     * @param string $callGroup
     * @return Peer
     */
    public function setCallGroup($callGroup)
    {
        $this->callGroup = $callGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallGroup()
    {
        return $this->callGroup;
    }

    /**
     * @param int $callLimit
     * @return Peer
     */
    public function setCallLimit($callLimit)
    {
        $this->callLimit = $callLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getCallLimit()
    {
        return $this->callLimit;
    }

    /**
     * @param string $callbackExtension
     * @return Peer
     */
    public function setCallbackExtension($callbackExtension)
    {
        $this->callbackExtension = $callbackExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackExtension()
    {
        return $this->callbackExtension;
    }

    /**
     * @param string $callerID
     * @return Peer
     */
    public function setCallerID($callerID)
    {
        $this->callerID = $callerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallerID()
    {
        return $this->callerID;
    }

    /**
     * @param string $callingPres
     * @return Peer
     */
    public function setCallingPres($callingPres)
    {
        $this->callingPres = $callingPres;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallingPres()
    {
        return $this->callingPres;
    }

    /**
     * @param string $cidNumber
     * @return Peer
     */
    public function setCidNumber($cidNumber)
    {
        $this->cidNumber = $cidNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCidNumber()
    {
        return $this->cidNumber;
    }

    /**
     * @param string $constantsSrc
     * @return Peer
     */
    public function setConstantsSrc($constantsSrc)
    {
        $this->constantsSrc = $constantsSrc;
        return $this;
    }

    /**
     * @return string
     */
    public function getConstantsSrc()
    {
        return $this->constantsSrc;
    }

    /**
     * @param string $contactDeny
     * @return Peer
     */
    public function setContactDeny($contactDeny)
    {
        $this->contactDeny = $contactDeny;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactDeny()
    {
        return $this->contactDeny;
    }

    /**
     * @param string $contactPermit
     * @return Peer
     */
    public function setContactPermit($contactPermit)
    {
        $this->contactPermit = $contactPermit;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPermit()
    {
        return $this->contactPermit;
    }

    /**
     * @param string $context
     * @return Peer
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $defaultIp
     * @return Peer
     */
    public function setDefaultIp($defaultIp)
    {
        $this->defaultIp = $defaultIp;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultIp()
    {
        return $this->defaultIp;
    }

    /**
     * @param string $defaultUser
     * @return Peer
     */
    public function setDefaultUser($defaultUser)
    {
        $this->defaultUser = $defaultUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultUser()
    {
        return $this->defaultUser;
    }

    /**
     * @param string $deny
     * @return Peer
     */
    public function setDeny($deny)
    {
        $this->deny = $deny;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeny()
    {
        return $this->deny;
    }

    /**
     * @param string $directMedia
     * @return Peer
     */
    public function setDirectMedia($directMedia)
    {
        $this->directMedia = $directMedia;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectMedia()
    {
        return $this->directMedia;
    }

    /**
     * @param string $disallow
     * @return Peer
     */
    public function setDisallow($disallow)
    {
        $this->disallow = $disallow;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisallow()
    {
        return $this->disallow;
    }

    /**
     * @param string $dtmfMode
     * @return Peer
     */
    public function setDtmfMode($dtmfMode)
    {
        $this->dtmfMode = $dtmfMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDtmfMode()
    {
        return $this->dtmfMode;
    }

    /**
     * @param string $dynamic
     * @return Peer
     */
    public function setDynamic($dynamic)
    {
        $this->dynamic = $dynamic;
        return $this;
    }

    /**
     * @return string
     */
    public function getDynamic()
    {
        return $this->dynamic;
    }

    /**
     * @param string $faxDetect
     * @return Peer
     */
    public function setFaxDetect($faxDetect)
    {
        $this->faxDetect = $faxDetect;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxDetect()
    {
        return $this->faxDetect;
    }

    /**
     * @param string $fromDomain
     * @return Peer
     */
    public function setFromDomain($fromDomain)
    {
        $this->fromDomain = $fromDomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromDomain()
    {
        return $this->fromDomain;
    }

    /**
     * @param string $fromUser
     * @return Peer
     */
    public function setFromUser($fromUser)
    {
        $this->fromUser = $fromUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromUser()
    {
        return $this->fromUser;
    }

    /**
     * @param string $fullContact
     * @return Peer
     */
    public function setFullContact($fullContact)
    {
        $this->fullContact = $fullContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullContact()
    {
        return $this->fullContact;
    }

    /**
     * @param string $fullName
     * @return Peer
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $g726NonStandard
     * @return Peer
     */
    public function setG726NonStandard($g726NonStandard)
    {
        $this->g726NonStandard = $g726NonStandard;
        return $this;
    }

    /**
     * @return string
     */
    public function getG726NonStandard()
    {
        return $this->g726NonStandard;
    }

    /**
     * @param string $hasVoicemail
     * @return Peer
     */
    public function setHasVoicemail($hasVoicemail)
    {
        $this->hasVoicemail = $hasVoicemail;
        return $this;
    }

    /**
     * @return string
     */
    public function getHasVoicemail()
    {
        return $this->hasVoicemail;
    }

    /**
     * @param string $host
     * @return Peer
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param int $id
     * @return Peer
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $ignoresDpVersion
     * @return Peer
     */
    public function setIgnoresDpVersion($ignoresDpVersion)
    {
        $this->ignoresDpVersion = $ignoresDpVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getIgnoresDpVersion()
    {
        return $this->ignoresDpVersion;
    }

    /**
     * @param string $insecure
     * @return Peer
     */
    public function setInsecure($insecure)
    {
        $this->insecure = $insecure;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsecure()
    {
        return $this->insecure;
    }

    /**
     * @param string $ipaddr
     * @return Peer
     */
    public function setIpaddr($ipaddr)
    {
        $this->ipaddr = $ipaddr;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpaddr()
    {
        return $this->ipaddr;
    }

    /**
     * @param string $language
     * @return Peer
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param int $lastMs
     * @return Peer
     */
    public function setLastMs($lastMs)
    {
        $this->lastMs = $lastMs;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastMs()
    {
        return $this->lastMs;
    }

    /**
     * @param string $mailbox
     * @return Peer
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * @param int $maxCallBitRate
     * @return Peer
     */
    public function setMaxCallBitRate($maxCallBitRate)
    {
        $this->maxCallBitRate = $maxCallBitRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCallBitRate()
    {
        return $this->maxCallBitRate;
    }

    /**
     * @param string $md5Secret
     * @return Peer
     */
    public function setMd5Secret($md5Secret)
    {
        $this->md5Secret = $md5Secret;
        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Secret()
    {
        return $this->md5Secret;
    }

    /**
     * @param string $mohInterpret
     * @return Peer
     */
    public function setMohInterpret($mohInterpret)
    {
        $this->mohInterpret = $mohInterpret;
        return $this;
    }

    /**
     * @return string
     */
    public function getMohInterpret()
    {
        return $this->mohInterpret;
    }

    /**
     * @param string $mohSuggest
     * @return Peer
     */
    public function setMohSuggest($mohSuggest)
    {
        $this->mohSuggest = $mohSuggest;
        return $this;
    }

    /**
     * @return string
     */
    public function getMohSuggest()
    {
        return $this->mohSuggest;
    }

    /**
     * @param string $name
     * @return Peer
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $nat
     * @return Peer
     */
    public function setNat($nat)
    {
        $this->nat = $nat;
        return $this;
    }

    /**
     * @return string
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * @param string $outboundProxy
     * @return Peer
     */
    public function setOutboundProxy($outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->outboundProxy;
    }

    /**
     * @param string $parkingLot
     * @return Peer
     */
    public function setParkingLot($parkingLot)
    {
        $this->parkingLot = $parkingLot;
        return $this;
    }

    /**
     * @return string
     */
    public function getParkingLot()
    {
        return $this->parkingLot;
    }

    /**
     * @param string $path
     * @return Peer
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $permit
     * @return Peer
     */
    public function setPermit($permit)
    {
        $this->permit = $permit;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermit()
    {
        return $this->permit;
    }

    /**
     * @param string $pickupGroup
     * @return Peer
     */
    public function setPickupGroup($pickupGroup)
    {
        $this->pickupGroup = $pickupGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupGroup()
    {
        return $this->pickupGroup;
    }

    /**
     * @param int $port
     * @return Peer
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $progressInband
     * @return Peer
     */
    public function setProgressInband($progressInband)
    {
        $this->progressInband = $progressInband;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgressInband()
    {
        return $this->progressInband;
    }

    /**
     * @param string $promiscredir
     * @return Peer
     */
    public function setPromiscredir($promiscredir)
    {
        $this->promiscredir = $promiscredir;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromiscredir()
    {
        return $this->promiscredir;
    }

    /**
     * @param string $qualify
     * @return Peer
     */
    public function setQualify($qualify)
    {
        $this->qualify = $qualify;
        return $this;
    }

    /**
     * @return string
     */
    public function getQualify()
    {
        return $this->qualify;
    }

    /**
     * @param int $qualifyFreq
     * @return Peer
     */
    public function setQualifyFreq($qualifyFreq)
    {
        $this->qualifyFreq = $qualifyFreq;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualifyFreq()
    {
        return $this->qualifyFreq;
    }

    /**
     * @param string $regExten
     * @return Peer
     */
    public function setRegExten($regExten)
    {
        $this->regExten = $regExten;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegExten()
    {
        return $this->regExten;
    }

    /**
     * @param int $regSeconds
     * @return Peer
     */
    public function setRegSeconds($regSeconds)
    {
        $this->regSeconds = $regSeconds;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegSeconds()
    {
        return $this->regSeconds;
    }

    /**
     * @param string $regServer
     * @return Peer
     */
    public function setRegServer($regServer)
    {
        $this->regServer = $regServer;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegServer()
    {
        return $this->regServer;
    }

    /**
     * @param string $remoteSecret
     * @return Peer
     */
    public function setRemoteSecret($remoteSecret)
    {
        $this->remoteSecret = $remoteSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteSecret()
    {
        return $this->remoteSecret;
    }

    /**
     * @param string $rfc2833Compensate
     * @return Peer
     */
    public function setRfc2833Compensate($rfc2833Compensate)
    {
        $this->rfc2833Compensate = $rfc2833Compensate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRfc2833Compensate()
    {
        return $this->rfc2833Compensate;
    }

    /**
     * @param int $rtpHoldTimeout
     * @return Peer
     */
    public function setRtpHoldTimeout($rtpHoldTimeout)
    {
        $this->rtpHoldTimeout = $rtpHoldTimeout;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtpHoldTimeout()
    {
        return $this->rtpHoldTimeout;
    }

    /**
     * @param int $rtpKeepAlive
     * @return Peer
     */
    public function setRtpKeepAlive($rtpKeepAlive)
    {
        $this->rtpKeepAlive = $rtpKeepAlive;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtpKeepAlive()
    {
        return $this->rtpKeepAlive;
    }

    /**
     * @param int $rtpTimeout
     * @return Peer
     */
    public function setRtpTimeout($rtpTimeout)
    {
        $this->rtpTimeout = $rtpTimeout;
        return $this;
    }

    /**
     * @return int
     */
    public function getRtpTimeout()
    {
        return $this->rtpTimeout;
    }

    /**
     * @param string $secret
     * @return Peer
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $sendRpid
     * @return Peer
     */
    public function setSendRpid($sendRpid)
    {
        $this->sendRpid = $sendRpid;
        return $this;
    }

    /**
     * @return string
     */
    public function getSendRpid()
    {
        return $this->sendRpid;
    }

    /**
     * @param int $sessionExpires
     * @return Peer
     */
    public function setSessionExpires($sessionExpires)
    {
        $this->sessionExpires = $sessionExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionExpires()
    {
        return $this->sessionExpires;
    }

    /**
     * @param int $sessionMinse
     * @return Peer
     */
    public function setSessionMinse($sessionMinse)
    {
        $this->sessionMinse = $sessionMinse;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionMinse()
    {
        return $this->sessionMinse;
    }

    /**
     * @param string $sessionRefresher
     * @return Peer
     */
    public function setSessionRefresher($sessionRefresher)
    {
        $this->sessionRefresher = $sessionRefresher;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionRefresher()
    {
        return $this->sessionRefresher;
    }

    /**
     * @param string $sessionTimers
     * @return Peer
     */
    public function setSessionTimers($sessionTimers)
    {
        $this->sessionTimers = $sessionTimers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionTimers()
    {
        return $this->sessionTimers;
    }

    /**
     * @param string $setVar
     * @return Peer
     */
    public function setSetVar($setVar)
    {
        $this->setVar = $setVar;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetVar()
    {
        return $this->setVar;
    }

    /**
     * @param string $subscribeMwi
     * @return Peer
     */
    public function setSubscribeMwi($subscribeMwi)
    {
        $this->subscribeMwi = $subscribeMwi;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscribeMwi()
    {
        return $this->subscribeMwi;
    }

    /**
     * @return string
     */
    public function getSubscribeContext()
    {
        return $this->subscribeContext;
    }

    /**
     * @param string $subscribeContext
     * @return Peer
     */
    public function setSubscribeContext($subscribeContext)
    {
        $this->subscribeContext = $subscribeContext;
        return $this;
    }

    /**
     * @param string $supportPath
     * @return Peer
     */
    public function setSupportPath($supportPath)
    {
        $this->supportPath = $supportPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportPath()
    {
        return $this->supportPath;
    }

    /**
     * @param string $t38ptUserTpSource
     * @return Peer
     */
    public function setT38ptUserTpSource($t38ptUserTpSource)
    {
        $this->t38ptUserTpSource = $t38ptUserTpSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getT38ptUserTpSource()
    {
        return $this->t38ptUserTpSource;
    }

    /**
     * @param string $textSupport
     * @return Peer
     */
    public function setTextSupport($textSupport)
    {
        $this->textSupport = $textSupport;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextSupport()
    {
        return $this->textSupport;
    }

    /**
     * @param int $timerB
     * @return Peer
     */
    public function setTimerB($timerB)
    {
        $this->timerB = $timerB;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimerB()
    {
        return $this->timerB;
    }

    /**
     * @param int $timerT1
     * @return Peer
     */
    public function setTimerT1($timerT1)
    {
        $this->timerT1 = $timerT1;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimerT1()
    {
        return $this->timerT1;
    }

    /**
     * @param string $transport
     * @return Peer
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param string $trunkName
     * @return Peer
     */
    public function setTrunkName($trunkName)
    {
        $this->trunkName = $trunkName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrunkName()
    {
        return $this->trunkName;
    }

    /**
     * @param string $trustRpid
     * @return Peer
     */
    public function setTrustRpid($trustRpid)
    {
        $this->trustRpid = $trustRpid;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrustRpid()
    {
        return $this->trustRpid;
    }

    /**
     * @param string $type
     * @return Peer
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $useClientCode
     * @return Peer
     */
    public function setUseClientCode($useClientCode)
    {
        $this->useClientCode = $useClientCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUseClientCode()
    {
        return $this->useClientCode;
    }

    /**
     * @param string $useReqPhone
     * @return Peer
     */
    public function setUseReqPhone($useReqPhone)
    {
        $this->useReqPhone = $useReqPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getUseReqPhone()
    {
        return $this->useReqPhone;
    }

    /**
     * @param string $userAgent
     * @return Peer
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $videoSupport
     * @return Peer
     */
    public function setVideoSupport($videoSupport)
    {
        $this->videoSupport = $videoSupport;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoSupport()
    {
        return $this->videoSupport;
    }

    /**
     * @param string $vmExten
     * @return Peer
     */
    public function setVmExten($vmExten)
    {
        $this->vmExten = $vmExten;
        return $this;
    }

    /**
     * @return string
     */
    public function getVmExten()
    {
        return $this->vmExten;
    }

    /**
     * @return mixed
     */
    public function getAvpf()
    {
        return $this->avpf;
    }

    /**
     * @param mixed $avpf
     * @return Peer
     */
    public function setAvpf($avpf)
    {
        $this->avpf = $avpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getForceAvp()
    {
        return $this->forceAvp;
    }

    /**
     * @param mixed $forceAvpf
     * @return Peer
     */
    public function setForceAvp($forceAvp)
    {
        $this->forceAvp = $forceAvp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    /**
     * @param mixed $encryption
     * @return Peer
     */
    public function setEncryption($encryption)
    {
        $this->encryption = $encryption;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIceSupport()
    {
        return $this->iceSupport;
    }

    /**
     * @param mixed $iceSupport
     * @return Peer
     */
    public function setIceSupport($iceSupport)
    {
        $this->iceSupport = $iceSupport;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsEnable()
    {
        return $this->dtlsEnable;
    }

    /**
     * @param mixed $dtlsEnable
     * @return Peer
     */
    public function setDtlsEnable($dtlsEnable)
    {
        $this->dtlsEnable = $dtlsEnable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsVerify()
    {
        return $this->dtlsVerify;
    }

    /**
     * @param mixed $dtlsVerify
     * @return Peer
     */
    public function setDtlsVerify($dtlsVerify)
    {
        $this->dtlsVerify = $dtlsVerify;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsRekey()
    {
        return $this->dtlsRekey;
    }

    /**
     * @param mixed $dtlsRekey
     * @return Peer
     */
    public function setDtlsRekey($dtlsRekey)
    {
        $this->dtlsRekey = $dtlsRekey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsCertFile()
    {
        return $this->dtlsCertFile;
    }

    /**
     * @param mixed $dtlsCertFile
     * @return Peer
     */
    public function setDtlsCertFile($dtlsCertFile)
    {
        $this->dtlsCertFile = $dtlsCertFile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsPrivateKey()
    {
        return $this->dtlsPrivateKey;
    }

    /**
     * @param mixed $dtlsPrivateKey
     * @return Peer
     */
    public function setDtlsPrivateKey($dtlsPrivateKey)
    {
        $this->dtlsPrivateKey = $dtlsPrivateKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsCipher()
    {
        return $this->dtlsCipher;
    }

    /**
     * @param mixed $dtlsCipher
     * @return Peer
     */
    public function setDtlsCipher($dtlsCipher)
    {
        $this->dtlsCipher = $dtlsCipher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsCaFile()
    {
        return $this->dtlsCaFile;
    }

    /**
     * @param mixed $dtlsCaFile
     * @return Peer
     */
    public function setDtlsCaFile($dtlsCaFile)
    {
        $this->dtlsCaFile = $dtlsCaFile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsCaPath()
    {
        return $this->dtlsCaPath;
    }

    /**
     * @param mixed $dtlsCaPath
     * @return Peer
     */
    public function setDtlsCaPath($dtlsCaPath)
    {
        $this->dtlsCaPath = $dtlsCaPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsSetup()
    {
        return $this->dtlsSetup;
    }

    /**
     * @param mixed $dtlsSetup
     * @return Peer
     */
    public function setDtlsSetup($dtlsSetup)
    {
        $this->dtlsSetup = $dtlsSetup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDtlsFingerprint()
    {
        return $this->dtlsFingerprint;
    }

    /**
     * @param mixed $dtlsFingerprint
     * @return Peer
     */
    public function setDtlsFingerprint($dtlsFingerprint)
    {
        $this->dtlsFingerprint = $dtlsFingerprint;
        return $this;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $string = '';
        
        $ignore = [
            'id',
            'name',
            'ipaddr',
            'regseconds',
            'fullcontact',
            'lastms',
            'usereqphone',
            'trunkname',
            'hasvoicemail',
            'dynamic',
            'path',
            'supportpath',
        ];
        
        $differences = [
            'sessionTimers'     => 'session-timers',
            'sessionExpires'    => 'session-expires',
            'sessionRefresher'  => 'session-refresher',
            'sessionMinse'      => 'session-minse',
            't38ptUserTpSource' => 't38pt_usertpsource',
            'callLimit'         => 'call-limit',
            'forceAvp'          => 'force_avp',
        ];

        if (!empty($this->name)) {
            $string .= "[{$this->name}]\n";
        }

        $objectVars = get_object_vars($this);
        ksort($objectVars);

        foreach ($objectVars as $prop => $value) {
            if (in_array($prop, $ignore)) {
                continue;
            }
            if (array_key_exists($prop, $differences)) {
                if (!empty($value)) {
                    $string .= $differences[$prop] . '=' . $this->$prop . "\n";
                }
            } else {
                if (!empty($value)) {
                    $string .= strtolower($prop) . '=' . $this->$prop . "\n";
                }
            }
        }
        
        return $string;
    }

    public function __toString()
    {
        return $this->toString();
    }
}