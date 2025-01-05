<?php

class File_manager
{
    public function __construct()
    {

        /*         try {
                    $youtube_url = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
                    $downloaded_video = $this->download_video($youtube_url);
                    echo "Видео успешно скачано по пути: " . $downloaded_video;
                    
                    $compressed_video = $this->compress_video($downloaded_video);
                    echo "Видео успешно сжато по пути: " . $compressed_video;
                } catch (Exception $e) {
                    echo "Ошибка: " . $e->getMessage();
                } */
    }

    public function download_video($youtube_url)
    {
        $upload_dir = 'C:\\Downloads\\';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $temp_file = $upload_dir . uniqid('video_', true) . '.webm';

        $yt_dlp_path = 'C:\\Modules\\yt-dlp\\yt-dlp.exe';

        $command_download = "\"$yt_dlp_path\" -f best[height<=720] -o \"$temp_file\" \"$youtube_url\"";
        exec($command_download, $output_download, $return_var_download);

        log_message('debug', "Команда для скачивания: $command_download");
        log_message('debug', "Результат команды для скачивания: " . implode("\n", $output_download));

        if ($return_var_download !== 0) {
            log_message('error', "Ошибка при скачивании видео. Код ошибки: $return_var_download. Вывод: " . implode("\n", $output_download));
            throw new Exception("Ошибка при скачивании видео: " . implode("\n", $output_download));
        }

        return $temp_file;
    }

    public function compress_video($video_path)
    {
        $output_path = str_replace(".webm", "_compressed.mp4", $video_path);

        $ffmpeg_path = 'C:\\ffmpeg\\bin\\ffmpeg.exe';

        $command_compress = "\"$ffmpeg_path\" -i \"$video_path\" -vcodec libx264 -crf 28 -preset fast -acodec aac -b:a 128k \"$output_path\"";
        exec($command_compress, $output_compress, $return_var_compress);

        log_message('debug', "Команда для сжатия: $command_compress");
        log_message('debug', "Результат команды для сжатия: " . implode("\n", $output_compress));

        if ($return_var_compress !== 0) {
            log_message('error', "Ошибка при сжатии видео. Код ошибки: $return_var_compress. Вывод: " . implode("\n", $output_compress));
            throw new Exception("Ошибка при сжатии видео: " . implode("\n", $output_compress));
        }

        return $output_path;
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