<script>
// cek url mengandung hash (#) yang berisi token apa tidak 
if(window.location.hash) {
    
    // ambil token 
    hasil  = decodeURIComponent(window.location.hash).split(new RegExp('=|&','g'));
    token  = hasil[1];
    window.location = "database.php?token="+token;


} else {
    
    // kita akan ambil token menggunakan method get 
    var url_token  = "https://account.accurate.id/oauth/authorize?"; // url authorize accurate
        url_token += "client_id=033f606c-1511-4d2b-b931-1f8682ea2364"; // client_id diambil dari aplikasi yang kita buat tadi 
        url_token += "&response_type=token"; //kita gunakan token
        url_token += "&redirect_uri=http://localhost/api-accurate/token.php"; // berisi url calback sesuai dengan aplikasi yang sudah kita daftarkan di aplikasi 
        url_token += "&scope=item_view"; // data apa yang mau kita ambil dilihat di area developer di menu "Daftar Api"

    window.location = url_token;

}

</script>