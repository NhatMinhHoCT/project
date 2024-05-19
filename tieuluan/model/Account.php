<?php
class Account
{
  public $idAccount;
  public $username;
  public $password;
  public $email;
  public $createday;
  public $avatar;
  public $guestname;
  public $phone;
  public $address;
  public function __construct($idAccount, $username, $password, $email, $createday, $avatar, $guestname, $phone, $address)
  {
    $this->idAccount = $idAccount;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->createday = $createday;
    $this->avatar = $avatar;
    $this->guestname = $guestname;
    $this->phone = $phone;
    $this->address = $address;
  }
}
