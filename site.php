<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // class Chef {
        //     function makeChicken() {
        //         echo "The chef makes chicken <br>";
        //     }
        //     function makeSalad() {
        //         echo "The chef makes salad <br>";
        //     }
        //     function makeSpecialDish() {
        //         echo "The chef makes bbq ribs <br>";
        //     }
        // }

        // class ItalianChef extends Chef {
        //     function makePasta() {
        //         echo "The chef makes pasta <br>";
        //     }
        //     function makeSpecialDish() {
        //         echo "The chef makes chicken parm <br>";
        //     }
        // }

        // $chef = new Chef();
        // $chef->makeChicken();

        // $italianChef = new ItalianChef();
        // $italianChef->makeChicken();
        // $italianChef->makePasta();

        // $chef->makeSpecialDish();

        // $italianChef->makeSpecialDish();

        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        echo $book1->title;
        echo "<br>";
        echo $book2->title;
        echo "<br>";
        
    ?>

</body>
</html>