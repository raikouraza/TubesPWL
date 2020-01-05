function updateFilm(film_id) {
    window.location = "../../view/dashboard/index.php?dashboard=updateFilm&film_id=" + film_id;
}

function deleteFilm(film_id) {
    var confirmation = window.confirm("Are you sure want to delete?")

    if(confirmation)
    {
        window.location = "../../view/dashboard/index.php?dashboard=updateDeleteFilm&delcom=1&film_id=" + film_id;
    }
}

function updateUser(user_id) {
    window.location = "../../view/dashboard/index.php?dashboard=updateUser&user_id=" + user_id;
}

function deleteUser(user_id) {
    var confirmation = window.confirm("Are you sure want to delete?")

    if(confirmation)
    {
        window.location = "../../view/dashboard/index.php?dashboard=updateDeleteUser&delcom=1&user_id=" + user_id;
    }
}