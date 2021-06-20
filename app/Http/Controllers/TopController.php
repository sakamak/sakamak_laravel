<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;

class TopController extends Controller
{
    public function top()
    {
        $money = new Money;
        $moneydata = $money->getData();

        //どっちが払うか計算している
        $sMoney = 0;
        $tMoney = 0;
        $payMoney = 0;
        foreach($moneydata as $data){
            if($data->del_flg != 1){
                if($data->pay_user == 'sakamaki'){
                    if($data->treat_flg == 1){
                        $sMoney += $data->money * 2;
                    }else {
                        $sMoney += $data->money;
                    }
                }else if($data->pay_user == 'takizawa'){
                    if($data->treat_flg == 1){
                        $tMoney += $data->money * 2;
                    }else {
                        $tMoney += $data->money;
                    }
                }
            }
        }
        if($sMoney > $tMoney){
            $payMessage = '瀧沢が払う';
            $payMoney = ($sMoney-$tMoney)/2;
        }else if($sMoney < $tMoney){
            $payMessage = '酒巻が払う';
            $payMoney = ($tMoney-$sMoney)/2;
        }else if($sMoney == $tMoney){
            $payMessage = '貸し借りなし';
        }

        return view('top', ['moneydata'=>$moneydata, 'payMessage'=>$payMessage,'payMoney'=>$payMoney ]);
    }
    public function regist()
    {
        return view('regist');
    }
    public function confirm(Request $request)
    {
        $money = new Money;
        if($request->filled('money') && $request->pay_user != 'none'){
            $money->reg_date = $request->reg_date;
            $money->title = $request->title;
            $money->money = $request->money;
            $money->pay_user = $request->pay_user;
            if($request->treat_flg == 1){
                $money->treat_flg = 1;
            }else{
                $money->treat_flg = 0;
            }
            $money->save();
            return view('confirm');
        }else{
            return view('regist');
        }
    }
    public function payconfirm()
    {
        return view('payconfirm');
    }

    public function paidconfirm(Request $request)
    {
        $money = new Money;
        $items = Money::where('reg_date', '<=', date("Y-m-d"))->get();
        \Log::debug(date("Y-m-d"));

        foreach ($items as $item) {
            $item->del_flg = 1;
            $item->save();
        }

        return view('paidconfirm');
    }    
}
