<?php

// INSERT INTO `pw_design_component` (`model_flag`, `comp_name`, `comp_tpl`, `sys_id`) VALUES

return [

    ['user', '【系统】用户列表 [ 横向+小头像 ]', '<div class="tmode_userList">\n  <ul class="cc">\n  <for:>\n    <li>\n      <a href="{url}" target="_blank"><img src="{avatar_s}" width="50" height="50" alt="{username}"><span>{username}</span></a>\n    </li>\n  </for>\n  </ul>\n</div>', '1'],
    ['user', '【系统】用户列表 [ 头像+帖数 ]', '<div class="tmode_faceList">\n<ul>\n<for:>\n  <li<if:odd> class="li_bg"</if>><span class="time">{posts}</span><img src="{avatar_s}" width="30" height="30" alt="{username}"><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '2'],
    ['user', '【系统】用户列表 [ 有序+头像+帖数 ]', '<div class="tmode_faceList tmode_faceList_sort">\n<ul>\n<for:>\n <li<if:odd> class="li_bg"</if>><span class="time">{posts}</span><img src="{avatar_s}" width="30" height="30" alt="{username}"><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '3'],
    ['user', '【系统】用户列表 [ 无序+帖数 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n   <li><span class="time">{posts}</span><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '4'],
    ['user', '【系统】用户列表 [ 基础+帖数 ]', '<div class="tmode_list">\n<ul>\n<for:>\n    <li><span class="time">{posts}</span><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '5'],
    ['user', '【系统】用户列表 [ 有序+帖数 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n    <li><span class="time">{posts}</span><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '6'],
    ['user', '【系统】用户列表 [ 基础 ]', '<div class="tmode_list">\n<ul>\n<for:>\n   <li><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '7'],
    ['user', '【系统】用户列表 [ 有序 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n   <li><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '8'],
    ['user', '【系统】帖子列表 [ 无序 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n  <li><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '9'],
    ['user', '【系统】用户组图 [ 基础 ]', '<div class="tmode_imgGroup">\n  <ul class="cc">\n  <for:>\n    <li>\n      <a href="{url}"><img src="{avatar_b}" width="160" height="160"><em class="username"><strong>{username}</strong><span></span></em></a>\n    </li>\n  </for>\n  </ul>\n</div>', '10'],
    ['user', '【系统】用户列表 [ 横向 ]', '<div class="tmode_traverseList">\n<ul class="cc">\n<for:>\n    <li><a href="{url}" target="_blank">{username}</a></li>\n</for>\n</ul>\n</div>', '11'],

    ['thread', '【系统】帖子列表 [ 版块 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><a href="{forumUrl}">[{forum}]</a>&nbsp;<a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '12'],
    ['thread', '【系统】帖子列表 [ 热点 ]', '<div class="tmode_hot">\n<for:>\n  <dl>\n    <dt><a href="{url}" target="_blank">{title|14}</a></dt>\n    <dd>{intro|80}</dd>\n  </dl>\n</for>\n</div>', '13'],
    ['thread', '【系统】帖子组图 [ 基础 ]', '<!--可自行调整图片大小，有两处;配合结构无样式，效果更佳-->\n<div class="tmode_imgGroup">\n  <ul class="cc">\n  <for:>\n    <li>\n      <a href="{url}" target="_blank"><img src="{thumb|160|160}" alt="{title}" width="160" height="160"><em><strong>{title}</strong><span></span></em></a>\n    </li>\n  </for>\n  </ul>\n</div>', '4'],
    ['thread', '【系统】帖子列表 [ 瀑布流 ]', '<for:>\n<div class="tmode_waterfall">\n  <if:{thumb}>\n  <div class="img"><a href="{url}" target="_blank"><img src="{thumb|200|0}" width="200" alt="{title}"></a></div>\n  </if>\n  <div class="title"><a href="{url}" target="_blank">{title}</a></div>\n  <div class="descrip">{intro|60}</div>\n  <div class="user">\n    <a href="{space}" target="_blank" data-uid="{uid}" class="J_user_card_show"><img src="{avatar_s}" width="30" height="30">{author}</a>\n    <span class="time">{threadTime}</span>\n  </div>\n  <div class="num">\n    <span class="icon_like" title="喜欢">{like}</span>\n    <span class="icon_reply" title="回复">{replies}</span>\n  </div>\n</div>\n</for>', '15'],
    ['thread', '【系统】帖子列表 [ 图文 ]', '<div class="tmode_imglist">\n  <for:>\n  <dl class="cc">\n    <dt><a href="{url}" target="_blank"><img src="{thumb|80|60}" alt="{title}"></a></dt>\n    <dd><a href="{url}" target="_blank">{title|10}</a>{intro|20}</dd>\n  </dl>\n  </for>\n</div>', '16'],
    ['thread', '【系统】帖子列表 [ 版块+用户 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><a class="time" href="{space}" target="_blank">{author}</a><a href="{forumUrl}" target="_blank">[{forum}]</a>&nbsp;<a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '17'],
    ['thread', '【系统】帖子列表 [ 基础+时间 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><span class="time">{threadTime}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '18'],
    ['thread', '【系统】帖子列表 [ 无序+时间 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n <li><span class="time">{threadTime}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '19'],
    ['thread', '【系统】帖子列表 [ 有序+时间 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n  <li><span class="time">{threadTime}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '20'],
    ['thread', '【系统】帖子列表 [ 无序 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n    <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '21'],
    ['thread', '【系统】帖子列表 [ 有序 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '22'],
    ['thread', '【系统】帖子列表 [ 基础 ] ', '<div class="tmode_list">\n<ul>\n<for:>\n    <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '23'],

    ['forum', '【系统】版块列表 [ 有序+总帖数 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n  <li><span class="time">{article}</span><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '24'],
    ['forum', '【系统】版块列表 [ 无序+总帖数 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n <li><span class="time">{article}</span><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '25'],
    ['forum', '【系统】版块列表 [ 基础+总帖数 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><span class="time">{article}</span><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '26'],
    ['forum', '【系统】版块列表 [ 有序 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n  <li><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '27'],
    ['forum', '【系统】版块列表 [ 无序 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n <li><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '28'],
    ['forum', '【系统】版块列表 [ 基础 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '28'],
    ['forum', '【系统】版块列表 [ 横向 ]', '<div class="tmode_traverseList">\n<ul class="cc">\n<for:>\n   <li><a href="{forumUrl}" target="_blank">{forum}</a></li>\n</for>\n</ul>\n</div>', '30'],

    ['tag', '【系统】话题列表 [ 基础 ]', '<div class="tmode_list">\n<ul>\n<for:>\n    <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '31'],
    ['tag', '【系统】话题列表 [ 有序 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n    <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '32'],
    ['tag', '【系统】话题列表 [ 无序 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n   <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '33'],
    ['tag', '【系统】话题封面 [ 基础 ]', '<div class="tmode_imgGroup">\n  <ul class="cc">\n  <for:>\n    <li>\n      <a href="{url}"><img src="{thumb|160|160}" width="160" height="160" alt="{title}"><em class="username"><strong>{title}</strong><span></span></em></a>\n    </li>\n  </for>\n  </ul>\n</div>', '34'],
    ['tag', '【系统】话题封面 [ 间隔 ]', '<div class="tmode_imgGroup tmode_tagFront">\n  <ul class="cc">\n  <for:>\n    <li>\n      <a href="{url}"><img src="{thumb|156|156}" width="156" height="156" alt="{title}"><em class="username"><strong>{title}</strong><span></span></em></a>\n    </li>\n  </for>\n  </ul>\n</div>', '35'],
    ['tag', '【系统】话题列表 [ 有序+关注数 ]', '<div class="tmode_list tmode_list_sort">\n<ul>\n<for:>\n    <li><span class="time">{attention_count}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '36'],
    ['tag', '【系统】话题列表 [ 基础+关注数 ]', '<div class="tmode_list">\n<ul>\n<for:>\n    <li><span class="time">{attention_count}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '37'],
    ['tag', '【系统】话题列表 [ 无序+关注数 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n   <li><span class="time">{attention_count}</span><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '38'],
    ['tag', '【系统】话题列表 [ 图文 ]', '<div class="tmode_imglist">\n  <for:>\n  <dl class="cc">\n    <dt><a href="{url}"><img src="{logo}" alt="{title}" width="80" height="60"></a></dt>\n    <dd><a href="{url}">{title|10}</a>{excerpt|20}</dd>\n  </dl>\n  </for>\n</div>', '39'],
    ['tag', '【系统】话题列表 [ 横向 ]', '<div class="tmode_traverseList">\n<ul class="cc">\n<for:>\n <li><a href="{url}" target="_blank">{title}</a></li>\n</for>\n</ul>\n</div>', '40'],

    ['link', '【系统】友情链接 [ 横向+名称 ]', '<div class="tmode_traverseList">\n<ul class="cc">\n<for:>\n  <li><a href="{url}" target="_blank">{name}</a></li>\n</for>\n  <li><a href="index.php?m=link&c=index&a=run" class="J_link_apply">申请链接</a></li>\n</ul>\n</div>', '41'],
    ['link', '【系统】友情链接 [ 横向+logo ]', '<div class="tmode_traverseList">\n<ul class="cc">\n<for:>\n  <li><a href="{url}" target="_blank"><img src="{logo}" width="88" height="31" alt="{name}"></a></li>\n</for>\n  <li><a href="index.php?m=link&c=index&a=run" class="J_link_apply">申请链接</a></li>\n</ul>\n</div>', '42'],
    ['link', '【系统】友情链接 [ 竖列无序 ]', '<div class="tmode_list tmode_list_light">\n<ul>\n<for:>\n  <li><a href="{url}" target="_blank">{name}</a></li>\n</for>\n  <li><a href="index.php?m=link&c=index&a=run" class="J_link_apply">申请链接</a></li>\n</ul>\n</div>', '43'],
    ['link', '【系统】友情链接 [ 竖列基础 ]', '<div class="tmode_list">\n<ul>\n<for:>\n  <li><a href="{url}" target="_blank">{name}</a></li>\n</for>\n  <li><a href="index.php?m=link&c=index&a=run" class="J_link_apply">申请链接</a></li>\n</ul>\n</div>', '44'],

];
