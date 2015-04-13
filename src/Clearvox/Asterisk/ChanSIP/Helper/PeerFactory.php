<?php
namespace Clearvox\Asterisk\ChanSIP\Helper;

use Clearvox\Asterisk\ChanSIP\Peer;

class PeerFactory
{
    /**
     * Make an array of peers from the contents of the string.
     *
     * @param string $string
     * @return Peer[]
     */
    public function makePeersFromString($string)
    {
        // Get the array properties
        $peers = $this->arrayFromString($string);

        $preparedPeers = array();
        foreach($peers as $peerName => $peerArray) {
            $preparedPeers[] = $this->makePeerFromArray($peerName, $peerArray);
        }

        return $preparedPeers;
    }

    /**
     * @param string $peerName
     * @param array $peerArray
     * @return Peer
     */
    protected function makePeerFromArray($peerName, array $peerArray)
    {
        $peer = new Peer();
        $peer->setName($peerName);

        if(array_key_exists('ipaddr',$peerArray)){
            $peer->setIpAddr($peerArray['ipaddr']);
        }

        if(array_key_exists('port',$peerArray)){
            $peer->setPort($peerArray['port']);
        }

        if(array_key_exists('regseconds',$peerArray)){
            $peer->setRegSeconds($peerArray['regseconds']);
        }

        if(array_key_exists('defaultuser',$peerArray)){
            $peer->setDefaultUser($peerArray['defaultuser']);
        }

        if(array_key_exists('fullcontact',$peerArray)){
            $peer->setFullContact($peerArray['fullcontact']);
        }

        if(array_key_exists('regserver',$peerArray)){
            $peer->setRegServer($peerArray['regserver']);
        }

        if(array_key_exists('useragent',$peerArray)){
            $peer->setUserAgent($peerArray['useragent']);
        }

        if(array_key_exists('lastms',$peerArray)){
            $peer->setLastMs($peerArray['lastms']);
        }

        if(array_key_exists('host',$peerArray)){
            $peer->setHost($peerArray['host']);
        }

        if(array_key_exists('type',$peerArray)){
            $peer->setType($peerArray['type']);
        }

        if(array_key_exists('context',$peerArray)){
            $peer->setContext($peerArray['context']);
        }

        if(array_key_exists('permit',$peerArray)){
            $peer->setPermit($peerArray['permit']);
        }

        if(array_key_exists('deny',$peerArray)){
            $peer->setDeny($peerArray['deny']);
        }

        if(array_key_exists('secret',$peerArray)){
            $peer->setSecret($peerArray['secret']);
        }

        if(array_key_exists('md5secret',$peerArray)){
            $peer->setMd5Secret($peerArray['md5secret']);
        }

        if(array_key_exists('remotesecret',$peerArray)){
            $peer->setRemoteSecret($peerArray['remotesecret']);
        }

        if(array_key_exists('transport',$peerArray)){
            $peer->setTransport($peerArray['transport']);
        }

        if(array_key_exists('dtmfmode',$peerArray)){
            $peer->setDtmfMode($peerArray['dtmfmode']);
        }

        if(array_key_exists('directmedia',$peerArray)){
            $peer->setDirectMedia($peerArray['directmedia']);
        }

        if(array_key_exists('nat',$peerArray)){
            $peer->setNat($peerArray['nat']);
        }

        if(array_key_exists('callgroup',$peerArray)){
            $peer->setCallGroup($peerArray['callgroup']);
        }

        if(array_key_exists('pickupgroup',$peerArray)){
            $peer->setPickupGroup($peerArray['pickupgroup']);
        }

        if(array_key_exists('language',$peerArray)){
            $peer->setLanguage($peerArray['language']);
        }

        if(array_key_exists('disallow',$peerArray)){
            $peer->setDisallow($peerArray['disallow']);
        }

        if(array_key_exists('allow',$peerArray)){
            $peer->setAllow($peerArray['allow']);
        }

        if(array_key_exists('insecure',$peerArray)){
            $peer->setInsecure($peerArray['insecure']);
        }

        if(array_key_exists('trustrpid',$peerArray)){
            $peer->setTrustRpid($peerArray['trustrpid']);
        }

        if(array_key_exists('progressinband',$peerArray)){
            $peer->setProgressInband($peerArray['progressinband']);
        }

        if(array_key_exists('promiscredir',$peerArray)){
            $peer->setPromiscredir($peerArray['promiscredir']);
        }

        if(array_key_exists('useclientcode',$peerArray)){
            $peer->setUseClientCode($peerArray['useclientcode']);
        }

        if(array_key_exists('accountcode',$peerArray)){
            $peer->setAccountCode($peerArray['accountcode']);
        }

        if(array_key_exists('setvar',$peerArray)){
            $peer->setSetVar($peerArray['setvar']);
        }

        if(array_key_exists('callerid',$peerArray)){
            $peer->setCallerID($peerArray['callerid']);
        }

        if(array_key_exists('amaflags',$peerArray)){
            $peer->setAmaFlags($peerArray['amaflags']);
        }

        if(array_key_exists('callcounter',$peerArray)){
            $peer->setCallCounter($peerArray['callcounter']);
        }

        if(array_key_exists('busylevel',$peerArray)){
            $peer->setBusyLevel($peerArray['busylevel']);
        }

        if(array_key_exists('allowoverlap',$peerArray)){
            $peer->setAllowOverlap($peerArray['allowoverlap']);
        }

        if(array_key_exists('allowsubscribe',$peerArray)){
            $peer->setAllowSubscribe($peerArray['allowsubscribe']);
        }

        if(array_key_exists('videosupport',$peerArray)){
            $peer->setVideoSupport($peerArray['videosupport']);
        }

        if(array_key_exists('maxcallbitrate',$peerArray)){
            $peer->setMaxCallBitRate($peerArray['maxcallbitrate']);
        }

        if(array_key_exists('rfc2833compensate',$peerArray)){
            $peer->setRfc2833Compensate($peerArray['rfc2833compensate']);
        }

        if(array_key_exists('mailbox',$peerArray)){
            $peer->setMailbox($peerArray['mailbox']);
        }

        if(array_key_exists('session-timers',$peerArray)){
            $peer->setSessionTimers($peerArray['session-timers']);
        }

        if(array_key_exists('session-expires',$peerArray)){
            $peer->setSessionExpires($peerArray['session-expires']);
        }

        if(array_key_exists('session-minse',$peerArray)){
            $peer->setSessionMinse($peerArray['session-minse']);
        }

        if(array_key_exists('session-refresher',$peerArray)){
            $peer->setSessionRefresher($peerArray['session-refresher']);
        }

        if(array_key_exists('t38pt_usertpsource',$peerArray)){
            $peer->setT38ptUserTpSource($peerArray['t38pt_usertpsource']);
        }

        if(array_key_exists('regexten',$peerArray)){
            $peer->setRegExten($peerArray['regexten']);
        }

        if(array_key_exists('fromdomain',$peerArray)){
            $peer->setFromDomain($peerArray['fromdomain']);
        }

        if(array_key_exists('fromuser',$peerArray)){
            $peer->setFromUser($peerArray['fromuser']);
        }

        if(array_key_exists('qualify',$peerArray)){
            $peer->setQualify($peerArray['qualify']);
        }

        if(array_key_exists('defaultip',$peerArray)){
            $peer->setDefaultIp($peerArray['defaultip']);
        }

        if(array_key_exists('rtptimeout',$peerArray)){
            $peer->setRtpTimeout($peerArray['rtptimeout']);
        }

        if(array_key_exists('rtpholdtimeout',$peerArray)){
            $peer->setRtpHoldTimeout($peerArray['rtpholdtimeout']);
        }

        if(array_key_exists('sendrpid',$peerArray)){
            $peer->setSendRpid($peerArray['sendrpid']);
        }

        if(array_key_exists('outboundproxy',$peerArray)){
            $peer->setOutboundProxy($peerArray['outboundproxy']);
        }

        if(array_key_exists('callbackextension',$peerArray)){
            $peer->setCallbackExtension($peerArray['callbackextension']);
        }

        if(array_key_exists('timert1',$peerArray)){
            $peer->setTimerT1($peerArray['timert1']);
        }

        if(array_key_exists('timerb',$peerArray)){
            $peer->setTimerB($peerArray['timerb']);
        }

        if(array_key_exists('qualifyfreq',$peerArray)){
            $peer->setQualifyFreq($peerArray['qualifyfreq']);
        }

        if(array_key_exists('constantssrc',$peerArray)){
            $peer->setConstantsSrc($peerArray['constantssrc']);
        }

        if(array_key_exists('contactpermit',$peerArray)){
            $peer->setContactPermit($peerArray['contactpermit']);
        }

        if(array_key_exists('contactdeny',$peerArray)){
            $peer->setContactDeny($peerArray['contactdeny']);
        }

        if(array_key_exists('usereqphone',$peerArray)){
            $peer->setUseReqPhone($peerArray['usereqphone']);
        }

        if(array_key_exists('textsupport',$peerArray)){
            $peer->setTextSupport($peerArray['textsupport']);
        }

        if(array_key_exists('faxdetect',$peerArray)){
            $peer->setFaxDetect($peerArray['faxdetect']);
        }

        if(array_key_exists('buggymwi',$peerArray)){
            $peer->setBuggyMwi($peerArray['buggymwi']);
        }

        if(array_key_exists('auth',$peerArray)){
            $peer->setAuth($peerArray['auth']);
        }

        if(array_key_exists('fullname',$peerArray)){
            $peer->setFullName($peerArray['fullname']);
        }

        if(array_key_exists('trunkname',$peerArray)){
            $peer->setTrunkName($peerArray['trunkname']);
        }

        if(array_key_exists('cid_number',$peerArray)){
            $peer->setCidNumber($peerArray['cid_number']);
        }

        if(array_key_exists('callingpres',$peerArray)){
            $peer->setCallingPres($peerArray['callingpres']);
        }

        if(array_key_exists('mohinterpret',$peerArray)){
            $peer->setMohInterpret($peerArray['mohinterpret']);
        }

        if(array_key_exists('mohsuggest',$peerArray)){
            $peer->setMohSuggest($peerArray['mohsuggest']);
        }

        if(array_key_exists('parkinglot',$peerArray)){
            $peer->setParkingLot($peerArray['parkinglot']);
        }

        if(array_key_exists('hasvoicemail',$peerArray)){
            $peer->setHasVoicemail($peerArray['hasvoicemail']);
        }

        if(array_key_exists('subscribemwi',$peerArray)){
            $peer->setSubscribeMwi($peerArray['subscribemwi']);
        }

        if(array_key_exists('vmexten',$peerArray)){
            $peer->setVmExten($peerArray['vmexten']);
        }

        if(array_key_exists('autoframing',$peerArray)){
            $peer->setAutoframing($peerArray['autoframing']);
        }

        if(array_key_exists('rtpkeepalive',$peerArray)){
            $peer->setRtpKeepAlive($peerArray['rtpkeepalive']);
        }

        if(array_key_exists('call-limit',$peerArray)){
            $peer->setCallLimit($peerArray['call-limit']);
        }

        if(array_key_exists('g726nonstandard',$peerArray)){
            $peer->setG726NonStandard($peerArray['g726nonstandard']);
        }

        if(array_key_exists('allowtransfer',$peerArray)){
            $peer->setAllowTransfer($peerArray['allowtransfer']);
        }

        if(array_key_exists('dynamic',$peerArray)){
            $peer->setDynamic($peerArray['dynamic']);
        }

        if(array_key_exists('path',$peerArray)){
            $peer->setPath($peerArray['path']);
        }

        if(array_key_exists('supportpath',$peerArray)){
            $peer->setSupportPath($peerArray['supportpath']);
        }

        return $peer;
    }

    /**
     * Build an array out of the string supplied
     *
     * @param string $string
     * @param string $delimiter
     * @return array
     */
    protected function arrayFromString($string, $delimiter = "\n")
    {
        // Remove whitespace
        $string = trim($string);

        // Get each line
        $lines = explode($delimiter, $string);

        // Remove whitespace
        $lines = array_map('trim', $lines);

        $prepared = array();
        $peerName = null;
        foreach ($lines as $line) {

            // Check if start of peer
            if(0 === strpos($line, '[')) {
                $peerName = str_replace(['[', ']'], [''], $line);
                $prepared[$peerName] = array();
            } elseif(false !== strpos($line, '=') && $peerName !== null) {
                // Explode the line
                $explodedLines = explode('=', $line);

                // Add the line
                $prepared[$peerName][trim($explodedLines[0])] = trim($explodedLines[1]);
            }
        }

        return $prepared;
    }
}