<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Laravel App</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: #f8f9fa;
      color: #333;
    }

    /* Navbar */
    header {
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }

    nav .logo {
      font-size: 1.3rem;
      font-weight: bold;
      color: #007bff;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #007bff;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: white;
      text-align: center;
      padding: 4rem 2rem;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    .hero p {
      font-size: 1.1rem;
      margin: 0.5rem 0;
    }

    /* Content Cards */
    .content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 3rem 2rem;
      max-width: 1100px;
      margin: auto;
    }

    .card {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-top: 0;
      color: #007bff;
    }

    .btn {
      display: inline-block;
      background: #007bff;
      color: #fff;
      padding: 0.6rem 1.2rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      margin-top: 1rem;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #0056b3;
    }

    /* Alerts */
    .alert {
      padding: 1rem;
      border-radius: 8px;
      margin: 0.5rem 0;
      font-weight: 500;
    }

    .alert-info { background: #e8f4ff; color: #007bff; }
    .alert-success { background: #e9f9ec; color: #28a745; }
    .alert-warning { background: #fff8e5; color: #ffc107; }
    .alert-danger { background: #fdeaea; color: #dc3545; }

    /* Footer */
    footer {
      background: #343a40;
      color: #fff;
      text-align: center;
      padding: 1.5rem;
      margin-top: 2rem;
    }

    footer a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav>
      <div class="logo">My Laravel App</div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
        <h1 class="display-6 mb-2">{{$username}}</h1>
        <p class="lead mb-0">{{$last_login}}</p>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="card">
      <h3>About Our Application</h3>
      <p>
        Our application provides a clean and intuitive interface, allowing users to navigate easily
        and perform tasks efficiently. Built with Laravel, it offers flexibility and responsiveness.
      </p>
      <a href="#" class="btn">Explore More</a>
    </div>

    <div class="card">
      <h3>Alerts</h3>
      <div class="alert alert-info">Informational alert</div>
      <div class="alert alert-success">Success alert</div>
      <div class="alert alert-warning">Warning alert</div>
      <div class="alert alert-danger">Danger alert</div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 My Laravel App | Built with ❤️ using Laravel</p>
  </footer>

</body>
</html>
