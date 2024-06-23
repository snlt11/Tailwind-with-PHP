<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            "title" => "PHP",
            "price" => 100000,
            "author" => "PHP",
            "url" => "https://www.php.net/",
            "released_year" => 2012,
        ],
        [
            "title" => "Java",
            "price" => 200000,
            "author" => "Java",
            "url" => "https://www.java.com/",
            "released_year" => 2011,
        ]
    ];
    // function  filter($items,$fn){
    //     $filterItems = [];
    //     foreach($items as $item){
    //         if($fn($item)){
    //             $filterItems[] = $item;
    //         }
    //     }
    //     return $filterItems;

    // };
    // $filterItems = filter($books,function($book){
    //     return $book['title'] === 'Java';
    // });
    // ======
    $filterItems = array_filter($books,function($book){
        return $book['title'] === 'Java';
    })

    ?>
    <ul>
        <?php foreach ($filterItems as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <p>
                        <?= $book['title'] ?>(<?= $book['released_year'] ?>)
                    </p>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>