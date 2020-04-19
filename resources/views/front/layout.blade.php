<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDA - @yield('pagetitle')</title>
    <link rel="stylesheet" href="/inc/css/bootstrap.css">
    <script src="/inc/js/jquery.js"></script>
    <script src="/inc/js/bootstrap.js"></script>
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img src="/storage/images/logo.png" style="width:100px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="/customers">Customers List</a>
          <a class="dropdown-item"  href="/customers/create">New Customer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"  href="/customers/search_by_phone">Search By Phone</a>
          <a class="dropdown-item"  href="/customers/search_by_name">Search By Name</a>
          <a class="dropdown-item"  href="/customers/search_by_email">Search By Email</a>
          <a class="dropdown-item"  href="/customers/search_by_address">Search By Address</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"  href="/customers/search_by_fields">Search By Field</a>
          <a class="dropdown-item"  href="/customers/dynamic_search">Dynamic Search</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/customers/deleted">Deleted Customers</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="/cities">Cities List</a>
          <a class="dropdown-item"  href="/cities/create">Create New City</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"  href="/cities/dynamic_search">Dynamic Search</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/cities/deleted">Deleted Cities</a>
        </div>
      </li>


    </ul>
    </div>
</nav>
    <div class="container">
      @yield('pagecontent')
    </div>
  </body>
</html>
