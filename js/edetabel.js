
function lae_leht(nr){
	if (nr == 1){
	document.location.hash = "esimene_lk";
 	 $.ajax({
      url: 'action/lae_esimene.php',
      success: function(data) 
      {
            $("#tabel").html(data);
	  }

      });

	}
	if (nr == 2){
	document.location.hash = "teine_lk";
 	 $.ajax({
      url: 'action/lae_teine.php',
      success: function(data) 
      {
            $("#tabel").html(data);
	  }

      });

	}
	if (nr == 3){
	document.location.hash = "kolmas_lk";
 	 $.ajax({
      url: 'action/lae_kolmas.php',
      success: function(data) 
      {
            $("#tabel").html(data);
	  }

      });

	}
}

var recentHash = "";
function checkhash() {
  var hash = document.location.hash;
  if (hash) {
    hash = hash.substr(1);
    if (hash == recentHash) {
      return;
    }
    recentHash = hash;
    loadPage(hash);
  }
}

function loadPage(hash){
	if (hash == "esimene_lk"){
		lae_leht(1);
	}
	if (hash == "teine_lk"){
		lae_leht(2);
	}
	if (hash == "kolmas_lk"){
		lae_leht(3);
	}
}
