<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icons/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Noto+Sans:wght@300&family=Potta+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/Search.css">
    <link rel="stylesheet" href="tools/footer.css">
    <title>Document</title>
</head>
<body>
    <div class="Main_nav">
        <div class="container">
        <a href="index01.php" class="logo"><img src="icons/logo.png" alt="" srcset=""></a>
    </div>
</div>
    <section class="bsb-service-6 py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7">
              <h3 class="fs-6 mb-2 text-secondary text-center text-uppercase">Store</h3>
              <h2 class="display-5 mb-4 mb-md-5 text-center">We provide the best possible ide's and software</h2>
              <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
          </div>
        </div>
        <!--  -->
        <header>
        <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">

          <div class="col-lg-12">
            <div class="form">
              <button class="btn btn-secondary fa fa-search" onclick="search()"></button>
              <input type="text" id="searchInput" class="form-control form-input" placeholder="Search Product name...">
              
            </div>
            <div class="" id="searchResultsContainer" >
              <div class="container">
                    <div  id="resultsContainer"></div>
                    </div>
 
              </div>
          </div>
          </div>
          
        </div><br><br>
        
       </div>
       </header>
        <!--  -->
        <div class="container overflow-hidden">
          <div class="row gy-4 gy-md-0 gx-xxl-5">
            <div class="col-12 col-md-4 tg card-container" data-name="Aip++">
              <div class="card bg-transparent  rounded-0" >
                <div class="card-body">
                 <img src="icons/aip++-01.png" alt="lol" height="256px"width="256px" >
                  <h3 class="h2 mb-4">AIP ++</h3>
                  <p class="mb-4 text-secondary">Our AIP ++ can help businesses to automate tasks, improve quality control, and make better decisions. This can help businesses to save time and money, and improve their efficiency.</p>
                  <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                    TRY NOW
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 tg card-container">
              <div class="card bg-transparent  rounded-0">
                <div class="card-body">
                <img src="icons/pydora-01.png" alt="lol" height="256px"width="256px">
                  <h3 class="h2 mb-4">Pydora</h3>
                  <p class="mb-4 text-secondary">Our ide can help businesses to improve their efficiency, productivity, and profitability. For example, AI can be used to automate tasks, improve customer service, and make better business decisions.</p>
                  <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                    TRY NOW
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 tg card-container">
              <div class="card bg-transparent  rounded-0">
                <div class="card-body">
                <img src="icons/rustify-01.png" alt="lol" height="256px"width="256px">
                  <h3 class="h2 mb-4">Rustify</h3>
                  <p class="mb-4 text-secondary">Our ide can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                  <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                    TRY NOW
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/java-01.png" alt="lol" height="256px"width="256px">
                    
                    <h3 class="h2 mb-4">Inteli.java</h3>
                    <p class="mb-4 text-secondary">Our ide can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/phps-01.png" alt="lol" height="256px"width="256px">
                    <h3 class="h2 mb-4">Php slash</h3>
                    <p class="mb-4 text-secondary">Our ide can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/feet-01.png" alt="lol" height="256px"width="256px">
                    <h3 class="h2 mb-4">Feet</h3>
                    <p class="mb-4 text-secondary">Our ide can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/goland-01.png" alt="lol" height="256px"width="256px">
                    <h3 class="h2 mb-4">Goland</h3>
                    <p class="mb-4 text-secondary">Our robotic process automation (RPA) solutions can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/logo.png" alt="lol" height="256px"width="256px">
                    <h3 class="h2 mb-4">Robotic Process</h3>
                    <p class="mb-4 text-secondary">Our robotic process automation (RPA) solutions can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 tg card-container">
                <div class="card bg-transparent  rounded-0">
                  <div class="card-body">
                  <img src="icons/logo.png" alt="lol" height="256px"width="256px">
                    <h3 class="h2 mb-4">Robotic Process</h3>
                    <p class="mb-4 text-secondary">Our robotic process automation (RPA) solutions can help businesses to automate repetitive tasks. This can help businesses to save time and money, and improve their efficiency.</p>
                    <a href="pricing.php" class="fw-bold btn btn-outline-secondary">
                      TRY NOW
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <footer>
        <h5>Copyright © 2023-2023</h5>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Selecting the search input and results container
        const searchInput = document.getElementById("searchInput");
        const resultsContainer = document.getElementById("resultsContainer");

        // Listening for input in the search bar
        searchInput.addEventListener("input", function () {
            // Clearing previous search results
            resultsContainer.innerHTML = "";

            // Getting the search term
            const searchTerm = searchInput.value.toLowerCase();

            
            const cardContainers = document.querySelectorAll(".card-container");
            cardContainers.forEach(function (cardContainer) {
                const cardTitle = cardContainer.querySelector(".card-body h3").innerText.toLowerCase();
                if (cardTitle.includes(searchTerm)) {
                   
                    resultsContainer.appendChild(cardContainer.cloneNode(true));
                }
            });
        });
    });
</script>

</html>