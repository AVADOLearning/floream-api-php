<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class ArrayOfKeyValueOfstringanyType
{

    /**
     * @var KeyValueOfstringanyType[] $KeyValueOfstringanyType
     */
    protected $KeyValueOfstringanyType = null;

    /**
     * @param KeyValueOfstringanyType[] $KeyValueOfstringanyType
     */
    public function __construct(array $KeyValueOfstringanyType)
    {
      $this->KeyValueOfstringanyType = $KeyValueOfstringanyType;
    }

    /**
     * @return KeyValueOfstringanyType[]
     */
    public function getKeyValueOfstringanyType()
    {
      return $this->KeyValueOfstringanyType;
    }

    /**
     * @param KeyValueOfstringanyType[] $KeyValueOfstringanyType
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfKeyValueOfstringanyType
     */
    public function setKeyValueOfstringanyType(array $KeyValueOfstringanyType)
    {
      $this->KeyValueOfstringanyType = $KeyValueOfstringanyType;
      return $this;
    }

}
