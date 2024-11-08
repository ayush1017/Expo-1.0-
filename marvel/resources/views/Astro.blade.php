<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* General Body Styles for Dark Theme */
      /* General Body Styles for Dark Theme */
body {
    background-color: #121212;  /* Dark background color */
    color: #e0e0e0;             /* Light text color */
    font-family: Arial, sans-serif; /* Default font */
    margin: 0;
    padding: 0;
    text-align: center;         /* Centering content */
}

/* Styling the image carousel */
#im {
    max-width: 100%;              /* Make sure the image scales well */
    max-height: 80vh;             /* Limit height to 80% of the viewport height */
    margin-top: 50px;             /* Add some spacing from the top */
    border-radius: 10px;          /* Rounded corners for the image */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);  /* Subtle shadow effect */
    transition: transform 0.5s ease-in-out;   /* Smooth zoom effect on hover */
}

/* Hover effect for the image carousel */
#im:hover {
    transform: scale(1.05);       /* Slight zoom-in effect when hovering over the image */
}

/* Title Styling */
h1 {
    color: #ffffff;              /* Pure white color for the title */
    font-size: 36px;
    margin-top: 20px;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8); /* Subtle text shadow for emphasis */
}

/* Optional: Add a small caption or description below the carousel */
#art {
    font-size: 18px;
    color: #b0b0b0;              /* Light grey color for captions */
    margin-top: 20px;
    line-height: 1.6;            /* Increase line height for better readability */
    max-width: 80%;              /* Limit width for text to avoid long line length */
    margin-left: auto;
    margin-right: auto;
}

/* Style for links or buttons */
a {
    color: #ff9800;              /* Orange color for links */
    text-decoration: none;       /* Remove underline */
    font-weight: bold;
    transition: color 0.3s ease-in-out; /* Smooth color change on hover */
}

a:hover {
    text-decoration: underline;  /* Underline links on hover */
    color: #ffb74d;              /* Slightly lighter orange when hovered */
}

/* Add a subtle fade-in effect for the whole body */
body {
    animation: fadeIn 1.5s ease-in-out;
}

/* Keyframes for fade-in effect */
@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    h1 {
        font-size: 28px; /* Slightly smaller title for mobile */
    }

    #art {
        font-size: 16px; /* Slightly smaller text for mobile */
    }

    #im {
        max-height: 60vh; /* Reduce image height on small screens */
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
    var res;
   
    function scroll(){
        const image=[ "https://imgs.search.brave.com/Xt62VMXTj2V8kNbuikUsZBXV6HPkyJk6YDj4dvVNcHI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL00v/TVY1Qk9USXhOemsw/T1RNdFptWXdZaTAw/WmpBNExXRmtaVEl0/Tm1SaU4ySTBaalZt/TXpZNVhrRXlYa0Zx/Y0djQC5qcGc","https://img.etimg.com/photo/msid-103026318,imgsize-67678/RakeshSharma.jpg",'https://qph.cf2.quoracdn.net/main-qimg-da332bc32e8e4e26ca89a3b63cffb756',
        "https://cdn.houstonpublicmedia.org/wp-content/uploads/2020/04/10150007/Astronaut-Jim-Lovell-Apollo-13-1000x709.jpg",
        "https://cdn.mos.cms.futurecdn.net/3JuCv4uhvP7gi479VzMcyE.jpg",
        "https://www.rmg.co.uk/sites/default/files/styles/max_width_1440/public/apollo%2011%20crew%20original.jpg?itok=ry1uIsHB"
    ];
    const info=[{
        name:"Kalpana Chawla",
        about:"Kalpana Chawla: The first woman of Indian origin in space, she was a NASA astronaut who flew on two space missions. Tragically, she lost her life in the Space Shuttle Columbia disaster in 2003."
    },{
        name:"Sqn Ldr Rakesh Sharma",
        about:"Sqn Ldr Rakesh Sharma: The first Indian citizen to travel in space. He flew aboard the Soviet spacecraft Soyuz T-11 in 1984."
    },{
        name:"Wing Commander Raveesh Malhotra",
        about:"Wing Commander Raveesh Malhotra: An Indian Air Force officer, but not widely known for spaceflight. There might be some confusion or a typo, as this individual is not a widely recognized astronaut."
    },{
        name:"Commander Jim Lovel",
        about:"Commander Jim Lovell: An American astronaut famous for his role as the commander of the Apollo 13 mission, which was aborted after an oxygen tank explosion, but his crew's safe return is considered one of the greatest achievements in space history."
    },{
        name:"Commander Eugene Cernan ",
        about:"Eugene Andrew Cernan was an American astronaut, naval aviator, electrical engineer, aeronautical engineer, and fighter pilot. During the Apollo 17 mission, Cernan became the 11th human being to walk on the Moon."
    },{
        name:"Apollo 11 Crew('Neil ArmStrong(L),Michael Collins(Center),Buzz Aldrin(R)')",
        about:"Apollo 11 Crew: Refers to the historic Apollo 11 mission, which was the first to land humans on the Moon. The crew consisted Neil Armstrong (L): The first human to set foot on the Moon.Michael Collins (Center): The command module pilot who remained in lunar orbit.Buzz Aldrin (R): The second human to walk on the Moon, shortly after Armstrong."
    }]


      var index=0;
     var carousel= document.getElementById('im');
     var head=document.getElementById('head');
     var art=document.getElementById('art');
    //  info.forEach(item=>{
    //        console.log(item.name);
    //     })
    start();
   
       function start(){
        if(index<image.length){
       res= setInterval(()=>{
        carousel.src=image[index];
         head.innerHTML=info[index].name;
         art.innerHTML=info[index].about;

        index++;
        if(index==image.length){
            index=0;
        }
      },2000)

     }

       }
     
     function clear() {
        clearInterval(res);       
     }
     function stopSlider(){
        clearInterval(res);
      }
     

     carousel.addEventListener('mouseover', stopSlider);  // Pause the slider when mouse is over the image
carousel.addEventListener('mouseout', start);  // Restart the slider when mouse leaves the image
    
    
     }
     
   
      
</script>
<body onload="scroll()">
<div class="top-buttons">
    <button id="home-btn" onclick="window.location.href='/Home';">Home</button>
    <button id="logout-btn" onclick="window.location.href='/';">Logout</button>
</div>
    <img src=""  id="im" src=""/>
    <h1 id="head"></h1>
    <article id="art"></article>
    <!-- <img src="https://qph.cf2.quoracdn.net/main-qimg-da332bc32e8e4e26ca89a3b63cffb756"/>
    <img src="https://cdn.houstonpublicmedia.org/wp-content/uploads/2020/04/10150007/Astronaut-Jim-Lovell-Apollo-13-1000x709.jpg"/>
    <img src="https://cdn.mos.cms.futurecdn.net/3JuCv4uhvP7gi479VzMcyE.jpg"/>
    <img src="https://www.rmg.co.uk/sites/default/files/styles/max_width_1440/public/apollo%2011%20crew%20original.jpg?itok=ry1uIsHB"/> -->
    
</body>
</body>
</html>