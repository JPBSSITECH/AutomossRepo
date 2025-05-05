<?php
$host = "localhost";
$db1 = "devautomossapi";
$user = "devautomossapi";
$pass = "WVB613VFAq7TGqdD7myP";

$db2 = "automossapi";
$user2 = "automossapi";
$pass2 = "XgxCJ2O7oM5cGivxif1m";

try {
    $pdo1 = new PDO("mysql:host=$host;dbname=$db1", $user, $pass);
    $pdo2 = new PDO("mysql:host=$host;dbname=$db2", $user2, $pass2);
    $pdo1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function getTables(PDO $pdo) {
    $stmt = $pdo->query("SHOW TABLES");
    $tables = [];
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        $tables[] = $row[0];
    }
    return $tables;
}

function getColumns(PDO $pdo, $table) {
    $stmt = $pdo->query("SHOW COLUMNS FROM `$table`");
    $columns = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $columns[$row['Field']] = $row;
    }
    return $columns;
}

$tables1 = getTables($pdo1);
$tables2 = getTables($pdo2);

$missingInDb2 = array_diff($tables1, $tables2);
$missingInDb1 = array_diff($tables2, $tables1);

$commonTables = array_intersect($tables1, $tables2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Comparison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Database Comparison</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">Missing in <?php echo $db2; ?></div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($missingInDb2 as $table) { echo "<li class='list-group-item'>$table</li>"; } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">Missing in <?php echo $db1; ?></div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($missingInDb1 as $table) { echo "<li class='list-group-item'>$table</li>"; } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Column Differences and Alter Queries</h3>
            <?php foreach ($commonTables as $table): ?>
                <?php 
                $columns1 = getColumns($pdo1, $table);
                $columns2 = getColumns($pdo2, $table);
                $missingColumnsInDb2 = array_diff_key($columns1, $columns2);
                $missingColumnsInDb1 = array_diff_key($columns2, $columns1);
                ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header bg-warning">Missing Columns in <?php echo $db2; ?> - Table: <?php echo $table; ?></div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <?php foreach ($missingColumnsInDb2 as $colName => $colDef) {
                                        echo "<li class='list-group-item'>$colName ({$colDef['Type']})";
                                        echo "<pre class='mt-2'>ALTER TABLE $table ADD $colName {$colDef['Type']};</pre></li>";
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white">Missing Columns in <?php echo $db1; ?> - Table: <?php echo $table; ?></div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <?php foreach ($missingColumnsInDb1 as $colName => $colDef) {
                                        echo "<li class='list-group-item'>$colName ({$colDef['Type']})";
                                        echo "<pre class='mt-2'>ALTER TABLE $table ADD $colName {$colDef['Type']};</pre></li>";
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
