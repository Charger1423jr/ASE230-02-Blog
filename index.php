<?php
    $blogPosts = [ //Blog Posts created with ChatGPT
    ['title'=>'The Future of Software Engineering: Trends to Watch',
     'author'=>'Preston Jackson',
     'publish'=>'September 17th, 2024',
     'sample' => 'In the rapidly evolving world of software engineering, staying ahead of the curve is essential. As we look forward, some key trends are poised...',
     'body'=>'In the rapidly evolving world of software engineering, staying ahead of the curve is essential. As we look forward, some key trends are poised to shape the industry. First, AI-driven development tools are becoming more prominent, enabling developers to automate routine coding tasks. Second, cloud-native applications are gaining traction as more businesses move their infrastructure to the cloud, promoting scalable, flexible solutions. Lastly, cybersecurity remains a crucial focus, with new techniques like zero-trust architecture emerging as best practices to safeguard applications. The future is bright for software engineers ready to adapt and innovate.'],
    ['title'=>'How Baseball Analytics Have Changed the Game',
    'author'=>'Coach Billy Bob Joe',
    'publish'=>'June 13th, 1998',
    'sample'=>'The rise of advanced analytics has revolutionized the game of baseball. Once reliant on gut instinct and experience, teams now make decisions...',
    'body'=>'The rise of advanced analytics has revolutionized the game of baseball. Once reliant on gut instinct and experience, teams now make decisions based on a wealth of data. From evaluating player performance to determining pitch selection, analytics provide insights that were unimaginable just a decade ago. Tools like Statcast have made it possible to track a player’s every movement, giving teams an edge in scouting and strategy. While some purists argue that analytics have taken the human element out of the game, there’s no doubt that data-driven decision-making is here to stay.'],
    ['title'=>'Building a Note-Taking App: My Development Journey',
     'author'=>'John Francis Addams',
     'publish'=>'May 22nd, 2023',
     'sample'=>'As someone who loves to stay organized, I recently decided to build my own note-taking app. The project began as a way to keep track of school work and...',
     'body'=>'As someone who loves to stay organized, I recently decided to build my own note-taking app. The project began as a way to keep track of school work and personal projects, but it quickly grew into something more. I designed the app with simplicity in mind, making it easy to jot down quick notes while also providing options for categorizing and prioritizing tasks. Developing the front-end with HTML, CSS, and JavaScript was a fun challenge, while integrating the back-end with a database provided a solid learning experience. There’s still room for improvement, but I’m proud of the progress so far!']
    ];



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blog Central</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <header class="bg-primary text-white text-center py-4">
            <div class="container">
                <h1 class="display-4">Blog Central</h1>
            </div>
        </header>
        <nav class="nav nav-pills flex-column flex-sm-row">
          <a class="flex-sm-fill text-sm-center nav-link" href="index.php">Home</a>
        </nav>

        <?php
            for($i=0; $i <count($blogPosts); $i++) {
                echo '
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">'. $blogPosts[$i]['title'] .'</h5>
                        <p class="card-text">Author: '. $blogPosts[$i]['author'] .'</p>
                        <p class="card-text">'. $blogPosts[$i]['sample'] .'</p>
                        <a href="detail.php?id=' . $i .'" class="btn btn-primary">View More</a>
                      </div>
                    </div>';
            };
        ?>

        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p class="mb-0">&copy; 2024 Do Not Steal My Work Inc. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>