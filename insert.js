var fs = require('fs');
var obj = JSON.parse(fs.readFileSync('nvdcve-1.0-2010.json', 'utf8'));

var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("nvd");
  
  dbo.collection("general").insertOne(obj, function(err, res) {
    if (err) throw err;
    console.log("1 document inserted");
    db.close();
  });
});
