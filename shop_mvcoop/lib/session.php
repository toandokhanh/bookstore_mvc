<?php
/**
 * đăng nhập vào trang admin
 * trang này dùng lưu các phiên giao dịch
 * 
*Session Class
**/
class Session{
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }
//set giá trị
 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }
//get giá trị
 public static function checkSession(){
    self::init();
    if (self::get("adminlogin")== false) {
     self::destroy();
     header("Location:login.php");
    }
 }
//check
 public static function checkLogin(){
    self::init();
    if (self::get("adminlogin")== true) {
     header("Location:index.php");
    }
 }
// hủy phiên làm việc 
 public static function destroy(){
  session_destroy();
  header("Location:login.php");
 }
}
