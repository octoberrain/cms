<?php

return [
    'cms_object' => [
        'invalid_file' => '文件名 :name 无效，文件名只可以包含英文字符、下划线、横杠和点，举例：page.htm, page, subdirectory/page',
        'invalid_property' => '设置 ":name" 属性失败。',
        'file_already_exists' => '文件 ":name" 已存在。',
        'error_saving' => '保存文件 ":name" 失败。请检查写权限。',
        'error_creating_directory' => '创建目录 :name 失败。请检查写权限。',
        'invalid_file_extension'=>'后缀 :invalid 无效。有效的扩展名：:allowed.',
        'error_deleting' => '删除模板文件 ":name" 失败。请检查写权限。',
        'delete_success' => '成功删除模板 :count 个',
        'file_name_required' => '文件名必填。'
    ],
    'theme' => [
        'active' => [
            'not_set' => "没有设置当前模板。",
            'not_found' => "模板没有找到。",
        ],
        'edit' => [
            'not_set' => "要编辑的模板没有设置。",
            'not_found' => "要编辑的模板没有找到。",
            'not_match' => "要访问的对象不属于当前编辑的模板。请重新载入页面。"
        ],
        'settings_menu' => '前端模板',
        'settings_menu_description' => '预览已安装的模板并且从中选一个。',
        'find_more_themes' => '在 OctoberCMS 模板商店查看更多模板',
        'activate_button' => '激活',
        'active_button' => '激活',
        'customize_button' => '定制',
    ],
    'maintenance' => [
        'settings_menu' => '维护模式',
        'settings_menu_description' => '开关或配置维护模式',
        'is_enabled' => '开启维护模式',
        'is_enabled_comment' => '当开启时用户将看到从下边选择的页面',
    ],
    'page' => [
        'not_found' => [
            'label' => "页面没有找到",
            'help' => "请求的页面不存在。",
        ],
        'custom_error' => [
            'label' => "页面错误",
            'help' => "对不起，出错了，页面无法显示。",
        ],
        'menu_label' => '页面',
        'unsaved_label' => '未保存页面',
        'no_list_records' => '没有页面',
        'new' => '新建页面',
        'invalid_url' => 'URL 格式无效。URL 可包含数字、英文字符以及下列符号：._-[]:?|/+*^$',
        'delete_confirm_multiple' => '确定删除页面？',
        'delete_confirm_single' => '确定删除此页面？',
        'no_layout' => '-- 无布局 --'
    ],
    'layout' => [
        'not_found' => "布局 ':name' 不存在",
        'menu_label' => '布局',
        'unsaved_label' => '未保存布局',
        'no_list_records' => '没有布局',
        'new' => '创建布局',
        'delete_confirm_multiple' => '确定删除布局？',
        'delete_confirm_single' => '确定删除此布局？'
    ],
    'partial' => [
        'invalid_name' => "片断 :name 无效.",
        'not_found' => "片断 ':name' 不存在",
        'menu_label' => '片断',
        'unsaved_label' => '未保存片断',
        'no_list_records' => '没有片断',
        'delete_confirm_multiple' => '确定删除片断？',
        'delete_confirm_single' => '确定删除此片断？',
        'new' => '创建片断'
    ],
    'content' => [
        'not_found' => "内容文件 ':name' 不存在",
        'menu_label' => '内容',
        'unsaved_label' => '未保存内容',
        'no_list_records' => '内容文件找不到',
        'delete_confirm_multiple' => '确定删除选定内容文件以及其目录？',
        'delete_confirm_single' => '确定删除此内容文件？',
        'new' => '新建内容文件'
    ],
    'ajax_handler' => [
        'invalid_name' => "无效的 AJAX 处理器: :name.",
        'not_found' => "AJAX 处理器 ':name' 不存在",
    ],
    'cms' => [
        'menu_label' => "内容管理"
    ],
    'sidebar' => [
        'add' => '创建',
        'search' => '搜索...'
    ],
    'editor' => [
        'settings' => '设置',
        'title' => '标题',
        'new_title' => '创建页面标题',
        'url' => 'URL',
        'filename' => '文件名',
        'layout' => '布局',
        'description' => '描述',
        'preview' => '预览',
        'meta' => 'Meta',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => '标记',
        'code' => '代码',
        'content' => '内容',
        'hidden' => '隐藏',
        'hidden_comment' => '隐藏的页面只能由已登录用户查看。',
        'enter_fullscreen' => '全屏模式',
        'exit_fullscreen' => '退出全屏模式'
    ],
    'asset' => [
        'menu_label' => "资源",
        'unsaved_label' => '未保存资源',
        'drop_down_add_title' => '新增资源...',
        'drop_down_operation_title' => '操作...',
        'upload_files' => '上传文件',
        'create_file' => '创建文件',
        'create_directory' => '创建目录',
        'directory_popup_title' => '新目录',
        'directory_name' => '目录名',
        'rename' => '重命名',
        'delete' => '删除',
        'move' => '移动',
        'select' => '选择',
        'new' => '新文件',
        'rename_popup_title' => '重命名',
        'rename_new_name' => '新文件名',
        'invalid_path' => '路径可包含数字、英文字符、空格以及下列符号：._-/',
        'error_deleting_file' => '删除文件 :name 失败',
        'error_deleting_dir_not_empty' => '删除目录 :name 失败。目录不为空。',
        'error_deleting_dir' => '删除目录 :name 失败',
        'invalid_name' => '路径可包含数字、英文字符、空格以及下列符号：._-',
        'original_not_found' => '原文件或目录不存在',
        'already_exists' => '同名目录或文件已经存在',
        'error_renaming' => '重命名文件或目录失败',
        'name_cant_be_empty' => '名字不能为空',
        'too_large' => '上传的文件太大，最大上传文件大小：:max_size',
        'type_not_allowed' => '允许以下文件类型：:allowed_types',
        'file_not_valid' => '文件无效',
        'error_uploading_file' => '上传文件 ":name": 失败',
        'move_please_select' => '请选择',
        'move_destination' => '目标目录',
        'move_popup_title' => '移动资源',
        'move_button' => '移动',
        'selected_files_not_found' => '选择的文件不存在',
        'select_destination_dir' => '选择目标目录',
        'destination_not_found' => '目标目录不存在',
        'error_moving_file' => '移动文件 :file 失败',
        'error_moving_directory' => '移动目录 :dir 失败',
        'error_deleting_directory' => '删除原目录 :dir 失败',
        'path' => '路径'
    ],
    'component' => [
        'menu_label' => "组件",
        'unnamed' => "未命名",
        'no_description' => "未提供描述",
        'alias' => "别名",
        'alias_description' => "组件的唯一名称，用于页面或布局代码",
        'validation_message' => "组件别名必填，可以包含英文字符、数字、下划线，且以英文字符开头。",
        'invalid_request' => "无效的组件数据，模板不能保存。",
        'no_records' => '没有组件',
        'not_found' => "组件 ':name' 不存在",
        'method_not_found' => "组件 ':name' 不包含方法 ':method'.",
    ],
    'template' => [
        'invalid_type' => "未知模板类型",
        'not_found' => "请求的模板不存在",
        'saved'=> "模板保存成功"
    ],
    'permissions' => [
        'manage_content' => '管理内容',
        'manage_assets' => '管理资源',
        'manage_pages' => '管理页面',
        'manage_layouts' => '管理布局',
        'manage_partials' => '管理片断',
        'manage_themes' => '管理模板'
    ]
];
