<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemController extends API_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $mock_data = [
            [
                "id" => 1,
                "username" => "gmurad97",
                "password" => "202cb962ac59075b964b07152d234b70",
                "role" => "root",
                "status" => "active",
            ],
            [
                "id" => 2,
                "username" => "jdoe",
                "password" => "5f4dcc3b5aa765d61d8327deb882cf99",
                "role" => "user",
                "status" => "inactive",
            ],
            [
                "id" => 3,
                "username" => "asmith",
                "password" => "d8578edf8458ce06fbc5bb76a58c5ca4",
                "role" => "moderator",
                "status" => "active",
            ]
        ];
        $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
    }

    public function show($id)
    {
        $mock_data = [
            "id" => $id,
            "username" => "user$id",
            "password" => hash("md5", "password$id"),
            "role" => $id % 2 == 0 ? "user" : "admin",
            "status" => $id % 2 == 0 ? "inactive" : "active",
        ];
        $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
    }

    public function store()
    {
        $mock_data = [
            "status" => "Data stored",
            "data" => [
                "id" => rand(100, 999),
                "username" => $this->input->post("username"),
                "password" => hash("md5", $this->input->post("password")),
                "role" => $this->input->post("role"),
                "status" => $this->input->post("status"),
            ]
        ];
        $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
    }

    public function update($id)
    {
        if ($this->input->server("REQUEST_METHOD") === "PUT") {
            $mock_data = [
                "status" => "Data updated - PUT",
                "updated_data" => [
                    "id" => $id,
                    "username" => $this->input->post("username"),
                    "password" => hash("md5", $this->input->post("password")),
                    "role" => $this->input->post("role"),
                    "status" => $this->input->post("status"),
                ]
            ];
            $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
        }
        if ($this->input->server("REQUEST_METHOD") === "PATCH") {
            $mock_data = [
                "status" => "Data updated - PATCH",
                "updated_data" => [
                    "id" => $id,
                    "username" => $this->input->post("username"),
                    "password" => hash("md5", $this->input->post("password")),
                    "role" => $this->input->post("role"),
                    "status" => $this->input->post("status"),
                ]
            ];
            $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
        }
    }

    public function destroy($id)
    {
        $mock_data = [
            "status" => "Data deleted",
            "deleted_id" => $id,
        ];
        $this->output->set_content_type("application/json")->set_output(json_encode($mock_data));
    }
}
