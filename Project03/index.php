<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhenhao Zhang, CSC 170 Project 3</title>
    <link rel="stylesheet" href="css/style.css">    
</head>

<body class="homepage">
  
<div class="container">

        <header class="site-header">
        <div class="banner-content">
            <img src="images/logo.jpg" alt="Website Logo" class="logo">
            <div class="text-group">
            <h1 class="site-title">Zhenhao Zhang </h1>
            <p class="site-tagline">CSC 170 - Web Design and Development</p>
            </div>
        </div>
    
    

        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php" title="Homepage">Home Page</a>
                </li>
                <li>
                    <a href="Star_Wars.php" title="Star Wars">Star Wars</a>
                </li>
                <li>
                    <a href="VisualWebArena.php" title="VisualWebArena">VisualWebArena</a>
                </li>
                <li>
                    <a href="Breaking_Bad.php" title="Breaking Bad">Breaking Bad</a>
                </li>
                <li>
                    <a href="Los_Angeles.php" title="Los Angeles">Los Angeles</a>
                </li>
            </ul>
        </nav>
    </header>



    <div class="slideshow">
        <img src="images/1.png" class="active" alt="slide 1">
        <img src="images/breakingbad_cast.jpg" alt="slide 2" >
        <img src="images/image_1.png" alt="slide 3" >
        <img src="images/LA image1.jpg"  alt="slide 4">
    </div>


    <section class="excerpts">

        <article>
            <h2>VisualWebArena</h2>
            <p>VisualWebArena is a platform for showcasing creative web design and development projects.</p>
            <p><a href="VisualWebArena.php">Read more...</a></p>
        </article>

        <article>
            <h2>Breaking Bad</a></h2>
            <p>Breaking Bad is an American neo-Western crime drama television series created and produced by Vince Gilligan.</p>
            <p><a href="Breaking_Bad.php">Read more...</a></p>
        </article>

        <article>
            <h2>Los Angeles</a></h2>
            <p>Los Angeles, often known by its initials L.A., is the largest city in California and the second-largest city in the United States. It is known for its Mediterranean climate, ethnic diversity, the entertainment industry, and sprawling metropolis.</p>
            <p><a href="Los_Angeles.php">Read more...</a></p>
        </article>

        <article>
            <h2>Star Wars</a></h2>
            <p>Star Wars is an epic space opera franchise created by George Lucas, which began with the eponymous 1977 film and quickly became a worldwide pop-culture phenomenon.</p>
            <p><a href="Star_Wars.php">Read more...</a></p>
        </article>

    </section>

    
    <footer>
        <p>&copy; Zhenhao Zhang - CSC 170 Web Design and Development</p>
    </footer>

</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/menu-highlighter.js"></script>

    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const images = $('.slideshow img');
            const totalImages = images.length;

            function showNextImage() {
                images.eq(currentIndex).removeClass('active');
                currentIndex = (currentIndex + 1) % totalImages;
                images.eq(currentIndex).addClass('active');
            }

            setInterval(showNextImage, 3000);
        });
    </script>

    <input type="hidden" name="myEmail" value="zzh133@u.rochester.edu">
    <input type="hidden" name="myAnimal" value="Mango">

</body>
</html>

