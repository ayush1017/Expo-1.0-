<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* Dark theme styles */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #f0f0f0;
            font-size: 2rem;
            margin-top: 20px;
        }

        /* Articles for blog entries */
        article {
            background-color: #222;
            color: #fff;
            margin: 15px auto;
            padding: 15px;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Input field */
        input[type="text"] {
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
            padding: 10px;
            font-size: 1rem;
            width: 60%;
            max-width: 400px;
            margin-bottom: 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #888;
            outline: none;
            background-color: #444;
        }

        /* Button */
        button,input[type="file"] {
            background-color: #444;
            color: #fff;
            border: 1px solid #555;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover,input[type="file"]:hover {
            background-color: #555;
            border-color: #666;
        }
        .file-input-container {
        position: relative;
        display: inline-block;
    }

        .custom-file-button {
        background-color: #444;
        color: #fff;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid #555;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    /* Hover effect for custom button */
    .custom-file-button:hover {
        background-color: #555;
        border-color: #666;
    }

        /* Spacing and layout adjustments */
        .input-container {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        /* Styling for the submit button container */
        .button-container {
            margin-top: 20px;
        }

        /* Add some margin between articles */
        article + article {
            margin-top: 10px;
        }
        img {
            max-width: 30%;        /* Make the image responsive */
            height: auto;           /* Maintain aspect ratio */
            margin-top: 20px;       /* Add space above the image */
            border-radius: 8px;     /* Round corners for a smoother look */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Subtle shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
        }

        /* Hover effect */
        img:hover {
            transform: scale(1.05); /* Slight zoom-in effect on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7); /* Increase shadow intensity on hover */
        }
    </style>
   

<script>
    function loadBlogs(){
        var storeblogs=localStorage.getItem('blogs');
        if(storeblogs){
            var arr=JSON.parse(storeblogs);
            arr.forEach(element => {
                let art=document.createElement('article');
                art.textContent=element;
                document.body.appendChild(art);
            });
        }
    }
    // function loadIlogs(){
    //     var storeblogs=localStorage.getItem('image');
    //     if(storeblogs){
    //         var coll=JSON.parse(storeblogs);
    //         coll.forEach(element => {
    //             let art=document.createElement('img');
    //             art.src=element;
    //             document.body.appendChild(art);
    //         });
    //     }
    // }
   var arr=[];
//    var collect=[];
    function submit(){
        var c=document.getElementById('input');
        let art=document.createElement('article');
        var imge=document.getElementById('i');
        var im=document.createElement('img');
        // document.body.appendChild(art);
        arr.push(c.value);
        // arr.forEach(item=>{
        //    console.log(item);
        // })
        localStorage.setItem('blogs',JSON.stringify(arr));
        art.textContent=c.value;
    //    const file= imge.files[0];
    //    if(file){
    //     const reader= new FileReader();

    //     reader.onload=function(event){
    //         im.src=event.target.result;
    //       collect.push(event.target.result)
    //         localStorage.setItem('image',JSON.stringify(collect));

    //     }
    //     reader.readAsDataURL(file);
    //    }
        document.body.appendChild(art);
        // document.body.appendChild(im);
        c.value="";
    }
    window.onload=loadBlogs;
    // window.onload=loadIlogs;
</script>
<body>
    <h1>Space Notes</h1>
    <article>Write your notes here</article>
    <input type="text" placeholder="Hi There Write Here" name="blogs" id="input"/>
  
    <button onclick="submit()">Submit</button><br>
    <!-- <input type="file" accept=".jpg" id="i" name="image"/> -->
    
</body>
</html>