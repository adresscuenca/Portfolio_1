<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jhon Adrian M. Obrador | Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background: #f9f9f9;
      color: #2e2e2e;
    }

    header {
      background: linear-gradient(to right, #ff6b6b, #ffe66d);
      color: white;
      text-align: center;
      padding: 4rem 2rem;
    }

    .profile-pic {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      border: 4px solid white;
      object-fit: cover;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      margin-bottom: 1rem;
    }

    header h1 {
      font-size: 2.8rem;
    }

    .typing {
      font-size: 1.3rem;
      margin-top: 0.5rem;
      height: 30px;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 2rem;
      background: white;
      padding: 1rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    nav a {
      text-decoration: none;
      color: #ff6b6b;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #1a535c;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      padding: 2rem;
    }

    .section {
      margin: 3rem 0;
    }

    .section h2 {
      font-size: 2rem;
      color: #ff6b6b;
      margin-bottom: 1rem;
    }

    .section p {
      font-size: 1.1rem;
      color: #555;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-top: 1.5rem;
    }

    .card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 1.5rem;
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    footer {
      background: #1a535c;
      color: white;
      text-align: center;
      padding: 2rem;
      margin-top: 4rem;
    }

    a {
      color: #ff6b6b;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2rem;
      }

      .typing {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="piolo.jpg" alt="Profile Picture" class="profile-pic">
    <h1>Jhon Adrian M. Obrador</h1>
    <div class="typing" id="typing-text"></div>
  </header>

  <nav>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

  <div class="container">
    <section id="about" class="section">
      <h2>About Me</h2>
      <p>Hello! I'm Jhon Adrian, a frontend web developer passionate about creating digital magic. I turn complex problems into simple, beautiful, and intuitive designs using HTML, CSS, JavaScript, and love for detail.</p>
    </section>

    <section id="projects" class="section">
      <h2>Projects</h2>
      <div class="projects">
        <div class="card">
          <h3>Interactive Portfolio</h3>
          <p>A responsive and elegant portfolio built with pure HTML, CSS & JS showcasing projects.</p>
        </div>
        <div class="card">
          <h3>Task Manager App</h3>
          <p>Collaborative task app using vanilla JavaScript with dynamic UI and local storage.</p>
        </div>
        <div class="card">
          <h3>Landing Page</h3>
          <p>Conversion-optimized landing page built for a startup product idea.</p>
        </div>
      </div>
    </section>

    <section id="contact" class="section">
      <h2>Contact</h2>
      <p>Email: <a href="mailto:jhondrianobrador03@gmail.com">jhondrianobrador03@gmail.com</a></p>
      <p>Phone: <a href="tel:+639390987043">+639390987043</a></p>
    </section>
  </div>

  <footer>
    <p>&copy; 2025 Jhon Adrian M. Obrador. All rights reserved.</p>
  </footer>

  <!-- Typing Animation Script -->
  <script>
    const text = ["Web Designer", "HTML/CSS Developer", "Team Collaborator"];
    let i = 0, j = 0;
    let currentText = '';
    let isDeleting = false;
    const speed = 100;
    const element = document.getElementById("typing-text");

    function type() {
      if (i < text.length) {
        if (!isDeleting && j <= text[i].length) {
          currentText = text[i].substring(0, j++);
          element.innerHTML = currentText + '|';
        }

        if (isDeleting && j >= 0) {
          currentText = text[i].substring(0, j--);
          element.innerHTML = currentText + '|';
        }

        if (!isDeleting && j === text[i].length) {
          isDeleting = true;
          setTimeout(type, 1000);
          return;
        } else if (isDeleting && j === 0) {
          isDeleting = false;
          i = (i + 1) % text.length;
        }
      }
      setTimeout(type, isDeleting ? speed / 2 : speed);
    }

    document.addEventListener("DOMContentLoaded", type);
  </script>

</body>
</html>
