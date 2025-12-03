
<?php
$page_title = "Upload Photo";
$page = 'upload.php';
$show_breadcrumb = true;
// include "../layouts/master.php";
?>
<?php
// Create uploads folder if missing
if (!is_dir("uploads")) { mkdir("uploads"); }

// Handle Capture Request
if (isset($_POST['image'])) {

    // Convert Base64 → Image
    $img = $_POST['image'];
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = base64_decode($img);

    // Save image
    $filename = "uploads/" . time() . ".jpg";
    file_put_contents($filename, $img);

    // Received Data
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $datetime = $_POST['datetime'];

    // Entry
    $entry = [
        "image" => $filename,
        "lat" => $lat,
        "lon" => $lon,
        "datetime" => $datetime
    ];

    // JSON File
    $json_file = "data.json";
    $data = [];

    // Auto create if not found
    if (file_exists($json_file)) {
        $data = json_decode(file_get_contents($json_file), true);
    }

    $data[] = $entry;

    // Save JSON
    file_put_contents($json_file, json_encode($data, JSON_PRETTY_PRINT));
}
?>
    <!-- UI Design -->
    <style>
   
        .container {
            width: 90%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        table th {
            background: #007bff;
            color: white;
        }
        table tr:hover {
            background: #f1f1f1;
        }
        img {
            height: 80px;
            border-radius: 8px;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 15px;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>



<div class="container">
    <h2>📸 Captured Data Preview</h2>

    <a href="index.html" class="btn">⬅ Back to Camera</a>

    <?php
    // Load and Show JSON Data
    if (file_exists("data.json")) {
        $allData = json_decode(file_get_contents("data.json"), true);

        echo "<table>";
        echo "<tr>
                <th>Photo</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Date & Time</th>
              </tr>";

        foreach ($allData as $row) {
            echo "<tr>
                    <td><img src='{$row['image']}'></td>
                    <td>{$row['lat']}</td>
                    <td>{$row['lon']}</td>
                    <td>{$row['datetime']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No data found.</p>";
    }
    ?>

</div>