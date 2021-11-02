<?php

namespace App\Services;

use App\Entity\User;
use http\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Persist
{
    /**
     * Store in Session the User entity
     * @param $data mixed Data of form
     * @param SessionInterface $session
     * @return bool|InvalidArgumentException
     */
    public function saveData($data, SessionInterface $session)
    {
            $users = $session->get('users', []);
            $user = new User();
            $user = $data;
            $users[] = $data;
            $session->set('users', $users);
    }
}