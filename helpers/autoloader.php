<?php 
class Autoloader{
    public static function register(){
        spl_autoload_register(static function ($class){
            $filename = $class.".php";
            $filename = str_replace('\\', '/', $filename);
            $filename = __DIR__ . '/../' . $filename;
            if(file_exists($filename)){
                
                require $filename;
            }
        }); 
    }
}


// class Autoloader {
//     public static function register() {
//         spl_autoload_register(function ($class) {
//             // Replace namespace separators with directory separators
//             $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
//             $filename = __DIR__ . '\\..\\' . $classPath . '.php';
//             if (file_exists($filename)) {
//                 require $filename;
//             }
//             echo $filename;
//         }); 
//     }
// }
?>