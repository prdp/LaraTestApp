<?php
/**
 * Created by PhpStorm.
 * User: Varun Batra
 * Date: 24-11-2015
 * Time: 16:27
 */

namespace app\Http\Controllers;
use Lib\DataManagement;

interface temp1
{
    function A() ;
}

//use app\Http\Controllers\Controller;


class TestController extends Controller implements temp1
{

    public function A()
    {
        // TODO: Implement A() method.
    }

    public function index()
    {

    }

    public function getOrders()
    {
        $data = new DataManagement();
        $data = $data->getOrdersTraversing();
//        $data = $Paginator->make($data, count($data), 3);
        return view('pages\orders', ['data' => $data]);
//        return $data;
    }



}
