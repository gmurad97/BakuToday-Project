<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists("set_active_class")) {
    function set_active_class($expected_segment, $starts_with = false, $class_name = "active")
    {
        $CI =& get_instance();
        if (!isset($CI->uri))
            return "";
        $uri_string = $CI->uri->uri_string();
        if ($starts_with)
            return str_starts_with($uri_string, $expected_segment) ? $class_name : "";
        return $uri_string === $expected_segment ? $class_name : "";
    }
}

if (!function_exists('renderCategories')) {
    /**
     * Рекурсивно выводит категории и подкатегории в виде <option>.
     *
     * @param array $categories Массив категорий.
     * @param string $idField Название поля, содержащего ID категории.
     * @param string $parentField Название поля, содержащего ID родителя.
     * @param string $nameField Название поля, используемого для отображения имени.
     * @param int|null $parentId ID родительской категории (по умолчанию 0).
     * @param string $prefix Префикс для вложенных категорий (по умолчанию '').
     * @param int $level Уровень вложенности (по умолчанию 0).
     */
    function renderCategories(
        array $categories,
        string $idField,
        string $parentField,
        string $nameField,
        int $parentId = 0,
        string $prefix = '',
        int $level = 0
    ) {
        $counter = 1; // Счетчик для нумерации на текущем уровне
        foreach ($categories as $category) {
            if ($category[$parentField] == $parentId) {
                // Формируем текущий префикс нумерации
                $currentPrefix = $prefix ? $prefix . '.' . $counter : (string)$counter;

                // Вывод категории
                echo '<option value="' . htmlspecialchars($category[$idField]) . '">' .
                    $currentPrefix . ' ' . htmlspecialchars($category[$nameField]) .
                    '</option>';

                // Рекурсивный вызов для вложенных категорий
                renderCategories($categories, $idField, $parentField, $nameField, $category[$idField], $currentPrefix, $level + 1);
                $counter++;
            }
        }
    }
}
