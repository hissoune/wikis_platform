<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Your Wiki</title>
    <!-- Include necessary styles/scripts, e.g., Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Modify Wiki</h2>
    <form id="modifyWikiForm" action="index.php?action=update_wiki" method="post" enctype="multipart/form-data">

        <!-- Wiki Title -->
        <div class="form-group">
            <label for="wiki_title">Wiki Title:</label>
            <input type="text" class="form-control" id="wiki_title" name="wiki_title" value="<?= $currentWikiTitle; ?>" required>
        </div>

        <!-- Wiki Content -->
        <div class="form-group">
            <label for="wiki_content">Wiki Content:</label>
            <textarea class="form-control" id="wiki_content" name="wiki_content" required><?= $currentWikiContent; ?></textarea>
        </div>

        <!-- Author ID (You may need to fetch author IDs from your database) -->
        <div class="form-group">
            <input type="number" hidden class="form-control" id="author_id" value="<?= $currentAuthorId; ?>" name="author_id" required>
        </div>

        <!-- Category ID (You may need to fetch category IDs from your database) -->
        <div class="form-group">
            <label for="category_id">Select Category:</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->getId(); ?>" <?php echo ($category->getId() == $currentCategoryId) ? 'selected' : ''; ?>>
                        <?php echo $category->getName(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Image Filename -->
        <!-- File Input for Image -->
        <div class="form-group">
            <label for="image_file">Image File:</label>
            <input type="file" class="form-control" id="image_file" name="image_file">
        </div>

        <!-- Tags Selection using Checkboxes -->
        <div class="form-group">
            <label>Tags:</label><br>
            <!-- Fetch and display tags dynamically from your database -->
            <?php foreach ($tags as $tag): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="tag_<?php echo $tag->getId(); ?>" name="tags[]" value="<?php echo $tag->getId(); ?>" <?php echo (in_array($tag->getId(), $currentTagIds)) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="tag_<?php echo $tag->getId(); ?>"><?php echo $tag->getName(); ?></label>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Wiki</button>
    </form>
</div>

<!-- Include necessary scripts, e.g., Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
