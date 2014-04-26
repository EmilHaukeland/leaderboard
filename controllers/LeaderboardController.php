<?php

Yii::import('application.models.ar.ScoreModel');
Yii::import('application.models.ar.ApplicationModel');

class LeaderboardController extends CController
{
    public function actionSubmit()
    {
        $params = $this->getRequestParams($_POST, array('applicationId', 'score', 'nick'));

        if(!ApplicationModel::model()->exists('id = :applicationId', array(':applicationId' => $params['applicationId'])))
        {
            $this->sendErrorResponse(400, array('message' => 'Invalid application'));
        }

        $score = new ScoreModel();
        $score->attributes = $params;

        if(!$score->validate())
        {
            $this->sendErrorResponse(400, $score->errors);
        }

        if(!$score->save())
        {
            $this->sendErrorResponse(500, $score->errors);
        }

        $this->sendSuccessResponse();
    }

    private function getRequestParams(array $source, array $required = array(), array $optional = array())
    {
        $params = array();
        $errors = array();

        foreach ($required as $param) {
            if (!isset($source[$param])) {
                $errors[] = $param;
                continue;
            }

            $params[$param] = $source[$param];
        }

        if($errors)
        {
            $this->sendErrorResponse(400, array(
                'missingParams' => $errors,
            ));
        }

        foreach ($optional as $param) {
            if (isset($source[$param])) {
                $params[$param] = $source[$param];
            }
        }

        return $params;
    }

    private function sendErrorResponse($errorCode, array $data = array())
    {
        header('Content-Type: application/json', true, $errorCode);

        echo json_encode($data);
        Yii::app()->end();
    }

    private function sendSuccessResponse(array $data = array())
    {
        header('Content-Type: application/json', true, 200);

        if($data)
        {
            echo json_encode($data);
        }
        Yii::app()->end();
    }
} 