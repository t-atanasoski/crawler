<?php
namespace App\Database\Interfaces;

interface UserInterface
{
	public function getByAuth($email, $password);
}