<?php

class FileUploader{

    public function __construct(){
        self::__construct();

    }

    public function alert_flashdata($alert_name, $alert_type, $alert_message)
    {
        $alert_types = [
            "info" => ["class" => "alert-info", "icon" => "alert-circle"],
            "success" => ["class" => "alert-success", "icon" => "check-circle"],
            "warning" => ["class" => "alert-warning", "icon" => "alert-octagon"],
            "danger" => ["class" => "alert-danger", "icon" => "alert-triangle"],
        ];

        $alert_type = strtolower($alert_type) ?? "info";
        $alert_class = $alert_types[$alert_type]["class"];
        $alert_icon = $alert_types[$alert_type]["icon"];

        $this->session->set_flashdata($alert_name, [
            'alert_class' => $alert_class,
            'alert_icon' => $alert_icon,
            'alert_message' => [
                "title" => $alert_message["title"],
                "description" => $alert_message["description"]
            ]
        ]);
    }

    public function upload_image($field_name, $upload_path, $resize_options = [])
    {
        $upload_config = [
            "upload_path" => $upload_path,
            "allowed_types" => "jpeg|jpg|png|gif|JPEG|JPG|PNG|GIF",
            "file_ext_tolower" => TRUE,
            "remove_spaces" => TRUE,
            "encrypt_name" => TRUE
        ];

        $this->load->library("upload", $upload_config);

        if (is_array($_FILES[$field_name]['name'])) {
            $files = $_FILES[$field_name];
            $uploaded_files = [];

            for ($idx = 0; $idx < count($files["name"]); $idx++) {
                $_FILES["userfile"]["name"] = $files["name"][$idx];
                $_FILES["userfile"]["type"] = $files["type"][$idx];
                $_FILES["userfile"]["tmp_name"] = $files["tmp_name"][$idx];
                $_FILES["userfile"]["error"] = $files["error"][$idx];
                $_FILES["userfile"]["size"] = $files["size"][$idx];

                if ($this->upload->do_upload("userfile")) {
                    $uploaded_data = $this->upload->data();

                    if (!empty($resize_options)) {
                        $resize_config = array_merge([
                            "image_library" => "gd2",
                            "source_image" => $uploaded_data["full_path"],
                            "maintain_ratio" => FALSE
                        ], $resize_options);

                        $this->load->library("image_lib", $resize_config);

                        if (!$this->image_lib->resize()) {
                            return ["success" => false, "error" => $this->image_lib->display_errors()];
                        }
                    }

                    $uploaded_files[] = $uploaded_data;
                } else {
                    return ["success" => false, "error" => $this->upload->display_errors()];
                }
            }
            return ["success" => true, "data" => $uploaded_files];
        } else {
            if (!$this->upload->do_upload($field_name)) {
                return ["success" => false, "error" => $this->upload->display_errors()];
            }

            $uploaded_data = $this->upload->data();

            if (!empty($resize_options)) {
                $resize_config = array_merge([
                    "image_library" => "gd2",
                    "source_image" => $uploaded_data["full_path"],
                    "maintain_ratio" => FALSE
                ], $resize_options);

                $this->load->library("image_lib", $resize_config);

                if (!$this->image_lib->resize()) {
                    return ["success" => false, "error" => $this->image_lib->display_errors()];
                }
            }

            return ["success" => true, "data" => $uploaded_data];
        }
    }

    public function delete_file($file_path)
    {
        if (file_exists($file_path)) {
            return unlink($file_path);
        }
        return false;
    }
}