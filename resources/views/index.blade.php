<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-size: 10px;
  font-family: 'Montserrat', sans-serif;
}

body {
  background: #f0f0f0;
}

.container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

#one {
  background-image: url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1350&q=80');
  background-size: cover;
  background-position: center;
  padding: 5rem;
}

.text-box h1 {
  font-size: 4rem;
  color: black;
  margin: 1rem 0;
  position: relative;
  display: inline-block;
  animation: text_reveal 0.5s ease forwards;
  animation-delay: 1s;
}

.text-box h1 span {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0%;
  background: white;
  animation: text_reveal_box 1s ease forwards;
}

.text-box h1:nth-child(1) span {
  animation-delay: 1s;
}
.text-box h1:nth-child(2) span {
  animation-delay: 2s;
}
.text-box h1:nth-child(3) span {
  animation-delay: 3s;
}

.cta {
  display: inline-block;
  padding: 10px 30px;
  font-size: 2rem;
  margin-top: 20px;
  color: black;
  border: 2px solid black;
  text-transform: uppercase;
  transition: all 0.3s ease;
  background-color: transparent;
}

.cta:hover {
  background-color: black;
  color: white;
}

@keyframes text_reveal_box {
  0% {
    width: 0;
    left: 0;
  }
  50% {
    width: 100%;
    left: 0;
  }
  100% {
    width: 0;
    left: 100%;
  }
}

@keyframes text_reveal {
  100% {
    color: black;
  }
}

header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background: rgba(255, 255, 255, 0.9);
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  z-index: 1000;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: auto;
  padding: 1.5rem 2rem;
}

.logo {
  font-size: 2.5rem;
  font-weight: bold;
  color: black;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 2rem;
}

.nav-links li a {
  text-decoration: none;
  font-size: 1.6rem;
  color: black;
  transition: color 0.3s;
}

.nav-links li a:hover {
  color: #555;
}


#one {
  padding-top: 80px;
}

  </style>
</head>
<body>
<header>
  <nav class="navbar">
    <div class="logo">MyPortfolio</div>
    <ul class="nav-links">
      <li><a href="#one">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

  <section id="one">
    <div class="container">
      <div class="text-box">
        <h1>Hello, My Name Is .</h1>
        <h1>Siam Akter Mim <span></span></h1>
        <h1>Welcome to My Portfolio <span></span></h1>
        <a href="#about" class="cta">Know More</a>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>
</html>