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
body {
    font-family: 'Arial', sans-serif;
    background: #1a1a1a; /* Dark space-like background */
    color: #f1f1f1; /* Light text for readability */
    text-align: center;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    height: 100vh;
    overflow-y: auto;
}

/* Styling the main heading */
#mars {
    font-size: 3em;
    font-weight: bold;
    color: #fff;
    margin: 20px;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5);
}

/* Heading Styling for Rover, Date, Camera Info */
h1, h2, h3 {
    margin: 10px 0;
    color: #fff;
    font-size: 1.5em;
    font-weight: normal;
}

/* Styling for the rover name */
h1 {
    font-size: 2em;
    color: #00ff99;
    text-transform: uppercase;
    margin-top: 20px;
}

/* Styling for the camera, launch date, and landing date */
h2, h3 {
    font-size: 1.1em;
    color: #a8c0d8; /* Light blue/grey for date and camera */
}

/* Styling the rover images */
img {
    width: 80%;
    max-width: 600px;
    height: auto;
    margin-top: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease;
}

/* Hover effect for the rover images */
img:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}

/* Adding space between rover details */
div.rover-photo {
    margin: 20px 0;
    padding: 15px;
    border: 1px solid #2d2d2d;
    border-radius: 10px;
    width: 90%;
    max-width: 800px;
    background-color: #222;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
}

/* Styling for the date information */
h3 {
    font-size: 1em;
    color: #d1d1d1; /* Subtle grey for the dates */
}

/* Make the page responsive on smaller screens */
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
    
    img {
        width: 95%; /* Make images smaller on mobile */
    }

    #mars {
        font-size: 2em; /* Adjust heading size */
    }

    h1, h2, h3 {
        font-size: 1.2em; /* Adjust text size for better readability */
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
    async function Mars(){
        try{
            const data=await fetch('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&api_key=HkORylQH8IB2lJQbzIU5fD6SJ3gGIamAtuPP6Q5M');
            const response=await data.json();
            console.log(response);
            getInfo(response.photos);
        }
        catch(err){
            console.log('Errorrr Occured')
        }
        
    }
    function getInfo(photos){
        
           
           photos.map((item,index)=>{
               console.log(item.camera.name);
               
               var c=document.createElement('h1');
              var r=document.createElement('h2');
               var date=document.createElement('h3');
               var date1=document.createElement('h3');
               var image=document.createElement('img')
               c.textContent=item.rover.name;
               date1.textContent=item.rover.landing_date;
               date.textContent=item.rover.launch_date;
               r.textContent=item.camera.name;
               image.src=item.img_src;
               document.body.appendChild(c);
               document.body.appendChild(date);
               document.body.appendChild(date1);
               document.body.appendChild(r);
               document.body.appendChild(image);
           })

       }
</script>
<body onload="Mars()">
<div class="top-buttons">
    <button id="home-btn" onclick="window.location.href='/Home';">Home</button>
    <button id="logout-btn" onclick="window.location.href='/';">Logout</button>
</div>
    <h1 id="mars">
        Mars
    </h1>
</body>
</html>