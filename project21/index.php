<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="product-container">
        <?php
      
        $products = [
            [
                "id" => 1,
                "name" => "T-Shirt",
                "price" => 15.99,
                "description" => "A comfortable and stylish T-Shirt.",
                "image" => "download.jpg"
            ],
            [
                "id" => 2,
                "name" => "Jean",
                "price" => 23,
                "description" => "A comfortable and stylish Jean.",
                "image" => "download.jpg"
            ],
            [
                "id" => 3,
                "name" => "Dress",
                "price" => 23,
                "description" => "A comfortable and stylish dress.",
                "image" => "download.jpg"
            ],
            [
                "id" => 4,
                "name" => "Trouser",
                "price" => 23,
                "description" => "A comfortable and stylish trouser.",
                "image" => "download.jpg"
            ],
            [
                "id" => 5,
                "name" => "dress2",
                "price" => 15.99,
                "description" => "A comfortable and stylish T-Shirt.",
                "image" => "download.jpg"
            ],
            [
                "id" => 6,
                "name" => "Jean2",
                "price" => 23,
                "description" => "A comfortable and stylish Jean.",
                "image" => "download.jpg"
            ],
            [
                "id" => 7,
                "name" => "Dress3",
                "price" => 23,
                "description" => "A comfortable and stylish dress.",
                "image" => "download.jpg"
            ],
            [
                "id" => 8,
                "name" => "Trouser4",
                "price" => 23,
                "description" => "A comfortable and stylish trouser.",
                "image" => "download.jpg"
            ],
            [
                "id" => 9,
                "name" => "Dress4",
                "price" => 23,
                "description" => "A comfortable and stylish dress.",
                "image" => "download.jpg"
            ],
            [
                "id" => 10,
                "name" => "Trouser5",
                "price" => 23,
                "description" => "A comfortable and stylish trouser.",
                "image" => "download.jpg"
            ],
        ];
      
        $productsPerPage = 4;

    
        $totalProducts = count($products);

     
        $totalPages = ceil($totalProducts / $productsPerPage);

        
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($currentPage < 1 || $currentPage > $totalPages || !is_numeric($currentPage)) {
            $currentPage = 1;
        }

       
        $startIndex = ($currentPage - 1) * $productsPerPage;

        $endIndex = min($startIndex + $productsPerPage - 1, $totalProducts - 1);

       
        for ($i = $startIndex; $i <= $endIndex; $i++) {
            $product = $products[$i];
            echo "<div class='product'>";
            echo "<img src='" . $product['image'] . "' alt='" . $product['name'] . "'>";
            echo "<h2>" . $product['name'] . "</h2>";
            echo "<p><strong>Price:</strong> $" . $product['price'] . "</p>";
            echo "<p><strong>Description:</strong> " . $product['description'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="pagination">
        <?php
     
        if ($currentPage > 1) {
            echo "<a href='?page=".($currentPage - 1)."'>Previous</a>";
        }

       
        for ($i = 1; $i <= $totalPages; $i++) {
          
            $activeClass = ($i == $currentPage) ? 'active' : '';
            echo "<a href='?page=$i' class='$activeClass'>$i</a>";
        }

        if ($currentPage < $totalPages) {
            echo "<a href='?page=".($currentPage + 1)."'>Next</a>";
        }
        ?>
    </div>
</body>
</html>
