<?php

use Clearvox\Asterisk\ChanSIP\Helper\PeerFactory;
use Clearvox\Asterisk\ChanSIP\Peer;

class PeerFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testMakePeersReturnsSimplePeer()
    {
        $peerFactory = new PeerFactory();

        $string = "";
        $string .= "[100]\n";
        $string .= "type=friend\n";
        $string .= "defaultuser=100\n";
        $string .= "secret=secretPass\n";

        $expectedPeer = new Peer();
        $expectedPeer
            ->setType(Peer::TYPE_FRIEND)
            ->setDefaultUser('100')
            ->setSecret('secretPass');

        $responseArray = $peerFactory->makePeersFromString($string);
        $response = $responseArray[0];

        $this->assertTrue($expectedPeer->getType() === $response->getType());
        $this->assertTrue($expectedPeer->getDefaultUser() === $response->getDefaultUser());
        $this->assertTrue($expectedPeer->getSecret() === $response->getSecret());
    }

    public function testMakePeersReturnsArrayOfPeers()
    {
        $peerFactory = new PeerFactory();

        $string = "";
        $string .= "[100]\n";
        $string .= "type=friend\n";
        $string .= "defaultuser=100\n";
        $string .= "secret=secretPass\n";
        $string .= "\n";
        $string .= "[101]\n";
        $string .= "type=friend\n";
        $string .= "defaultuser=101\n";
        $string .= "secret=password\n";

        $firstExpectedPeer = new Peer();
        $firstExpectedPeer
            ->setType(Peer::TYPE_FRIEND)
            ->setDefaultUser('100')
            ->setSecret('secretPass');

        $secondExpectedPeer = new Peer();
        $secondExpectedPeer
            ->setType(Peer::TYPE_FRIEND)
            ->setDefaultUser('101')
            ->setSecret('password');

        $responseArray = $peerFactory->makePeersFromString($string);

        $firstResponsePeer  = $responseArray[0];
        $secondResponsePeer = $responseArray[1];

        $this->assertTrue($firstExpectedPeer->getType() === $firstResponsePeer->getType());
        $this->assertTrue($firstExpectedPeer->getDefaultUser() === $firstResponsePeer->getDefaultUser());
        $this->assertTrue($firstExpectedPeer->getSecret() === $firstResponsePeer->getSecret());

        $this->assertTrue($secondExpectedPeer->getType() === $secondResponsePeer->getType());
        $this->assertTrue($secondExpectedPeer->getDefaultUser() === $secondResponsePeer->getDefaultUser());
        $this->assertTrue($secondExpectedPeer->getSecret() === $secondResponsePeer->getSecret());
    }

    public function testWithInvalidString()
    {
        $peerFactory = new PeerFactory();

        $string  = '';
        $string .= 'type=friend';

        $response = $peerFactory->makePeersFromString($string);

        $this->assertEmpty($response);
    }
}