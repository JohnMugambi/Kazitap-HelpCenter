<?php include 'includes/header.php'?>



        <title>KaziTap</title>
        <meta name="description" content=""> 
    </head>
    <body>
        <header>
            <?php
            include 'includes/nav.php';
            ?>        
            <div class="search-section">
                <div class="bg-image-search">
                    <div class="left-image-bg">
                        <img src="images/image-left.png" alt="Person searching on computer">
                    </div>
                    <div class="right-image-bg">
                        <img src="images/image-right.png" alt="Person searching on computer">
                    </div>
                </div>
                
                <div class="search-box-area">
                    <h4 class="search-intro-text">Hi, how can we help?</h4>
                    <div class="search-box-section">
                        <div class="nav-search-section">
                            <div class="search-box">

                                <form method="POST" action="topics.php">
                                <input class="search-txt" type="text" name="search" placeholder="Try &quot; Jobs or Account &quot; " required>
                                <button name="submit-search" class="search-btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </header>
        <section class="topic-section">
            <div class="cards-section">
                <div class="card">
                    <div class="card-heading">
                        <h4 class="heading-text"><span><a href="">Getting Started</a></span></h4>
                        <img class="card-icon" src="assets/icons/rocket.png" alt="Rocket">
                    </div>
                    <ul>
                        <li><span><a href="article.php?id=SignUp">Signing Up</a></span></li>
                        <li><span><a href="article.php?id=YourProfile">Your Profile</a></span></li>
                        <li><span><a href="article.php?id=ExploreJobs">Exploring Jobs</a></span></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <h4 class="heading-text"><span><a href="">Using KaziTap</a></span></h4>
                        <img class="card-icon" src="assets/icons/selection.png" alt="Tapping on phone">
                    </div>
                    <ul>
                        <li><span><a href="article.php?id=SearchJobs">Searching for Jobs</a></span></li>
                        <li><span><a href="article.php?id=DirectMessaging">Direct Messaging</a></span></li>
                        <li><span><a href="article.php?id=SaveDocument">Saving Resume's and Curriculum Vitae</a></span></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <h4 class="heading-text"><span><a href="">Account and Privacy Settings</a></span></h4>
                        <img class="card-icon" src="assets/icons/privacy.png" alt="">
                    </div>
                    <ul>
                        <li><span><a href="article.php?id=AccountInfo">Account Information</a></span></li>
                        <li><span><a href="article.php?id=AccountPrivacy">Account Privacy Settings</a></span></li>
                        <li><span><a href="article.php?id=DeleteAccount">Deleting Your Account</a></span></li>
                        <li><span><a href="article.php?id=TermsOfUse">Terms of Use</a></span></li>
                        <li><span><a href="article.php?id=DataPolicy">Data Policy</a></span></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <h4 class="heading-text"><span><a href="">Safety</a></span></h4>
                        <img class="card-icon" src="assets/icons/safe.png" alt="Safe">
                    </div>
                    <ul>
                        <li><span><a href="article.php?id=UserSafety">Account and User Safety</a></span></li>
                        <li><span><a href="article.php?id=ReportAProblem">Report a Problem</a></span></li>
                        <li><span><a href="article.php?id=SafetyTips">Safety Tips</a></span></li>                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="known-issues">
            <h2>Known Issues</h2>
            <p>We currently don't have any known issues to report.Learn more about what you can do 
                if you are experiencing any issue on KaziTap.
            </p>
        </section>
        <?php 
            include 'includes/footer.php';
        ?>
        <script src="scripts/script.js" async defer></script>
    </body>
</html>