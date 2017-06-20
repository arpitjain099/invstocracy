var express = require('express');
var app = module.exports = express();

app.set('view engine', 'ejs');
app.set('views', __dirname );//+ '/views'

app.use(express.static(__dirname)); //+ '/public'

app.get('/about', function(req, res){
  res.render('about', {sayHelloTo: 'world', f:'xa'});
});

app.get('/businesses', function(req, res){
  res.render('businesses', {sayHelloTo: 'world', f:'xa'});
});

app.get('/companies', function(req, res){
  res.render('companies', {sayHelloTo: 'world', f:'xa'});
});

app.get('/companypage', function(req, res){
  res.render('companypage', {sayHelloTo: 'world', f:'xa'});
});

app.get('/faq', function(req, res){
  res.render('faq', {sayHelloTo: 'world', f:'xa'});
});

app.get('/glossary', function(req, res){
  res.render('glossary', {sayHelloTo: 'world', f:'xa'});
});

app.get('/homigo', function(req, res){
  res.render('homigo', {sayHelloTo: 'world', f:'xa'});
});

app.get('/', function(req, res){
  res.render('index', {sayHelloTo: 'world', f:'xa'});
});

app.get('/investor_profile', function(req, res){
  res.render('investor_profile', {sayHelloTo: 'world', f:'xa'});
});

app.get('/investors', function(req, res){
  res.render('investors', {sayHelloTo: 'world', f:'xa'});
});

app.get('/investor_signup', function(req, res){
  res.render('investor_signup', {sayHelloTo: 'world', f:'xa'});
});

app.get('/investors_landingpage_afterlogin', function(req, res){
  res.render('investors_landingpage_afterlogin', {sayHelloTo: 'world', f:'xa'});
});

app.get('/start-a-campaign', function(req, res){
  res.render('start-a-campaign', {sayHelloTo: 'world', f:'xa'});
});

app.get('/user_signup', function(req, res){
  res.render('user_signup', {sayHelloTo: 'world', f:'xa'});
});

app.get('/venture_signup', function(req, res){
  res.render('venture_signup', {sayHelloTo: 'world', f:'xa'});
});

if(!module.parent){
  app.listen(process.env.PORT || 3001, function(){
    console.log('up and running');
  });
}