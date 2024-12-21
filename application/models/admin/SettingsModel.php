<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsModel extends ELOQUENT_Model
{
    protected $table_name = "settings";
    protected $primary_key = "uid";
}