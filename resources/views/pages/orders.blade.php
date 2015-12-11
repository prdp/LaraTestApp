<!DOCTYPE html>
<html>
    <head>
        <title>Orders</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    </head>

    <body>
    @extends('pages.layouts.master')

    @section('content')
        <div class="container">
            <h2>List of Order Products</h2>
            <div class="content">

                <table>
                    <tr>
                        <th>
                            Order Id
                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Order Name
                        </th>
                        <th>
                            Product Price
                        </th>
                    </tr>

                    <?php
                        foreach ($data as $dataOne) {
                            ?><tr>

                            <?php
                                print_r('<td>'.$dataOne['order_id'].'</td>');
                                print_r('<td>'.$dataOne['product_name'].'</td>');
                                print_r('<td>'.$dataOne['order_name'].'</td>');
                                print_r('<td>'.$dataOne['prices'].'</td>');
                            ?>

                    </tr><?php
                        }
                    ?>

                </table>
            </div>
        </div>
    </body>
</html>
