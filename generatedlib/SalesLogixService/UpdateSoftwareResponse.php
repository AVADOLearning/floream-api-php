<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class UpdateSoftwareResponse
{

    /**
     * @var CourseSoftwareEntitiesUpdateSoftwareResponse $UpdateSoftwareResult
     */
    protected $UpdateSoftwareResult = null;

    /**
     * @param CourseSoftwareEntitiesUpdateSoftwareResponse $UpdateSoftwareResult
     */
    public function __construct($UpdateSoftwareResult)
    {
      $this->UpdateSoftwareResult = $UpdateSoftwareResult;
    }

    /**
     * @return CourseSoftwareEntitiesUpdateSoftwareResponse
     */
    public function getUpdateSoftwareResult()
    {
      return $this->UpdateSoftwareResult;
    }

    /**
     * @param CourseSoftwareEntitiesUpdateSoftwareResponse $UpdateSoftwareResult
     * @return \Floream\BusinessLogicServices\SalesLogixService\UpdateSoftwareResponse
     */
    public function setUpdateSoftwareResult($UpdateSoftwareResult)
    {
      $this->UpdateSoftwareResult = $UpdateSoftwareResult;
      return $this;
    }

}
