<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Soumission d’un nouveau formulaire',
    'email_message' => 'Vous avez une nouvelle soumission de formulaire',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'Royaumechampignontoadstool@gmail.com',
    'to' => 'krysowatytheo28@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nom',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nom\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Courriel',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Courriel\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>