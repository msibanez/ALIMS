<!-- microbiology.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/laboratories.css">
  <title>Microbiology Department</title>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="content">
    <div class="microbiology-container">
        <h2>Microbiology Department</h2>
        <p>Choose from the options below to view the inventory form:</p>
        <ul>
        <li>
            <a href="inventory_chemical.php?lab=microbiology">Chemical Inventory</a>
            <p>The Chemical Inventory Form is designed to document detailed information about the chemicals used in the Microbiology Department. It allows personnel to record chemical types, quantities, storage locations, expiration dates, and safety handling guidelines. Filling out this form helps ensure regulatory compliance and promotes efficient tracking and management of chemical resources.</p>
        </li>
        <li>
            <a href="inventory_biological.php?lab=microbiology">Biological Inventory</a>
            <p>The Biological Inventory Form is used to log biological samples, specimens, and reagents within the Microbiology Department. It facilitates the proper recording of live cultures, tissue samples, DNA/RNA extracts, and other biological materials. Completing this form ensures accurate labeling, categorization, and storage to maintain sample integrity and support research and diagnostic processes.</p>
        </li>
        <li>
            <a href="inventory_general lab supplies.php?lab=microbiology">General Supplies</a>
            <p>The General Supplies Inventory Form allows laboratory personnel to record essential supplies such as glassware, plasticware, pipettes, gloves, syringes, and other consumables. This form helps track the availability of these items, ensuring that the laboratory remains well-equipped to perform daily tasks and specialized procedures without disruptions.</p>
        </li>
        </ul>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>