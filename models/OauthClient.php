<?php
/**
 * Created by PhpStorm.
 * User: Butterfly
 * Date: 10/5/2017
 * Time: 11:23 AM
 */

namespace app\models;


class OauthClient extends BaseOauthClient
{
    public function beforeSave($insert)
    {
        $this->grant_types = implode(" ", $this->grant_types);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}