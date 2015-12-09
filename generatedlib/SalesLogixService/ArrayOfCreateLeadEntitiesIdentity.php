<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class ArrayOfCreateLeadEntitiesIdentity
{

    /**
     * @var CreateLeadEntities.Identity[] $CreateLeadEntitiesIdentity
     */
    protected $CreateLeadEntitiesIdentity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreateLeadEntities.Identity[]
     */
    public function getCreateLeadEntitiesIdentity()
    {
      return $this->CreateLeadEntitiesIdentity;
    }

    /**
     * @param CreateLeadEntities.Identity[] $CreateLeadEntitiesIdentity
     * @return \Floream\BusinessLogicServices\SalesLogixService\ArrayOfCreateLeadEntities.Identity
     */
    public function setCreateLeadEntitiesIdentity(array $CreateLeadEntitiesIdentity)
    {
      $this->CreateLeadEntitiesIdentity = $CreateLeadEntitiesIdentity;
      return $this;
    }

}
