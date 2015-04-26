function Ost_transaction(tyyp, raha, hind, fame, kogus) {

    var raha = raha;

    var fame = fame;

    var kogus = kogus;

    if (hind > raha) {

        return "Sul pole ju rulli ... Miks sa nii teed ??? "

    } else if (raha >= hind) {

        raha = raha - hind

        fame = fame + hind

        kogus = +1

        Ost(tyyp, fame, raha, kogus) 

    }

}
function Ajax() 
{
      $.ajax({
           type: "POST",
           url: 'muuda_mng.php',
           data:{action:'call_this'},
           success:function(html) {
               location.reload();
           }

      });
 }
 
var auto_refresh = setInterval(
function()
{
$('#raha').fadeOut('slow').load('raha_tuleb.php').fadeIn("slow");
}, 20000);


 //EI TÖÖTA SIIN MIDAGI


function Hind(worker, kogus, tech) {

    if (worker == 1) {

        if (tech == 0) {

            return 250 * max(kogus, 1);

        }
        else {

           return max(kogus, 1) * 250 * kogus;

        }

    }
}


