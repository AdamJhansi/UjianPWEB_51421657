<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body class="table">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('connection.php');
        
            $result = mysqli_query($conn, "SELECT * FROM siswa"); 
            while ($data = mysqli_fetch_assoc($result)) { 
                echo "<tr>"; 
                echo "<td>" . $data['id'] . "</td>";
                echo "<td>" . $data['npm'] . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['kelas'] . "</td>";
                echo "<td>
                      <a href='update_data.php?id=" . $data['id'] . "'><button>Update</button></a>
                      <a href='delete_data.php?id=" . $data['id'] . "'><button>Delete</button></a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="index.html"><button>kembali</button></a>

</body>
</html>
