@extends('layout.master')

@section('content')

    <h2>List of Order Products</h2>
    <div class="container">

        <table class="table table-hover table-striped table-bordered" >
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

