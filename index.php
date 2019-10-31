<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Infinite Scroll</title>
</head>
<body>	
    <section class="page-wrap">

	
        <header> <!-- Defining the header section of the page with the appropriate tag -->
            
            <div>
                <h1>Demo Page</h1>
                <p>A subhead goes here.</p>
            </div>

            <nav> <!-- The nav link semantically marks your main site navigation -->
                <ul>
                    <li><a href="#block1">Nav 1</a></li>
                    <li><a href="#block2">Nav 2</a></li>
                    <li><a href="#block3">Nav 3</a></li>
                </ul>
            </nav>


        </header>

  
        <article id="block1" class="module-block">
            <h2>Infinite Scroll</h2>
            <ul id='infinite-list'>
                </ul> 
        </article>
        

       
        <section id="block2" class="module-block">

            <h2>2nd Level Heading</h2>
            
               <article class="post">
                
                <h3>
                    <a href="#">
                        Article Title
                        <img src="http://placehold.it/200" alt="" />
                    </a>
                </h3>
                
                <strong class="date">1.01.2012</strong>
                
                <p>Cupcake ipsum dolor. Sit amet sweet roll icing cupcake ice cream sugar plum. Danish I love biscuit carrot cake tart jelly beans candy. Chupa chups chocolate bar I love pie ice cream brownie gummi bears. Soufflé cookie I love gummi bears faworki sweet sweet tart croissant. Muffin bonbon danish wafer candy macaroon I love dessert. Muffin pudding danish chupa chups. Halvah lollipop applicake icing. Brownie I love cupcake. I love gingerbread cheesecake gummi bears powder candy toffee icing. Pastry jelly beans candy canes dragée croissant I love halvah jujubes. Cotton candy icing wafer caramels applicake. <a href="#">Read full article &rarr;</a></p>
            
            </article>

            <article class="post">						
                
                <h3>
                    <a href="#">
                        Article Title 
                        <img src="http://placehold.it/200" alt="" />
                    </a>
                </h3>
                
                <strong class="date">01.01.2012</strong>
                
                <p>Cupcake ipsum dolor. Sit amet sweet roll icing cupcake ice cream sugar plum. Danish I love biscuit carrot cake tart jelly beans candy. Chupa chups chocolate bar I love pie ice cream brownie gummi bears. Soufflé cookie I love gummi bears faworki sweet sweet tart croissant. Muffin bonbon danish wafer candy macaroon I love dessert. Muffin pudding danish chupa chups. Halvah lollipop applicake icing. Brownie I love cupcake. I love gingerbread cheesecake gummi bears powder candy toffee icing. Pastry jelly beans candy canes dragée croissant I love halvah jujubes. Cotton candy icing wafer caramels applicake.. <a href="#">Read full article &rarr;</a></p>
            
            </article>
        
        </section>

    </section><!-- page-wrap -->
        





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="app.js"></script>

</body>
</html>


