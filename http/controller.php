<?php


$_POST = json_decode(array_keys($_POST)[0], true);

$dir_name = $_POST['name']; 

   $select=0;
   if (is_dir($_POST['name']))
   {
      $select='1';
   }  
   if ($dir_name =='__')
   {
    $select='2';
   }
   
   if ($_POST['create'] == 'OK')
   {
      $select = '4';
   }
   if ($dir_name == 'start')
   {
      $select = '5';
   }
   if ($_POST['create'] == 'test')
   {
      $select = '6';
   }
   if (is_file($dir_name))
   {
      $select = '7';
   }
 
   switch ($select){

      case '1':
         if ( isset($_COOKIE['name'])) 
         {
            $path = $_SESSION['working_dir'].'/'.$_POST['name'];
            setcookie('name',$path);
         } else {
            $_COOKIE['name'] = $_POST['name'];
         }
            chdir($_POST['name']);
            $mydir = scandir(getcwd());
            $mydir[0] =  getcwd();             
            print_r(json_encode($mydir));
        
      break;
      case '2':
            chdir('./');
            $mydir = scandir(getcwd());
            $_SESSION['working_dir'] = getcwd();
            echo json_encode($mydir);
      break;
      case '3':
         if (is_file($a))
         {
            $b = 'NOT';
            echo $a;  
         }
      break;
      case '4':
         echo getcwd();
      break;
      case '5':
         $mydir = scandir(getcwd());
         $mydir[0] =  getcwd();
         echo json_encode($mydir);
      break;
      case '6':
         echo getcwd();
      break;
      case '7':
         echo 'it is file not directory';
      break;
      default:
      echo "NIEKO" . ' ' . $select . ' ' . $dir_name;
      break;
   }