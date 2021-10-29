<?php include 'includes/header.php'?>
<?php include 'database/dbconn.php'?>


        <link rel="stylesheet" href="css/article.css">
        <title>Article</title>
    </head>
    <body>
        <header>
            <?php 
                include 'includes/nav.php';
            ?>
        </header>
        <main>
            <?php
                include 'includes/topicsnav.php';
            ?>   
            <?php
                

                $linkId = $_GET['id'];
                $sql = "SELECT * FROM helpcenter_articles WHERE id_name = ? ";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $linkId);
                $stmt->execute();

                $result = $stmt->get_result();
                $queryResults = mysqli_num_rows($result);

                if($queryResults >0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <div class='card-container-articles'>
                        <h3 class='article-heading'>".$row['title']."</h3>
                        <article class='article-container'>
                        <p>".$row['intro_text']."</p>
                            <p>".$row['body']."</p>
                            <br>
                            <p>".$row['endnote']."</p>
                        </article>
                    </div>";
                        
                    }
                }
            ?>

        </main>
        <?php
            include 'includes/footer.php';
        ?>
        <script src="scripts/script-help.js" async defer></script>
    </body>
</html>