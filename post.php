<?php
  
    if($_FILES['image']['error'] == 4)
    {
        echo "Please upload file";
    }elseif($_FILES['image']['error'] != 0)
    {
        echo "Something wents wrong";
    }else{
        $validated_extension = [
            'image/png'
        ];

        if(in_array($_FILES['image']['type'], $validated_extension)){

            $max_size = (1024 * 1024);

            if($_FILES['image']['size'] <= $max_size)
            {
                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                    $upload = move_uploaded_file($_FILES['image']['tmp_name'] , 'upload/'.$_FILES['image']['name']);
                    if($upload)
                    {
                        echo "Succes";
                        echo "<img src='upload/".$_FILES['image']['name']."'>";
                    }
                }
            }else{
                echo "Large file";
            }

        }else{
            echo "File format error";
        }
    }
    ?>