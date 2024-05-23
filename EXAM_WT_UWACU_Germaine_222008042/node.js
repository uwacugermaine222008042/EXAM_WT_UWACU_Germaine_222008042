const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.static(path.join(__dirname, 'public')));
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'views', 'index.html'));
});

app.post('/login', (req, res) => {
    // Handle login logic here
    res.send('Login functionality will be implemented soon!');
});

app.post('/register', (req, res) => {
    // Handle registration logic here
    res.send('Registration functionality will be implemented soon!');
});


