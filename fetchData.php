function fetchData() {
    var timestamp = new Date().getTime();
    fetch(`saveData.php?timestamp=${timestamp}`)
        .then(response => response.json())
        .then(data => {
            // معالجة البيانات هنا
        })
        .catch(error => console.error('Error fetching data:', error));
}
