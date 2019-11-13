<?php

namespace frontend\models;


class User extends \common\models\User
{
    public function fields()
    {
        return ['id', 'username', 'email', 'status'];
    }

    public function extraFields()
    {
        return [];
    }

    public function rules()
    {
        return [
            [['username', 'email', 'status'], 'safe'],
        ];
    }
}