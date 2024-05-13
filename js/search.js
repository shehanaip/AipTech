
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

            // Filtering the cards based on the search term
            const cardContainers = document.querySelectorAll(".card-container");
            cardContainers.forEach(function (cardContainer) {
                const cardTitle = cardContainer.querySelector(".card-body h3").innerText.toLowerCase();
                if (cardTitle.includes(searchTerm)) {
                    // If the card title contains the search term, display the card
                    resultsContainer.appendChild(cardContainer.cloneNode(true));
                }
            });
        });
    });

