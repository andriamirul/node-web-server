const express = require('express');
const hbs = require('hbs');

const port = process.env.PORT || 3000;

var app = express();

app.set('view engine', 'hbs');
app.use(express.static(__dirname + '/sisfo'));

app.get('/', (req, res) => {
  //res.send('Hello Express!');
  res.send({
    name: 'Andri',
    Likes:[
      'kamu',
      'dia'
    ]
  });
});

app.get('/about',(req, res)=>{
  res.render('about.hbs',{
    pageTitle: 'About Page',
    CurrentYear: new Date().getFullYear()
  });
});

app.get('/bad', (req, res)=>{
  res.send({
    errorMessage:'Unable to handle request'
  });
});

app.listen(port,()=>{
  console.log('Server is up on port ${port}');
});
