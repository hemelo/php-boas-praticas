<?php

namespace Calisthenics\Domain\Endereco;

class Endereco
{
    private string $street;
    private string $number;
    private string $province;
    private string $city;
    private string $state;
    private string $country;

    public function __construct(string $street, string $number, string $province, string $city, string $state, string $country)
    {
        $this->street = $street; 
        $this->number = $number; 
        $this->province = $this->province;
        $this->city = $this->city;
        $this->state = $this->state;
        $this->country = $this->country;
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}. {$this->city} - {$this->state}. {$this->country}";
    }
}
