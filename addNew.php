<form action="create.php" method="post">
        <label for="title">Title</label> <br>
        <input type="text" name="title" placeholder="Enter Book Title" required> <br>
        <label for="author">Author</label> <br>
        <input type="text" name="author" placeholder="Enter Author Name" required> <br>
        <label for="avail">Availability</label> <br>
        <select name="available" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select> <br>
        <label for="pages">Pages</label> <br>
        <input type="number" name="pages" placeholder="Enter No. of Pages" required> <br>
        <label for="isbn">ISBN</label> <br>
        <input type="text" name="isbn" placeholder="Enter ISBN No."> <br>
        <input type="submit" name="submit" value="submit">
    </form>