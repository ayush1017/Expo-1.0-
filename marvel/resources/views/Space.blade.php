<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /* General Body Styling */
/* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background: #0d1b2a; /* Dark space-like background */
    color: #e0e0e0; /* Light text for readability */
    text-align: center;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Align items to the top */
    align-items: center;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

/* Heading Style for Title */
h1 {
    font-size: 2.5em;
    color: #fff;
    margin: 20px 0; /* Spacing between title and image */
    font-weight: bold;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5);
}

/* Styling for Date */
#date {
    font-size: 1.2em;
    color: #a8c0d8; /* Light blue text for date */
    margin-bottom: 20px; /* Spacing between date and image */
}

/* Image Styling */
#img {
    width: 80%;
    max-width: 500px;
    height: auto;
    margin: 20px 0;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease;
}

/* Image Hover Effect */
#img:hover {
    transform: scale(1.05); /* Slight zoom effect when hovered */
}

/* Article Styling (description below the image) */
#2 {
    font-size: 1.1em;
    color: #d4d4d4;
    margin: 20px;
    line-height: 1.8;
    padding: 0 20px;
    max-width: 800px;
    text-align: justify;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
}

/* Button Styling for Reloading or Refreshing Data */
button {
    background-color: #00ff99;
    color: #1b1b1b;
    border: none;
    padding: 10px 20px;
    font-size: 1.2em;
    cursor: pointer;
    border-radius: 8px;
    margin: 20px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

button:hover {
    background-color: #009973;
    transform: scale(1.05);
}

/* Make sure the layout is responsive on smaller screens */
@media (max-width: 768px) {
    #img {
        width: 95%; /* Make image smaller on mobile */
    }

    h1 {
        font-size: 2em; /* Adjust heading size for smaller screens */
    }

    #date {
        font-size: 1em; /* Adjust date text size for smaller screens */
    }

    #2 {
        font-size: 1em; /* Adjust description text size */
        padding: 0 10px;
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
    try{
      const data=await fetch('https://api.nasa.gov/planetary/apod?api_key=HkORylQH8IB2lJQbzIU5fD6SJ3gGIamAtuPP6Q5M')
    const response=await data.json();
    console.log(response);
    document.getElementById('1').innerHTML=response.title;
    document.getElementById('2').innerHTML=response.explanation;
    document.getElementById('img').src=response.hdurl;
    document.getElementById('date').innerHTML=response.date;
    }
    catch(error){
      console.log('Error fetching data');
    }

   
     
  }

</script>
<body onload="clic()">
<div class="top-buttons">
    <button id="home-btn" onclick="window.location.href='/Home';">Home</button>
    <button id="logout-btn" onclick="window.location.href='/';">Logout</button>
</div>
    <h1 id="1"> </h1>
    <h1 id="date"></h1>
    <img id="img" src=""/>
   <article id="2"></article>
</body>
</html>