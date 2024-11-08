<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<style>
/* General body styling */
body {
    background-color: #121212; /* Dark background */
    color: #e0e0e0;            /* Light text for contrast */
    font-family: 'Arial', sans-serif; /* Clean, sans-serif font */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full viewport height */
    flex-direction: column;
}

/* Animated Welcome Message */
.welcome-message {
    font-size: 2.5em;
    color: #ff5722; /* Accent color (orange) */
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(-30px);
    animation: fadeInUp 1.5s forwards; /* Animation */
}

.subtitle {
    font-size: 1.2em;
    color: #bbb; /* Light grey text for subtitle */
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInUp 1.5s forwards 0.5s; /* Animation with delay */
}

/* Fade and slide-up animation */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(-30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styling the form */
form {
    background-color: #1e1e1e; /* Slightly lighter dark background for the form */
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Subtle shadow */
    width: 100%;
    max-width: 400px; /* Limit form width */
    text-align: center;
}

/* Input field styling */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #333;
    border-radius: 6px;
    background-color: #333;
    color: #fff;
    font-size: 16px;
    box-sizing: border-box;
    transition: border 0.3s ease;
}

/* Input focus styling */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #ff5722; /* Focus border turns to accent color */
    outline: none;
}

/* Button styling */
button {
    background-color: #ff5722; /* Bright accent color for the button */
    color: #fff;
    padding: 12px 20px;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

/* Button hover effect */
button:hover {
    background-color: #e64a19; /* Darker shade when hovering */
}

/* Button active (clicked) state */
button:active {
    background-color: #d84315; /* Even darker shade for click */
}


</style>
<body>
    <h1>Sign Up to Space Expo</h1>
    <form method="POST" action="{{ route('signup') }}">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" required /><br><br>
        <input type="email" name="email" placeholder="Enter your email" required /><br><br>
        <input type="password" name="password" placeholder="Enter your password" required /><br><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>

