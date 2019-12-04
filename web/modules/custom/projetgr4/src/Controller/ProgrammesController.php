<?php

namespace Drupal\projetgr4\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Console\Bootstrap\Drupal;
use Drupal\user\UserInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;


class ProgrammesController extends ControllerBase{

    public function content(UserInterface $user)
    {
        
        $msg = $this->t('you are name @username', ['@username'=> $this->currentUser()->getDisplayName(),]);
        return ['#markup' => $msg];
    
    }

    public function programme_status(UserInterface $user)
    {
       
    }
}