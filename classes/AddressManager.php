<?php


class AddressManager
{
    private $addresses = [
            '85.143.173.225',
            '216.58.213.174'
    ];

    public function outputAddresses($resolve)
    {
        foreach ($this->addresses as $address) {
            echo $address;
            if ($resolve) {
                echo "(" . gethostbyaddr($address) .")";
            }
            echo '<br>';
        }
    }
}