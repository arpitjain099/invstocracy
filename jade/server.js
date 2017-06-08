var express = require('express');
var app = module.exports = express();

app.set('view engine', 'jade');
app.set('views', __dirname + '/views');

app.use(express.static(__dirname + '/public'));

app.get('/', function(req, res){
  res.render('home', {sayHelloTo: 'world', f:'xa'});
});

if(!module.parent){
  app.listen(process.env.PORT || 3001, function(){
    console.log('up and running');
  });
}