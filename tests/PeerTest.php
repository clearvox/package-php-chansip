<?php

use Clearvox\Asterisk\ChanSIP\Peer;

class PeerTest extends PHPUnit_Framework_TestCase
{
    public function testSimplePeerString()
    {
        $peer = new Peer();
        $peer
            ->setName('100')
            ->setType(Peer::TYPE_FRIEND)
            ->setDefaultUser('username')
            ->setSecret('123456')
            ->setDirectMedia(Peer::DIRECT_MEDIA_NONAT);

        $expected = "";
        $expected .= "[100]\n";
        $expected .= "defaultuser=username\n";
        $expected .= "directmedia=nonat\n";
        $expected .= "secret=123456\n";
        $expected .= "type=friend\n";

        $this->assertEquals($expected, $peer->toString());
    }

    public function testSimplePeerStringWithDifferences()
    {
        $peer = new Peer();
        $peer
            ->setName('asd12345')
            ->setType(Peer::TYPE_FRIEND)
            ->setDefaultUser('username')
            ->setSecret('12345')
            ->setSessionTimers(Peer::SESSION_TIMERS_ACCEPT)
            ->setSessionExpires(600)
            ->setSessionMinse(90)
            ->setSessionRefresher(PEER::SESSION_REFRESHER_UAC)
            ->setCallLimit(5);

        $expected = "";
        $expected .= "[asd12345]\n";
        $expected .= "call-limit=5\n";
        $expected .= "defaultuser=username\n";
        $expected .= "secret=12345\n";
        $expected .= "session-expires=600\n";
        $expected .= "session-minse=90\n";
        $expected .= "session-refresher=uac\n";
        $expected .= "session-timers=accept\n";
        $expected .= "type=friend\n";

        $this->assertEquals($expected, $peer->toString());
    }
}