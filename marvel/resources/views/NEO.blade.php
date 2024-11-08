<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    async function NEO(){
        try{
            const data=await fetch('https://api.nasa.gov/neo/rest/v1/feed?api_key=HkORylQH8IB2lJQbzIU5fD6SJ3gGIamAtuPP6Q5M');
            const response=await data.json();
            console.log(response.near_earth_objects);
            getInfo(response.near_earth_objects);
        }
        catch(err){
            console.log('Errorrr Occured')
        }
        
    }
    function getInfo(nearEarthObjects){
        
        //    const date=new Date();
        //    console.log(date);
        //    console.log(date.getFullYear(),date.getMonth(),date.getDate())
           for (const dateKey in nearEarthObjects) {
        const objects = nearEarthObjects[dateKey];

        objects.forEach(item => {
            // Create the necessary HTML elements
            const c = document.createElement('h1');
            const r = document.createElement('h2');
            const dateElem = document.createElement('h3');
            const date1 = document.createElement('h3');
            // const image = document.createElement('img'); // You can uncomment this if you have image URLs

            // Fill the elements with NEO data
            c.textContent = `NEO ID: ${item.id}`;
            date1.textContent = `Reference ID: ${item.neo_reference_id}`;
            dateElem.textContent = `Name: ${item.name}`;
            r.textContent = `Magnitude: ${item.absolute_magnitude_h}`;

            // Optionally, if you have an image to display:
            // image.src = item.img_src; // Ensure you have img_src in your data

            // Append elements to the body (or another container)
            document.body.appendChild(c);
            document.body.appendChild(dateElem);
            document.body.appendChild(date1);
            document.body.appendChild(r);
            // document.body.appendChild(image); // Uncomment if you want to display an image
        });
    }
}
</script>
<body onload="NEO()">
    <h1 >NEOS</h1>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginated NEO Data</title>
    <style>
       /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #1e1e1e;  /* Dark background to mimic space theme */
    color: #f4f4f4;  /* Light text for readability */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    flex-direction: column;
}
h1 {
    font-size: 2.5em;
    color: #fff;
    margin: 20px 0; /* Spacing between title and image */
    font-weight: bold;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5);
}
/* Container for the NEO data */
#neo-container {
    width: 80%;
    max-width: 1000px;
    padding: 20px;
    margin-top: 20px;
    background-color: #2d2d2d; /* Dark container background */
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    overflow-y: auto;
}

/* Styling each individual NEO item */
.neo-item {
    background-color: #333;  /* Dark background for each item */
    border: 1px solid #444;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.neo-item h3, .neo-item h4 {
    margin: 5px 0;
}

.neo-item h3 {
    font-size: 1.2em;
    color: #66ccff;  /* Light blue color for ID */
}

.neo-item h4 {
    font-size: 1em;
    color: #fff;  /* White color for name and reference */
}

.neo-item img {
    margin-top: 15px;
    width: 200px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

/* Hover effect on the image */
.neo-item img:hover {
    transform: scale(1.05);
}

/* Pagination buttons container */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

/* Button styling */
.btn {
    padding: 12px 20px;
    cursor: pointer;
    background-color: #007bff;  /* Bright blue for buttons */
    color: white;
    border: none;
    border-radius: 5px;
    margin: 0 10px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

/* Hover effect on buttons */
.btn:hover {
    background-color: #0056b3;
}

/* Disabled button state */
.btn:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    #neo-container {
        width: 90%;
        padding: 15px;
    }

    .neo-item {
        padding: 15px;
    }

    .btn {
        font-size: 14px;
        padding: 10px 15px;
    }

    .neo-item img {
        width: 150px;  /* Smaller image size on mobile */
    }
}
/* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #121212;  /* Dark background to represent space */
    color: #e0e0e0;  /* Light text color for readability */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
}

/* Container for the NEO data */
#neo-container {
    width: 90%;
    max-width: 900px;
    padding: 20px;
    margin-top: 20px;
    background-color: #1f1f1f;  /* Slightly lighter dark background */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
    overflow-y: auto;
}

/* Individual NEO item card */
.neo-item {
    background-color: #2c2c2c;  /* Darker grey background for cards */
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #444;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
}

/* Text styling inside each NEO item */
.neo-item h3, .neo-item h4 {
    margin: 5px 0;
}

.neo-item h3 {
    color: #00bcd4;  /* Light blue color for the NEO ID */
    font-size: 1.2em;
}

.neo-item h4 {
    color: #ffffff;  /* White text for names and references */
    font-size: 1em;
}

.neo-item img {
    margin-top: 10px;
    width: 100%;
    max-width: 250px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
}

/* Pagination container */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

