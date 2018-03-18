<?php
class NewClass
{
    const superHero = "Philippe";
    private $necessaryData;

    function __construct($data)
    {
        $this->necessaryData = $data;
    }

    function canFly()
    {
        echo "yes yes yes";
    }
}
?>
