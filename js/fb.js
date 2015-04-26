session_start();
Include('databaseconnect.php');

function fbdblogin(kasutajanimi, email) {
        if (login_FB(POST[kasutajanimi], POST[email])) {
            if (isset(SESSION['viimaneleht'])) {
                header("Location:".SESSION['viimaneleht']);
            } else { header("Location:profiil.php"); }
        } else {
            registreeri_FB(POST[kasutajanimi], POST[email]);
            login_FB(POST[kasutajanimi], POST[email]);
            if (isset(SESSION['viimaneleht'])) {
                header("Location:".SESSION['viimaneleht']);
            } else { header("Location:profiil.php"); }
        }
    }
    exit();
    


