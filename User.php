<?php

class User
{
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $phone = '';
    public $confirm = false;
    private $isProcessed = false;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function processRequest(array $postData){
        if ($this->isProcessed){
            throw new Exception('User was already processed.');
        }
        $this->isProcessed = true;
        $errors = $this->validate($postData);
        $this->firstName = isset($postData['firstName']) ? $postData['firstName'] : '';
        $this->lastName = isset($postData['lastName']) ? $postData['lastName'] : '';
        $this->email = isset($postData['email']) ? $postData['email'] : '';
        $this->phone = isset($postData['phone']) ? $postData['phone'] : '';
        $this->confirm = isset($postData['confirm']) ? $postData['confirm'] : '';

        return $errors;
    }

    protected function validate(array $user) {
        $errors = [];

        if (empty($user['confirm'])) {
            $errors[] = 'Вы должны согласиться!';
        }

        if (!$user['email']) {
            $errors[] = 'Введите email!';
        }

        if ($user['phone'] && !is_numeric($user['phone'])) {
            $errors[] = 'В номере телефона допускаются только цифры!';
        }
        return $errors;
    }

    public function __toString()
    {
        return $this->firstName . "\t" . $this->lastName . "\t" . $this->email .
            "\t" . $this->phone . "\t" . $this->confirm;
    }

}