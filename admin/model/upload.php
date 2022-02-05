<?php
    session_start();
    if(isset($_SESSION["klinika_id"])){
        $klinika_id = $_SESSION["sess_klinika_id"];
    }else{
        $klinika_id = "klinikaId";
    }

    
    if(isset($_FILES['k_logo'])){
        $uploadedFile = $_FILES['k_logo']['tmp_name'];
        $filename = $_FILES['k_logo']['name'];
        $oriProperties = getimagesize($uploadedFile);
        $ori_Width = $oriProperties[0];
        $ori_Height = $oriProperties[1];        
        $imageType=$oriProperties[2];
        $location = "../../images/kinikak/";
        $newFileName = "k_id_".$filename;
        $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

        echo "feltöltött File: ".$uploadedFile."<br>";
        echo "ori width: ".$oriProperties[0]."<br>";
        echo "ori height: ".$oriProperties[1]."<br>";
        echo "átvett File: ".$filename."<br>";
        echo "Lokáció: ".$location."<br>";
        echo "uj file név: ".$newFileName."<br>";
        echo "kiterjesztés: ".$ext."<br>";
        
        $new_Width=600;
        $new_Height=600;
        
        switch ($imageType) {
            case IMAGETYPE_JPEG :
                $imageSrc= imagecreatefromjpeg($uploadedFile); 
                break;
            case IMAGETYPE_PNG :
                $imageSrc= imagecreatefrompng($uploadedFile); 
                break;
            case IMAGETYPE_GIF :
                $imageSrc= imagecreatefromgif($uploadedFile); 
                break;
            default:
                echo "Érvénytelen képformátum";
                exit;
                break;
        }

        $newImage=imagecreatetruecolor($new_Width,$new_Height);
        imagecopyresampled($newImage,$imageSrc,0,0,0,0,$new_Width,$new_Height,$ori_Width,$ori_Height);
        imagejpeg($newImage,$location.$newFileName,100);
                
    }else{
        echo "Nem sikerült átvenni a fájlt";
    }
    
    
?>