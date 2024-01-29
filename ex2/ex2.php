<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<? include 'ex2-header.php' ?>
<body>
    <!-- Header -->
    <!-- https://getbootstrap.com/docs/5.0/examples/headers -->
	<!-- you have comments for everything here (courtesy of me) so you can take it as inspiration -->
    <div class="row filler-row-100">
        <!-- row for space -->
    </div>
    <div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                    <span>
                    <h1>Welcome to the Jazz Festival website</h1>
                    <p>Welcome to the world of jazz, where every note is a story, and every beat is a journey.<br>
                        Explore our lineup of diverse talents, from traditional melodies to contemporary fusions.<br>
                        Plan your musical adventure with our schedule and uncover the stories behind the stage with<br>
                        interactive features. This festival is more than an event; it's a celebration of diversity<br>
                        and innovation. Welcome to the Crescent City Jazz Jam - where the beat knows no limits.<br>
                        Enjoy the show!</p>
                    </span>
		        </div>
                <div class="col">
                    <img src="imgs/Musician.jpeg" alt="Musician" class="img-fluid">
                </div>
            </div>
        </div>
	</div>
    <!-- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<? include 'ex2-footer.php' ?>
</html>


<!-- if you want h1 just put it as h2 and add class h1 -> <h2 class="h1"></h2 if you want rows for space use class .filler-row-10/25/50/100/150 (see style.css) in addition with bootsrap's row-->