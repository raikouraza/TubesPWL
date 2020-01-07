function movieDetails(id) {
    window.location = "index.php?menu=movd&id=" + id;
}

function accTopup() {
    var com = window.confirm("yakin Accept Topup?");
    if (com){
        window.location = "index.php?dashboard=verification";
    }
}

function rejectTopup() {
    var com = window.confirm("yakin Reject Topup?");
    if (com){
        window.location = "index.php?dashboard=verification";
    }
}