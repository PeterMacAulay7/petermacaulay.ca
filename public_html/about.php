<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="icon" type="" href="PMsignature.png">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
    background: rgba(55, 52, 56, 1);
    background-size: cover;        /* makes it fill the screen */
    color: rgb(194, 124, 207); /* change to any color */
  }
  a{
    color: rgb(194, 124, 207);
  }
  .container {
    display: flex;           /* puts children side by side */
    align-items: flex-start; /* align items at the top */
    gap: 20px;               /* space between list and image */
  }
  ul {
    list-style-type: disc;   /* normal bullet points */
    text-align: left;
  }
  .container img {
    max-width: 200px;        /* scale the image */
    border-radius: 40px;
    margin-left: auto;
  }
  main {
  /*max-width: 800px;*/
  margin: 0 auto; /* centers main content */
  }
  .intro {
    text-align: left;
  }

</style>
<body>
  <header>
    <?php include 'includes/header.php'; ?>
    <h1>
      About me!
    </h1>
  </header>

  <main>
    <?php include 'includes/left-sidebar.php'; ?>

    <div class = "main-content">
     <p>
        Hello, my name is Peter MacAulay. I'm currently a fourth year student at Mount Allison University. I'm majoring in Computer Science and minoring in Philosophy and Mathematics.
      </p>
      <div class ="intro">
      Some of my interests include:
      </div>
      <div class="container">
          <ul>
            <li>Improv Comedy</li>
            <li>Philosophy</li>
            <li>Programming</li>
            <li>Reading</li>
            <li>Writing</li>
            <li>Spending time with my girlfriend <a href="nadia/nadia.php">Nadia</a></li>
            <li>Spending time with friends</li>
            <li>and more!</li>
          </ul>
          <img src="about/PeterPhoto.webp" alt="PeterPhoto" style="width:200px;height:auto;">
      </div>
    <section>
      <p>
        I'm not really sure how to start this page, I just want to give a short-ish paragraph about who I am. All my life, I've loved making
        and understanding things. While I haven't always been the best at either of those, they're aspects of my lfie that have always
        been present. Learning, and learning how I learn, is something that seems to be at the center of those two aspect of my life. I have many
        interests (as stated above), and a lot of them are very different. These interests have allowed me to see the world in different ways. It 
        has given me the chance to see the world more clearly than I ever thought. I said above that learning seems to be at the center of making
        and understanding, but I think that those may be only a means to keep learning. Learning is what I think keeps you alive. The day you stop
        learning is that day you die. By virtue of making and seeking understanding, I am able to keep learning.
     </p>
     <p>
        This website is soemthing that I've wanted to make for a while, and it wasn't until I started to see some people that I'm interested
        in talking about a more human internet, where everyone makes their own websites, and shares with the world their creations, thoughts, and life 
        that I decided to actually do it. For a while I was stuck. I didn't know what mattered to me, and I didn't know what I needed to do.
        Once I started to find my values, and goals, I was able to start seeing a bit clearer. I was able to start seeking understanding again.
        I started learning again. But something was missing, I still couldn't create; I couldn't create much more than something on a whim in a rush of
        inspiration. This was good, but I needed more. I decided that I would continue seeking understanding, with the hope that creation would follow.
        Eventually, as I mentioned, I found something. I think that this website has the potnential to allow me to create, and share with the world, while
        simultaneously allowing me to have a reason to engage in other projects and interests. I may be optimistic, but this feels like the epicenter of 
        something that can allow me to engage in something larger than myself while also allowing me to grow as a person.
     </p>

     <p>
      Thanks for reading! I'll have more to come soon. :D -Oct 16, 2025
     </p>
    </section>
    </div>
    
    <?php include 'includes/right-sidebar.php'; ?>
  </main>

  <?php include 'includes/footer.php'; ?>

</body>
</html>
