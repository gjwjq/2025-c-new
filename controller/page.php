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
get('/logout', function() {
    session_destroy();
    move("/", '로그아웃 되엇습니다.');
});

get('/itemAdmin', function() {
    views("admin/itemAdmin");
});

get('/admin', function() {
    views("admin/admin");
});
get('/itemtable', function() {
    views("add-table/iamitemtable");
});

post('/signUp', function() {
    extract($_POST);
    if(DB::fetch("select * from user where id = '$id'")) {
        back('아이디가 이미 존재합니다.'); exit;
        }
    $salt = uniqid();
    $enc_pw = hash("sha256", $pw . $salt);

    DB::exec("insert into user (id, pw, name, email, salt, date)
    values ('$id','$enc_pw','$name','$email','$salt',NOW())");

    move('/', '회원가입 성공');
});

post('/signIn', function(){
    extract($_POST);

    $user = db::fetch("select * from user where id = '$id'");
    
    if($user){
        $enc_pw = hash('sha256', $pw . $user['salt']);
        if($enc_pw == $user['pw']) {
            $_SESSION['ss'] = $user;
            move("/", '로그인 성공');
        } else {
            back("비밀번호가 일치하지 않습니다");
        }
    } else {
        back("아이디가 존재하지 않습니다.");
    }
});