/* Pagination button styling */
.btn {
    padding: 10px 20px;
    margin: 0 5px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Button hover effect */
.btn:hover {
    background-color: #0056b3;
}

/* Disabled button styling */
.btn:disabled {
    background-color: #888;
    cursor: not-allowed;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    #neo-container {
        width: 95%;
    }

    .neo-item img {
        width: 100%;
        max-width: 200px;
    }

    .btn {
        font-size: 14px;
        padding: 8px 16px;
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
</head>
<body>
<div class="top-buttons">
    <button id="home-btn" onclick="window.location.href='/Home';">Home</button>
    <button id="logout-btn" onclick="window.location.href='/login';">Logout</button>
</div>
<h1>NEOS(NEAR EARTH OBJECTS)</h1>
<div id="neo-container"></div>
 
<div class="pagination">
    <button class="btn" id="prev-btn" disabled>Previous</button>
    <button class="btn" id="next-btn">Next</button>
</div>

<script>
    const nearEarthObjects = {
        '2024-01-01': [
            {id: '12345', neo_reference_id: '67890', name: 'Asteroid A', absolute_magnitude_h: 25.5, img_src: 'https://example.com/asteroid-a.jpg'},
            {id: '54321', neo_reference_id: '98765', name: 'Asteroid B', absolute_magnitude_h: 28.3},
            {id: '11234', neo_reference_id: '22345', name: 'Asteroid C', absolute_magnitude_h: 23.7},
            {id: '67890', neo_reference_id: '12367', name: 'Asteroid D', absolute_magnitude_h: 26.1},
            {id: '98765', neo_reference_id: '54321', name: 'Asteroid E', absolute_magnitude_h: 27.2},
            {id: '54321', neo_reference_id: '11234', name: 'Asteroid F', absolute_magnitude_h: 24.9},
            {id: '65432', neo_reference_id: '76543', name: 'Asteroid G', absolute_magnitude_h: 28.0},
            {id: '12345', neo_reference_id: '23456', name: 'Asteroid H', absolute_magnitude_h: 30.1},
            {id: '34567', neo_reference_id: '45678', name: 'Asteroid I', absolute_magnitude_h: 26.5},
            {id: '78901', neo_reference_id: '89012', name: 'Asteroid J', absolute_magnitude_h: 25.0}
        ],
        '2024-01-02': [
            {id: '34567', neo_reference_id: '23456', name: 'Asteroid K', absolute_magnitude_h: 27.5},
            {id: '45678', neo_reference_id: '12345', name: 'Asteroid L', absolute_magnitude_h: 22.4},
            {id: '56789', neo_reference_id: '23456', name: 'Asteroid M', absolute_magnitude_h: 23.1},
            {id: '67890', neo_reference_id: '56789', name: 'Asteroid N', absolute_magnitude_h: 29.0},
            {id: '78901', neo_reference_id: '67890', name: 'Asteroid O', absolute_magnitude_h: 24.8}
        ]
    };

    // Container to display the NEO data
    const container = document.getElementById('neo-container');

    // Pagination variables
    let currentPage = 1;
    const itemsPerPage = 5;
    let allItems = [];

    // Flatten the data into a single array for pagination
    for (const dateKey in nearEarthObjects) {
        if (nearEarthObjects.hasOwnProperty(dateKey)) {
            allItems = allItems.concat(nearEarthObjects[dateKey]);
        }
    }

    // Function to render data on the page
    function renderPage(page) {
        // Clear the current content
        container.innerHTML = '';

        // Calculate start and end indices for pagination
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = page * itemsPerPage;

        // Get the subset of items to display
        const itemsToShow = allItems.slice(startIndex, endIndex);

        // Create HTML elements for each item
        itemsToShow.forEach(item => {
            const neoDiv = document.createElement('div');
            neoDiv.classList.add('neo-item');

            const idElem = document.createElement('h3');
            idElem.textContent = `NEO ID: ${item.id}`;

            const nameElem = document.createElement('h4');
            nameElem.textContent = `Name: ${item.name}`;

            const referenceElem = document.createElement('h4');
            referenceElem.textContent = `Reference ID: ${item.neo_reference_id}`;

            const magnitudeElem = document.createElement('h4');
            magnitudeElem.textContent = `Magnitude: ${item.absolute_magnitude_h}`;

            // Optionally, add an image
            // if (item.img_src) {
            //     const imageElem = document.createElement('img');
            //     imageElem.src = item.img_src;
            //     imageElem.alt = `Image of ${item.name}`;
            //     imageElem.style.width = '200px';
            //     neoDiv.appendChild(imageElem);
            // }

            // Append the elements
            neoDiv.appendChild(idElem);
            neoDiv.appendChild(nameElem);
            neoDiv.appendChild(referenceElem);
            neoDiv.appendChild(magnitudeElem);
            container.appendChild(neoDiv);
        });

        // Update the button states based on the page
        document.getElementById('prev-btn').disabled = page === 1;
        document.getElementById('next-btn').disabled = page * itemsPerPage >= allItems.length;
    }

    // Function to handle the next button click
    document.getElementById('next-btn').addEventListener('click', () => {
        if (currentPage * itemsPerPage < allItems.length) {
            currentPage++;
            renderPage(currentPage);
        }
    });

    // Function to handle the previous button click
    document.getElementById('prev-btn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    });

    // Initial rendering of the first page
    renderPage(currentPage);

    function Home(){
        window.open('/');
    }
    function Logout(){
        window.open('/login');
    }
</script>

</body>
</html>
