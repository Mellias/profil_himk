<section id="feedback-list">
    <h2>Feedback dari Pengunjung</h2>
    <ul>
        <?php
        $result = $conn->query("SELECT category, target, specific_name, message, created_at FROM feedback ORDER BY created_at DESC");

        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>Kategori:</strong> " . htmlspecialchars($row['category']) . "<br><strong>Tujuan:</strong> " . htmlspecialchars($row['target']) . "<br><strong>Nama Tujuan Spesifik:</strong> " . htmlspecialchars($row['specific_name']) . "<br><strong>Pesan:</strong> " . htmlspecialchars($row['message']) . "<br><em>(" . $row['created_at'] . ")</em></li>";
        }
        ?>
    </ul>
</section>
