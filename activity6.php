<form method="post" action="process.php">
    <table>
        <tr>
            <th>Serial Number</th>
            <th>Name</th>
            <th>English</th>
            <th>Biology</th>
            <th>Mathematics</th>
        </tr>
        <tr>
            <td><input type="text" name="serial_number[]"></td>
            <td><input type="text" name="name[]"></td>
            <td><input type="number" name="english[]" min="0" max="100"></td>
            <td><input type="number" name="biology[]" min="0" max="100"></td>
            <td><input type="number" name="mathematics[]" min="0" max="100"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number[]"></td>
            <td><input type="text" name="name[]"></td>
            <td><input type="number" name="english[]" min="0" max="100"></td>
            <td><input type="number" name="biology[]" min="0" max="100"></td>
            <td><input type="number" name="mathematics[]" min="0" max="100"></td>
        </tr>
        <tr>
            <td><input type="text" name="serial_number[]"></td>
            <td><input type="text" name="name[]"></td>
            <td><input type="number" name="english[]" min="0" max="100"></td>
            <td><input type="number" name="biology[]" min="0" max="100"></td>
            <td><input type="number" name="mathematics[]" min="0" max="100"></td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</form>
