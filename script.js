document.getElementById('expense-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(e.target);

    fetch('save_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Expense added successfully!");
            displayChart();
        } else {
            alert("Failed to add expense.");
        }
    });
});

function displayChart() {
    fetch('fetch_data.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('chart-container').style.display = 'block';
            const categories = data.map(item => item.category);
            const amounts = data.map(item => item.total);

            const ctx = document.getElementById('expenseChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: categories,
                    datasets: [{
                        data: amounts,
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#FF9F40']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });
        });
}
