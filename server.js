var express = require('express');
var app = module.exports = express();

app.set('view engine', 'jade');
app.set('views', __dirname );//+ '/views'

app.use(express.static(__dirname)); //+ '/public'

app.get('/about', function(req, res){
  res.render('venture_signup', {sayHelloTo: 'world', f:'xa'});
});

if(!module.parent){
  app.listen(process.env.PORT || 3001, function(){
    console.log('up and running');
  });
}
