<?php
$search_keyword = isset($_GET['search_keyword']) ? htmlspecialchars($_GET['search_keyword']) : ''; // Sanitize the input
?>

<div class="ts-search-bar-secondary input-group">
    <form class="search-form d-flex justify-content-end gy-3" action="./search.php" method="GET">
        <input id="searchInput" type="text" class="form-control rounded-pill ps-5" placeholder="Search..."
            aria-label="Search" aria-describedby="button-addon2" name="search" value="<?php echo $search_keyword; ?>">
        <button class="btn ts-btn-search border-0" type="submit" id="button-addon2">
            <?php echo $searchIcon; ?></button>
    </form>
</div>

<script>
// Get the search input element
var searchInput = document.getElementById('searchInput');

// Add a click event listener to focus the input when clicked
searchInput.addEventListener('click', function() {
    this.focus();
});
</script>