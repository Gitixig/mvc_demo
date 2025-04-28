<?php
$config = require 'config.php';
$base = $config['base'];
$baseURL = $config['baseURL'];
$assets = $config['assets'];


include './App/Views/Layout/homeHeader.php';
?>

<!-- Section: Cart -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="mb-4 text-center">🛒 Giỏ hàng của bạn</h2>

        <?php if (empty($cartItems)): ?>
            <div class="alert alert-info text-center">
                Chưa có sản phẩm nào trong giỏ hàng.
            </div>
            <?php else : ?>
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $totalPrice = 0;
                        foreach ($cartItems as $item) :
                            $itemTotal = $item['Price'] * $item['quantity'];
                            $totalPrice += $itemTotal;
                        ?>
                            <tr>
                                <td><?= $item['Name'] ?></td>
                                <td><?= number_format($item['Price'], 0) ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td><?= number_format($itemTotal, 0) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary">
                            <td colspan="3" class="text-end">Tổng tiền:</td>
                            <td>$<?= number_format($totalPrice, 0) ?></td>
                        </tr>
                    </tfoot>
                </table>

            <!-- Nút checkout -->
            <div class="text-end">
                <a href="<?= $baseURL ?>order/checkout" class="btn btn-success">🛍️ Tiến hành thanh toán</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include './App/Views/Layout/homeFooter.php'; ?>