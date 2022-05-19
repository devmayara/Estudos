<?php

namespace Mayara\DigitalCep;

class Search
{
    private $url "https://viacep.com.br/ws/";

    public function getAddress(string $zipcode): array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

    }
}
