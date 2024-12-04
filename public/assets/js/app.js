import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    async function fetchData(url) {
        const response = await fetch(url);
        const data = await response.json();
        return data;
    }

    async function updateDashboard() {
        const weatherData = await fetchData('/weather');
        document.getElementById('weather').textContent = `${weatherData.condition}, ${weatherData.temperature}°C`;

        const cropsData = await fetchData('/crops');
        const cropsList = document.getElementById('crops-list');
        cropsList.innerHTML = ''; // Clear existing data
        cropsData.forEach(crop => {
            const li = document.createElement('li');
            li.textContent = `${crop.name} - ${crop.growthStatus}% Growth`;
            cropsList.appendChild(li);
        });

        const financialData = await fetchData('/financials');
        document.getElementById('income').textContent = `Income: $${financialData.income}`;
        document.getElementById('expenses').textContent = `Expenses: $${financialData.expenses}`;
        document.getElementById('profit').textContent = `Profit: $${financialData.profit}`;

        const alertsData = await fetchData('/alerts');
        const alertsList = document.getElementById('alerts-list');
        alertsList.innerHTML = ''; // Clear existing data
        alertsData.forEach(alert => {
            const li = document.createElement('li');
            li.innerHTML = `<span class="alert ${alert.level}">${alert.message}</span>`;
            alertsList.appendChild(li);
        });
    }

    updateDashboard();
    setInterval(updateDashboard, 60000); // Update data every 60 seconds
});
