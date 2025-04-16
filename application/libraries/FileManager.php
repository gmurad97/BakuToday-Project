<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FileManager
{
    /**
     * @var MY_Controller $CI
     */
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function upload_media($field_name, $upload_path, $allowed_types, $resize_options = [])
    {
        $upload_config = [
            "upload_path" => $upload_path,
            "allowed_types" => $allowed_types,
            "file_ext_tolower" => true,
            "remove_spaces" => true,
            "encrypt_name" => true
        ];

        $this->CI->load->library("upload", $upload_config);

        if (is_array($_FILES[$field_name]["name"])) {
            $files = $_FILES[$field_name];
            $uploaded_files = [];

            for ($idx = 0; $idx < count($files["name"]); $idx++) {
                $_FILES["userfile"]["name"] = $files["name"][$idx];
                $_FILES["userfile"]["type"] = $files["type"][$idx];
                $_FILES["userfile"]["tmp_name"] = $files["tmp_name"][$idx];
                $_FILES["userfile"]["error"] = $files["error"][$idx];
                $_FILES["userfile"]["size"] = $files["size"][$idx];

                if ($this->CI->upload->do_upload("userfile")) {
                    $uploaded_data = $this->CI->upload->data();

                    if (!empty($resize_options)) {
                        $resize_config = array_merge([
                            "image_library" => "gd2",
                            "source_image" => $uploaded_data["full_path"]
                        ], $resize_options);

                        $this->CI->load->library("image_lib", $resize_config);

                        if (!$this->CI->image_lib->resize()) {
                            return ["success" => false, "error" => $this->CI->image_lib->display_errors()];
                        }
                    }
                    $uploaded_files[] = $uploaded_data;
                } else {
                    return ["success" => false, "error" => $this->CI->upload->display_errors()];
                }
            }
            return ["success" => true, "data" => $uploaded_files];
        } else {
            if (!$this->CI->upload->do_upload($field_name)) {
                return ["success" => false, "error" => $this->CI->upload->display_errors()];
            }

            $uploaded_data = $this->CI->upload->data();

            if (!empty($resize_options)) {
                $resize_config = array_merge([
                    "image_library" => "gd2",
                    "source_image" => $uploaded_data["full_path"],
                    "maintain_ratio" => FALSE
                ], $resize_options);

                $this->CI->load->library("image_lib", $resize_config);

                if (!$this->CI->image_lib->resize()) {
                    return ["success" => false, "error" => $this->CI->image_lib->display_errors()];
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