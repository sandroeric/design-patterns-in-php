<?php
namespace DesignPatternsInPHP\Structural\Facade;

class Facade {
    
    private $client;
    private $address;
    private $billing;
    
    public function __construct(Client $client, Address $address, Billing $billing) 
    {
        $this->client = $client;
        $this->address = $address;
        $this->billing = $billing;
    }
    
    public function insertClient() 
    {
        $this->insertClientInfo($this->client);
        $this->insertAddress($this->address);
        $this->insertBilling($this->billing);
    }
    
    private function insertClientInfo($client)
    {
        echo '<p>client info inserted!!!</p>';
    }
    
    private function insertAddress($address)
    {
        echo '<p>Address info inserted!!!</p>';
    }
    
    private function insertBilling($billing)
    {
        echo '<p>Billing info inserted!!!</p>';
    }
}
