<h2>Edit Teacher</h2>
<form method="POST">
    Teacher ID: <input  value="<?= $teacher['id'] ?>" name="teacher_Id" required><br><br>
    Name: <input type="text" name="name" value="<?= $teacher['name'] ?>" required><br><br>
    Phone: <input type="text" name="phone" value="<?= $teacher['phone'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $teacher['email'] ?>" required><br><br>
    Department: <input type="text" name="department" value="<?= $teacher['department'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>