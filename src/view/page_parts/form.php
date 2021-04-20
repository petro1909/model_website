<section>
    <form name="become_a_model" action="../../database/db_operations.php" method="POST">
        <label for="name">Add name</label>
        <input type="text" name="model_name" id="name">

        <label for="surname">Add surname</label>
        <input type="text" name="model_surname" id="surname">

        <label for="email">Add email</label>
        <input type="text" name="model_email" id="email">

        <label for="birthday">Add date of birth</label>
        <input type="date" name="model_birthday" id="birthday">

        <input type="radio" name="model_gender" id="male" value="man">male
        <input type="radio" name="model_gender" id="female" value="woman">female

        <label for="height">Add Height</label>
        <input type="number" step="1" min="100" max="250" id="height" name="model_height">
    
        <label for="weight">Add Weight</label>
        <input type="number" step="1" min="30" max="250" id="weight" name="model_weight">

        <input type="submit" value="add model">
    </form>
</section>