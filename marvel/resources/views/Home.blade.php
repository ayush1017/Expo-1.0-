<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <style>
    /* General page styling */
/* General page styling */
body {
    font-family: 'Arial', sans-serif;
    background: radial-gradient(circle, rgba(10,10,30,1) 0%, rgba(0,0,0,1) 100%); /* Dark space-like background */
    color: #e0e0e0; /* Light text for contrast */
    text-align: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
}

/* Adding stars background effect */
body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://www.transparenttextures.com/patterns/starfield.png') repeat;
    opacity: 0.5; /* Star background overlay */
    pointer-events: none;
}

/* Card container: flexbox layout */
.card-container {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    width: 100%;
    max-width: 900px;
    flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
    padding: 20px;
    z-index: 10;
}

/* Styling each individual card */
.card {
    background: rgba(0, 0, 0, 0.7); /* Slightly transparent dark card for space feel */
    border-radius: 15px;
    padding: 20px;
    width: 250px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.7), 0 0 30px rgba(255, 87, 34, 0.5); /* Glowing shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transform and shadow on hover */
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

/* Glowing text effect for headings */
.card h2 {
    color: #ff5722; /* Bright accent color for headings */
    font-size: 1.6em;
    margin-bottom: 10px;
    text-shadow: 0 0 10px #ff5722, 0 0 20px #ff5722; /* Glowing effect */
    font-family: 'Orbitron', sans-serif; /* Futuristic font */
}

/* Text styling inside the cards */
.card p {
    color: #bbb; /* Light grey text */
    font-size: 1.1em;
    line-height: 1.6;
    font-family: 'Roboto', sans-serif; /* Smooth and modern font */
}

/* Hover effect for cards */
.card:hover {
    transform: translateY(-10px); /* Slight lift effect */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7), 0 0 40px rgba(255, 87, 34, 0.8); /* Intensified glowing effect */
}

/* Stars in background */
.card::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120%;
    height: 120%;
    background: url('https://www.transparenttextures.com/patterns/starfield.png') repeat;
    opacity: 0.3;
    transform: translate(-50%, -50%);
    z-index: -1;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 80%; /* Cards take up more width on smaller screens */
        margin-bottom: 20px;
    }
}

    /* Home and Logout Buttons */
    .top-buttons {
                position: fixed;
                top: 10px;
                right: 10px;
                z-index: 1000;
            }

            .top-buttons button {
                padding: 10px 20px;
                margin: 0 5px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 5px;
                font-size: 14px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .top-buttons button:hover {
                background-color: #555;
            }

            .top-buttons button:focus {
                outline: none;
            }



  </style>
<script>
  
  async function  clic(){
    window.open('/Space');
     
  }
  function Mars(){
      try{
        window.open('/Mars');
      }catch(err){
        console.error(err.message);
      }
    }
    function NEO(){
      try{
        window.open('/NEO');
      }catch(err){
        console.error(err.message);
      }
    }
    function live(){
       window.open('https://www.youtube.com/watch?v=QviXe8xvA50');
    }
    function Astro(){
        window.open('/Astronauts');
    }
  //Mars()
  // https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&api_key=DEMO_KEY
</script>
<!-- HkORylQH8IB2lJQbzIU5fD6SJ3gGIamAtuPP6Q5M -->
<div class="card-container">
<div class="top-buttons">
    <button id="home-btn" onclick="window.location.href='/Home';">Home</button>
    <button id="logout-btn" onclick="window.location.href='/';">Logout</button>
</div>
        <!-- Card 1 -->
        <div class="card" onclick="clic()">
            <h2>Space Of The Day</h2>
            <p>Space is the final frontier where we seek to understand the universe beyond our world.</p>
        </div>

        <!-- Card 2 -->
        <div class="card" onclick="Mars()">
            <h2>Journey to Mars</h2>
            <p>Our mission to Mars will help us learn about the possibility of life on other planets.</p>
        </div>

        <!-- Card 3 -->
        <div class="card" onclick="NEO()">
            <h2>Discover NEOs</h2>
            <p>Near-Earth Objects are asteroids and comets that come close to our planet, and studying them is vital.</p>
        </div>
        <div class="card" onclick="Astro()">
            <h2>Unsung Astronauts</h2>
            <p>Explore to get to know our unsung Astronauts who left no stone unturned and Braved The Space with Glory.</p>
        </div>
        <div class="card" onclick="live()">
            <h2>Space Live</h2>
            <p>Catch the live stream of Space</p>
        </div>
    </div>
    
</body>
</html>
