<?php

class FacebookComponent extends CApplicationComponent
{
    public $applicationId = null;
    public $secret = null;

    /** @var Facebook $facebook */
    protected $facebook = null;

    public function init()
    {
        parent::init();

        if(!$this->facebok)
        {
            $this->facebook = new Facebook(array(
                'appId' => $this->applicationId,
                'secret' => $this->secret,
            ));
        }
    }

    public function getFacebookId()
    {
        return $this->facebook->getUser();
    }

    public function getFacebookProfile()
    {
        return $this->facebook->api('/me');
    }
} 