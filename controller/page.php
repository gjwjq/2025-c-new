<?php
get('/', function () {
  views("home");
});
get('/sub1', function() { 
    views("sub1"); 
});

get('/sub2', function() { 
    views("sub2"); 
});

get('/sub3', function() { 
    views("sub3"); 
});

get('/sub4', function() { 
    views("sub4"); 
});
get('/sub4', function() { 
    views("sub4"); 
});
get('/sub4', function() { 
    views("sub4"); 
});
get('/signIn', function() { 
    views("user/signIn"); 
});
get('/signUp', function() { 
    views("user/signUp"); 
});

post('/signup', function() {
    extract($_POST);
    if(DB::fetch("select * from user where id = '$id'")) {
        
    }

});