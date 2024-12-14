<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsModel extends ELOQUENT_Model
{
    protected $tableName = "settings";
    protected $primaryKey = "uid";
}