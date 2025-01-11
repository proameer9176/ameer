const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

app.post('/admin-login', (req, res) => {
    // Handle admin login
    res.send('Admin login successful');
});

app.post('/customer-login', (req, res) => {
    // Handle customer login
    res.send('Customer login successful');
});

app.listen(3000, () => {
    console.log('Server running on http://localhost:3000');
});
