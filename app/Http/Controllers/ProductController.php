<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Libraries\ExcelUtil\export;

class ProductController extends Controller
{
    public function index()
    {
        $model = ProductModel::first();
        dd($model);
//        $data = [];//要导出的数据
//        $header = [];//导出头   例如：["名称", "价格", "数量"]
//        //导出的头和导出的数据的长度要一致
//        $excel = new export($data, $header);
//        //从上面的封装类中可以看到都有哪些属性可以设置，下面是一些例子，大写字母是列，字母后面的数字是行，,支持*号设置整行或整列。
//        //例如表头是["名称", "价格", "数量"]，就有下面的设置
//        $excel->setColumnWidth(['A' => 40,'B' => 40, 'C' => 40]);//设置单元格宽度
//        $excel->setRowHeight([1 => 40]);//设置行高
//        $excel->setFont(['A1:C1' => 12]);//设置字体大小
//        $excel->setBold(['A1:C1' => true]);//设置字体粗细
//        $excel->setBackground(['A1:C1' => '808080']);//设置背景色
//        $excel->setSheetName('sheet1');//设置sheet名称
//        return Excel::download($excel, 'filename.xlsx');
    }
}
