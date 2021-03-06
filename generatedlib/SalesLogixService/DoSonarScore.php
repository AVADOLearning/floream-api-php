<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class DoSonarScore
{

    /**
     * @var SonarScoreEntitiesSonarScoreRequest $request
     */
    protected $request = null;

    /**
     * @param SonarScoreEntitiesSonarScoreRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return SonarScoreEntitiesSonarScoreRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SonarScoreEntitiesSonarScoreRequest $request
     * @return \AvadoLearning\BusinessLogicServices\SalesLogixService\DoSonarScore
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
