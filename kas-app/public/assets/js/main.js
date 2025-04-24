document.getElementById("analyzeForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const loadingIndicator = document.getElementById("loadingIndicator");
    const loadingText = document.getElementById("loadingText");
    const resultDiv = document.getElementById("result");

    loadingIndicator.style.display = "block";
    loadingText.style.display = "block";
    resultDiv.style.display = "none";

    // Submit form using fetch
    fetch(this.action, {
        method: "POST",
        body: new FormData(this),
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                .value,
            Accept: "application/json",
            "X-Requested-With": "XMLHttpRequest",
        },
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then((data) => {
            loadingIndicator.style.display = "none";
            loadingText.style.display = "none";
            resultDiv.style.display = "block";
            resultDiv.innerHTML = data.result;
        })
        .catch((error) => {
            loadingIndicator.style.display = "none";
            loadingText.style.display = "none";
            resultDiv.style.display = "block";
            resultDiv.innerHTML = "An error occurred: " + error.message;
        });
});
