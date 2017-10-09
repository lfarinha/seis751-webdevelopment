var app = require('express')();

var names = {
    firstName: 'leo',
    secondName: 'Miguel',
    thirdName: 'Marinel'
}

app.get('/', function (request, response) {
    response.sendFile('index.html', {root: __dirname})
})


app.get('/leo', function (request, response) {
    response.send('Hello World')
})

app.get('/array', function (request, response) {
    response.json(names)
})

app.listen(3000)