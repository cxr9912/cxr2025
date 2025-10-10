<?php
// 获取频道ID参数
$id = isset($_GET['id']) ? $_GET['id'] : 'cctv1';

// 完整ID映射表 - 将简单ID映射到完整频道名称
$id_map = [
    // CCTV频道
    'cctv1' => 'CCTV-1综合',
    'cctv2' => 'CCTV-2财经',
    'cctv3' => 'CCTV-3综艺',
    'cctv4' => 'CCTV-4中文国际',
    'cctv5' => 'CCTV-5体育',
    'cctv6' => 'CCTV-6电影',
    'cctv7' => 'CCTV-7国防军事',
    'cctv8' => 'CCTV-8电视剧',
    'cctv9' => 'CCTV-9纪录',
    'cctv10' => 'CCTV-10科教',
    'cctv11' => 'CCTV-11戏曲',
    'cctv12' => 'CCTV-12社会与法',
    'cctv13' => 'CCTV-13新闻',
    'cctv14' => 'CCTV-14少儿',
    'cctv15' => 'CCTV-15音乐',
    'cctv16' => 'CCTV-16奥林匹克',
    'cctv17' => 'CCTV-17农业农村',
    
    // 卫视频道
    'bjws' => '北京卫视',
    'tjws' => '天津卫视',
    'hbws' => '河北卫视',
    'sxws' => '山西卫视',
    'nmws' => '内蒙古卫视',
    'lnws' => '辽宁卫视',
    'jlws' => '吉林卫视',
    'ybws' => '延边卫视',
    'hljws' => '黑龙江卫视',
    'dfws' => '东方卫视',
    'jsws' => '江苏卫视',
    'zjws' => '浙江卫视',
    'ahws' => '安徽卫视',
    'dnws' => '东南卫视',
    'hxws' => '海峡卫视',
    'jxws' => '江西卫视',
    'sdws' => '山东卫视',
    'hnws' => '河南卫视',
    'hubws' => '湖北卫视',
    'hunws' => '湖南卫视',
    'gdws' => '广东卫视',
    'szws' => '深圳卫视',
    'gxws' => '广西卫视',
    'haiws' => '海南卫视',
    'ssws' => '三沙卫视',
    'cqws' => '重庆卫视',
    'scws' => '四川卫视',
    'kbws' => '康巴卫视',
    'gzwsw' => '贵州卫视',
    'ynws' => '云南卫视',
    'xzws' => '西藏卫视',
    'sxws2' => '陕西卫视',
    'gsws' => '甘肃卫视',
    'qhws' => '青海卫视',
    'nxws' => '宁夏卫视',
    'xjws' => '新疆卫视',
    'btws' => '兵团卫视',
    
    // 教育频道
    'bjjskj' => '北京纪实科教',
    'jyjs' => '金鹰纪实',
    'cetv1' => 'CETV-1综合教育',
    'cetv2' => 'CETV-2教育教学',
    'cetv4' => 'CETV-4职业教育',
    'sdjyws' => '山东教育卫视',
    
    // 少儿频道
    'kksh' => '卡酷少儿',
    'jykt' => '金鹰卡通',
    'hhxd' => '哈哈炫动',
    'jjkt' => '嘉佳卡通',
    'ymkt' => '优漫卡通',
    
    // 4K频道
    'cctv16_4k' => 'CCTV-16奥林匹克4K',
    'cctv4k' => 'CCTV-4K超高清',
    'bjws4k' => '北京卫视4K',
    'dfws4k' => '东方卫视4K',
    'jsws4k' => '江苏卫视4K',
    'zjws4k' => '浙江卫视4K',
    'sdws4k' => '山东卫视4K',
    'hunws4k' => '湖南卫视4K',
    'gdws4k' => '广东卫视4K',
    'szws4k' => '深圳卫视4K',
    'scws4k' => '四川卫视4K',
    'hxjc4k' => '欢笑剧场4K',
    'cx4k' => '纯享4K',
    
    // 付费频道
    'yggw' => '央广购物',
    'jshqjx' => '聚鲨环球精选',
    'hqqg' => '环球奇观',
    'fyzq' => '风云足球',
    'gefwq' => '高尔夫·网球',
    'yswhjp' => '央视文化精品',
    'fyyy' => '风云音乐',
    'dyjc' => '第一剧场',
    'hjjc' => '怀旧剧场',
    'fyjc' => '风云剧场',
    'sjdl' => '世界地理',
    'bqkj' => '兵器科技',
    'nxss' => '女性时尚',
    'ystq' => '央视台球',
    'chcjtyy' => 'CHC家庭影院',
    'chcymd' => 'CHC影迷电影',
    'chcdzdy' => 'CHC动作电影',
    'cwjd' => '重温经典',
    'lgs' => '老故事',
    'zxs' => '中学生',
    'fxzl' => '发现之旅',
    'zqjy' => '早期教育',
    'zgtq' => '中国天气',
    'sh' => '书画',
    'yybb' => '优优宝贝',
    'zhtc' => '中华特产',
    'shdy' => '四海钓鱼',
    'hqly' => '环球旅游',
    'sthj' => '生态环境',
    'ygw' => '优购物',
    'xdm' => '新动漫',
    'jtlc' => '家庭理财',
    'dfcj' => '东方财经',
    'dmxc' => '动漫秀场',
    'yxfy' => '游戏风云',
    'ly' => '乐游',
    'fztd' => '法治天地',
    'dsjc' => '都市剧场',
    'hxjc4k2' => '欢笑剧场4K',
    'jsxt' => '金色学堂',
    'shss' => '生活时尚',
    'cftx' => '财富天下',
    'qsjl' => '求索纪录',
    'gx' => '国学',
    'ch' => '茶',
    'xfpy' => '先锋乒羽',
    'klcd' => '快乐垂钓',
    'tywq' => '天元围棋',
    'jcjj' => '睛彩竞技',
    'jcqs' => '睛彩青少',
    'jclq' => '睛彩篮球',
    
    // 数字频道
    'aqxj' => '爱情喜剧',
    'cmlp' => '潮妈辣婆',
    'dzdy' => '动作电影',
    'gzjc' => '古装剧场',
    'jtjc' => '家庭剧场',
    'jpzy' => '金牌综艺',
    'jsxy' => '惊悚悬疑',
    'jclb' => '精彩轮播',
    'jpdj' => '精品大剧',
    'jpjl' => '精品纪录',
    'jpmc' => '精品萌宠',
    'jpty' => '精品体育',
    'jljc' => '军旅剧场',
    'jspl' => '军事评论',
    'rbjx' => '热播精选',
    'xwwl' => '炫舞未来',
    'ybjk' => '怡伴健康',
    'zggf' => '中国功夫',
    'dbdj' => '哒啵电竞',
    'dbss' => '哒啵赛事',
    'cx4k2' => '纯享4K',
    'hmdy' => '黑莓电影',
    'hmdh' => '黑莓动画',
    'mlzq' => '魅力足球',
    'sctx' => '收藏天下',
    'txzq' => '天下足球',
    'hxgw' => '好享购物',
    
    // 重庆频道
    'cqxw' => '重庆新闻',
    'cqysj' => '重庆影视剧',
    'cqhy' => '重庆红叶',
    'cqshyf' => '重庆社会与法',
    'cqwtyl' => '重庆文体娱乐',
    'cqhywh' => '重庆红岩文化',
    'cqxnc' => '重庆新农村',
    'cqse' => '重庆少儿',
    'cqyd' => '重庆移动',
    'cqqm' => '重庆汽摩',
    'cqdyjy' => '重庆党员教育',
    'cgrm' => '重广融媒',
    'akds' => '爱看导视',
    'bbzh' => '北碚综合',
    'bszh' => '璧山综合',
    'ckzh' => '城口综合',
    'djzh' => '垫江综合',
    'fdzh' => '丰都综合',
    'fjzh' => '奉节综合',
    'flzh' => '涪陵综合',
    'hczh' => '合川综合',
    'kzzh' => '开州综合',
    'nczh' => '南川综合',
    'qjzh' => '黔江综合',
    'rczh' => '荣昌综合',
    'tlzh' => '铜梁综合',
    'tnzh' => '潼南综合',
    'wszh' => '万盛综合',
    'wzzh' => '万州综合',
    'wszh2' => '巫山综合',
    'wxzh' => '巫溪综合',
    'wlzh' => '武隆综合',
    'xszh' => '秀山综合',
    'yczh' => '永川综合',
    'yyzh' => '酉阳综合',
    'yzzh' => '云阳综合',
    'cszh' => '长寿综合',
    
    // 上海频道
    'shxwzh' => '上海新闻综合',
    'dfys' => '东方影视',
    'dycj' => '第一财经',
    'wxty' => '五星体育',
    'shds' => '上海都市',
    'dfgw' => '东方购物',
    'shjy' => '上海教育',
  // 福建频道
    'fjzh' => '福建综合',
    'fjxw' => '福建新闻',
    'fjdsj' => '福建电视剧',
    'fjly' => '福建旅游',
    'fjwt' => '福建文体'
];

