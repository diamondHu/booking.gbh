<?php
/* *
 * 配置文件
 * 版本：3.5
 * 日期：2016-06-25
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 * 安全校验码查看时，输入支付密码后，页面呈灰色的现象，怎么办？
 * 解决方法：
 * 1、检查浏览器配置，不让浏览器做弹框屏蔽设置
 * 2、更换浏览器或电脑，重新登录查询。
 */

//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['partner']		= '2088521512573982';

//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
$alipay_config['seller_id']	= $alipay_config['partner'];

//商户的私钥,此处填写原始私钥去头去尾，RSA公私钥生成：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.nBDxfy&treeId=58&articleId=103242&docType=1
$alipay_config['private_key']	= 'MIICWwIBAAKBgQCettLKqIKMAVsGqcVx7fy2qnH3o0/YDLhrVAu/MlUm4dh7mESnT2DabYB1uAtMB7GHSmzUok5VATaKDIexIHU4vQjCQwUW812bggZmu5N06Fp/ER3gy8D7TbyigSqe12/VFYyKwLMhX/42ksD/Wn/JDXnKrBwc0Us/CwBRMXgx5QIDAQABAoGALnsKRpGNEeV/u/bSPSheXzyRfd2VD4fCJqSJgCgEaguwM5oHWRxVGAMDoPYSUOTb5+wy7R7PY/Oj/k/nGUeRLGOUxFFZAD/pQV3Ke1Da7hLSR1y4CnIXRAFVCXSJRXgmDObV0lIzpthhCLKX0GfA/OWYX2kvCwQDOLWIgIOP0YECQQDMP5B9sXrVSSSJ/DnHLZpeDgJrgqM6otSjjiq9izOtPitRaUg2EpY8yGICqkvZIxR/Kt/kHHlYG4MHytyPvBdhAkEAxu23OzSQWrjT3mtKIlg8f89s7z3AOeBhbMWbE3gEe1YutaEkzAm6V0wruDdreLNNMMAlHXa0u3X2t5rnwL3dBQJADOY6zuVll5DOAPTwBTdJF4WU+4s9mddszIOPCXeAJQHXJIYcrGWSHXaeUgLFVYpUog9oInT16O2b4eMa+OztIQJAfqEXwHJnabi59Z2qZU5xxJJPr8NJOA5jNhBb9PqzL6fet/PKLrAKlEOCmRN+MClC+8N0XNsRlTs0QBA1cnXp2QJAc3+SsBYCeLY4YB5FZ60h+mf711aMI7SNfC9ANLlvAgsMGDyHdgeVeGF/zrFkZfCUr+VGKLMTOeEhmiFl9SrWLQ==';

//支付宝的公钥，查看地址：https://b.alipay.com/order/pidAndKey.htm
$alipay_config['alipay_public_key']= 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB';

// 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['notify_url'] = "http://booking.gbhchina.com/notify_alipay";

// 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['return_url'] = "http://booking.gbhchina.com/return_alipay";

//签名方式
$alipay_config['sign_type']    = strtoupper('RSA');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert']    = getcwd().'\\cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

// 支付类型 ，无需修改
$alipay_config['payment_type'] = "1";

// 产品类型，无需修改
$alipay_config['service'] = "create_direct_pay_by_user";

//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


//↓↓↓↓↓↓↓↓↓↓ 请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

// 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
$alipay_config['anti_phishing_key'] = "";

// 客户端的IP地址 非局域网的外网IP地址，如：221.0.0.1
$alipay_config['exter_invoke_ip'] = "";

//↑↑↑↑↑↑↑↑↑↑请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑



return [


    'partner' => '2088521512573982',

    'seller_id' => '2088521512573982',

    'private_key' => 'MIICWwIBAAKBgQCettLKqIKMAVsGqcVx7fy2qnH3o0/YDLhrVAu/MlUm4dh7mESnT2DabYB1uAtMB7GHSmzUok5VATaKDIexIHU4vQjCQwUW812bggZmu5N06Fp/ER3gy8D7TbyigSqe12/VFYyKwLMhX/42ksD/Wn/JDXnKrBwc0Us/CwBRMXgx5QIDAQABAoGALnsKRpGNEeV/u/bSPSheXzyRfd2VD4fCJqSJgCgEaguwM5oHWRxVGAMDoPYSUOTb5+wy7R7PY/Oj/k/nGUeRLGOUxFFZAD/pQV3Ke1Da7hLSR1y4CnIXRAFVCXSJRXgmDObV0lIzpthhCLKX0GfA/OWYX2kvCwQDOLWIgIOP0YECQQDMP5B9sXrVSSSJ/DnHLZpeDgJrgqM6otSjjiq9izOtPitRaUg2EpY8yGICqkvZIxR/Kt/kHHlYG4MHytyPvBdhAkEAxu23OzSQWrjT3mtKIlg8f89s7z3AOeBhbMWbE3gEe1YutaEkzAm6V0wruDdreLNNMMAlHXa0u3X2t5rnwL3dBQJADOY6zuVll5DOAPTwBTdJF4WU+4s9mddszIOPCXeAJQHXJIYcrGWSHXaeUgLFVYpUog9oInT16O2b4eMa+OztIQJAfqEXwHJnabi59Z2qZU5xxJJPr8NJOA5jNhBb9PqzL6fet/PKLrAKlEOCmRN+MClC+8N0XNsRlTs0QBA1cnXp2QJAc3+SsBYCeLY4YB5FZ60h+mf711aMI7SNfC9ANLlvAgsMGDyHdgeVeGF/zrFkZfCUr+VGKLMTOeEhmiFl9SrWLQ==',

    'alipay_public_key' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB',

    'notify_url' => 'http://booking.gbhchina.com/notify_alipay',

    'return_url' => 'http://booking.gbhchina.com/return_alipay',

    'sign_type' => strtoupper('RSA'),

    'input_charset' => strtolower('utf-8'),

    'cacert' => getcwd().'\\cacert.pem',

    'transport' => 'http',

    'payment_type' => "1",//"10.152.18.220";

    'service' => 'create_direct_pay_by_user',//8080;

    'exter_invoke_ip' => "",

    'aliconfig' => $alipay_config
];

