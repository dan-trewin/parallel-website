<!DOCTYPE html>
<html>

<head>
	
	<title>Parallel Games | Blog</title>
    
    
    <!-- META -->
    <meta name="description" content="This is the home page for Parallel Games">
    <meta name="keywords" content="parallel, games, video-games, block-ooo, nomad-quest">
        
    <meta name="viewport" content="width=device-width,initial-scale=1">
        
    
    
    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="parallel.css">
    
    
    <!-- FONTS -->
    <script src="//use.edgefonts.net/aladin;abril-fatface.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">

	
    <!-- SCRIPTS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
    <script src="parallel.js"></script>
	
    
</head>


<body> 
    
    <?php
        $page_id = 0;
        session_start();
        include 'DT_header.php';
    ?>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-1">
    </div>
           
    <div class="col-sm-10">
           
    <div id = "DT_container" class ="container-fluid">
    
        <div class = "blogPostContainer">
            <h1>The Parallel Blog</h1>
            <div style="margin:2%"></div>
            <div class = "row">
                <div class = "col-sm-6">
                    <button class = 'btn btn-primary DT_expand' data-toggle='collapse' data-target='#CLPSE_3'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1>Website Updates Nearly Complete</h1>
                </div>
                <div class = "col-sm-6">
                    <h1>May 16, 2017</h1>
                </div>
            </div>


            <p id = "CLPSE_3" class = "collapse">
                As of today, the website redesigns are nearly complete. The only thing still in the works is the ability for users to comment on blog posts. This will be added in the coming weeks, but to see a sneak preview you can check out the 'test comments' on the 'Bootstrap' blog post. I'll make sure to keep you all posted! In the mean time, you can take full advantage of the new parallel games highscores page. A leaderboard has been created for my most recent game, Wraith, and as of Wraith v1.1, the game will automatically post your scores directly to the leaderboard. I hope to add a leaderboard to Ridiculous History soon aswell. Unfortunately, that has hit a roadblock... because I seem to have lost the game's source code. Finally, make sure to create an account with us here at the Parallel Blog, and use an email you check frequently because we will start sending out newsletters in the near fututre! Peace out!

            
            
            </p>
        </div>
        
        <hr>
        
        <div class = "blogPostContainer">
            <div class = "row">
                <div class = "col-sm-6">
                    <button class = 'btn btn-primary DT_expand' data-toggle='collapse' data-target='#CLPSE_2'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1>Bootstrap</h1>
                </div>
                <div class = "col-sm-6">
                    <h1>April 18, 2017</h1>
                </div>
            </div>


            <div id = "CLPSE_2" class = "collapse">
                <p>Now, I'm trying to design my website to work well on mobile. The easiest way to achieve this is to implement bootstrap. Bootstrap is a very useful css framework for any web developer and I highly recommend it! I've been having tons of fun toying around with bootstrap and its many features.</p>
            
                
                <div style="margin-left:4%">
                    <div class = "row">
                        <div class = "col-sm-6">
                            <button class = 'btn btn-primary DT_collapse' data-toggle='collapse' data-target='#COMMENTS_2'><span class='glyphicon glyphicon-plus'></span></button>
                            <h1>Comments (2)</h1>
                        </div>
                        <div class = "col-sm-6">
                            <h1></h1>
                        </div>
                    </div>
                    
                    
                    
                    <div id = "COMMENTS_2" class = "collapse">
                        <div id = "formContainer">
                        <div class = "row">
                            <div class = "col-sm-2">
                                <h3>Dan Trewin (Test)</h3>
                            </div>
                            <div class = "col-sm-2">
                                <h3>May 5, 2017</h3>
                            </div>
                            <div class = "col-sm-8">
                                <p>Comments aren't supported just yet. This is only a test! Thanks for using parallel games!</p>
                            </div>
                        </div>
                        
                        <div class = "row">
                            <div class = "col-sm-2">
                                <h3>Dan Trewin (Test)</h3>
                            </div>
                            <div class = "col-sm-2">
                                <h3>May 5, 2017</h3>
                            </div>
                            <div class = "col-sm-8">
                                <p>Now, I'm trying to design my website to work well on mobile. The easiest way to achieve this is to implement bootstrap. Bootstrap is a very useful css framework for any web developer and I highly recommend it! I've been having tons of fun toying around with bootstrap and its many features.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <!--
                    <div id = "COMMENTS_2" class = "collapse">
                    <table class = "table">
                        <tr>
                            <td><h3>Dan Trewin</h3></td>
                            <td><h3>May 5, 2017</h3></td>
                            <td><p>Now, I'm trying to design my website to work well on mobile. The easiest way to achieve this is to implement bootstrap. Bootstrap is a very useful css framework for any web developer and I highly recommend it! I've been having tons of fun toying around with bootstrap and its many features.</p></td>
                        </tr>
                        <tr>
                            <td><h3>Dan Trewin</h3></td>
                            <td><h3>May 5, 2017</h3></td>
                            <td><p>This game is shit</p></td>
                        </tr>
                    </table>
                    </div>
                    -->
                    <!--
                    <div id = "COMMENTS_2" class = "collapse">
                        <div class = "row">
                            <div class = "col-sm-6">
                                <h3>Dan Trewin</h3>
                            </div>
                            <div class = "col-sm-6">
                                <h3>May 5, 2017</h3>
                            </div>
                        </div>
                        <p>this game is shit!</p>
                    </div>
                    -->
                </div>
            </div>
            
            
        </div>
        
        <hr>
        
        <div class = "blogPostContainer">
            <div class = "row">
                <div class = "col-sm-6">
                    <button class = 'btn btn-primary DT_expand' data-toggle='collapse' data-target='#CLPSE_1'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1>Website Redesigns</h1>
                </div>
                <div class = "col-sm-6">
                    <h1>March 2, 2017</h1>
                </div>
            </div>


            <p id = "CLPSE_1" class = "collapse">
                Hi guys! I have been redesigning this website to use a responsive design. It also uses jquery to power animations, databases to power the games page, and php/form validation to power the contact and login page.
                I've been making all these changes to satifsy my final project in my web design class at college. This is the abstract I showed my professor for the site upgrades:
                <br><br>
                Web Systems Final Project Description
                <br>
                My final project is improving and upgrading my existing Parallel Games website (www.parallelgames.net).  I created this website a few years back in order to promote the video games that I create in my spare time.  My knowledge of web systems was very limited at the time so the website is very basic and doesn't utilize any of the advanced things we learned about in this class.  I hope to use my knowledge from class to vastly improve the site!  
                The website currently only uses HTML and CSS.  However, most of the CSS is ugly and embedded directly into the HTML pages.  My first step will be to create a separate and complete CSS file to reduce HTML markup.  I also plan to add some interactivity to the site using JQuery (including but not limited to the collapsing and expanding of content).  Finally, I will also incorporate a database into the site.  Moderators of the site (like myself) will have usernames and passwords and will be able to log into the site to make changes to things like blog post content and the site background colors.

            
            
            </p>
        </div>
        
        <hr>
        
        <div class = "blogPostContainer">
            <div class = "row">
                <div class = "col-sm-6">
                    <button class = 'btn btn-primary DT_expand' data-toggle='collapse' data-target='#CLPSE_0'><span class='glyphicon glyphicon-plus'></span></button>
                    <h1>Hello World</h1>
                </div>
                <div class = "col-sm-6">
                    <h1>February 3, 2016</h1>
                </div>
            </div>


            <p id = "CLPSE_0" class = "collapse">
                My name is Dan Trewin, and I'm the founder and programmer of Parallel Games.  I decided to start this blog to help promote my various games and projects.  My long-term plan is to post something about every two weeks (okay, so maybe more like once a month:)  
                <br/><br/>While most of my posts might be about my current projects, I also plan to post about game design, game news, and games in general.  As you can tell, I am pretty enthusiastic about gaming!  
                <br/><br/>Sometimes, I'll write articles about the games I'm currently playing.  I invite you all to comment about my taste in games or about other great games.  I'd love to hear from the community!  Hopefully, we can all point each other towards some great games.
                <br/><br/>Considering that I'll be talking about a lot of video games, you may be asking yourself, 'What does this guy know about gaming?'  While not everyone will agree with my taste in games or opinions, I think I can safely say I have a large repertoire of gaming experiences to draw on.  Some of my all-time favorites include StarCraft, Mass Effect, Mario, Terraria, Dark Souls, Zelda, and Metroid.  
                <br/><br/>As far as video game genres go, I love turn-based strategy games like Civilization V, Fire Emblem, Banner Saga, and XCOM (so psyched for the recently released XCOM 2).  RPGs are another one of my favorite genres.  Final Fantasy, Knights of the Old Republic, Skyrim, Divinity, Witcher 3, Dragon Age, and Pillars of Eternity have all consumed countless hours of my life.  I'd like to also say that first person shooters are not my forte, but I do occasionally play some Call of Duty or Battlefront.  I'm getting a bit off topic here, but the point is I like gaming, and I'm passionate about gaming.  
           
                <br/>
		
                I'd like to finish this post by talking about why I love indie games.  Indie games are not truly a genre, per say, nonetheless I would consider them my favorite genre.  Indie developers are responsible for some of the most innovative games around.  Just think of Notch and how sensational Minecraft has become.  
                <br/><br/>Indie games are the best of what gaming has to offer.  The developers may not have the funding that EA, Blizzard, Bethesda, or any other triple A company may have.  They have something more important. . . they have passion.  Each person involved on an indie game has much more control over the finished product.  These indie developers pour their souls into their games.  Indie gaming has come so far in the past few years.  Oftentimes, a single person's vision for their game is what drives these games to greatness.  That is why I'm an indie developer, and why I love indie games!
                <br/><br/>I hope you enjoyed Parallel Game's first blog post.  Thanks for reading!
                <br/><br/>- Dan Trewin
                <br/><br/>P.S. The big indie gems that stick out in my mind are Towerfall, Super Meat Boy, Spelunky, Binding of Isaac, FTL, Desktop Dungeons, Speedrunners, and Rocket League.
            </p>
        </div>
        
        
        <div id = "DT_footer">
            &copy Parallel Games 2012-2017. All rights reserved.
        </div>
       
    </div>       
    </div>
    <div class="col-sm-1">       
    </div>
    </div> 
    </div>
       
     
		
        <!--
		<div id="disqus_thread" >
		<script>
			/**
			 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
			 */
			
			var disqus_config = function () {
				this.page.url = 'http://www.parallelgames.net/index.html';  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = '4433313'; // '4433313' Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			
			(function() {  // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				
				s.src = '//parallelgames.disqus.com/embed.js';
				
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        </div>
        -->
       

        
	
	
</body>

</html>