// 配置参数
$source_url = "替换成你自己的获取地址TXT格式";
$cache_file = "cache/channels_cache.txt";
$cache_time = 86400; // 缓存时间（秒），1天

// 确保缓存目录存在
if (!is_dir('cache')) {
    mkdir('cache', 0755, true);
}

// 检查缓存是否存在且未过期
if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_time) {
    $channels_data = file_get_contents($cache_file);
} else {
    // 为HTTPS请求创建SSL上下文
    $ssl_options = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        ],
        'http' => [
            'timeout' => 10, // 10秒超时
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ]
    ];
    
    $context = stream_context_create($ssl_options);
    
    // 获取频道列表数据
    $channels_data = file_get_contents($source_url, false, $context);
    
    if ($channels_data !== FALSE) {
        // 保存到缓存文件
        file_put_contents($cache_file, $channels_data);
    } else {
        // 如果获取失败，尝试使用缓存（即使已过期）
        if (file_exists($cache_file)) {
            $channels_data = file_get_contents($cache_file);
        } else {
            http_response_code(500);
            die("错误：无法获取频道列表数据且无可用缓存");
        }
    }
}

// 将ID转换为完整的频道名称
$channel_name = isset($id_map[$id]) ? $id_map[$id] : $id;

// 按行分割数据
$lines = explode("\n", $channels_data);
$playurl = '';

