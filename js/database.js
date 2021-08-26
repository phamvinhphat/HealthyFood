var mysql = require('mysql');
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'phat',
    password: '12345',
    database: 'hnaj'
});


var connect = function(){
    connection.connect(function(err){
            if(!err){
                console.log('Database is connected!!');
            } else {
                console.log('Database nonnect error !!!');
            }
    })
}

var closeData = function(){
    connection.end(function(err){
        if(!err){
            console.log('conlose Database' );
        }  
    });
}

exports.getAllUser = function(callbackQuery){
    console.log("ss");
     connect();
     console.log("ss");
    connection.query("SELECT * FROM loaimonan",function(err,result,fields){
        if(!err){
            callbackQuery(result);
        }else {
            console.log(err);
        }

    })
} 