<h2>Edit Student</h2>
<form method="POST">
    Student ID: <input  value="<?= $student['id'] ?>" name="student_Id" required><br><br>
    Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
    Phone: <input type="text" name="phone" value="<?= $student['phone'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>" required><br><br>
    Department: <input type="text" name="department" value="<?= $student['department'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>