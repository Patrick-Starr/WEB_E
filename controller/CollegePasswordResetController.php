<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 16.10.2017
 * Time: 14:26
 */

namespace controller;

use service\AuthServiceImpl;
use view\TemplateView;
use validator\CollegeValidator;
use service\EmailServiceClient;

class CollegePasswordResetController
{

    public static function resetView(){
        $resetView = new TemplateView("collegePasswordReset.php");
        $resetView->token = $_GET["token"];
        echo $resetView->render();
    }
    
    public static function requestView(){
        echo (new TemplateView("collegePasswordResetRequest.php"))->render();
    }
    
    public static function reset(){
        if(AuthServiceImpl::getInstance()->validateToken($_POST["token"])){
            $college = AuthServiceImpl::getInstance()->readCollege();
            $college->setPassword($_POST["password"]);
            $agentValidator = new AgentValidator($college);
            if($agentValidator->isValid()){
                if(AuthServiceImpl::getInstance()->editAgent($college->getName(),$college->getEmail(), $college->getPassword())){
                    return true;
                }
            }
            $college->setPassword("");
            $resetView = new TemplateView("$collegePasswordReset.php");
            $resetView->token = $_POST["token"];
            echo $resetView->render();
            return false;
        }
        return false;
    }

    public static function resetEmail(){
        $token = AuthServiceImpl::getInstance()->issueToken(AuthServiceImpl::RESET_TOKEN, $_POST["email"]);
        $emailView = new TemplateView("$collegePasswordResetEmail.php");
        $emailView->resetLink = $GLOBALS["ROOT_URL"] . "/password/reset?token=" . $token;
        return EmailServiceClient::sendEmail($_POST["email"], "Password Reset Email", $emailView->render());
    }

}
