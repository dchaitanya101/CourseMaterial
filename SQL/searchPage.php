<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <form action="searchPage.php" method="get">
            
        <div class="form-group">
        
          <input type="text" name="searchQuery" class="form-control" placeholder="Search" style="margin:1rem;width:50%">

          <input type="submit" name="search" class="btn btn-success" style="margin:1rem;">

        </div>
      </form>

    <div style="margin:1rem;">
      <?php
        include "conn.php";
        if ($conn->connect_error) {
          echo "Connection Error:". $conn->connect_error;
        }else {
          echo "Connection Success";
          if (isset($_GET['search'])) {
            $searchQuery = $_GET['searchQuery'];
            echo "SerachResult: ". $searchQuery;
            $query = "select * from users where name like '%$searchQuery%'";
            $searchResult = mysqli_query($conn,$query);
           
            
            if (mysqli_num_rows($searchResult) == 0) {
              echo "Empty Set";
            } else {
              
      ?>
    
      <table class="table table-striped table-responsive">
          <thead class="thead-inverse">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>City</th>
            </tr>
            </thead>
            <tbody>
              
              <?php
                  while ( $row = mysqli_fetch_assoc($searchResult)) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['city']}</td></tr>\n";
                  }
                        
                          }
                          
                        }
                      }
              ?>
              
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>