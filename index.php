<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Tracker</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        console.log('Chart.js loaded:', Chart);
    </script>
</head>
<body>
    <div class="container">
        <h1>Track Your Money Wastes</h1>
        <form id="expense-form">
            <label for="category">Category</label>
            <select id="category" name="category" required>
                <option value="Home Wastes">Home Wastes</option>
                <option value="Entertainment Wastes">Entertainment Wastes</option>
                <option value="Food Wastes">Food Wastes</option>
                <option value="Transportation Wastes">Transportation Wastes</option>
                <option value="Other">Other</option>
            </select>

            <label for="amount">Amount ($)</label>
            <input type="number" id="amount" name="amount" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <button type="submit" id="submit-btn">Submit</button>
        </form>

        <div id="chart-container" style="display:none;">
            <h2>Expense Summary</h2>
            <canvas id="expenseChart"></canvas>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
