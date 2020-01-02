<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function alipay(){
        $appid='2016101400681522';
        $method='alipay.trade.page.pay';
        $charset='utf-8';
        $signtype='RSA2';
        $sign='';
        $timestamp=date('Y-m-d H:i:s');
        $version='1.0';
        $notify_url='http://1905xzy.comcto.com/alipay/notify';   //支付异步通知地址
        $biz_content='';


        //请求参数
        $out_trade_no=time().rand(1111,9999);
        $product_code='FAST_INSTANT_TRADE_PAY';
        $total_amount=0.01;
        $subject='测试订单'.$out_trade_no;
        $request_param=[
            'out_trade_no'=>$out_trade_no,
            'product_code'=>$product_code,
            'total_amount'=>$total_amount,
            'subject'=>$subject,

        ];
        $param=[
            'app_id'=>$appid,
            'method'=>$method,
            'charset'=>$charset,
            'sign_type'=>$signtype,
            'timestamp'=>$timestamp,
            'version'=>$version,
            'notify_url'=>$notify_url,
            'biz_content'=>json_encode($request_param)
        ];
        echo '<pre>';print_r($param);echo '</pre>';
        //字典序排序
        ksort($param);
        //拼接key=value&key2=value2...
        $str="";
            foreach ($param as $k=>$v){
                $str .= $k . '=' . $v . '&';
            }

            //计算机签名



        $url='https://openapi.alipaydev.com/gateway.do?';

    }
}
