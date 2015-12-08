<?php
/**
 * Created by PhpStorm.
 * User: Varun Batra
 * Date: 25-11-2015
 * Time: 07:51
 */

namespace Lib;


class DataManagement
{

    public function __construct()
    {
//                echo 'here';die;
    }

    public function getOrdersTraversing()
    {
        $orders = \app\Models\Order::getOrders();
        $A = 0;
        foreach($orders as $order) {

           $data = json_decode(json_encode($order),true);

            foreach($order['orderproduct'] as $products) {

                $dataOrders[$A]['order_name'] = $data['name'];
                $dataOrders[$A]['order_id'] = $data['id'];
                $dataOrders[$A]['product_id'] = $products['product_id'];
                $dataOrders[$A]['prices'] = $products['prices'];
                $dataOrders[$A]['product_name'] = $products['product']['name'];

                $A  += 1;
            }
        }

//        print_r($dataOrders);die;    // For testing data order array

        return $dataOrders;
    }
}