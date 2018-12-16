<?php
  class Configurations extends Controller {


    public function __construct(){
     
    }
    
    public function index(){
     
      $this->view('config/index');
    }

    public function Create(){


      if (isset($_POST['host']) and isset($_POST['db_name']) and isset($_POST['user']) and isset($_POST['password'])) {
          echo($_POST['host'].'</br>'. $_POST['db_name'] .'</br>'. $_POST['user'].'</br>'. $_POST['password']);
          $file_name='configDataBase.txt';
          $file = fopen($file_name,'w');
          fseek($file, 0);
           fputs($file,trim($_POST['host'])."\r");
           fputs($file,trim($_POST['db_name'])."\r");
           fputs($file,trim($_POST['user'])."\r");
           fputs($file,trim($_POST['password'])."\r");
          fclose($file);

echo "Connecting database.. ";
$file_name='configDataBase.txt';
if(file_exists($file_name)){
  $file = fopen($file_name,'r');
  define( 'DB_HOST', trim(fgets($file)));
  define( 'DB_NAME', trim(fgets($file)) );
  define( 'DB_USER', trim(fgets($file)) );
  define( 'DB_PASSWORD', trim(fgets($file)) );
  echo DB_HOST." ;dbname=".DB_NAME." ;dbuser=". DB_USER." ;psswd=". DB_PASSWORD;
  fclose($file);
  $connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
  try {
    if($connexion){
      //on créer la requête
        $requete = "
          CREATE TABLE user ( id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
            name VARCHAR(255) NOT NULL ,
            email VARCHAR(20) NOT NULL ,
            password VARCHAR(50) NOT NULL,
            created_at datetime default  CURRENT_TIMESTAMP 
             ) ENGINE = InnoDB;
          CREATE TABLE kanbans(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            name VARCHAR(15) NOT NULL ,
            id_user INT NOT NULL,
            public boolean default 0,
            FOREIGN KEY (id_user) REFERENCES user(id)
             ) ENGINE = InnoDB;
          CREATE TABLE columns(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(15) NOT NULL,
            id_kanban INT NOT NULL,
            FOREIGN KEY (id_kanban) REFERENCES kanbans(id)
            )ENGINE = InnoDB;
          CREATE TABLE tasks(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            id_col INT NOT NULL,
            description VARCHAR(200),
            date_crea datetime default CURRENT_TIMESTAMP,
            date_fin datetime,
            id_userAssigne INT NULL,
            FOREIGN KEY (id_userAssigne) REFERENCES user(id),
            FOREIGN KEY (id_col) REFERENCES columns(id)
            )ENGINE = InnoDB;

          create TABLE invite (id_invite INT NOT NULL, 
            id_kanban INT NOT NULL,
            FOREIGN KEY (id_invite) REFERENCES user(id),
            FOREIGN KEY (id_kanban) REFERENCES kanbans(id)
             )ENGINE = InnoDB;";
             
              // on prépare et on exécute la requête
        $connexion->prepare($requete)->execute();
            }else{
              echo " Connexion échoué";
            }
                echo "Done <br>";
                echo "Creating tables.. ";
    
  } catch (Exception $e) {
    echo $e->getmessage();
  }
 
}
elseif (isset($_POST['DB_HOST']) and isset($_POST['DB_NAME']) and isset($POST['DB_USER']) and isset($_POST['DB_PASSWORD'])) {
  echo "Le fichier de configuration n'existe pas<br>";
}else{

}



        }
        else 
        {
           echo " not working " ; //A FAIRE
        }

     
    }
  }