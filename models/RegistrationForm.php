<?php

namespace app\models;

use yii\base\Model;

class RegistrationForm extends Model
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $birth_day;
    public $address;
    public $phone_number;
    public $course;
    public $group;
    public $email;
    public $pasport;


    public function rules()
    {
        return [
          [['first_name', 'last_name', 'middle_name', 'birth_day', 'address', 'phone_number', 'course', 'group', 'email', 'pasport'], 'required'],
        ];
    }

}