<?php
namespace PropertyFinder\Travel\BoardingPass;

abstract class BoardingPass
{
    private $source;
    private $destination;
    
    public function __construct(string $source, string $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
    }
    
    public function getSource(): string
    {
        return $this->source;
    }
    
    public function getDestination(): string
    {
        return $this->destination;
    }
}
