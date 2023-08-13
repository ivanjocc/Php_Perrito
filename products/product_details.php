<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <?php
    // Example product data (replace with your own data or fetch from a database)
    $product = [
        'id' => 1,
        'name' => 'Product 1',
        'description' => 'This is the description of Product 1.',
        'price' => 19.99,
        'image' => 'chat.jpg'
    ];
    ?>
    
    <h1><?php echo $product['name']; ?></h1>
    <p><?php echo $product['description']; ?></p>
    <p>Price: $<?php echo $product['price']; ?></p>
    <img style="width: 300px" src="../images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">

    <form method="post" action="../cart/view_cart.php">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="submit" name="add_to_cart" value="Add to Cart">
    </form>

    <a href="product_list.php">Back to Product List</a>
</body>
</html>
