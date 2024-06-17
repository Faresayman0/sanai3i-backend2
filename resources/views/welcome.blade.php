<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BDIWY API</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom styles for additional styling */
    #hero {
      background-image: url('background.jpg');
      background-size: cover;
      color: #fff;
      padding: 100px 0;
      text-align: center;
    }

    #hero h1 {
      font-size: 3.5rem;
      margin-bottom: 20px;
    }

    #hero p {
      font-size: 1.5rem;
      margin-bottom: 40px;
    }

    .feature {
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .feature h3 {
      color: #007bff;
    }

    #get-started {
      background-color: #f8f9fa;
      padding: 100px 0;
    }

    #get-started h2 {
      text-align: center;
      margin-bottom: 50px;
    }

    #contact {
      padding: 100px 0;
    }

    #contact h2 {
      text-align: center;
      margin-bottom: 50px;
    }

    footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">BDIWY API</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#get-started">Get Started</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h1 class="display-4">Empower Your Applications with BDIWY API</h1>
          <p class="lead">Build smarter, faster, and more securely with our powerful API.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features">
    <div class="container">
      <h2 class="text-center mb-5">Key Features</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="feature text-center">
            <h3>Scalability</h3>
            <p>Easily scale your applications with our robust API infrastructure.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature text-center">
            <h3>Flexibility</h3>
            <p>Customize and tailor functionalities to fit your specific needs.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature text-center">
            <h3>Security</h3>
            <p>Advanced security protocols to protect your data and transactions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Get Started Section -->
  <section id="get-started">
    <div class="container">
      <h2 class="text-center mb-5">Get Started</h2>
      <div class="row">
        <div class="col-md-6">
          <h3>Sign Up for BDIWY API</h3>
          <p>Join thousands of developers using our API to enhance their applications.</p>
          <a href="#" class="btn btn-primary btn-lg">Sign Up Now</a>
        </div>
        <div class="col-md-6">
          <h3>Explore Documentation</h3>
          <p>Dive into our detailed API documentation to start integrating.</p>
          <a href="#" class="btn btn-outline-primary btn-lg">Read Documentation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 BDIWY API. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