// 遍历查找匹配的频道
foreach ($lines as $line) {
    $line = trim($line);
    
    // 跳过空行和分类行
    if (empty($line) || strpos($line, '#genre#') !== false) {
        continue;
    }
    
    // 查找逗号位置
    $comma_pos = strpos($line, ',');
    if ($comma_pos === FALSE) {
        continue;
    }
    
    // 提取频道名称和播放地址
    $current_name = trim(substr($line, 0, $comma_pos));
    $current_url = trim(substr($line, $comma_pos + 1));
    
    // 检查是否匹配
    if ($current_name === $channel_name) {
        $playurl = $current_url;
        break;
    }
}

// 如果找到播放地址，直接重定向
if (!empty($playurl)) {
    header('Location: ' . $playurl);
    exit;
}

// 如果没有找到，返回错误信息
http_response_code(404);
echo "错误：频道 '{$id}' 未找到<br>";
echo "您使用的ID: " . htmlspecialchars($id) . "<br>";
echo "转换后的频道名称: " . htmlspecialchars($channel_name) . "<br>";
echo "可用的频道ID：<br>";

// 显示所有可用频道ID（前20个）
$count = 0;
foreach (array_keys($id_map) as $channel_id) {
    if ($count >= 20) {
        echo "... 还有更多频道，请查看完整列表<br>";
        break;
    }
    echo "- " . htmlspecialchars($channel_id) . " (" . htmlspecialchars($id_map[$channel_id]) . ")<br>";
    $count++;
}

echo "<br>提示：使用 play.php?list=1 查看完整频道列表<br>";
?>