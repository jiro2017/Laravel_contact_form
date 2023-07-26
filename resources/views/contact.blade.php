<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        //determines if the user has a set theme
        function detectColorScheme() {
            var theme="dark";    //default to dark
            
            if(window.matchMedia("(prefers-color-scheme: light)").matches) {
                //OS theme setting detected as dark
                var theme = "light";
            } else if(!window.matchMedia) {
                //matchMedia method not supported
                return false;
            } else if(localStorage.getItem("theme")){
                if(localStorage.getItem("theme") == "dark"){ //local storage is used to override OS theme settings
                    var theme = "dark";
                }
            }

            //dark theme preferred, set document with a `data-theme` attribute
            if (theme=="light") {
                document.documentElement.setAttribute("data-theme", "light");
            }
        }
        detectColorScheme();
    </script>
    <style>
        :root {
            --background : black;
            --light-background: rgb(23,23,23);
            --text: white;
            --button-border: purple;
            --button-background: purple;
            --button-text: white;
        }

        [data-theme = "light"] {
            --background: white;
            --light-background: rgba(78, 76, 78, 0.05);
            --text: purple;
            --button-background: white;
            --button-border: purple;
            --button-text: purple;
        }

        @font-face {
            font-family: "Lugrasimo";
            font-size:1.5rem;
            src: url("./Lugrasimo/Lugrasimo-Regular.ttf"), format('truetype');
        }
        
        @font-face {
            font-family: "Poppins-Bold";
            font-size:1.5rem;
            src: url("./Poppins/Poppins-Bold.ttf"), format('truetype');
        }

        body {
            background: var(--background);
            padding:10% 0;
            font-family: "Lugrasimo";
            font-weight: bold;
        }

        form{
            width: 50%;
            height:fit-content;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 5% 10%;
            /* margin-top:10px; */
            border: 2px solid var(--background);
            border-radius: 16px;
            background: var(--light-background);
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        div.message {
            position:absolute;
            top:5px;
            display:flex;
            justify-content: center;
            align-items: center;
            width:100%;
            z-index:10;
        }

        div.message p.text {
            text-align: center;
            color:white;
            background: var(--button-background);
            width:fit-content;
            padding:1rem;
            height:100%;
        }

        div.wrapper {
            width: 100%;
            margin-bottom:20px;
            position:relative;
        }
        
        div.wrapper h1 {
            font-family: "Poppins-Bold";
            text-align: center;
            color:var(--text);
            margin:0;
            padding:0;
        }

        div.wrapper label {
            color: var(--text);
            display:block;
            font-weight: bold;
        }

        div.wrapper input {
            width:100%;
            height:30px;
            margin:10px 30px;
            margin-left:0;
            color: var(--text);
            background: var(--background);
            outline:var(--text);
            border: 1px solid var(--background);
            border-radius: 16px;
            padding:5px;
            padding-left:10px;
            padding-right:10px;
            font-size:15px;
            font-family: "Lugrasimo";
        }

        div.wrapper textarea{
            width:100%;
            height:100px;
            color: var(--text);
            background: var(--background);
            outline:var(--background);
            border: 1px solid var(--background);
            border-radius: 16px;
            padding:10px;
            font-size:15px;
            font-family: "Lugrasimo";
        }

        div.wrapper p.error {
            color: red; /*var(--text);*/
            margin:0;
            margin-bottom: 1rem;
            font-size:.8rem;
        }

        div.wrapper input[type="submit"] {
            background: var(--button-background);
            color:var(--button-text);
            width: fit-content;
            height:fit-content;
            border-radius: 16px;
            padding:10px;
            font-weight: bold;
            font-size:larger;
            border:1px solid var(--button-border);
            position:absolute;
            right:0px;
            margin:0px;
            cursor: pointer;
            font-family: "Lugrasimo";
        }

        div.font {
            position: fixed;
            bottom: 30px;
            right : 10px;
            background: black; 
            width :50px; 
            height:50px;
            border-radius: 50%;
            border:1px solid white;
        }

        div.font.light {
            background:white;
            border:2px solid black;
        }

        div.font i {
            position: absolute;
            color:white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size:2.5rem;
            z-index: 2;
        }

        div.font.light i {
            color:black;
        }

        div.font:hover {
            background: rgb(39, 39, 39);
            cursor:pointer;
            transition: background .5s ease-in;
        }

        div.font.light i:hover {
            cursor: pointer;
            color:black;
        }
        
        div.font.light:hover {
            background: white;
            cursor: pointer;
            color:white;
        }

        /***** Light theme customisations ***/
        [data-theme = "light"] body {
                background: var(--light-background);
            }

        [data-theme = "light"] div.wrapper input[type="submit"]:hover {
                background: var(--button-text);
                color: var(--button-background);
                transition: background, color .4s ease-in-out;
            }

        [data-theme = "light"] form {
                background: var(--background);
            }

        [data-theme = "light"] div.wrapper input {
                background: var(--light-background);
                border: var(--light-background)
            }

        [data-theme = "light"] div.wrapper textarea {
                background: var(--light-background);
                border: var(--light-background);
        }
        /***** Light theme customisations ***/

        @media(max-width : 450px) {
            body {
                padding-top:0%;
            }
            form {
                width:70%;
                top:20%;
                transform: translate(-50%, -20%);
            }

            div.wrapper.button-wrapper {
                height: 30px;
            }
        }

        @media(max-width: 750px) {
            div.wrapper.button-wrapper {
                height: 40px;
            }
        }

        @media(max-width: 1000px) {
            div.wrapper.button-wrapper {
                height: 50px;
            }
        }
    </style>
</head>
<body class="">
    <x-show />
    {{-- <div class="message">
        <p class="text">Message sent successfully</p>
    </div> --}}
    <form action="/contact" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
        <div class="wrapper">
            <h1>Contact Us</h1>
        </div>
        <div class="wrapper">
            <label for="name">Enter your full name</label>
            <input 
                type="text"
                name="name" 
                id="name"
                value ="{{old('name')}}"
                placeholder="example: Tony Stark"
            />
            @error('name')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="wrapper">
            <label for="email">Enter your email</label>
            <input 
                type="email" 
                name="email" 
                id="email"
                value ="{{old('email')}}"
                placeholder="example: email@email.com"
            />
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="wrapper">
            <label for="message">Enter your message</label>
            <textarea 
                type="text" 
                name="message" 
                id="message"
                value ="{{old('message')}}"
                placeholder="Type your message here..."
            ></textarea>
            @error('message')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="wrapper button-wrapper">
            <input 
                type="submit" 
                name="submit" 
                value="Submit"
            />
        </div>
    </form>
    <div class="font" >
        <i class="fa-regular fa-moon" 
            onclick="switchTheme(this)" 
            onmouseenter="swapSolid(this, 'fa-regular')"
            onmouseleave="swapSolid(this, 'fa-solid')"
        >
        </i>
    </div>
    
    <script>
            //identify the toggle switch HTML element
            const toggleSwitch = document.querySelector("i.fa-moon");
            const fontWrapper = document.querySelector('div.font')
            const currentTheme = document.documentElement.getAttribute('data-theme');
            fontWrapper.classList.add(currentTheme);
            //function that changes the theme, and sets a localStorage variable to track the theme between page loads
            function switchTheme(element) {
                if (document.documentElement.getAttribute('data-theme')=='light') {
                    localStorage.setItem('theme', 'dark');
                    document.documentElement.setAttribute('data-theme', 'dark');
                    element.parentNode.innerHTML = `<i class='fa-solid fa-moon' onclick='switchTheme(this)' onmouseenter="swapSolid(this, 'fa-regular')" onmouseleave="swapSolid(this, 'fa-solid')"></i>`;
                    fontWrapper.classList.remove('light');
                    fontWrapper.classList.add('dark');
                } else {
                    localStorage.setItem('theme', 'light');
                    document.documentElement.setAttribute('data-theme', 'light');
                    element.parentNode.innerHTML = `<i class='fa-regular fa-moon' onclick='switchTheme(this)' onmouseenter="swapSolid(this, 'fa-regular')" onmouseleave="swapSolid(this, 'fa-solid')"></i>`;
                    fontWrapper.classList.remove('dark');
                    fontWrapper.classList.add('light');
                }    
            }

            function swapSolid(e, theme) {
                console.log('entered');
                if(theme=='fa-solid') {
                    e.classList.remove('fa-solid');
                    e.classList.add('fa-regular');
                } 
                if(theme=='fa-regular') {
                    e.classList.remove('fa-regular');
                    e.classList.add('fa-solid');
                } 
            }
    </script>
</body>
</html>