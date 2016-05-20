<?php

namespace Admin\Controller;
class AgentController extends \Think\Controller{
    /**
     *储存模型对象
     * @var \Admin\Model\AgentModel
     */
    private  $_model = null;
    public function index(){
       $this->display('index');
    }
   
}