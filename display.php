<?php
    include 'connect.php';

    if(isset($_POST['displaySend'])) {
        $table = '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sl N°</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Place</th>
                        </tr>
                    </thead>';
                    
        $sql = "SELECT * FROM clients";
        
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $place=$row['place'];
            $table.=
                '<tr>
                    <td scope="row">'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$place.'</td>
                </tr>';
    }
    $table.='</table>'; 
    echo $table;}