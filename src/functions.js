function movieDetails(id) {
    window.location = "index.php?menu=movd&id=" + id;
}

function accTopup(id) {
    var com = window.confirm("yakin Accept Topup?");
    if (com){
        window.location = "index.php?menu=verification&accom=1&id=" + id;
    }
}

function rejectTopup(id) {
    var com = window.confirm("yakin Reject Topup?");
    if (com){
        window.location = "index.php?menu=verification&rjcom=0&id=" + id;
    }
}