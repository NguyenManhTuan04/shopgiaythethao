<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Các CSS của bạn ở đây */

        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        /* Breadcrumb Section */
        .breadcrumb-option {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .breadcrumb__text h4 {
            font-size: 24px;
            color: #212529;
        }

        .breadcrumb__links a {
            color: #007bff;
        }

        /* Shopping Cart Section */
        .shopping-cart {
            padding: 80px 0;
        }

        .shopping__cart__table table {
            width: 100%;
            border-collapse: collapse;
        }

        .shopping__cart__table th,
        .shopping__cart__table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .shopping__cart__table th {
            background-color: #f4f4f4;
        }

        .shopping__cart__table td.product__cart__item {
            display: flex;
            align-items: center;
        }

        .product__cart__item__pic {
            width: 80px;
            margin-right: 20px;
            overflow: hidden;
        }

        .product__cart__item__pic img {
            width: 100%;
            height: auto;
        }

        .product__cart__item__text h6 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #212529;
        }

        .product__cart__item__text h5 {
            font-size: 20px;
            color: #e44d26;
        }

        .quantity__item {
            display: flex;
            align-items: center;
        }

        .pro-qty-2 input {
            width: 40px;
            padding: 8px;
            text-align: center;
            border: 1px solid #ced4da;
            margin: 0 10px;
        }

        .cart__price {
            font-size: 20px;
            color: #e44d26;
        }

        .cart__close {
            font-size: 24px;
            cursor: pointer;
            color: #868e96;
        }

        /* Continue Shopping and Update Cart Buttons */
        .continue__btn,
        .update__btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
            border-radius: 4px;
        }

        .update__btn {
            background-color: #343a40;
        }

        .continue__btn:hover,
        .update__btn:hover {
            background-color: #343a40;
        }

        /* Cart Discount and Total */
        .cart__discount,
        .cart__total {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: 30px;
            border: 1px solid #dee2e6;
        }

        .cart__discount h6,
        .cart__total h6 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #212529;
        }

        .cart__discount input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
        }

        .cart__discount button {
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
            border: 1px solid #e44d26;
            border-radius: 4px;
        }

        .cart__discount button:hover {
            background-color: #343a40;
            border: 1px solid #343a40;
        }

        .cart__total ul {
            list-style: none;
            padding: 0;
        }

        .cart__total li {
            font-size: 18px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            color: #212529;
        }

        .cart__total a.primary-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
            border-radius: 4px;
        }

        .cart__total a.primary-btn:hover {
            background-color: #343a40;
        }

        /* CSS cho nút TIẾP TỤC ĐẶT HÀNG */
        input[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #343a40;
        }

        /* CSS cho nút XÓA GIỎ HÀNG */
        input[type="button"] {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="button"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>

                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đơn hàng mới</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đang Xử lý</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đang giao</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#hoanthanh" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Hoàn thành</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dahuy" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Đã hủy</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">
                                <div class="row boxcontent cart">
                                    <table>
                                        <tr>

                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>Chi tiết</th>
                                            <th>THAO TÁC</th>
                                        </tr>
                                        <?php
                                        if (isset($listbill) && (is_array($listbill))) {
                                            foreach ($listbill as $bill) {
                                                extract($bill);
                                                $ttdh = get_ttdh($bill['bill_status']);
                                                $counttsp = loadall_cart_count($bill['id']);
                                                $thanhtoan = get_thanhtoan($bill['thanhtoan'], $bill['bill_pttt']);                 

                                                $link = "index.php?act=billconfirm1&id=" . $id;
                                                if ($bill['bill_status'] == 0) {
                                                    echo '<form method="post" action="index.php?act=huy">'; // Update the action attribute with the correct endpoint
                                                    echo '<tr>
                                                        <td>DAM-' . $bill['id'] . '</td>
                                                        <td>' . $bill['ngaydathang'] . '</td>
                                                        <td>' . $counttsp . '</td>
                                                        <td>' . $bill['total'] . '</td>
                                                        <td>' . $ttdh . '</td>
                                                        <td>'. $thanhtoan.'</td>
                                                        <td><a href="' . $link . '">Xem chi tiết</a></td>
                                                        <td>
                                                            <input type="hidden" name="bill_id" value="' . $bill['id'] . '">
                                                            <input type="hidden" name="new_status" value="4">
                                                            <input name="huy" type="submit" value="Hủyuuuuuuuuuuu" onclick="return confirm(\'Xác nhận hủy đơn hàng?\');">
                                                        </td>
                                                    </tr>';
                                                    echo '</form>';
                                                }
                                            }
                                        }
                                        ?>


                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="profile" role="tabpanel">
                            <div class="p-20">
                                <div class="row boxcontent cart">
                                    <table>
                                        <tr>

                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>Chi tiết</th>
                                            <th>THAO TÁC</th>
                                        </tr>
                                        <?php
                                        if (isset($listbill) && (is_array($listbill))) {
                                            foreach ($listbill as $bill) {
                                                extract($bill);
                                                $ttdh = get_ttdh($bill['bill_status']);
                                                $counttsp = loadall_cart_count($bill['id']);
                                                $thanhtoan = get_thanhtoan($bill['thanhtoan'], $bill['bill_pttt']);                 

                                                $link = "index.php?act=billconfirm1&id=" . $id;
                                                if ($bill['bill_status'] == 1) {
                                                    echo '<form method="post" action="index.php?act=huy">'; // Update the action attribute with the correct endpoint
                                                    echo '<tr>
                                                        <td>DAM-' . $bill['id'] . '</td>
                                                        <td>' . $bill['ngaydathang'] . '</td>
                                                        <td>' . $counttsp . '</td>
                                                        <td>' . $bill['total'] . '</td>
                                                        <td>' . $ttdh . '</td>
                                                        <td>'.$thanhtoan.'</td>
                                                        <td><a href="' . $link . '">Xem chi tiết</a></td>
                                                        <td>
                                                            <input type="hidden" name="bill_id" value="' . $bill['id'] . '">
                                                            <input type="hidden" name="new_status" value="4">
                                                            <input name="huy" type="submit" value="Hủy" onclick="return confirm(\'Xác nhận hủy đơn hàng?\');">
                                                        </td>
                                                    </tr>';
                                                    echo '</form>';
                                                }
                                            }
                                        }
                                        ?>


                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="messages" role="tabpanel">
                            <div class="p-20">
                                <div class="row boxcontent cart">
                                    <table>
                                        <tr>

                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>Chi tiết</th>
                                            <th>THAO TÁC</th>
                                        </tr>
                                        <?php
                                        if (isset($listbill) && (is_array($listbill))) {
                                            foreach ($listbill as $bill) {
                                                extract($bill);
                                                $ttdh = get_ttdh($bill['bill_status']);
                                                $counttsp = loadall_cart_count($bill['id']);
                                                $thanhtoan = get_thanhtoan($bill['thanhtoan'], $bill['bill_pttt']);                 

                                                $link = "index.php?act=billconfirm1&id=" . $id;
                                                if ($bill['bill_status'] == 2) {
                                                    echo '<form method="post" action="index.php?act=hoanthanh">'; // Update the action attribute with the correct endpoint
                                                    echo '<tr>
                                                        <td>DAM-' . $bill['id'] . '</td>
                                                        <td>' . $bill['ngaydathang'] . '</td>
                                                        <td>' . $counttsp . '</td>
                                                        <td>' . $bill['total'] . '</td>
                                                        <td>' . $ttdh . '</td>
                                                        <td>'.$thanhtoan.'</td>
                                                        <td><a href="' . $link . '">Xem chi tiết</a></td>
                                                        <td>
                                                            <input type="hidden" name="bill_id" value="' . $bill['id'] . '">
                                                            <input type="hidden" name="new_status" value="3">
                                                            <input name="hoanthanh" type="submit" value="Đã nhận được hàng" onclick="return confirm(\'Xác nhận đã nhận được hàng?\');">
                                                        </td>
                                                    </tr>';
                                                    echo '</form>';
                                                }
                                            }
                                        }
                                        ?>


                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="hoanthanh" role="tabpanel">
                            <div class="p-20">
                            <div class="row boxcontent cart">
                                    <table>
                                        <tr>

                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>Chi tiết</th>
                                            <th>THAO TÁC</th>
                                        </tr>
                                        <?php
                                        if (isset($listbill) && (is_array($listbill))) {
                                            foreach ($listbill as $bill) {
                                                extract($bill);
                                                $ttdh = get_ttdh($bill['bill_status']);
                                                $counttsp = loadall_cart_count($bill['id']);
                                                $thanhtoan1 = get_hoanthanh($bill['thanhtoan'], $bill['bill_status']);                 

                                                $link = "index.php?act=billconfirm1&id=" . $id;
                                                if ($bill['bill_status'] == 3) {
                                                    echo '<tr>
                                
                                <td>DAM-' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>' . $counttsp . '</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $ttdh . '</td>
                                <td>'.$thanhtoan1.'</td>
                                <td><a href="' . $link . '">Xem chi tiết</a></td>
                                <td><input type="submit" value="hhhhhhhhhhh">
                                </td>

                            </tr>';
                                                }
                                            }
                                        }
                                        ?>


                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="dahuy" role="tabpanel">
                            <div class="p-20">
                            <div class="row boxcontent cart">
                                    <table>
                                        <tr>

                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                        
                                            <th>Chi tiết</th>
                                            <th>THAO TÁC</th>
                                        </tr>
                                        <?php
                                        if (isset($listbill) && (is_array($listbill))) {
                                            foreach ($listbill as $bill) {
                                                extract($bill);
                                                $ttdh = get_ttdh($bill['bill_status']);
                                                $counttsp = loadall_cart_count($bill['id']);
                                                
                                                $link = "index.php?act=billconfirm1&id=" . $id;
                                                if ($bill['bill_status'] == 4) {
                                                    echo '<tr>
                                
                                <td>DAM-' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>' . $counttsp . '</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $ttdh . '</td>
                                <td></td>
                                <td><a href="' . $link . '">Xem chi tiết</a></td>
                                <td><input type="submit" value="hhhhhhhhhhhhhhhhhhh">
                                </td>

                            </tr>';
                                                }
                                            }
                                        }
                                        ?>


                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "boxright.php";
                ?>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>