<?php
//function  sl_new_user_register($new_user_id):void
//{
//   echo "new user is:{$new_user_id}";
//}
//function  sl_new_user_register2($new_user_id): void
//{
//    echo "<h1>new user2 is {$new_user_id}</h1>";
//}
//function  sl_new_user_register3($new_user_id): void
//{
//    echo "<h1>new user3 is {$new_user_id} </h1>";
//}
//class user
//{
// public function login($new_user_id,$data): void
// {
//    echo "</br>"."<h1>login $new_user_id and $data</h1>"."</br>";
// }
// public static function logout($new_user_id): void
// {
//  echo "logout $new_user_id";
// }
//}
//$new_user_object=new user();
//add_action('new_user_register','sl_new_user_register2',2);
//add_action('new_user_register','sl_new_user_register',3);
//add_action('new_user_register','sl_new_user_register3',1);
//add_action('new_user_register',array($new_user_object,'login'),4,2);
//add_action('new_user_register','user::logout',5);
//
//do_action('new_user_register',10,20);

//function sl_check_user_id()
//{
//    if(isset($_GET['aff_id']) && intval($_GET['aff_id']) >0 ) {
//      echo $_GET['aff_id'];
//    }
//
//}
//
//add_action('init','sl_check_user_id');
$black_list = array(1,2,345,586);
function sl_add_user_to_black_list($users)
{
$users[]=23;
$users[1]=55;
return $users;
}

add_filter('blocked_users','sl_add_user_to_black_list');


$black_list=apply_filters('blocked_users',$black_list);
var_dump($black_list);