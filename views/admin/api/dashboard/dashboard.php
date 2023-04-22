<?php

    require_once("./model/Order.php");

    $dashboard_data = [];

    // Revenue Per 10,20,30,40... Orders 

    $group_order = [];
    $group_revenue = [];

    $total_orders = Order::findAll()->rowCount();

    for($i = 10; $i <= $total_orders; $i += 10){

        array_push($group_order, $i);

        $revenue = Order::countRevenue($i);

        array_push($group_revenue,intval($revenue));

        if($i != $total_orders){

            array_push($group_order, "");
            array_push($group_order, "");
            
            array_push($group_revenue, $revenue + 20);
            array_push($group_revenue, $revenue + 50);
        }

    }

    $dashboard_data["order_info"] = ["group_order" => $group_order, "group_revenue" => $group_revenue];

    // Sales Per Each Month 

    $month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    $orders_by_month = [0,0,0,0,0,0,0,0,0,0,0,0];

    $months_orders = Order::orderByMonth();

    foreach($months_orders as $month_orders){

        $orders_by_month[$month_orders["month"] - 1] = $month_orders["order_num"]; // $orders_by_month[2 - 1] = 200

    }

    $dashboard_data["sales_info"] = ["month" => $month, "orders_by_month" => $orders_by_month];

    echo json_encode($dashboard_data);

?>