<?php include 'includes/header.php'?>
<?php include 'database/dbconn.php'?>

        <title>Topics</title>
        <meta name="description" content="">
        </head>
    <body>
        <div class="page-container">
        <header >
            <?php
                include 'includes/nav.php';
            ?> 
        </header>
        
        <main class="topics-nav">
            <?php
                include 'includes/topicsnav.php';
            ?>            
            <section class="search-results-section">
                <?php
                    if(isset($_POST['submit-search'])){
                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                        $searchQ = "%$search%";
                        $sql = "SELECT * FROM helpcenter_articles WHERE title LIKE ? OR
                        intro_text LIKE ? OR body LIKE ? ";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss",$searchQ, $searchQ, $searchQ);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $queryResult = mysqli_num_rows($result);
                        
                        
                        if($queryResult>0){
                            echo " Found : ".$queryResult." results!";
                            while($row = mysqli_fetch_assoc($result)){
                                echo "
                                <div class='card-search'>
                                    <nav>
                                        <div>
                                            <a href='article.php?id=".$row['id_name']."'>
                                            <h4>".$row['title']."</h4>
                                            <span class='search-card-txt'>
                                                <p>".$row['intro_text']." read more...</p>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                ";
                            }
                        }else {
                            echo "There are no results matching '$search' !";
                        }
                    }
                ?>
            </section>            
            <section class="popular-topics">
                <div class="topics-section-head">
                    <h2>Popular Topics</h2>
                </div>
                <div class="topics-card-group">
                    <div class="card">
                        <div class="article-path">
                            <nav>
                                <div>
                                    <span style="order: 1;">
                                        <p>Getting Started</p>
                                    </span>                                                                
                                </div>
                            </nav>
                        </div>
                        <h3>
                            <span>
                                <a href="article.php?id=YourProfile">Your Profile</a>
                            </span>
                        </h3>
                    </div>
                    <div class="card">
                        <div class="article-path">
                            <nav>
                                <div>
                                    <span style="order: 1;">
                                        <p>Using KaziTap</p>
                                    </span>                              
                                </div>
                            </nav>
                        </div>
                        <h3>
                            <span>
                                <a href="article.php?id=SaveDocuments">Saving Resume's and Curriculum Vitae</p>
                            </span>
                        </h3>
                    </div>
                    <div class="card">
                        <div class="article-path">
                            <nav>
                                <div>
                                    <span style="order: 1;">
                                        <p>Account and Privacy Settings</p>
                                    </span>
                                </div>
                            </nav>
                        </div>
                        <h3>
                            <span>
                                <a href="article.php?id=AccountPrivacy">Account Privacy Settings</a>
                            </span>
                        </h3>
                    </div>
                    <div class="card">
                        <div class="article-path">
                            <nav>
                                <div>
                                    <span style="order: 1;">
                                        <p>Getting Started</p>
                                    </span>
                                </div>
                            </nav>
                        </div>
                        <h3>
                            <span>
                                <a href="article.php?id=ExploreJobs">Exploring Jobs</a>
                            </span>
                        </h3>
                    </div>
                </div>
            </section>
        </main>        
        
        <?php 
            include 'includes/footer.php';    
        ?>
        <div>
        <script src="scripts/script-help.js" async defer></script>
    </body>
</html>