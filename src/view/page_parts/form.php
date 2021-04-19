<section>
    <form name="become_a_model" action="../../database/db_operations.php" method="POST">
        <label for="name">Add name</label>
        <input type="text" name="model_name" id="name">

        <label for="surname">Add surname</label>
        <input type="text" name="model_surname" id="surname">

        <!-- <label for="email">Add email</label>
        <input type="text" name="model_email" id="email"> -->

        <label for="birthday">Add date of birth</label>
        <input type="date" name="model_birthday" id="birthday">

        <label for="age">Add date of birth</label>
        <input type="number" name="age" id="age">

        <!-- <input type="radio" name="sex" id="male" value="male">male
        <input type="radio" name="sex" id="female" value="female">female -->

        <label for="height">Add Height</label>
        <input type="number" step="1" min="100" max="250" id="height" name="height">
    
        <label for="weight">Add Weight</label>
        <input type="number" step="1" min="30" max="250" id="weight" name="weight">

        <input type="submit" value="add model">
    </form>
</section>