<?php

use App\Services\Hook;
use App\Services\Plugin;
use App\Events\RenderingHeader;
use Illuminate\Contracts\Events\Dispatcher;

return function (Plugin $plugin) {
    //     加载资源(live 2d)
    Hook::addStyleFileToPage(
        $plugin->assets('live2d/css/live2d.css') // 样式
    );
    Hook::addScriptFileToPage(
        $plugin->assets('live2d/js/live2d.js') // js
    );
    // 聊天信息 按需启用
    // Hook::addScriptFileToPage(
    //     $plugin->assets('live2d/js/message1.js') // 聊天
    // );
    Hook::addScriptFileToPage(
        $plugin->assets('jquery-ui.min.js?v=1.12.1') // Jquery UI
    );
//      加载资源（特效）
    Hook::addScriptFileToPage(
        $plugin->assets('Effects/Mouse effects.js')
    );
};