<?php

namespace AntiMattr\GoogleBundle\Adwords;

class Conversion
{
    protected $id;
    protected $label;
    protected $value;

    public function __construct($id, $label, $value)
    {
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getValue()
    {
        return $this->value;
    }
}
