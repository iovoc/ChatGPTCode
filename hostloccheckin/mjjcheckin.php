<?php

// 设置随机数的范围
$min = 1;
$max = 55000;

// 设置 cookie
$cookie = "my_cookie_name=my_cookie_value";

// 设置随机时间间隔的范围
$min_interval = 5; // 5 秒
$max_interval = 10; // 10 秒

// 循环访问 20 次
for ($i = 0; $i < 20; $i++) {
  // 生成随机数
  $a = rand($min, $max);

  // 拼接 URL
  $url = "https://hostloc.com/space-uid-{$a}.html";

  // 打印访问的 URL
  echo "Accessing: {$url}\n";

  // 初始化 cURL 资源
  $ch = curl_init($url);

  // 设置 cURL 选项
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);

  // 执行 cURL 请求
  $response = curl_exec($ch);

  // 打印返回的内容
  echo "Response: {$response}\n";

  // 关闭 cURL 资源
  curl_close($ch);

  // 生成随机时间间隔
  $interval = rand($min_interval, $max_interval);

  // 打印随机时间间隔
  echo "Interval: {$interval} seconds\n";

  // 等待随机时间间隔
  sleep($interval);
}
